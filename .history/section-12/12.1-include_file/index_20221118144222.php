<?php
require 'lib/data.php';
require 'inc/header.php';
?>
<div id="content">
    CONTENT
    <?php
    $data = array(1, 2, 3);
    show_array($data);
    ?>
</div>
<?php
require 'inc/footer.php';
?>