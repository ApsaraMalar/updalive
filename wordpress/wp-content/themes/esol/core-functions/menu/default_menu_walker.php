<?php 
function esol_page_menu_args( $esol_args ) {
	if ( ! isset( $esol_args['show_home'] ) )
		$esol_args['show_home'] = true;
	return $esol_args;
}
add_filter( 'wp_page_menu_args', 'esol_page_menu_args' );

 
function esol_fallback_page_menu( $esol_args = array() ) {

	$esol_defaults = array('sort_column' => 'menu_order, post_title', 'menu_class' => 'menu', 'echo' => true, 'link_before' => '', 'link_after' => '');
	$esol_args = wp_parse_args( $esol_args, $esol_defaults );
	$esol_args = apply_filters( 'wp_page_menu_args', $esol_args );

	$esol_menu = '';

	$esol_list_args = $esol_args;

	// Show Home in the menu
	if ( ! empty($esol_args['show_home']) ) {
		if ( true === $esol_args['show_home'] || '1' === $esol_args['show_home'] || 1 === $esol_args['show_home'] )
			$esol_text = esc_html__('Home','esol');
		else
			$esol_text = $esol_args['show_home'];
		$esol_class = '';
		if ( is_front_page() && !is_paged() )
			$esol_class = 'class="current_page_item"';
		$esol_menu .= '<li ' . $esol_class . '><a href="' . esc_url(home_url( '/' )) . '" title="' . esc_attr($esol_text) . '">' . $esol_args['link_before'] . $esol_text . $esol_args['link_after'] . '</a></li>';
		// If the front page is a page, add it to the exclude list
		if (get_option('show_on_front') == 'page') {
			if ( !empty( $esol_list_args['exclude'] ) ) {
				$esol_list_args['exclude'] .= ',';
			} else {
				$esol_list_args['exclude'] = '';
			}
			$esol_list_args['exclude'] .= get_option('page_on_front');
		}
	}

	$esol_list_args['echo'] = false;
	$esol_list_args['title_li'] = '';
	$esol_list_args['walker'] = new esol_walker_page_menu;
	$esol_menu .= str_replace( array( "\r", "\n", "\t" ), '', wp_list_pages($esol_list_args) );

	if ( $esol_menu )
		$esol_menu = '<ul class="'. esc_attr($esol_args['menu_class']) .'">' . $esol_menu . '</ul>';

	$esol_menu = '<div class="' . esc_attr($esol_args['container_class']) . '">' . $esol_menu . "</div>\n";
	$esol_menu = apply_filters( 'wp_page_menu', $esol_menu, $esol_args );
	if ( $esol_args['echo'] )
		echo wp_kses_post($esol_menu);
	else
		return $esol_menu;
}
class esol_walker_page_menu extends Walker_Page{
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class='dropdown-menu'>\n";
	}
	function start_el( &$output, $page, $depth=0, $args = array(), $current_page = 0 ) {
		if ( $depth )
			$indent = str_repeat("\t", $depth);
		else
			$indent = '';

		extract($args, EXTR_SKIP);
		$css_class = array('page_item', 'page-item-'.$page->ID);
		if ( !empty($current_page) ) {
			$_current_page = get_post( $current_page );
			if ( in_array( $page->ID, $_current_page->ancestors ) )
				$css_class[] = 'current_page_ancestor';
			if ( $page->ID == $current_page )
				$css_class[] = 'current_page_item';
			elseif ( $_current_page && $page->ID == $_current_page->post_parent )
				$css_class[] = 'current_page_parent';
		} elseif ( $page->ID == get_option('page_for_posts') ) {
			$css_class[] = 'current_page_parent';
		}

		$css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );

		$output .= $indent . '<li class="' . $css_class . '"><a href="' . esc_url(get_permalink($page->ID)) . '">' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';

		if ( !empty($show_date) ) {
			if ( 'modified' == $show_date )
				$time = $page->post_modified;
			else
				$time = $page->post_date;

			$output .= " " . mysql2date($date_format, $time);
		}
	}
}
?>