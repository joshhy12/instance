<?php

if ($_SERVER["REQUEST_METHOD"]== "POST" ) {
   $fullname = $_POST["fullName"];
   $registrationnumber= $_POST["registrationnumber"];
   $sex = $_POST["sex"];
   $email = $_POST["email"];
   $region = $_POST["region"];
   $district = $_POST["district"];
   $pwd = $_POST["password"];


    require_once "dbh.inc.php";

    $query = "INSERT INTO users (fullname,registrationnumber,sex,email,region,district,pwd) 
    VALUES ( '$fullname','$registrationnumber','$sex','$email', '$region','$district','$pwd');";

    $result=mysqli_query($conn,$query);
    if ($result) {
       echo"<script>alert('done')</script>" ;
    //    <script> alert("submissionsuccess") </script>
        header("location: ../form.html");
    }


}