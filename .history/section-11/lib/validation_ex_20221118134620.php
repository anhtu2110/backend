<?php
function is_username($username) {
    $pattern = "/^[A-Za-z0-9_\.\s]{6-32}$/";
    if (preg_match($pattern, $username, $matchs)) {
        return true;
    }
    return false;
}
