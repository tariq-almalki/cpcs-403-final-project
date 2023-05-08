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
    <link rel="stylesheet" href="../global/table.css">
    <link rel="stylesheet" href="../global/print.css">
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('../includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="table-div">

                    <div class="table_text">Table</div>

                    <table class="table-selector">
                        <caption class="table-caption">my schedule for the week</caption>
                        <tr>
                            <th>Time</th>
                            <th>Sunday</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                        </tr>
                        <tr>
                            <th>6:00</th>
                            <td colspan="7">Study for CPCS-403</td>

                        </tr>
                        <tr>
                            <th>6:30</th>
                            <td colspan="2">solving Assignment CPIS-428</td>
                            <td colspan="5">499's Project</td>
                        </tr>
                        <tr>
                            <th>7:00</th>
                            <td colspan="7">Writing an assay for CPIS-428</td>
                        </tr>
                        <tr>
                            <th>7:30</th>
                            <td colspan="2">Free Time</td>
                            <td colspan="5">Studying for 499</td>
                        </tr>
                        <tr>
                            <th>8:00</th>
                            <td colspan="7">coding</td>
                        </tr>
                        <tr>
                            <th>8:30</th>
                            <td colspan="7">Free Time</td>
                        </tr>
                        <tr>
                            <th>9:00</th>
                            <td rowspan="2" colspan="2">Free Time</td>
                            <td colspan="5">Studying for 403</td>
                        </tr>
                        <tr>
                            <th>9:30</th>
                            <td rowspan="2" colspan="7">Free Time</td>
                        </tr>
                        <tr>
                            <th>10:00</th>
                            <td colspan="2">practicing diction</td>
                        </tr>
                    </table>


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