<?php
$con = mysqli_connect("localhost","root","root");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db( $con, 'demo' );
$res = mysqli_query("show create table yb_admin",$con);
var_dump($res);
