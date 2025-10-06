<nav>
    <a class="<?php
    if ($pathParts['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class="<?php
    if ($pathParts['filename'] == "greatwall") {
        print 'activePage';
    }
    ?>" href="greatwall.php">Great Wall</a>

    <a class="<?php
    if ($pathParts['filename'] == "pandas") {
        print 'activePage';
    }
    ?>" href="pandas.php">Pandas</a>

    <a class="<?php
    if ($pathParts['filename'] == "history") {
        print 'activePage';
    }
    ?>" href="history.php">History</a>

    <a class="<?php
    if ($pathParts['filename'] == "nature") {
        print 'activePage';
    }
    ?>" href="nature.php">Nature</a>

    <a class="<?php
    if ($pathParts['filename'] == "form") {
        print 'activePage';
    }
    ?>" href="form.php">Form</a>
</nav>