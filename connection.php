<?php

// if($con == false){
    //     die("connection Error".mysqli_connect_error());
    // }
    try {
        $servername="localhost";
        $username="root";
        $password="";
        $con = mysqli_connect($servername,$username,$password);
        try{
            $q="CREATE DATABASE `perfume`";
            mysqli_query($con,$q);
        }
        catch(exception $db){
            
        }
        mysqli_select_db($con, "perfume");
        $con = mysqli_connect("localhost", "root", "","perfume");
        
    try{
        //check if table is created before creating table
        // $crt_T="CREATE TABLE `perfume`.`customer` (`first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , `Email` VARCHAR(250) NOT NULL , `Password` VARCHAR(100) NOT NULL , `Confirm` VARCHAR(100) NOT NULL , PRIMARY KEY (`Firstname`)) ENGINE = InnoDB;";
        $crt_T="CREATE TABLE `perfume`.`customer` (`Firstname` VARCHAR(255) NOT NULL , `Lastname` VARCHAR(255) NOT NULL , `Email` VARCHAR(255) NOT NULL , `Password` VARCHAR(255) NOT NULL , `D/T` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`Firstname`)) ENGINE = InnoDB;";
        $result=mysqli_query($con,$crt_T);
    }
    catch(exception $UT){
        echo"";
    }
    
}
catch(exception $error){
// owner data base code inside---------------------
}
finally{
    session_unset();
}
    ?>


