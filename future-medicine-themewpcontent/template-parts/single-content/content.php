<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 15:43
 */
$articleId = get_the_ID();
$authorData = '';
$authorFirstName = get_the_author_meta('first_name');
$authorLastName = get_the_author_meta('last_name');
if($authorFirstName && $authorLastName){
    $authorData = $authorFirstName.' '.$authorLastName;
}
else{
    $authorData = get_the_author();
}

$parentCategory  = get_the_category($articleId);
$randomPostsArgs = array(
    'post_type'      => 'post',
    'orderby'        => 'rand',
    'posts_per_page' => 4,
);

$randomPosts = get_posts($randomPostsArgs);

?>

<div class="inner-page-head-section">
  <div class="category-title"><?php echo $parentCategory[0]->name ?></div>
  <h1><?php echo get_the_title() ?></h1>
</div>
<div class="inner-page article-data">
    <!-- <div class="author-data">
        <div class="author-image"><img src="<?php //echo get_template_directory_uri() ?>/img/user-1.jpg" alt="author name"></div>
        <div class="author-name"><?php //echo $authorData ?></div>
    </div> -->
    <div class="date-data"><?php echo get_the_date('m-d-Y') ?></div>
    <div class="home-link"><a href="<?php echo home_url() ?>">Back to home</a></div>
</div>
<div class="articles-wrapper inner-page">
    <div class="main-article-container">
        <div class="article-container">
            <div class="share-block">
                
                <ul>
                  <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook." target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  
                  <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a></li>   
                  <li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  
                  <li><a href="mailto:?subject=Check this out&BODY=<?php the_title(); ?> --- I found this article interesting and thought of sharing it with you. Check it out: <?php the_permalink();?>"><i class="fas fa-envelope"></i></a></li>
                  
                  <li><a href="https://api.whatsapp.com/send?text=<?php the_permalink();?>&amp;title=<?php the_title(); ?>" title="Share on Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                  
                  <li><a href="javascript:window.print()"><i class="fas fa-print"></i></a></li>
                </ul>

            </div>
            <div class="article">
                <div class="article-image <?php echo $parentCategory[0]->slug ?>">
                    <div class="image-wrapper">
                        <div class="image-content background-image-listener-cover"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" class="background-image-source"></div>
                    </div>
                </div>
                <div class="article-content-wrapper">
                    <div class="article-summary">
                        <h4>Short Description</h4>
                        <div><?php the_excerpt(); ?></div>
                    </div>
                    <div class="article-content single-page-article simplebar" id="myElement">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-articles-container">
        <div class="related-articles">
            <h3>Related Articles</h3>
            <ul>
                <?php foreach($randomPosts as $randomPost){
                    AgenzziaGetTemplatePart('template-parts/single-content/random-post',['current'=>$randomPost]);
                } ?>
            </ul>
        </div>
    </div>
</div>

<!-- Code For User Comments -->

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://future-medicine.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


