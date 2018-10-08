<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package future-medicine-theme
 */

get_header();
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search-page">

                            <?php if(have_posts()) : ?>

                            <header class="page-header">
                                <h1 class="page-title">
                                    <?php
                                    /* translators: %s: search query. */
                                    printf(esc_html__('Search Results for: %s', 'future-medicine-theme'), '<span>' . get_search_query() . '</span>');
                                    ?>
                                </h1>
                            </header><!-- .page-header -->
                            <div class="inner-topic-past-isues"><ul>
                                <?php
                                /* Start the Loop */
                                while(have_posts()) :
                                    the_post();

                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    AgenzziaGetTemplatePart('template-parts/archive/archive-page-past-issues-article');
                                    //get_template_part('template-parts/content', 'search');

                                endwhile;
                                echo '</ul></div>';
                                the_posts_navigation();

                                else :

                                    get_template_part('template-parts/content', 'none');

                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
