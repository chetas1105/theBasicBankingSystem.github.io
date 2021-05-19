<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from sparkb where id='$from'";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from sparkb where id='$toUser'";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);

// if amount entered by user is grater than balence
 if($amnt > $sql1['amount']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")'; 
        echo '</script>';
    }

//if amount enterd by user is zero
 else if($amnt == 0){
     echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
</script>";
 }
    else {
        
        //Transfer money from user account 
        $newCredit = $sql1['amount'] - $amnt;
        $sql = "UPDATE sparkb set amount=$newCredit where id=$from";
        mysqli_query($con,$sql);
     


        $newCredit = $sql2['amount'] + $amnt;
        $sql = "UPDATE sparkb set amount=$newCredit where id=$to";
        mysqli_query($con,$sql);
           
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO `transaction`(`sender`,`receiver`, `amounts`) VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($con,$sql);
        if($tns){
           echo "<script type='text/javascript'>alert('Transaction Successfull!');
            window.location='transactionh.php';
            </script>";
        }
       
        $newCredit= 0;
        $amnt =0;
       
     
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SparkBank | Transfer Money</title>

     <!-- links Bootstrap-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    nav .navbar-brand .spark{
    color: #f44336;

    
}
nav .navbar-brand{
    font-size: 35px;
    font-weight: 500;
    
}
nav{
    height: 63px;
}
.nav-item{
  font-size:21px;
  
}
.nav-link{
  color:white !important;
}
.nav-link:hover{
  
  font-weight:700;
  border-bottom:1px solid #f44336;
}
</style>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!--  Bank Logo  -->
        <a class="navbar-brand" href="#"><span class="spark">Spark</span>Bank</a>
      
        <!-- nav bar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutUs.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hover.html">Contact Us</a>
          </li>
          
      
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Transction
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="transact.php">Make a Transaction</a>
              <a class="dropdown-item" href="transactionh.php">Transaction history</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">User Details</a>
          </li>
        </ul>
      </nav>

      <!-- table  -->
            <?php
                include 'connection.php';

                $sid=$_GET['id'];
                $sql = "select * from sparkb where id='$sid'";
                $query=mysqli_query($con,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($query);
            ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balence</th>
        </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php echo $rows['id']?></td>
                <td><?php echo $rows['name'] ;?></td>
                <td><?php echo $rows['email'] ;?></td>
                <td><?php echo $rows['amount'] ;?></td>
         </tr>
        </tbody>
    </table>
    </div>
    <form method="post" name="tcredit"><br/>
            <label style="color: ##f44336" >Transfer To:</label>
        <select class=" form-control" name="to" style="margin-bottom:5%;" required>
            <option value="" disabled selected><---Select User---></option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM sparkb where id!='$sid'";
                $query=mysqli_query($con,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($query)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['amount'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            </select>
            <label style="color: #c06565">Enter the amount to Transfer:</label>
            <input type="number" id="amm" class="form-control" name="amount" min="0" required/> <br/>
                <div class="text-center btn3">
            <button class="btn btn-danger" name="submit" type="submit" >Transfer</button>
            </form>
            </div>
       
    </div>
</body>
</html>