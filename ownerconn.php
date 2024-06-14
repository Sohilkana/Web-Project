<?php

try {
    $servername="localhost";
    $username="root";
    $password="";
    $conn = mysqli_connect($servername,$username,$password);
    try{
        $q="CREATE DATABASE `owner`";
        mysqli_query($conn,$q);
    }
    catch(exception $db){
        
    }
    mysqli_select_db($conn, "owner");
    $conn = mysqli_connect("localhost", "root", "","owner");
    
try{
    //check if table is created before creating table
    $crt_T="  CREATE TABLE `owner`.`admin` (`Username` VARCHAR(255) NOT NULL , `pass` VARCHAR(255) NOT NULL , PRIMARY KEY (`Username`)) ENGINE = InnoDB;  ";
    $result=mysqli_query($conn,$crt_T);
}
catch(exception $UT){
    echo"";
}
try{
    //check if table is created before creating table

    
    $crt_T="    CREATE TABLE `owner`.`shopdata` (`ID` INT(255) NOT NULL AUTO_INCREMENT , `IMG` VARCHAR(255) NOT NULL , `name` VARCHAR(255) NOT NULL , `price` INT(255) NOT NULL , `ml` INT(10) NOT NULL , `gender` VARCHAR(10) NOT NULL , `moreinfo` VARCHAR(255) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB";
    $result=mysqli_query($conn,$crt_T);
}
catch(exception $UT){
    echo"";
}
try{
    $in='INSERT INTO `admin` (`Username`, `pass`) VALUES ("Allinoneperfume", "$2y$10$mxKA3pcDSbBszSh40DxTCOxRUoDi5UaJe5dZjpxu.wyAlW2kEwirG");';
    $result=mysqli_query($conn,$in);
}
catch(exception $tb){}
}
catch(exception $error){
// owner data base code inside---------------------
}
finally{
session_unset();
}
?>
