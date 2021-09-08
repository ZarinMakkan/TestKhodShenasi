<?php
if(!empty($_COOKIE['stated'])) {
    die("you are temporarily unable to perform ..ADM Test..");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>^_^ Self-Knowledge Test</title>
        <link rel="icon" href="Pictures/EzarinImage.png" />
        <link rel="stylesheet" type="text/css" href="./style.css?v=<?php echo time(); ?>" />
    </head>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <body>
        <?php include "header.php"; ?>
        <div class="headerBreak"></div>
        <div class="containarMiddle">
            <img id="subImg" src="Pictures/personality-examination.jpg" alt="ax error">
            <div id="introduction">
                <p>در این سری تست خودشناسی، با خواندن پرسش های زیر و با به تصویر کشیدن موقعیت های داده شده در ذهن خود، اولین تصویر ذهنی تان را یادداشت کنید. سوال های این آزمون از وقایعی است که هر روز با آنها مواجه می شوید.</p><br><p>توجه کنیدکه در پاسخ به این سوالات اولین تصویر ذهنی مهم است و بیش از حد بررسی کردن سوال مجاز نیست. یک کاغذ و قلم آماده کنید تا بتوانید جواب هایتان را یادداشت نمایید و امتیازهای خود را با هم جمع بزنید.</p>
            </div>
        </div>
        <div class="headerBreak"></div>
        <div class="containarBottom">
            <div class="formSection">
                <form action="result.php" method="POST">
                    <?php require "questions.html"; ?>
                    <input id="selection" type="submit" value="مشاهده نتایج">
                </form>
            </div>
            <div class="imgSection"><img src="Pictures/self-knowledge.jpg" alt="no, what???"></div>
        </div>
        <div class="clear"></div>
        <div class="headerBreak"></div>
        <?php include "footer.php"; ?>
        <div class="headerBreak"></div>
    </body>
</html>