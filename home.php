<?php
/**
 * home.php
 *
 * The search results page
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/
 * @since BigBooty 1.0.0
 */
?>

<?php get_header(); ?>

<div class="jumbotron">
    <div class="container">

        <h1><?php wp_title(''); ?></h1>

        <p>Lorum ipsum dolor sit amet, no nam viris feugiat</p>
    
    </div>
</div>

<div class="container">   
    <div class="row">
        <div class="col-md-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">

            <h3><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h3>
            <p>
                By <?php the_author_posts_link(); ?> 
                on <?php echo the_time('l, F jS, Y');?>
                in <?php the_category( ', ' ); ?>.
                <span class="pull-right">
                    <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                </span>
            </p>            

            <?php the_excerpt(); ?>

            </article>

            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

            <?php endif; ?>

        </div>

    <?php get_sidebar( 'blog' ); ?>

    </div>
</div>

<?php get_footer(); ?>
