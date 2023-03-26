<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::Check();

$table = new UsersTable(new MySQL());

$id = $_GET['id'];
$table->unsuspended($id);

HTTP::redirect("/admin.php");