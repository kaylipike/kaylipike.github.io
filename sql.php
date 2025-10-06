<?php 
include 'top.php';
?>
<main>

<section>
    <h2>Create Dynasties Table</h2>
<pre>
CREATE TABLE tblDynasties( 
    pmkRulingDynasties INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fldDynasty VARCHAR(50), 
    fldYears VARCHAR(50)  
)
</pre>
</section>


<section>
    <h2>Insert Values Into Dynasties Table</h2>
<pre>
INSERT INTO tblDynasties
(fldDynasty, fldYears)
VALUES
("Xia Dynasty unconfirmed", "2100-1600 B.C."),
("Shang Dynasty", "1600-1050 B.C."),
("Zhou Dynasty", "1050-256 B.C."),
("Qin Dynasty", "221-206 B.C."), 
("Han Dynasty", "206 B.C.-220 A.D."),
("Six Dynasties", "220-589 A.D."),
("Sui Dynasty", "581-618"),
("Tang Dynasty", "618-906"),
("Five Dynasties", "907-960"),
("Liao Dynasty", "907-1125"),
("Song Dynasty", "960-1279"), 
("Yuan Dynasty", "1279-1368"), 
("Ming Dynasty", "1368-1644"),
("Qing Dynasty", "1644-1911") 
</pre>
</section>

<section>
    <h2>Select From Dynasties Table</h2>
<pre>
SELECT fldDynasty, fldYears FROM tblGoals
</pre> 
</section>

<section>
    <h2>Create Table for Form Responses</h2>
<pre>
CREATE TABLE tblChinaFeedback(
    pmkChinaSurveyId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fldFirstName VARCHAR(30) DEFAULT NULL, 
    fldLastName VARCHAR(30) DEFAULT NULL, 
    fldEmail VARCHAR(50) DEFAULT NULL,  
    fldVisit TINYINT(1) DEFAULT 0, 
    fldNotVisit TINYINT(1) DEFAULT 0, 
    fldVisited TINYINT(1) DEFAULT 0, 
    fldMaybeVisit TINYINT(1) DEFAULT 0, 
    fldMaybeVisited TINYINT(1) DEFAULT 0, 
    fldKnowledge VARCHAR(15) DEFAULT NULL 
)
</pre>
</section>

<section>
    <h2>Insert User's Form Responses Into Table</h2>
<pre>
INSERT INTO tblChinaFeedback
    (fldFirstName, fldLastName, fldEmail, fldVisit, fldNotVisit, fldVisited, fldMaybeVisit, fldMaybeVisited, fldKnowledge)
    VALUES
    (?, ?, ?, ?, ?, ?, ?, ?, ?);
</pre>
</section>

</main>
<?php include 'footer.php'; ?>
</body>
</html>