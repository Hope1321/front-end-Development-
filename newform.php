<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webphp backend</title>
</head>
<body>
    <section>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="Name" id="name"> <br> <br>
            Email: <input type="email " id="email"> <br> <br>
            Password: <input type="passord" id="password"><br>
            Comment: <textarea name="comment" id="comment" rows="4" cols="19"> </textarea><br><br>
            <input type="submit" value="Submit">
       
    </section>
    <section>
    Gender: <input type="radio" value="Female" name="Gender">Female
    <input type="radio" value="Male" name="Gender">Male
    <input type="radio" value="other" name="Gender">other
    
    </section>
    </form>
</body>
</html>