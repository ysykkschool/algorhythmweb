{\rtf1\ansi\ansicpg1252\cocoartf2822
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
function algorhythm_enqueue_scripts() \{\
    // Google Fonts\
    wp_enqueue_style(\
        'algorhythm-google-fonts',\
        'https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap',\
        [],\
        null\
    );\
\
    // Main stylesheet\
    wp_enqueue_style('algorhythm-style', get_stylesheet_uri());\
\}\
add_action('wp_enqueue_scripts', 'algorhythm_enqueue_scripts');\
\
// Register navigation menu\
function algorhythm_register_menus() \{\
    register_nav_menus([\
        'primary' => __('Primary Menu', 'algorhythm'),\
    ]);\
\}\
add_action('after_setup_theme', 'algorhythm_register_menus');\
}