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
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('../includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="resume-container">
                    <div class="resume-text">Resume</div>
                    <object data="../pdfs/tariq-almalki-resume.pdf" type="application/pdf" width="100%" height="600px">
                        <p>PDF cannot be displayed in your browser. <a href="example.pdf">Download</a> instead.</p>
                    </object>
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