<?php
class Helper {

    public function generateFormToken($form) {
        $token = md5(uniqid(microtime(), true));

        $_SESSION[$form.'_token'] = $token;

        return $token;
    }

    public function verifyFormToken($form) {

        if(!isset($_SESSION[$form.'_token']))
            return false;

        if(!isset($_POST['token']))
            return false;

        if($_SESSION[$form.'_token'] !== $_POST['token'])
            return false;


        return true;
    }

}
?>
