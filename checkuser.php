<?php
require_once 'functions.php';

if(isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->num_rows)
        echo "<span class='available'>&nbsp;&#x2714; " .
            "This username is available</span>";
}
?>