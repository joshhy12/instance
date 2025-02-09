<?php

if ($_SERVER["REQUEST_METHOD"]== "POST" ) {
   $fullname = $_POST["fullname"];
   $registrationNumber= $_POST["registrationNumber"];
   $sex = $_POST["sex"];
   $email = $_POST["email"];
   $region = $_POST["region"];
   $district = $_POST["district"];
   $pwd = $_POST["password"];


    require_once "dbh.inc.php";

    $query = "INSERT INTO signup (fullname,registrationNumber,sex,email,region,district,pwd) 
    VALUES ( '$fullname','$registrationNumber','$sex','$email', '$region','$district','$pwd');";

    $result=mysqli_query($conn,$query);
    if ($result) {
       echo"<script>alert('done')</script>" ;
    //    <script> alert("submissionsuccess") </script>
        header("location: ../form.html");
    }


}