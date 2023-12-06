<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

   <style>
      body {
         padding-left:0px;
         padding:100px;
      }
      .popup {
            display: block;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f1f1f1;
            padding: 50px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 2rem;
            color: red;
        }
        .popup-close {
         cursor: pointer;
         position: absolute;
         top: 10px;
         right: 10px;
         font-size: 18px;
         color: #555;
      }
   </style>
</head>
<body>
   <?php
   session_start();
      if (isset($_SESSION['invalidLogin']) && ($_SESSION['invalidLogin'])) {
         echo "<div class='popup'>";
         echo "Invalid login credentials";
         echo "<span class='popup-close' onclick='closePopup()'>&times;</span>";
         echo "</div>";
         unset($_SESSION['invalidLogin']);
      }
   ?>

<section class="form-container">
   <form id="loginForm" action="login.php" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <p>Your User ID <span>*</span></p>
      <input type="text" name="userID" placeholder="Enter your userID" required maxlength="10" class="box">
      <p>Your Password <span>*</span></p>
      <input type="password" name="password" placeholder="Enter Your Password" required maxlength="20" class="box">
      <input type="submit" value="login" name="submit" class="btn">
   </form>
</section>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

   
</body>
</html>