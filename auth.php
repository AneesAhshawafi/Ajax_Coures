<?php
// if (isset($_GET['name'])) {
//     echo "Hello " . $_GET['name'] . ' Your last login at ' . $_GET['lastlogin'];
// }
if (isset($_POST['name']) and isset($_POST['lastlogin'])) {
    echo "Hello " . $_POST['name'] . " Your last login at " . $_POST['lastlogin'];
} else {
    echo " no data";
}