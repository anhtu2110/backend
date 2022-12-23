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
    show_array(get_product_item_by_id($id));
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
