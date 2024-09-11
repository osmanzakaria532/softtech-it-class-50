<!DOCTYPE html>
<html <?php language_attributes(); ?> > <!-- dynamically add language -->
  <head>
    <meta charset="utf-8" />
    <!-- get_template_directory_uri(); -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css" />  -->
    <!-- added stylesheet dynamically in functions.php -->

    <!-- <title>An Ocean of Sky</title> -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="page">
      <div class="topNaviagationLink"><a href="#">Home</a></div>
      <div class="topNaviagationLink"><a href="#">About</a></div>
      <div class="topNaviagationLink"><a href="#">Portfolio</a></div>
      <div class="topNaviagationLink"><a href="#">Services</a></div>
      <div class="topNaviagationLink"><a href="#">Contact</a></div>
    </div>
    <div id="mainPicture">
      <div class="picture" style="background-image: url('<?php header_image(); ?>');">
        <div id="headerTitle"><?php bloginfo('name'); ?></div>
        <!-- description ta add hosse na kn -->
        <div id="headerSubtext"><?php bloginfo('description'); ?></div>
      </div>
    </div>
    <div class="contentBox">
      <div class="innerBox">
        <div class="contentTitle">The Title of an Article</div>

        <div class="contentText">
          <p>You may use this template on any site, anywhere, for free just please leave the link back to me in the footer. This template validates XHTML Strict 1.0, CSS Validates as well; enjoy :) </p>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer mi. Vivamus sit amet neque vitae sapien bibendum sodales. Curabitur elementum. Duis imperdiet. Donec eleifend porttitor sapien. Praesent leo. Quisque auctor velit sed tellus. Suspendisse potenti. Aenean laoreet imperdiet nunc. Donec commodo suscipit dolor. Aenean nibh. Sed id odio. Aliquam lobortis risus ut felis. Sed vehicula pellentesque quam.</p>
          <br />
          <p>Vestibulum augue quam, interdum id, congue semper, convallis non, velit. Quisque augue tortor, tristique ac, scelerisque eget, aliquam id, sem. Aenean lorem. Fusce velit nibh, dapibus quis, laoreet nec, porta a, dui. Nullam ac urna. Proin eget elit. Nunc scelerisque venenatis urna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce congue, turpis ut commodo mattis, pede erat fringilla tellus, pulvinar suscipit odio lorem sed pede.</p>
        </div>

        <div class="contentTitle">So Many Titles, So Little Time.</div>
        
        <div class="contentText">
          <p>You may use this template on any site, anywhere, for free just please leave the link back to me in the footer. This template validates XHTML Strict 1.0, CSS Validates as well; enjoy :) </p>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer mi. Vivamus sit amet neque vitae sapien bibendum sodales. Curabitur elementum. Duis imperdiet. Donec eleifend porttitor sapien. Praesent leo. Quisque auctor velit sed tellus. Suspendisse potenti. Aenean laoreet imperdiet nunc. Donec commodo suscipit dolor. Aenean nibh. Sed id odio. Aliquam lobortis risus ut felis. Sed vehicula pellentesque quam.</p>
          <br />
          <p>Vestibulum augue quam, interdum id, congue semper, convallis non, velit. Quisque augue tortor, tristique ac, scelerisque eget, aliquam id, sem. Aenean lorem. Fusce velit nibh, dapibus quis, laoreet nec, porta a, dui. Nullam ac urna. Proin eget elit. Nunc scelerisque venenatis urna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce congue, turpis ut commodo mattis, pede erat fringilla tellus, pulvinar suscipit odio lorem sed pede.</p>
        </div>
        <div class="contentTitle">Yet Another One!</div>
        <div class="contentText">
          <p>You may use this template on any site, anywhere, for free just please leave the link back to me in the footer. This template validates XHTML Strict 1.0, CSS Validates as well; enjoy :) </p>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer mi. Vivamus sit amet neque vitae sapien bibendum sodales. Curabitur elementum. Duis imperdiet. Donec eleifend porttitor sapien. Praesent leo. Quisque auctor velit sed tellus. Suspendisse potenti. Aenean laoreet imperdiet nunc. Donec commodo suscipit dolor. Aenean nibh. Sed id odio. Aliquam lobortis risus ut felis. Sed vehicula pellentesque quam.</p>
          <br />
          <p>Vestibulum augue quam, interdum id, congue semper, convallis non, velit. Quisque augue tortor, tristique ac, scelerisque eget, aliquam id, sem. Aenean lorem. Fusce velit nibh, dapibus quis, laoreet nec, porta a, dui. Nullam ac urna. Proin eget elit. Nunc scelerisque venenatis urna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce congue, turpis ut commodo mattis, pede erat fringilla tellus, pulvinar suscipit odio lorem sed pede.</p>
        </div>
      </div>
    </div>
    <div id="footer">
      <a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">
        bryant smith
      </a>
      <a href="http://validator.w3.org/check?uri=referer">valid xhtml</a>
      <a href="http://jigsaw.w3.org/css-validator">valid css</a>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
