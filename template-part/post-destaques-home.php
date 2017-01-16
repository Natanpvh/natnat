<article class="previl-post box-border">
    <header class="col-sm-8 col-md-5">
        <figure class="thumbnail">	
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(array(282, 211)); ?></a>
        </figure>
    </header>
    <footer class="caption">
        <div class="catedory">							
            <?php echo the_category_exclude(", ", "destaque"); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="prev-titulo"><h3><?php echo the_title(); ?></h3></a> 
        <?php echo excerpt('35'); ?>
        <div class="col-md-7">
            <div class="data-post">
                <i class="glyphicon glyphicon-time"></i> <?php the_date(); ?>
            </div>
        </div>
        <hr>
    </footer>
</article>