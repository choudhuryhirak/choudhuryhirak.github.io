<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future-medicine-theme
 */

$postIndex = 0;

$randomPostsArgs = array(
    'post_type'      => 'post',
    'orderby'        => 'rand',
    'posts_per_page' => 3,
);

$randomPosts = get_posts($randomPostsArgs);

get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <?php if(have_posts()) : ?>

                            <div class="inner-topic-explanation">
                                <?php
                                the_archive_title('<h4 class="page-title">', '</h4>');
                                // the_archive_description('<div class="explanation-content">', '</div>');
                                ?>
                            </div>
                            <?php
                            /* Start the Loop */
                            
                            while(have_posts()) :the_post();
                                if($postIndex === 0){
                                    echo '<div class="inner-topic-article-top">';
                                    AgenzziaGetTemplatePart('template-parts/archive/archive-page-top-article');
                                    echo '<div class="articles-array"><ul>';
                                }

                                if($postIndex > 0 && $postIndex < 5){
                                    AgenzziaGetTemplatePart('template-parts/archive/archive-page-horizontal-array-article');

                                }
                                if($postIndex === 4){
                                    echo '</ul></div></div><div class="inner-topic-past-isues"><h4>Past Issues</h4><ul>';
                                }

                                if($postIndex > 4){

                                    AgenzziaGetTemplatePart('template-parts/archive/archive-page-past-issues-article');

                                }
                                $postIndex++;

                            endwhile;
                            if($postIndex <= 9){
                                echo '</ul></div></div>'; // not enough articles to draw read more link need at least 9 articles 
                            }
                            else {
                                echo '</ul><a href="javascript:void(0)" class="inner-topic-read-more-link">Read More </a></div>';

                            }

                            //the_posts_navigation();

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                        <div class="inner-topic-interested-in">
                            <h3>You may be interested in:</h3>
                            <div class="articles">
                                <ul>
                                    <?php
                                        foreach($randomPosts as $post){
                                            AgenzziaGetTemplatePart('template-parts/archive/archive-random-post', ['current'=>$post]);
                                        }

                                    ?>
                                </ul>
                            </div>
                        </div>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div> <!--col-->
        </div> <!--row-->
    </div> <!--container-->
<?php
//get_sidebar();
get_footer();
