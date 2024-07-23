<?php
   /**
    * The template for displaying the header
    *
    * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
    *
    * @package HelloElementor
    */
   
   if ( ! defined( 'ABSPATH' ) ) {
   	exit; // Exit if accessed directly.
   }
   ?>
<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1.0' ); ?>
      <meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <?php wp_head(); ?>
      <?php 
         $reqVars = explode("/",$_SERVER['REQUEST_URI']);
         $req_lang = "es";
         if($reqVars[1] == "en"){
          $req_lang = "en";
         }
        ?>
      <script>
        jQuery(document).ready(function($) {
             window.beAcceptedCookiePolicies = ["necessary", "marketing", "analytics"];
        })
         
      </script>
      <script src="https://wis.upperbooking.com/hotelb3virrey1/be-panel?locale=<?php echo $req_lang; ?>" async></script>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-TFTMWZ9');
      </script>
      <!-- End Google Tag Manager -->
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105760313-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-105760313-1');
      </script>
   </head>
   <body <?php body_class(); ?>>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFTMWZ9"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      
      <header class="header">
         <div class="header__social">
            <?php get_template_part('template-parts/header/content', 'social-top') ?>
         </div>
         <div class="header__sticky" data-sticky>
            <div class="header__wrapper">
               <?php get_template_part('template-parts/header/content', 'logo') ?>
               <?php get_template_part('template-parts/header/content', 'reserva') ?>
               <div class="header__right">
                  <?php get_template_part('template-parts/header/content', 'translate') ?>
                  <button class="header__right-menu" type="button" aria-label="open menu" data-open-menu>
                     <span class="line line-top"></span>
                     <span class="line line-center"></span>
                     <span class="line line-bottom"></span>
                  </button>
               </div>
            </div>
         </div>
         <?php get_template_part('template-parts/header/content', 'header') ?>
      </header>