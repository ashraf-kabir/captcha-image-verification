<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captcha</title>
</head>
<body>
    <form name="captcha" method="post">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" required="required">
        <br>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" required="required">
        <br>
        <label for="img">Verification code:</label>
        <input id="img" type="text" name="vercode" size="10" required="required">&nbsp;<img
                src="captcha.php">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    //include 'captcha.php';
    session_start();
    if ($_POST['vercode'] != $_SESSION['vercode'] OR $_SESSION['vercode'] == '') {
        echo '<script>alert("incorrect");</script>';
    } else {
        // add form data processing code here
        echo '<script>alert("correct");</script>';
    }
    ?>
</body>
</html>