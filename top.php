<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">  
    <title>Facts on China</title>
    <meta name="author" content="Kayli Pike">
    <meta name="description" content="Looking at the China and its many features. Looking at the country's history and nature, as well as the Great Wall and pandas. Getting and recording information regarding peoples' knowledge and opinions of China through a form.">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" href="css/layout-desktop.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" href="css/layout-tablet.css?version=<?php print time(); ?>" type="text/css" media="(max-width: 820px)">
    <link rel="stylesheet" href="css/layout-phone.css?version=<?php print time(); ?>" type="text/css" media="(max-width: 430px)">
</head>

<?php
print '<body class="' . $pathParts['filename']. '">';
print '<!-- #################    Body element ################# -->';
include 'database-connect.php';
include 'header.php';
    include 'nav.php';
    ?>