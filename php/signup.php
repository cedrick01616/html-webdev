<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4IRL1NE</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville&family=Oswald&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/3fde168df0.js" crossorigin="anonymous"></script>

</head>
<body>
  <div class="header">
    <nav>
        <a href="index.html"><img src="./Assets/Images/logo.png" alt="Logo png"></a>
          <div class="nav-bar">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="">Flight</a></li>
              <li><a href="">Hotel</a></li>
              <li><a href="">Order</a></li>
              <li><a href="">FAQ</a></li>
              <div class="nav2-bar">
                <li><a href="">Sign In</a></li>
                <li><a href="">Register</a></li>
              </div>
            </ul>
          </div>
          
        </div>
    </nav>
  </div>  

  <div class="home-text">
    <h1>Book Your Tickets Now!</h1>
    <p>Discover multiple flight options & discounts to a variety of  locations worldwide</p>
  <div class="container">
    <nav>
      <div class="icons"></div>
        <ul>
          <li class="flight"><a href="">
          <i class="fa-solid fa-plane"></i>
            Flight
            </a>
          </li>
          <li class="hotel"><a href="">
          <i class="fa-solid fa-house"></i> 
          Hotel
          </a>
          </li>
        </ul>
        </nav>
      </div>
    </div>
  </div>

</body>
</html>
