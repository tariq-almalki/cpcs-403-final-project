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
    <script src="../js/validation.js"></script>
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('../includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="feedback-container">
                    <div class="feedback-text">Feedback Form</div>
                    <form class="feedback-form" method="post" action="../php/submit.php"  onsubmit="return validateForm()">
                        <fieldset class="form-fieldset-1">
                            <legend>Basic Info</legend>
                            <label for="first-name">First Name:
                                <input type="text" id="first-name" name="first-name" required>
                            </label>

                            <label for="last-name">Last Name:
                                <input type="text" id="last-name" name="last-name" required>
                            </label>

                            <label for="username">Username:
                                <input type="text" id="username" name="username" required>
                            </label>

                            <label for="email">Email:
                                <input type="email" id="email" name="email" required>
                            </label>

                            <label for="profession">profession:
                                <input type="text" id="profession" name="profession" required>
                            </label>

                            <label for="address">Address:
                                <input type="text" id="address" name="address" required>
                            </label>

                            <label for="postal-code">Postal Code:
                                <input type="text" id="postal-code" name="postal-code" required>
                            </label>
                        </fieldset>
                        <fieldset class="form-fieldset-2">
                            <legend>Misc Info</legend>
                            <label for="gender">Gender:
                                <label for="male">Male
                                    <input type="radio" id="male" name="gender" value="male" required>
                                </label>
                                <label for="female">Female
                                    <input type="radio" id="female" name="gender" value="female" required>
                                </label>
                            </label>


                            <label for="hobbies">Hobbies:
                                <label for="coding">Coding
                                    <input type="checkbox" id="coding" name="hobbies" value="coding">
                                </label>
                                <label for="running">Running
                                    <input type="checkbox" id="Running" name="hobbies" value="Running">
                                </label>
                            </label>

                            <label for="city">City:
                                <select id="city" name="city" required>
                                    <option value="">Select a city</option>
                                    <option value="riyadh">Riyadh</option>
                                    <option value="jeddah">Jeddah</option>
                                    <option value="makkah">Makkah</option>
                                </select>
                            </label>
                        </fieldset>

                        <label id="feedback-label" for="feedback">Feedback:</label>
                        <textarea id="feedback" name="feedback" rows="5" required></textarea><br>

                        <button type="submit">Submit</button>
                    </form>
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