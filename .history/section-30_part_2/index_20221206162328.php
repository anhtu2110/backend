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
function has_child($data, $id)
{
    foreach ($data as $v) {
        if ($v['parent_id'] == $id) {
            return true;
        }
    }
    return false;
}
function data_tree($data, $parent_id = 0, $level = 0)
{
    $result = array();
    foreach ($data as $v) {
        if ($v['parent_id'] == $parent_id) {
            $v['level'] = $level;
            $result[] = $v;
            if (has_child($data, $v['id'])) {
                // ++$level;
                $result_child = data_tree($data, $v['id'], $level + 1);
                $result = array_merge($result, $result_child);
                // --$level;
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
// echo "<pre>";
// print_r(data_tree($data, 0));
// show_array(data_tree($data, 0));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</body>

</html>