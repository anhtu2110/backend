<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<br>";
        print_r($data);
        echo "</br>";
    }
}
show_array($_FILES);
