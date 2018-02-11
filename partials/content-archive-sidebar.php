<div id="archive-sidebar">
  <h3>Archives by date</h3>
  <?php
    global $wpdb;
    $year_prev = null;
    $months = $wpdb->get_results("
      SELECT DISTINCT MONTH(post_date) as month, YEAR(post_date) as year
      FROM $wpdb->posts
      WHERE post_status = 'publish'
        AND post_type = 'post'
      GROUP BY month, year
        ORDER BY post_date DESC");

    if($months){
      foreach($months as $month){
        $year_current = $month->year;

        if(($year_current != $year_prev) && ($year_prev != null)){
          echo '</div></div></div>';
        }

        if($year_current != $year_prev){
          echo '<div class="year-archive"><h4>' . $month->year . ':</h4><div class="post-months row">';
        }

        echo '<div class="col-xs-4"><a href="' . home_url() . '/' . $month->year . '/' . date("m", mktime(0,0,0,$month->month, 1, $month->year)) . '">' . date_i18n("M", mktime( 0,0,0,$month->month, 1, $month->year)) . '</a></div>';

        $year_prev = $year_current;
      }
    }
  ?>
</div>
