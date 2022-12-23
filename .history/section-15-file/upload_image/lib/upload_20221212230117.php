<?php
function file_error()
{
    global $error;
    if (!empty($error)) {
        foreach ($error as $key => $value) {
            return "<p class='error'>" . $value . "</p>";
        }
    }
}
function file_success()
{
    global $success;
    if (!empty($success)) {
        foreach ($success as $key => $value) {
            return "<p class='success'>" . $value . "</p>";
        }
    }
}
