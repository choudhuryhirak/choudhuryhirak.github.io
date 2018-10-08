<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mirador
 */

get_header();
?>

	<div id="primary" class="content-area" style="background-image: url(wp-content/uploads/2018/08/room2.png); background-size: contain; background-position:
	right;
	background-repeat: no-repeat; width: 100%;">
		<main id="main" class="site-main">

			<section class="error-404 not-found" style="background-color: white;
    padding: 5%;
    width: 35%;">



					<header class="page-header">
						<h1 class="page-title" style="font-family: Playfair Display serif;
    font-size: 90px; font-weight: 900; position: absolute; left: 5%; top: 5%; background: white;
    padding: 1%;"><?php esc_html_e( 'Looks like you&rsquo;re lost', 'mirador' ); ?></h1>
					</header><!-- .page-header -->

				<div class="page-content d-flex justify-content-center" style="padding-top: 55%;">
					<p>
					<?/php esc_html_e( 'Looks Like you\'re lost.., 'mirador' ); ?></p>


					<?php/*
								get_search_form();
								the_widget( 'WP_Widget_Recent_Posts' );
						*/?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'mirador' ); ?></h2>
							<ul>
								<?php
									wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
