<?php
/// Code by Verdi.K
///
/// 2017 Copyright All rights reserved.

require_once("config.php");

$pageid = "login";
$pagename = "Login";

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = new User();

    if($user->doConnect($email,$password))
        $user->redirect();
    else
        $error = "Incorrect email or password.";

}
?>
<body>
    <?php if(isset($error)) echo "<h3>" . $error . "</h3>"; ?>
<form method="post" action="">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password">
    <input type="submit" name="Login">
</form>
</body>
