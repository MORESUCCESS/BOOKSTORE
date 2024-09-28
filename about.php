<?php
include 'config.php';
session_start();

$user_id=$_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">

</head>
<body>
  
<?php
include 'user_header.php';
?>
<section class="about_cont">
    <img src="main-bg.jpeg" alt="">
    <div class="about_descript">
      <h2>Reasons for choosing us ?</h2>
      <p>Welcome to our online bookstore, where passion meets knowledge! We curate a diverse selection of books, ensuring every reader finds their ultimate literary match. Enjoy personalized recommendations, competitive pricing, and fast shipping. Join our community of book lovers and delve into a world of stories waiting to be discovered!</p>
    </div>
  </section>

  <section class="questions_cont">
    <div class="questions">
    <h2>Do You Have Any Queries?</h2>
    <p>We’d love to hear from you! Reach out with questions, feedback, or suggestions. Your thoughts help us create a vibrant community. Contact us via email or visit our store!</p>
    <button class="product_btn" onclick="window.location.href='contact.php'">Contact Us</button>
    </div>
    
  </section>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>