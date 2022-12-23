<?php
session_destroy();
setcookie('is_login', true, time() - 3600);
setcookie('user_login', $username, time() - 3600);
redirect_to('?page=login');
