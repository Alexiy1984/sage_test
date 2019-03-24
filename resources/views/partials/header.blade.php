<?php
global $wp;
$link = home_url($wp->request)
?>
<header class="banner">
  <div class="home-page__header"> 
    <div class="brand-container">
      <a class="navbar-brand" href="<?= $link ?>">
        <img class="brand-img" src="@asset('images/LongView_LogoType_header.jpg')">
      </a>
    </div>  

    <div class="menu-container d-flex align-items-center justify-content-end">
      @include('partials.hamburger-button')
    </div>  
  </div>
</header>
