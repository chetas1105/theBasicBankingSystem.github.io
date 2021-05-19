<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SparkBank | User Details</title>
    
<style>
      /* font  */
          @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');
          /* navbar */

          nav{
          height:63px;
          }
          nav .navbar-brand{
          font-size: 35px;
          font-weight: 500;
          }

          nav .navbar-brand .spark{
          color: #f44336;
          }

          nav ul li {

          color: white;
          font-size: 20px;
          }


          /* table  */

          .con{
          text-align: center;
          margin-top: 20px;
          margin-bottom: 25px;
          font-family: 'Merriweather', serif;


          }
          p{
          font-size: 45px;

          }

          thead{
          background-color: rgb(59, 57, 57);
          color: white;
          }

          #btn{
          border: 1px solid black;
          border-radius:5px;
          }
          #btn:hover{
          background-color:#f44336;
          color:white;
          }
          #uli{
          margin-right:0px;
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

  <!-- links Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Bank logo -->
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

<!-- table -->
<div class="container">
  <div class="con">
    <p>User Details</p>
  </div>
        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Amount</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php
  
  include 'connection.php';

  $selectquery = " select * from `sparkb`";

  $query = mysqli_query($con,$selectquery);

  $nums = mysqli_num_rows($query);

  while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo $res['id'];  ?></td>
      <td><?php echo $res['name'];  ?></td>
      <td><?php echo $res['email'];  ?></td>
      <td><?php echo $res['amount'];  ?></td>
      <td>
        <a href="transact.php?id=<?php echo $res['id']; ?>">
          <button id="btn" type="button" >Transact</button>
        </a>
      </td>
    </tr>


  <?php
  }
  ?>
    
    </tbody>
  </table>
</div>
</body>
</html>