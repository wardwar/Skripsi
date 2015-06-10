<?php
require_once 'config.php';
 
session_start();
$uName = $_POST['username'];
$pWord = md5($_POST['password']);
$qry = "SELECT * FROM petugas WHERE username='".$uName."' AND password='".$pWord."' AND status=1";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);
if( $num_row == 1 ) {
echo 'true';
$_SESSION['uName'] = $row['nama_petugas'];
$_SESSION['id'] = $row['id_petugas'];
$_SESSION['id_pos'] = $row['id_pos'];

$petugasquery = "SELECT * FROM petugas INNER JOIN pos ON petugas.id = pos.id";

}
else {
echo 'false';
}

?>
