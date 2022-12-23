<?php
function construct()
{
}
function showAction()
{
    load_view('show');
}
function addAction()
{
    load_model('add');
    $id = $_GET['id'];
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
}
function updateAction()
{
}
function deleteAction()
{
}
function delete_allAction()
{
}
