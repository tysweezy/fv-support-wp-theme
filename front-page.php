<?php
/**
 * Template Name: Front Page
 *
 */
get_header(); ?>

<div class="banner">
  <h1><?php bloginfo('description'); ?></h1>
</div>

    <div class="items">
      <div class="row">
        <a href="http://support.dev/survey-theme-request/" class="col col-4" id="survey-request"><span class="item-title">Survey Theme Request</span></a>
        <a href="http://support.dev/kinesis-request/" class="col col-4" id="kinesis"><span class="item-title">Kinesis Community Request</span></a>
        <a href="http://support.dev/survey-themes-2/" class="col col-4" id="survey-themes"><span class="item-title">Survey Themes</span></a>
      </div>

      <div class="row">
        <a href="http://support.dev/survey-style-guide/" class="col col-4" id="survey-style"><span class="item-title">Survey Theme Style Guide</span></a>
        <a href="http://support.dev/blog-2/" class="col col-4" id="blog"><span class="item-title">Blog</span></a>
      </div>
    </div>

<?php get_footer(); ?>