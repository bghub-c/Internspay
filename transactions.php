<!-- transactionDetails -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Summary</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    
    body{
        background-image:url("1.png");
    }
    .logo-text, .nav-link1{
      color: white;
      padding-top: 15px;
    }
    .list-customer{
      padding-left: 1100px;
    }

    .nav-link1:hover{
      color: #F8F9F5;
    }
    h2{
      text-align: center;
      margin-top: 20px;
    }

    </style>
</head>
<!--  background="./images/thistory.jpg" style="background-repeat: no-repeat; background-size: 100%;" -->
<body>

        <nav class="navbar bg-dark">
          <div class="container-fluid">
            <svg class="d-inline-block align-text-top" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect x="18" y="25" fill="#506C7F" width="4" height="29"></rect> <rect x="30" y="25" fill="#506C7F" width="4" height="29"></rect> <rect x="42" y="25" fill="#506C7F" width="4" height="29"></rect> </g> <g> <rect x="48" y="25" fill="#B4CCB9" width="4" height="29"></rect> <rect x="24" y="25" fill="#B4CCB9" width="4" height="29"></rect> <rect x="36" y="25" fill="#B4CCB9" width="4" height="29"></rect> <rect x="12" y="25" fill="#B4CCB9" width="4" height="29"></rect> </g> <g> <path fill="#F9EBB2" d="M8,56c-1.104,0-2,0.896-2,2h52c0-1.104-0.895-2-2-2H8z"></path> <path fill="#F9EBB2" d="M60,60H4c-1.104,0-2,0.896-2,2h60C62,60.896,61.105,60,60,60z"></path> </g> <path fill="#F9EBB2" d="M4,23h56c0.893,0,1.684-0.601,1.926-1.461c0.24-0.86-0.125-1.785-0.889-2.248l-28-17 C32.725,2.1,32.365,2,32,2c-0.367,0-0.725,0.1-1.037,0.29L2.961,19.291c-0.764,0.463-1.129,1.388-0.888,2.247 C2.315,22.399,3.107,23,4,23z"></path> <g> <path fill="#394240" d="M60,58c0-2.209-1.791-4-4-4h-2V25h6c1.795,0,3.369-1.194,3.852-2.922c0.484-1.728-0.242-3.566-1.775-4.497 l-28-17C33.439,0.193,32.719,0,32,0s-1.438,0.193-2.076,0.581l-28,17c-1.533,0.931-2.26,2.77-1.775,4.497 C0.632,23.806,2.207,25,4,25h6v29H8c-2.209,0-4,1.791-4,4c-2.209,0-4,1.791-4,4v2h64v-2C64,59.791,62.209,58,60,58z M4,23 c-0.893,0-1.685-0.601-1.926-1.462c-0.241-0.859,0.124-1.784,0.888-2.247l28-17.001C31.275,2.1,31.635,2,32,2 c0.367,0,0.725,0.1,1.039,0.291l28,17c0.764,0.463,1.129,1.388,0.887,2.248C61.686,22.399,60.893,23,60,23H4z M52,25v29h-4V25H52z M46,25v29h-4V25H46z M40,25v29h-4V25H40z M34,25v29h-4V25H34z M28,25v29h-4V25H28z M22,25v29h-4V25H22z M16,25v29h-4V25H16z M8,56h48c1.105,0,2,0.896,2,2H6C6,56.896,6.896,56,8,56z M2,62c0-1.104,0.896-2,2-2h56c1.105,0,2,0.896,2,2H2z"></path> <path fill="#394240" d="M32,9c-2.762,0-5,2.238-5,5s2.238,5,5,5s5-2.238,5-5S34.762,9,32,9z M32,17c-1.656,0-3-1.343-3-3 s1.344-3,3-3c1.658,0,3,1.343,3,3S33.658,17,32,17z"></path> </g> <circle fill="#F76D57" cx="32" cy="14" r="3"></circle> </g> </g></svg>
            <a class="navbar-brand" href="./index.php">
            <h1 class="text-light"> Home </h1> 
            </a>
          </div>
        </nav>
        <div class="container divStyle">
        <h2>Transaction Summary</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table roundedCorners  tabletext table-hover table-condensed table-dark" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount Transferred</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transfers";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['fromuser']; ?></td>
            <td><?php echo $rows['touser']; ?></td>
            <td><?php echo $rows['transamount']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>