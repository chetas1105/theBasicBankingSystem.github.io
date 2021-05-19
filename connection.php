<!-- connect php to webpage -->
<?php
 $username ="root";
 $password = "";
 $server = "localhost";
 $db = "sparkb";    

 $con = mysqli_connect($server,$username,$password,$db);
 if($con){
    ?>
    <!-- <script>
        alert('Connect Successfully');
    </script> -->
    <?php

 }else{
     die("No connection due to" . mysqli_connect_error());
 }
?>