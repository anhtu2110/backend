<?php
function show_gender($gender)
{
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
    return $list_gender[$gender];
}
