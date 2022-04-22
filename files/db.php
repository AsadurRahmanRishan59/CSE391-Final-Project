<?php
    
     $server = "localhost";
     $username = "id18801490_root";
     $password = "o5F[_)z0R|$2LdDl";
     $dbname = "id18801490_hmusic";

     $conn = mysqli_connect($server, $username, $password, $dbname);

     if(!$conn){
         die("Connection Failed:".mysqli_connect_error());
     }

?>