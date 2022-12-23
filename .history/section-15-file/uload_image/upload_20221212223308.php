<?php
function file_error()
{
    global $error;
    if (!empty($error)) {
        foreach ($error as $key => $value) {
            echo "<p class='error'>" . $value . "</p>";
        }
    }
}
