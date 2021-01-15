<div class="responsive-navbar hide-desktop show-mobile">

  <!-- <div id="blank-navbar"></div> -->

  <?php 
    if(is_woocommerce() || is_page(array('commander', 'mon-compte', 'panier'))) { ?>
      <a id="cart-logo-navbar" href="/wordpress/panier">
        <img src="<?php bloginfo( 'template_directory' );?>/images/shop/PANIER-orange.png">
      </a><?php
    } else { ?>
      <div id="blank-navbar"></div>
    <?php }
  ?>

  <a id="logo-mobile" href="/wordpress"><img src="<?php bloginfo( 'template_directory' );?>/images/header/logo-header.png"></a>
 
  <div class="dropdown">
    <div id="nav-icon3" class="dropbtn" onclick="openMenu()">
      <span class="dropbtn-span"></span>
      <span class="dropbtn-span"></span>
      <span class="dropbtn-span"></span>
      <span class="dropbtn-span"></span>
    </div>

  <div class="dropdown-content" id="myDropdown">
    <a href="/wordpress/boutique">Boutique</a>

    <?php if(is_woocommerce() || is_page(array('commander', 'mon-compte', 'panier'))) { ?>
      <a href="/wordpress/mon-compte">Mon Compte</a>
    <?php } ?>

    <a href="/wordpress/cours">Cours</a>
    <a href="/wordpress/qui-suis-je">Qui-suis-je ?</a>
    <a href="/wordpress/blog">Blog</a>
    <a href="/wordpress/contact">Contact</a>
  </div>
  </div> 
</div>