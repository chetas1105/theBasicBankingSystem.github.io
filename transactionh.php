<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SparkBank | Transaction history</title>

    <!-- Bootstrap links  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>


@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');


*{
  margin:0;
  padding:0;
  box-sizing:border-box;

}
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
thead{
  background-color: rgb(59, 57, 57);
    color: white;
}
#headi{
    font-size:45px;
    margin-top:20px;
    margin-bottom:20px;
    font-family: 'Merriweather', serif;
    
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
        <!-- Bank logo-->
        <a class="navbar-brand" href="#"><span class="spark">Spark</span>Bank</a>
      
        <!-- Nav bar -->
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

      <div class="container divStyle">
        <h2 class="text-center" id="headi">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table text-center table-striped table-hover tableStyle ">
            <thead>
            <tr>
            <th>Id</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        
            </tr>
        </thead>
        <tbody>
            <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_array($query))
            {
                ?>
            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['amounts']; ?> </td>
                
            <?php
            }

            ?>


        </tbody>
    </table>
    </div>
    </div>

</body>
</html>