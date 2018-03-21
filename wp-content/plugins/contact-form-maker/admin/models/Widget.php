<?php

/**
 * Class FMModelWidget_fmc
 */
class FMModelWidget_fmc {
  public function get_gallery_rows_data() {
    global $wpdb;
    $query = 'SELECT * FROM ' . $wpdb->prefix . 'formmaker';
    if ( WDCFM()->is_free && !function_exists('WDFM') ) {
      $query .= (!WDCFM()->is_free ? '' : ' WHERE id' . (WDCFM()->is_free == 1 ? ' NOT ' : ' ') . 'IN (' . (get_option('contact_form_forms', '') != '' ? get_option('contact_form_forms') : 0) . ')');
    }
    $query .= ' order by `title`';
    $rows = $wpdb->get_results($query);

    return $rows;
  }
}
