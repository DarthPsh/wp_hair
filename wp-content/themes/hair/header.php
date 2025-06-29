<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hair
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="cd13248d9de1ddc4" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="Студия Hair Evgenia - микрокапсульное наращивание волос в Краснодаре. Безопасная запатентованная технология! Многолетнее доверие клиентов.">

	<?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3B8DJ4W11F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3B8DJ4W11F');
</script>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <header id="masthead" class="header">
    <div class="container header__container">
      <button class="header__burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
          <path d="M21.5999 19.6998H2.3999M21.5999 12.4998H2.3999M21.5999 5.2998H2.3999" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
      <div class="header__main">
        <!-- <a class="header__logo" href="/">
          <img src="<?php // echo THEME_DIR_URI . '/assets/img/svg/logo.svg'; ?>" alt="logo">
        </a> -->
        <nav id="site-navigation" class="header__menu">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id' => 'primary-menu',
            )
          );
          ?>
        </nav><!-- #site-navigation -->
      </div>
      <nav class="header__btns">
        <a href="tel:79676716111" class="header__phone btn-o">
          <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/phone.svg'; ?>" alt="phone">
          +7 (967) 671-61-11
        </a>
        <a href="https://wa.me/79676716111" class="header__whatsapp btn-o">
          <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/whatsapp.svg'; ?>" alt="whatsapp">
          <span>Написать в WhatsApp</span>
        </a>
      </nav>
    </div><!-- .site-branding -->
  </header>
