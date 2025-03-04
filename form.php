<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $name = $email = $age = $nameError = $emailError = $ageError = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])) {
        //sanitize the name,email and age to prevent xss attacks
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);


        //validate the name
        if (empty($name)) {
            $nameError = "Name is required";
        }
        //validate the email
        if (empty($email)) {
            $emailError = "Email is required";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please Enter a valid email format";
        }

        //validate age
        if (empty($age)) {
            $ageError = "Age is required";
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"> <br> <br>
        <span class="error">*<?php echo $nameError ?></span>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"> <br> <br>
        <span class="error">*<?php echo $emailError ?></span>
        <label for="age">Age</label>
        <input type="number" id="age" name="age"><br> <br>
        <span class="error">*<?php echo $ageError ?></span>
        <input type="submit" value="Submit">
        echo 
    </form>
    <?php
    //Displaying the submitted data
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($nameError) && empty($emailError) && empty($ageError)) {
        echo "<div class='submittedData'>";
        echo "<p><strong>Name:</strong>$name</p>";
        echo "<p><strong>Email:</strong>$email</p>";
        echo "<p><strong>Age:</strong>$age</p>";
        echo "</div>";
    }
    ?>
</body>

</html>