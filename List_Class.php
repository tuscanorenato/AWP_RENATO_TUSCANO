<?php
include("DB_Config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop-down List Example</title>
</head>
<body>
<form method="POST">
        <label for="classes">Select a class:</label>
        <select id="classes" name="selected_class">
            <?php
            // An array of class options
            $classOptions = array(
                "Math 101",
                "History 202",
                "Science 303",
                "English 404"
            );

            // Loop through the array to create <option> tags
            foreach ($classOptions as $class) {
                echo "<option value='$class'>$class</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if a class is selected and display the selected class
    if (isset($_POST['selected_class'])) {
        $selectedClass = $_POST['selected_class'];
        echo "<p>You selected: $selectedClass</p>";
    }
    ?>
</body>
</html> 