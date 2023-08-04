<?php
error_reporting(0);
include("flag.php");
highlight_file(__FILE__);
if (isset($_GET['username']) and isset($_GET['password'])){
    if ($_GET['username'] == $_GET['password']){
        print 'username tidak boleh sama dengan password';
    }
    else if (md5($_GET['username']) === md5($_GET['password'])){
        die('Flag: '.$flag);
    }
    else show_source(__FILE__);
}
?>