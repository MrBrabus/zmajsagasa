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
        <li style="--clr:#00ade1" class="<?php echo (basename($_SERVER['PHP_SELF']) == "index.php") ? "active" : "" ?>"><a href="index.php" data-text="&nbsp;POČETNA">&nbsp;POČETNA&nbsp;</a></li>
        <li style="--clr:#ff6493" class="<?php echo (basename($_SERVER['PHP_SELF']) == "about.php") ? "active" : "" ?>"><a href="about-us.php" data-text="&nbsp;O&nbsp;NAMA">&nbsp;O&nbsp;NAMA&nbsp;</a></li>
        <li style="--clr:#ffdd1c" class="<?php echo (basename($_SERVER['PHP_SELF']) == "choose.php") ? "active" : "" ?>"><a href="choose.php" data-text="&nbsp;IZABERI&nbsp;KNJIGU">&nbsp;IZABERI&nbsp;KNJIGU&nbsp;</a></li>
        <li style="--clr:#00dc82" class="<?php echo (basename($_SERVER['PHP_SELF']) == "faq.php") ? "active" : "" ?>"><a href="faq.php" data-text="&nbsp;NAJČEŠĆA&nbsp;PITANJA">&nbsp;NAJČEŠĆA&nbsp;PITANJA&nbsp;</a></li>
        <li style="--clr:#ff9901" class="<?php echo (basename($_SERVER['PHP_SELF']) == "contact.php") ? "active" : "" ?>"><a href="contact.php" data-text="&nbsp;KONTAKT">&nbsp;KONTAKT&nbsp;</a></li>
        <li><i class="fa-regular fa-cart-shopping-fast"></i></li>
        <li class="lang"><span><a href="index.php">LAT</a></span><span><a href="index-crl.php">ЋИР</a></span></li>
      </ul>

      <div class="icon-main menu-btn-main">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
</header>