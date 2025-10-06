<?php
    include 'top.php';

    $dataIsGood = false;

    $message = '';

    $firstName = '';
    $lastName = '';
    $email = '';
    $visit = 0;
    $notVisit = 0;
    $visited = 0;
    $maybeVisit = 0;
    $maybeVisited = 0;
    $knowledge = '';

    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = "";
        } else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        // Check for letters, numbers and dash, period, space and single quote only.
        // added & ; and # as a single quote sanitized with html entities will have 
        // this in it bob's will be come bob's
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }

    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        print PHP_EOL . '<!-- Starting Sanitation -->' . PHP_EOL;

        $firstName = getData('txtFirstName');
        $lastName = getData('txtLastName');
        $email = getData('txtEmail');
        $visit = (int) getData('chkVisit');
        $notVisit = (int) getData('chkNotVisit');
        $visited = (int) getData('chkVisited');
        $maybeVisit = (int) getData('chkMaybeVisit');
        $maybeVisited = (int) getData('chkMaybeVisited');
        $knowledge = getData('radKnowledge');

        print PHP_EOL . '<!-- Starting validation -->' . PHP_EOL;
        $dataIsGood = true;

        if($firstName == '') {
            $message .= '<p class="mistake">Please type in your first name.</p>';
            $dataIsGood = false;
        } elseif(!verifyAlphaNum($firstName)) {
            $message .= '<p class="mistake">Your first name contains invalid characters, please just use letters.</p>';
            $dataIsGood = false;
        }

        if($lastName == '') {
            $message .= '<p class="mistake">Please type in your last name.</p>';
            $dataIsGood = false;
        } elseif(!verifyAlphaNum($lastName)) {
            $message .= '<p class="mistake">Your last name contains invalid characters, please just use letters.</p>';
            $dataIsGood = false;
        }

        if($email == '') {
            $message .= '<p class="mistake">Please type in your email address.</p>';
            $dataIsGood = false;
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message .= '<p class="mistake">Your email address contains invalid characters.</p>';
            $dataIsGood = false;
        }

        $totalChecked = 0;

        if($visit != 1) $visit = 0;
        $totalChecked += $visit;

        if($notVisit != 1) $notVisit = 0;
        $totalChecked += $notVisit;

        if($visited != 1) $visited = 0;
        $totalChecked += $visited;

        if($maybeVisit != 1) $maybeVisit = 0;
        $totalChecked += $maybeVisit;

        if($maybeVisited != 1) $maybeVisited = 0;
        $totalChecked += $maybeVisited;

        if($totalChecked == 0) {
            $message .= '<p class="mistake">Please choose at least one checkbox that applies to you.</p>';
            $dataIsGood = false;
        }

        //Array of checked box labels for printing message at end
        $checkedLabels = [];
        if ($visit) {
            $checkboxLabels[] = 'I want to visit China';
        }
        if ($notVisit) {
            $checkboxLabels[] = 'I do not want to visit China';
        }
        if ($visited) {
            $checkboxLabels[] = 'I have visited China before';
        }
        if ($maybeVisit) {
            $checkboxLabels[] = 'I maybe want to visit China someday, I am not sure';
        }
        if ($maybeVisited) {
            $checkboxLabels[] = 'I might have visited China before, I am not sure';
        }

        if ($knowledge != "Yes" AND $knowledge != "No" AND $knowledge != "Just a bit") {
            $message .= '<p class="mistake">Please answer whether you know Mandarin Chinese or not.</p>';
            $dataIsGood = false;
        }

        print '<!-- Starting Saving -->';
        if($dataIsGood) {
            $sql = 'INSERT INTO tblChinaFeedback
            (fldFirstName, fldLastName, fldEmail, fldVisit, fldNotVisit, fldVisited, fldMaybeVisit, fldMaybeVisited, fldKnowledge)';
            $sql .= ' VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
            $data = array($firstName, $lastName, $email, $visit, $notVisit, $visited, $maybeVisit, $maybeVisited, $knowledge);

            try {
                $statement = $pdo->prepare($sql);
                if($statement->execute($data)) {
                    $message .= '<h2 style="background-color: rgb(210, 43, 43, 0.9); padding: 2%; color:antiquewhite;">You have completed our survey!</h2>';
                    $message .= '<p>Your responses were successfully saved.</p>';

                    $message .= '<p>Your responses: </p>';
                    $message .= '<p>First Name: ' . $firstName . '</p>';
                    $message .= '<p>Last Name: ' . $lastName . '</p>';
                    $message .= '<p>Email: ' . $email . '</p>';
                    // Looked online for help using implode below
                    $message .= '<p>Checked options: ' . implode(', ', $checkboxLabels) . '</p>';
                    $message .= '<p>Do you know Mandarin Chinese: ' . $knowledge . '</p>';

                    $to = $email;
                    $from = 'Kayli Pike<knpike@uvm.edu>';
                    $subject = 'Features of China Feedback Form';

                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=utf-8\r\n";
                    $headers .= "From: " . $from . "\r\n";

                    $message .= '<p>Thank you for filling out ';
                    $message .= 'out the survey. I really appreciate you taking the time to do so.</p>';

                    $message .= '<p>Best, <br>';
                    $message .= '<span style="padding-left:3em;">Kayli Pike, from Features of China website</span></p>';

                    $mailSent = mail($to, $subject, $message, $headers);
                } else {
                    $message .= '<p>Your responses were not successfully saved.</p>';
                    $dataIsGood = false;
                }
            } catch(PDOException $e) {
                $message .= '<p>Couldn\'t save your responses,  please contact knpike@uvm.edu for assistance.</p>';
            }
        }    
    }

?>
<main>
    <section>
        <h2>Please fill out the following form.</h2>
        <p>We are collecting some information regarding poeples' opinions of China.</p>
    </section>

    <section>
        <h2>For form output:</h2>
        <?php
        if(!$dataIsGood) {
            print '<p class="mistake">Your form is incomplete or has the following mistakes that need to be fixed.</p>';
        }
        print $message;
        ?> 
    </section>

    <section class="form-section">
        <h2>Form</h2>
        <form action="#" id="frmChinaFeedback" method="POST">
            <fieldset class="contact">
                <legend>Contact Information</legend>
                <p>
                    <label class="required" for="txtFirstName">Your First Name:</label>
                    <input type="text" name="txtFirstName" id="txtFirstName" maxlength="50" placeholder="First Name" onfocus="this.select()" tabindex="120" value="<?php print $firstName; ?>" required>
                </p>
                <p>
                    <label class="required" for="txtLastName">Your Last Name:</label>
                    <input type="text" name="txtLastName" id="txtLastName" placeholder="Last Name" maxlength="50" onfocus="this.select()" tabindex="130" value="<?php print $lastName; ?>" required>
                </p>
                <p>
                    <label class="required" for="txtEmail">Enter your email address:</label>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="name@domain.com" maxlength="50" onfocus="this.select()" tabindex="140" value="<?php print $email; ?>" required>
                </p>
            </fieldset>

            <fieldset class="checkbox">
                <legend>Which of these applies to you? (choose at least one and all that apply)</legend>
                <p>
                    <input id="chkVisit" name="chkVisit" tabindex="510"
                    <?php if($visit) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkVisit">I want to visit China</label>
                </p>
                <p>
                    <input name="chkNotVisit" id="chkNotVisit" tabindex="520"
                    <?php if($notVisit) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkNotVisit">I do not want to visit China</label>
                </p>
                <p>
                    <input name="chkVisited" id="chkVisited" tabindex="530"
                    <?php if($visited) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkVisited">I have visited China before</label>
                </p>
                <p>
                    <input name="chkMaybeVisit" id="chkMaybeVisit" tabindex="540"
                    <?php if($maybeVisit) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkMaybeVisit">I maybe want to visit China someday, I am not sure</label>
                </p>
                <p>
                    <input name="chkMaybeVisited" id="chkMaybeVisited" tabindex="550"
                    <?php if($maybeVisited) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkMaybeVisited">I might have visited China before, I am not sure</label>
                </p>
            </fieldset>

            <fieldset class="radio">
                <legend>Do you know Mandarin Chinese?</legend>
                <p>
                    <input type="radio" name="radKnowledge" id="radKnowledgeYes"
                    <?php 
                    if ($knowledge == 'Yes') print 'checked';
                    ?>
                    value="Yes" tabindex="572" required>
                    <label class="radio-field" for="radKnowledgeYes">Yes</label>
                </p>
                <p>
                    <input type="radio" name="radKnowledge" id="radKnowledgeNo"
                    <?php 
                    if ($knowledge == 'No') print 'checked';
                    ?>
                    value="No" tabindex="574" required>
                    <label class="radio-field" for="radKnowledgeNo">No</label>
                </p>
                <p>
                    <input type="radio" name="radKnowledge" id="radKnowledgeMaybe"
                    <?php 
                    if ($knowledge == 'Just a bit') print 'checked';
                    ?>
                    value="Just a bit" tabindex="576" required>
                    <label class="radio-field" for="radKnowledgeMaybe">Just a bit</label>
                </p>
            </fieldset>

            <fieldset class="buttons">
                <p>
                    <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" tabindex="900">
                </p>
            </fieldset>
        </form>
    </section>
</main>

<?php 
include 'footer.php'; 
?>

</body>
</html>
