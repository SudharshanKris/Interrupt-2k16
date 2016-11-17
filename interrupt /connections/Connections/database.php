<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

function dbConnect()
{
    $sql = mysqli_connect('localhost' ,'root','tsus2312','connection');
    return $sql;

}
?>