<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
function gender($data)
{
    $gender = array(
        'male' => 'Name',
        'female' => 'Nữ'
    );
    if (!empty($data)) {
        return $gender[$data];
    }
}
