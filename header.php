<?php
/**
 * O modelo para exibir o cabeçalho
 *
 * Exibe todo o elemento principal e tudo até a div "site-content".
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage NatNat
 * @since Nat Nat 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>  class="no-js">
    <!--<![endif]-->

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
        <style type="text/css">
            .pro {
                width: 1%;
                min-width: 20px
            }
        </style>
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <!-- ------------ Header----------- -->
        <header id="topo" class="hfeed site top-sr stilo2">
            <div class="hfeed site top-sr stilo2">
                <div class="container header-area ">
                    <div class="site-header col-sm-12">
                        <h1>
                            <a href="#" class="logo"></a>
                        </h1>
                    </div>
                </div>
        </header>
        <!-- ------------NAV----------- -->
        <?php
        get_template_part('template-part/navmenu')?>