<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.php">Home</a></li>
          <li ><a href="about.php">About</a>
         
          </li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="tours.php">Tours</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>

          <?php 

            session_start();
          
                if(isset($_SESSION['user']) && !empty($_SESSION))
                {


              
          
          ?>


<li class="current"><a href="#"><?php echo $_SESSION['user']['firstname']?></a>
            <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="message.php">Message</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>


          

           
           

           

          
          <?php } else{?>

            <li><a href="login.php">Login/Register</a></li>

            <?php } ?>
        </ul>
      </nav>

      <h2>   </h2>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>