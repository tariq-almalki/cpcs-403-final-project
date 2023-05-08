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
    <link rel="stylesheet" href="./global/style.css">
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('./includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="index--1_div">

                    <div class="index--1-1_div">
                        <span class="index--1_text">Tariq Almalki</span>
                        <pre class="index--2_text">
Senior Computer Science Student |
Full Stack Web Developer |
Java |
Javascript.
</pre>
                        <div class="index--1-1-1_div">
                            <a href="https://github.com/tariq-almalki">
                                <span class="index--1_github">Github</span>
                            </a>
                            <a href="https://www.linkedin.com/in/e-tariq-almalki/">
                                <span class="index--1_linkedin">Linkedin</span>
                            </a>
                        </div>
                    </div>
                    <div class="index--1-2_div">
                        <img class="index--1_img" src="./images/undraw_feeling_proud_qne1.svg" alt="">
                    </div>

                </div>

                <div class="index--2_div">
                    <div class="tools_text">Tools</div>
                    <div class="div_tools">

                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original-wordmark.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" width="64" height="64">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/spring/spring-original-wordmark.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original-wordmark.svg" width="64" height="64" />
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" width="64" height="64" />
                    </div>
                </div>

                <div class="index--3_div">
                    <?php includeFileWithVariables('./includes/links.php', array()) ?>
                    <?php includeFileWithVariables('./includes/footer.php', array()) ?>
                </div>

            </div>

        </div>

    </div>

</body>

</html>