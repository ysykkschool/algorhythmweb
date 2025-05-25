{\rtf1\ansi\ansicpg1252\cocoartf2822
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php get_header(); ?>\
\
<section class="hero">\
  <h2>Welcome to Algorhythm</h2>\
  <p>\
    Original soundtracks crafted to bring films and advertisements to life with\
    rhythm and emotion.\
  </p>\
</section>\
\
<section>\
  <h2>Featured Works</h2>\
  <div class="portfolio-grid">\
    <?php\
    // Query portfolio custom post type (you can create this later)\
    $args = [\
      'post_type' => 'portfolio',\
      'posts_per_page' => 4,\
    ];\
    $portfolio_query = new WP_Query($args);\
    if ($portfolio_query->have_posts()) :\
      while ($portfolio_query->have_posts()) : $portfolio_query->the_post();\
    ?>\
      <div class="portfolio-item">\
        <?php if (has_post_thumbnail()) : ?>\
          <?php the_post_thumbnail('medium'); ?>\
        <?php else : ?>\
          <img src="<?php echo get_template_directory_uri(); ?>/placeholder.jpg" alt="<?php the_title(); ?>" />\
        <?php endif; ?>\
        <div class="portfolio-content">\
          <h3><?php the_title(); ?></h3>\
          <p><?php the_excerpt(); ?></p>\
        </div>\
      </div>\
    <?php\
      endwhile;\
      wp_reset_postdata();\
    else :\
      echo '<p>No portfolio items found.</p>';\
    endif;\
    ?>\
  </div>\
</section>\
\
<?php get_footer(); ?>\
}