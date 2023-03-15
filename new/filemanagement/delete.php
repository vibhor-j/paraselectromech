<?php
session_start();
?>
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 'true') {
?>
<?php
    if (isset($_POST['filename'])) {
        if (unlink("../files/" . $_POST['filename'])) {
            echo "success";
        } else {
            echo "fail";
        }
    }
?>
<?php
}
?>
