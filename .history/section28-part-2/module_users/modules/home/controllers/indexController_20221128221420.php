<?php
function construct()
{
}
function indexAction()
{
    load('lib', 'users');
    load_view('index');
}
