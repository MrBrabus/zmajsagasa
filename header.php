<header>
   <nav class="navbar-main">
    <div class="content-main">
      <div class="logo-main">
        <a href="index.php"><img src="img/content/Logo.png" alt="Personalizovane knjige za decu - Zmajca Gasa"></a> 
      </div>
      <ul class="menu-list">
        <div class="icon-main cancel-btn-main">
          <i class="fas fa-times"></i>
        </div>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "index.php") ? "active" : "" ?>"><a href="index.php">POČETNA</a></li>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "about.php") ? "active" : "" ?>"><a href="about-us.php">O NAMA</a></li>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "choose.php") ? "active" : "" ?>"><a href="choose.php">IZABERI KNJIGU</a></li>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "faq.php") ? "active" : "" ?>"><a href="faq.php">NAJČEŠĆA PITANJA</a></li>
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "contact.php") ? "active" : "" ?>"><a href="contact.php">KONTAKT</a></li>
      </ul>
      <div class="icon-main menu-btn-main">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
</header>