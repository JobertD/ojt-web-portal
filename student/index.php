<?php
   require("../database/database.php");
   include "../login/requireSession.php";

   $userId = $_SESSION['userID'];
   $statement = $db->prepare("SELECT firstName, lastName FROM student WHERE userId = ?");
   $statement->bind_param("i", $userId);
   $statement->execute();
   $result = $statement->get_result();
   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $fullName = $row['firstName'] . ' ' . $row['lastName'];
   } else {
      $fullName = "No data found";
   }

   $statement->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="index.html" class="logo">OJT Portal</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="../../images/pic-1.jpg" class="image" alt="">
         <h3 class="name"><?php echo $fullName ?></h3>
         <p class="role">Intern</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="logout.php" class="option-btn">logout</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="../images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $fullName ?></h3>
      <p class="role">Intern</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.html"><i class="fa-solid fa-briefcase"></i><span>Intership Details</span></a>
      <a href="companies.html"><i class="fa-regular fa-clipboard"></i><span>Reports</span></a>
      <!--
      <a href="user.html"><i class="fas fa-chalkboard-user"></i><span>Network</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
      -->
      <a href="logout.php"><i class="fa-solid fa-door-open"></i><span>Logout</span></a>
   </nav>

</div>

<section class="home-grid">

   <h1 class="heading">Dashboard</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">Analytics</h3>
         <p class="likes">Total Likes : <span>25</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p class="likes">Total connections : <span>12</span></p>
         <a href="#" class="inline-btn">view connections</a>
         <p class="likes">Interactions : <span>4</span></p>
         <a href="#" class="inline-btn">view interactions</a>
      </div>

      <div class="box">
         <h3 class="title">Soft Skills</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Hard Skills</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Requirements List</h3>
         <p class="tutor">Connect with people in your field!</p>
         <a href="user.html" class="inline-btn">get started</a>
      </div>

   </div>

</section>



<section class="companies">

   <h1 class="heading">Available Companies</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="../images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Hev Abi</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-1.png" alt="">
            <span>JPmorgan</span>
         </div>
         <h3 class="title">Web Developer</h3>
         <a class="inline-btn">Apply</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="../images/pic-3.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-2.png" alt="">
            <span>JPmorgan</span>
         </div>
         <h3 class="title">Web Developer</h3>
         <a class="inline-btn">Apply</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="../images/pic-4.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-3.png" alt="">
            <span>JPmorgan</span>
         </div>
         <h3 class="title">Web Developer</h3>
         <a class="inline-btn">Apply</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="../images/pic-5.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-4.png" alt="">
            <span>JPmorgan</span>
         </div>
         <h3 class="title">Web Developer</h3>
         <a class="inline-btn">Apply</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="../images/pic-6.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-5.png" alt="">
            <span>JPmorgan</span>
         </div>
         <h3 class="title">Web Developer</h3>
         <a class="inline-btn">Apply</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="../images/pic-7.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="../images/thumb-6.png" alt="">
            <span>JPmorgan</span>
         </div>
         <h3 class="title">Web Developer</h3>
         <a class="inline-btn">Apply</a>
      </div>

   </div>

   <div class="more-btn">
      <a href="companies.html" class="inline-option-btn">view all</a>
   </div>

</section>















<footer class="footer">

   &copy; Copyright @ 2023 by <span>The Croods</span> | All rights reserved!

</footer>

<!-- custom js file link  -->
<script src="../js/script.js"></script>


   
</body>
</html>