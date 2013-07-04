<?php
/*
 * Created on 2011-6-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */


session_start();//开启session功能

session_unregister('username');
session_unregister('user');

header('location:login.php');
?>
