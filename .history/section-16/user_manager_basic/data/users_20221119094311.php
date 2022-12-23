<?php
#Lưu trữ mảng dữ liệu user
/** Thông tin user
 * HỌ và tên => fullname
 * Tên đăng nhập => username
 * Mật khẩu => username\
 * Email => email
 * Id => id
 */
$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Văn Cương',
        'username' => 'cuongguru',
        'password' => md5('guru!@#'),
        'email' => 'phancuong.qt@gmail.com',
    ),
);
