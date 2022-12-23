<?php
function page_next($page)
{
    // if ($page == 1) {
    //     return "?mod=users&act=main&page=1";
    // }
    if ($page > 1) {
        $page = $page - 1;
        return "?mod=users&act=main&page=";
    }
}
function page_pre()
{
    // if ($page = 1) {
    //     return "?mod=users&act=main&page=1";
    // }
    if ($page > 1) {
        $page = $page - 1;
        return "?mod=users&act=main&page=$page";
    }
}
