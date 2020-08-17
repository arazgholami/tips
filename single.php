<?php get_header(); ?>
    <div class="container" id="content">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="row" <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <div id="title" class="col-md-2">
                <a href="<?php the_permalink() ?>" class="post-titles"><h2><?php the_title(); ?></h2></a>
                <span id="share" class="btn-group">
                  <a href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title()?>','Share','width=500,height=260')" id="sc-fb" class="btn"><i class="fa fa-facebook"></i></a>
                  <a href="javascript:window.open('https://twitter.com/intent/tweet?original_referer=&related=anywhereTheJavascriptAPI&text=<?php the_title();?>&hashtags=<?php bloginfo('name') ?>&tw_p=tweetbutton&url=<?php the_permalink()?>','Tweet','width=500,height=260')" id="sc-tw" type="button" class="btn"><i class="fa fa-twitter"></i></a>
                  <a href="javascript:window.open('https://plus.google.com/share?url=<?php the_permalink() ?>','Share','width=500,height=260')" id="sc-plus" type="button" class="btn"><i class="fa fa-google-plus"></i></a>
               </span>
            </div>
            <div id="context" class="col-md-10 entry">
                <?php the_content(); ?>
                <?php wp_link_pages('before=<br>صفحه‌ها:&after=&next_or_number=number&pagelink=%'); ?>
                <!-- Tags -->
                <ul id="tags">
                <?php the_tags('<li class="fa fa-slack"><span>','</span></li><li class="fa fa-slack"><span>','</span></li>'); ?>
            </div>
        </article>
      <?php endwhile; ?>
        <span id="content-navlinks">
         <?php posts_nav_link(' ', 'نوشته‌های جدیدتر', ' '); ?><br>
         <?php posts_nav_link(' ', ' ', 'نوشته‌های قدیمی‌تر'); ?>
        </span>
      <?php else : ?>
           <span id="no-post">
              <h2>خطای 404 - چیزی پیدا نشد.<br><span>اونطوری نگا نکن بابا، یا پاک شده یا لینکی که باهاش اومدی مورد داره.</span></h2><br>
           </span>
       <?php endif; ?>
    </div> <!-- /container -->
<?php get_footer(); ?>