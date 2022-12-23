<?php
require './data/users.php';
require './lib/validation.php';
require './lib/template.php';
?>
<?php
if (empty($_SESSION['is_login'])) {
    require 'pages/login.php';
} else {
    require 'pages/home.php';
}

?>