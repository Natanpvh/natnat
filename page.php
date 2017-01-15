<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>
<!-- ------------NAV----------- -->
<?php get_template_part('navmenu') ?>

<div class="container">
<div class="row box-contet">
<div class="col-sm-8 ">
    <div class="previl-post box-border">
        <div class="col-sm-12 col-md-12">
            <!-- Inicia o conteudo single -->
            <div class="col-sm-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <h1 class="post-titulo"><?php the_title(); ?></h1>
                        
                        <div class="data-post">
                            <i class="glyphicon glyphicon-time"></i> <?php the_time('d/M/Y H:m:s') ?>
                        </div>
                        <hr>
                    </div>
                </div>
                
                <div class="col-sm-12 caption">
                    <div class="con-text"> 
                        <?php the_content(); ?> 

                    </div>
                    <div class="col-md-12">
                        <!-- Iconos Social -->
                        <div class="row">
                            <hr>									
                            <div class="social-likes" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>">
                                <div class="facebook" title="Share link on Facebook">Facebook</div>
                                <div class="twitter" data-via="<?php the_title(); ?>" data-related="<?php the_excerpt(); ?>" title="Share link on Twitter">Twitter</div>
                                <div class="plusone" title="Share link on Google+">Google+</div>
                                <div class="pinterest" title="Share image on Pinterest" data-media="http://lorempixel.com/400/250/">Pinterest</div>
                            </div>
                        </div>
                        <!--/ Fim Iconos Social -->
                        
                    </div>
                </div>
            </div>
        <?php endwhile;
    else:
        ?>
        <div class="artigo">
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas n�o foram encontrados artigos.</p>
        </div>            
<?php endif; ?>
    <!--/Fim previl post-->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
