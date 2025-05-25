{\rtf1\ansi\ansicpg1252\cocoartf2822
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
/*\
Template Name: Contact\
*/\
get_header();\
?>\
\
<section>\
  <h2>Contact Us</h2>\
  <form action="https://formspree.io/f/your-form-id" method="POST">\
    <label for="name">Name</label>\
    <input type="text" id="name" name="name" required />\
\
    <label for="email">Email</label>\
    <input type="email" id="email" name="_replyto" required />\
\
    <label for="message">Message</label>\
    <textarea id="message" name="message" rows="5" required></textarea>\
\
    <button type="submit" class="btn">Send Message</button>\
  </form>\
</section>\
\
<?php get_footer(); ?>\
}