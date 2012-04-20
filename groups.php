<div class="grid_12 nalista">
    <h2 class="grid_2"><span>O que está</span> <span class="s2">rolando</span> <span class="s3">na lista?</span></h2>
<?php
    include_once(ABSPATH . WPINC . '/rss.php');
    wp_rss('http://groups.google.com/group/phpms/feed/rss_v2_0_msgs.xml?num=5', '5');
?>
  </div>
  <div class="clear"></div>