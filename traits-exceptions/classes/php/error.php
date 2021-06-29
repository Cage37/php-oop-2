<?php

function getError($mail) {
    if(strpos($mail, '@') == false) {
        throw new Exception("NOT VALID EMAIL!");
    } else {
        return $mail;
    }
}

?>