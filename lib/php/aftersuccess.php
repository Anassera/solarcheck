<?php
if($mailSend){
    // delete POST-REQUEST
    echo 'mail was send';
    unset($_POST);
    $_POST = array();
}