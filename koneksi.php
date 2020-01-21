<?php

$db = mysqli_connect("localhost","root","","asset");

if ( ! $db ) {
	die( "Tidak terkoneksi database" );
}