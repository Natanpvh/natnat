<?php
/**
 * Implementação do slide customizado para o site
 *
 * @package WordPress
 * @subpackage NatNat
 * @since Nat Nat 1.0
 */
$number = 0;
$args = array(
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'destaque',
);
$sliders_home = new WP_Query($args);
?>
<div class="parallax">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php while ($sliders_home->have_posts()) : $sliders_home->the_post(); ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $number++; ?>"></li>				
            <?php endwhile; ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
                <?php while ($sliders_home->have_posts()) : $sliders_home->the_post(); ?>
                    <div class="item ">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('imagem-do-slide');
                    } else {
                        echo '<img src="' . get_template_directory() . '/images/thumb-default.jpg" alt="<?php the_permalink(); ?>">';
                    }
                    ?>
                        <div class="carousel-caption box-pev">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>	
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>