<?php
// OverDrive Core
// Copyright 2014-2015 OverDrive IRC

// Sessions - It's here if you need it!
session_start();

if (!isset($_SESSION['UID'])) $_SESSION['UID'] = 0;

// Variable Storage
$_ODRIVE = [];

// Sets the basic vars.
$_ODRIVE['template'] = array("header"=>true,"footer"=>true,"vars"=>array());

// Include the Libs!
include('includes/routing.inc.php');
include('includes/template.inc.php');
?>