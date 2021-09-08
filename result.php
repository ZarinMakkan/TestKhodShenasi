<?php
require "functions.php";
if($_SERVER['REQUEST_METHOD'] == 'GET')
    die("GET OUT AND NEVER BACK AGAIN");
//request method dar inja hatman 'POST' ast!

setcookie('stated', 'yes', time()+3600);


$result = returnResult($_POST);
//خب اینجا ما با توجه به مجموع امتیازات فقط اون جمله مخصوص رو نشون کاربر میدیم
$personalNo = jomleNo($result);
$correctResult = jomleString($personalNo);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>^_^ Self-Knowledge Test</title>
        <link rel="icon" href="Pictures/EzarinImage.png" />
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>
    <body class="bodyResultPage">
        <?php include "header.php"; ?>
        <div class="headerBreak"></div>
        <div id="result">
            <h2>امتیاز شما : <?php echo $result ?></h2>
            <h2>نتیجه تست شخصیت شناسی شما</h2>
            <p><?php echo $correctResult ?></p>
        </div>
        <div class="headerBreak"></div>
        <?php include "footer.php"; ?>
    </body>
</html>