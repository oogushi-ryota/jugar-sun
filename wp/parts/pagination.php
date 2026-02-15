<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
	'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'current'   => max( 1, get_query_var('paged') ),
	'total'     => $wp_query->max_num_pages,
	'type'      => 'array',
	'end_size'  => 1,
	'mid_size'  => 1,
	'prev_text' => '',
  'next_text' => '',
) );

if ( is_array( $pages ) ) {
	echo '<nav class="p-news-archive__pagination" aria-label="ページネーション">';
	foreach ( $pages as $page ) {
			echo $page;
	}
	echo '</nav>';
}
?>