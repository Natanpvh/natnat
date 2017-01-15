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
                        <div class="catedory"><?php echo the_category_exclude(", ","destaque"); ?></div>
                        <h1 class="post-titulo"><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                        <div class="data-post">
                            <i class="glyphicon glyphicon-time"></i> <?php the_time('d/M/Y H:m:s') ?>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <figure class="thumbnail">                               
                        <?php the_post_thumbnail() ?>
                        <figcaption class="aut-foto"><i class="fa fa-camera-retro" aria-hidden="true"></i> Natalia S. de Oliveira</figcaption>
                    </figure>
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
                        <div class="row">
                            <hr>
                            <div class="col-sm-12">
                                <header>
                                    <h3>
                                   <?php
                                   /*
                                   * Lista o numero de comentarios
                                   */ 
                                   comments_popup_link('Seja o primeiro a comentar!', '(1) Coment&aacute;rio', '%'); ?>

                                     <strong>COMENT&Aacute;RIOS</strong></h3>
                                </header>
                                <div class="col-sm-12 box-line">
                                    <div class="barra"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="well well-lg">
                                                <div class="media1">
                                                    <div class="media-body">
                                                       <?php comment_form( $args, $post_id ); ?>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- well-sm -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <section class="comments">
                                   
                                    <?php
                                        $comment_array = array_reverse(get_approved_comments($wp_query->post->ID));
                                        $count = 1;
                                        ?>
                                        <?php if ($comment_array) { ?>
                                         <?php foreach($comment_array as $comment){ ?>
                                        <?php if ($count++ <= 3) { ?>
                                    <article class="comment">
                                        <a class="comment-img" href="<?php comment_author_link() ?>" title="<?php comment_author( ) ;?>" >
                                           <?php  echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
                                        </a>
                                        <div class="comment-body">
                                            <div class="text">
                                                <?php comment_excerpt(); ?>	                                                

                                            </div>
                                            <p class="attribution">Por <a href="#non"><?php comment_author( ) ;?></a> em <?php comment_date('d/m/Y') ?> - <?php comment_time('G:i') ?></p>
                                        </div>
                                    </article>
                                     <?php } ?>
                                        <?php } ?>
                                        </ul>
                                        <?php } else { ?>
                                        <?php } ?>

                                        
                              </section>
                            </div>
                        </div>
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
