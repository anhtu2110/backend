<?php
// --Danh mục tin tức
// --Danh mục sản phẩm
// --Menu
$data = array(
    1 => array(
        'id' => 1,
        'name' => 'Kinh doanh',
        'parent_id' => 0,
    ),
    2 => array(
        'id' => 2,
        'name' => 'Thể thao',
        'parent_id' => 0,
    ),
    3 => array(
        'id' => 3,
        'name' => 'Quốc tế',
        'parent_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'name' => 'Doanh nghiệp',
        'parent_id' => 1,
    ),
    5 => array(
        'id' => 5,
        'name' => 'Bóng đá',
        'parent_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'name' => 'Marathon',
        'parent_id' => 2,
    ),
);
// $result = array(
//     1 => array(
//         'id' => 1,
//         'name' => 'Kinh doanh',
//         'parent_id' => 0,
//     ),
//     3 => array(
//         'id' => 3,
//         'name' => 'Quốc tế',
//         'parent_id' => 1,
//     ),
//     4 => array(
//         'id' => 4,
//         'name' => 'Doanh nghiệp',
//         'parent_id' => 1,
//     ),
//     2 => array(
//         'id' => 2,
//         'name' => 'Thể thao',
//         'parent_id' => 0,
//     ),
//     5 => array(
//         'id' => 5,
//         'name' => 'Bóng đá',
//         'parent_id' => 2,
//     ),
//     6 => array(
//         'id' => 6,
//         'name' => 'Marathon',
//         'parent_id' => 2,
//     ),
// );
function data_tree($data, $parent_id = 0)
{
    global $data;
    $result = array();
    foreach ($data as $v) {
        if ($v['parent_id'] == $parent_id) {
            $result[] = $v;
            if ($v['parent_id'] == $v['id']) {
                $result[] = $v;
            }
        }
    }
    return $result;
}
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
show_array(data_tree($data, $parent_id = 0));
