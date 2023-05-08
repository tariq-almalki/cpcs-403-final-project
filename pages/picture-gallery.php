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
    <script defer src="../js/picture-gallery.js"></script>
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('../includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="gallery-container">
                    <div class="gallery-text">Picture Gallery</div>
                    <div class="gallery-div">
                        <div class="big-picture">
                            <img src="../images/pic-1.jpg" class="current-picture" width="750" height="500">
                        </div>
                        <div class="thumbnails">
                            <img src="../images/pic-1.jpg" data-index="0" class="thumbnail highlighted">
                            <img src="../images/pic-2.jpg" data-index="1" class="thumbnail">
                            <img src="../images/pic-3.jpg" data-index="2" class="thumbnail">
                            <img src="../images/pic-4.jpg" data-index="3" class="thumbnail">
                            <img src="../images/pic-5.jpg" data-index="4" class="thumbnail">
                            <img src="../images/pic-6.jpg" data-index="5" class="thumbnail">
                            <img src="../images/pic-7.jpg" data-index="6" class="thumbnail">
                            <img src="../images/pic-8.jpg" data-index="7" class="thumbnail">
                            <img src="../images/pic-9.jpg" data-index="8" class="thumbnail">
                            <img src="../images/pic-10.jpg" data-index="9" class="thumbnail">
                        </div>
                        <div>
                            <img class="back-arrow" data-res="dec" src="../images/back.jpg" width="48" height="48" alt="">
                            <img class="forward-arrow" data-res="inc" src="../images/forward.jpg" width="48" height="48" alt="">
                        </div>
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