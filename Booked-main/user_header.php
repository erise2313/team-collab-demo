<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fa-solid fa-xmark" onclick="this.parentElement.remove();"></i>
        </div>
    ';    
    } 
}
?>
<header class="user_header">
  <div class="header_1">
    <div class="user_flex">
      <div class="logo_cont">
        <img src="book_logo.png" alt="https://img.freepik.com/free-vector/branding-identity-corporate-vector-logo-b-design_460848-9977.jpg?t=st=1746978983~exp=1746982583~hmac=a72d7234cc8a65994bc2a58965ef6c9b5c775b3168789f9ab5a97a9b8740e649&w=740">

        <a href="home.php" class="book_logo">Booked</a>
      </div>


      <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="shop.php">Shop</a>
        <a href="contact.php">Contact</a>
        <a href="orders.php">Orders</a>
      </nav>

      <div class="last_part">
        <div class="loginorreg">
          <p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
        </div>

        <div class="icons">
        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
          <a class="fa-solid fa-magnifying-glass" href="search_page.php"></a>

          <div class="fas fa-user" id="user_btn"></div>
          <?php
          $select_cart_number=mysqli_query($conn,"SELECT * FROM `cart` where user_id='$user_id'") or die('query failed');
          $cart_row_number=mysqli_num_rows($select_cart_number);
          ?>

          <a href="cart.php"><i class="fas fa-shopping-cart"></i><span class="quantity">(<?php echo $cart_row_number?>)</span></a>

          <div class="fas fa-bars" id="user_menu_btn"></div>

        </div>

      </div>
      <div class="header_acc_box">
        <p>Username : <span><?php echo $_SESSION['user_name'];?></span></p>
        <p>Email : <span><?php echo $_SESSION['user_email'];?></span></p>
        <a href="logout.php" class="delete-btn">Logout</a>
      </div>

    </div>

  </div>

</header>