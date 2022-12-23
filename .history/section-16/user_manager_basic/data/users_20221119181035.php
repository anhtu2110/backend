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
    2 => array(
        'id' => 2,
        'fullname' => 'Phan Anh Quan',
        'username' => 'anhquan',
        'password' => md5('anhquan!@#'),
        'email' => 'anhquan@gmail.com',
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Võ Văn Chiến',
        'username' => 'vanchien',
        'password' => md5('vanchien2018'),
        'email' => 'vanchien@gmail.com',
    ),
    4 => array(
        'id' => 4,
        'fullname' => 'Đào Văn Đức',
        'username' => 'daoduc',
        'password' => md5('daoduc!@#'),
        'email' => 'daoduc@gmail.com',
    ),
    5 => array(
        'id' => 5,
        'fullname' => 'Trần Văn Đạt',
        'username' => 'vandat',
        'password' => md5('vandat!@#'),
        'email' => 'vandat@gmail.com',
    ),
    6 => array(
        'id' => 6,
        'fullname' => 'Đào Anh Tú',
        'username' => 'anhtu2110',
        'password' => md5('21102003'),
        'email' => 'daotu2110@gmail.com',
    ),
    7 => array(
        'id' => 7,
        'fullname' => 'Nguyễn Minh Hiếu',
        'username' => 'minhhieu',
        'password' => md5('minhhieu!@#'),
        'email' => 'minhhieu@gmail.com',
    ),
);
