{\rtf1\ansi\ansicpg1252\cocoartf2822
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
/*\
Template Name: Music Preview\
*/\
get_header();\
?>\
\
<section>\
  <h2>Music Preview</h2>\
  <ul class="music-list">\
    <?php\
    // Query music custom post type or posts with audio meta (you can create this later)\
    $args = [\
      'post_type' => 'music',\
      'posts_per_page' => -1,\
    ];\
    $music_query = new WP_Query($args);\
    if ($music_query->have_posts()) :\
      while ($music_query->have_posts()) : $music_query->the_post();\
        $audio_url = get_post_meta(get_the_ID(), 'audio_url', true);\
    ?>\
      <li>\
        <h4><?php the_title(); ?></h4>\
        <?php if ($audio_url) : ?>\
          <?php echo wp_audio_shortcode(['src' => esc_url($audio_url)]); ?>\
        <?php else : ?>\
          <p>No audio available.</p>\
        <?php endif; ?>\
      </li>\
    <?php\
      endwhile;\
      wp_reset_postdata();\
    else :\
      echo '<p>No music tracks found.</p>';\
    endif;\
    ?>\
  </ul>\
</section>\
\
<?php get_footer(); ?>\
}