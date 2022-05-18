<?php
    //koneksi ke database login
    $mysqli = new mysqli("localhost","root","","dblogin");

// Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    //koneksi ke database 
    $hostname = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'dbputzatoserba';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>