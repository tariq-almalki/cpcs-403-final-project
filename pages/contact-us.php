<?php
function includeFileWithVariables($fileName, $variables)
{
    extract($variables);
    include($fileName);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global/style.css">
    <script defer src="../js/email.js"></script>
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('../includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="contact-us-container">
                    <div class="contact-us-text">Contact us</div>
                    <div class="contact-us-div">
                        <span class="contact-us-span">You can Contact me through my Email Below!!!</span>
                        <div id="email-div" data-email="ZS50YXJpcS5hbG1hbGtpQGdtYWlsLmNvbQ==" style="filter: blur(5px);">
                            example@gmail.com
                        </div>
                        <button id="show-button">Show Email</button>
                    </div>
                </div>


                <div class="index--3_div">
                    <?php includeFileWithVariables('../includes/links.php', array()) ?>
                    <?php includeFileWithVariables('../includes/footer.php', array()) ?>
                </div>

            </div>

        </div>

    </div>

</body>

</html>