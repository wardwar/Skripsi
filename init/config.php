<?php
$con = mysql_connect('localhost','root','') or die(mysql_error());
 
if (!$con) {
    echo "Koneksi gagal!";
    exit;
}
 
if (!mysql_select_db("dbtma")) {
    echo "Koneksi gagal!";;
    exit;
}

?>
