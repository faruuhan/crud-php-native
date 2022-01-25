<?php

include "koneksi.php";

$Id = $_GET['id'];

$query = "DELETE FROM member WHERE member_Id='$Id'";

mysql_query($query);

header("Location:../index.php");