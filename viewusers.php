<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer funds</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style type="text/css">

    body{
        background-image:url("1.png");
    }
    .logo-text, .nav-link1{
      color: white;
      padding-top: 15px;
    }
    .list-home{
      padding-left: 850px;
    }
    .nav-link1:hover{
      color: blue;
    }
    .container{
      padding-top: 30px;
      text-align: center;
      /* background-color: #8bb5f5; */
      background-size: cover;
      /* background-image:url("money.jpg"); */

    }
    .button {
      background-color: #d35a55;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      border-radius: 5px;
    }

    .button:hover{
      color: #F8F9F5;
    }
    .roundedCorner{
      border-radius:20px;
      padding:15px;
    }
    </style>


</head>
<body>
<?php
    require 'config.php';
    $query = "SELECT * FROM customers";
    $result = mysqli_query($conn,$query);
?>

<nav class="navbar bg-dark">
          <div class="container-fluid">
            <svg class="d-inline-block align-text-top" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect x="18" y="25" fill="#506C7F" width="4" height="29"></rect> <rect x="30" y="25" fill="#506C7F" width="4" height="29"></rect> <rect x="42" y="25" fill="#506C7F" width="4" height="29"></rect> </g> <g> <rect x="48" y="25" fill="#B4CCB9" width="4" height="29"></rect> <rect x="24" y="25" fill="#B4CCB9" width="4" height="29"></rect> <rect x="36" y="25" fill="#B4CCB9" width="4" height="29"></rect> <rect x="12" y="25" fill="#B4CCB9" width="4" height="29"></rect> </g> <g> <path fill="#F9EBB2" d="M8,56c-1.104,0-2,0.896-2,2h52c0-1.104-0.895-2-2-2H8z"></path> <path fill="#F9EBB2" d="M60,60H4c-1.104,0-2,0.896-2,2h60C62,60.896,61.105,60,60,60z"></path> </g> <path fill="#F9EBB2" d="M4,23h56c0.893,0,1.684-0.601,1.926-1.461c0.24-0.86-0.125-1.785-0.889-2.248l-28-17 C32.725,2.1,32.365,2,32,2c-0.367,0-0.725,0.1-1.037,0.29L2.961,19.291c-0.764,0.463-1.129,1.388-0.888,2.247 C2.315,22.399,3.107,23,4,23z"></path> <g> <path fill="#394240" d="M60,58c0-2.209-1.791-4-4-4h-2V25h6c1.795,0,3.369-1.194,3.852-2.922c0.484-1.728-0.242-3.566-1.775-4.497 l-28-17C33.439,0.193,32.719,0,32,0s-1.438,0.193-2.076,0.581l-28,17c-1.533,0.931-2.26,2.77-1.775,4.497 C0.632,23.806,2.207,25,4,25h6v29H8c-2.209,0-4,1.791-4,4c-2.209,0-4,1.791-4,4v2h64v-2C64,59.791,62.209,58,60,58z M4,23 c-0.893,0-1.685-0.601-1.926-1.462c-0.241-0.859,0.124-1.784,0.888-2.247l28-17.001C31.275,2.1,31.635,2,32,2 c0.367,0,0.725,0.1,1.039,0.291l28,17c0.764,0.463,1.129,1.388,0.887,2.248C61.686,22.399,60.893,23,60,23H4z M52,25v29h-4V25H52z M46,25v29h-4V25H46z M40,25v29h-4V25H40z M34,25v29h-4V25H34z M28,25v29h-4V25H28z M22,25v29h-4V25H22z M16,25v29h-4V25H16z M8,56h48c1.105,0,2,0.896,2,2H6C6,56.896,6.896,56,8,56z M2,62c0-1.104,0.896-2,2-2h56c1.105,0,2,0.896,2,2H2z"></path> <path fill="#394240" d="M32,9c-2.762,0-5,2.238-5,5s2.238,5,5,5s5-2.238,5-5S34.762,9,32,9z M32,17c-1.656,0-3-1.343-3-3 s1.344-3,3-3c1.658,0,3,1.343,3,3S33.658,17,32,17z"></path> </g> <circle fill="#F76D57" cx="32" cy="14" r="3"></circle> </g> </g></svg>
            <a class="navbar-brand" href="./index.php">
            <h1 class="text-light"> Home </h1> 
            </a>
          </div>
        </nav> 
    <div class="container divStyle">
        <h2>Select a customer you wish to transfer funds from.</h2>
        <br>

            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table roundedCorner tabletext table-sm table-condensed table-dark">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Current Balance</th>
                            <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['amount']?></td>
                        <td><a href="users.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>