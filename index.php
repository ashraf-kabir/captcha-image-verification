<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captcha Verification</title>
</head>
<body>
    <h2>Captcha image verification</h2>
    <form name="captcha" method="post">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" required="required">
        <br>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" required="required">
        <br>
        <label for="img">Verification code:</label>
        <input id="img" type="text" name="vcode" size="10" required="required">&nbsp;<img
                src="captcha.php">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        if ($_POST['vcode'] != $_SESSION['vcode'] OR $_SESSION['vcode'] == '') {
            echo '<script>alert("incorrect");</script>';
        } else {
            // form validation according to you
            echo '<script>alert("correct");</script>';
        }
    }
    ?>
</body>
</html>