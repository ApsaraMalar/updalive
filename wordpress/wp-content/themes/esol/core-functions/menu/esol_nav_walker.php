<?php
/** nav-menu-walker.php */
class esol_nav_walker extends Walker_Nav_Menu {	
	function start_lvl( &$esol_output, $esol_depth = 0, $esol_args = array() ) {
		$esol_indent = str_repeat("\t", $esol_depth);
		$esol_output .= "\n$esol_indent<ul class=\"dropdown-menu\">\n";
	}
	function start_el( &$esol_output, $item, $esol_depth = 0, $esol_args = array(), $id = 0 ) {
		$esol_indent = ( $esol_depth ) ? str_repeat( "\t", $esol_depth ) : '';

		$class_names = $esol_value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		if ($esol_args->has_children && $esol_depth > 0) {
			$classes[] = 'dropdown-submenu';
		} else if($esol_args->has_children && $esol_depth === 0) {
			$classes[] = 'dropdown';
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $esol_args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $esol_args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$esol_output .= $esol_indent . '<li' . $id . $esol_value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($esol_args->has_children) 	    ? ' data-toggle="dropdown" data-target="#" class="dropdown-toggle "' : '';
			
		$item_output = $esol_args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $esol_args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $esol_args->link_after;
		$item_output .= ($esol_args->has_children && $esol_depth == 0) ? '<b class="caret"></b></a>' : '</a>';
		$item_output .= $esol_args->after;

		$esol_output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $esol_depth, $esol_args );
	}
	function display_element( $element, &$children_elements, $max_depth, $esol_depth=0, $esol_args, &$esol_output ) {

		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];

		//display this element
		if ( is_array( $esol_args[0] ) )
			$esol_args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $esol_args[0] ) ) 
			$esol_args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
		$cb_args = array_merge( array(&$esol_output, $element, $esol_depth), $esol_args);
		call_user_func_array(array($this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $esol_depth+1 ) && isset( $children_elements[$id]) ) {

			foreach( $children_elements[ $id ] as $child ){

				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$esol_output, $esol_depth), $esol_args);
					call_user_func_array(array($this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $esol_depth + 1, $esol_args, $esol_output );
			}
			unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$esol_output, $esol_depth), $esol_args);
			call_user_func_array(array($this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$esol_output, $element, $esol_depth), $esol_args);
		call_user_func_array(array($this, 'end_el'), $cb_args);
	}
}
function esol_nav_menu_css_class( $classes ) {
	if ( in_array('current-menu-item', $classes ) OR in_array( 'current-menu-ancestor', $classes ) )
		$classes[]	=	'active';

	return $classes;
}
add_filter( 'nav_menu_css_class', 'esol_nav_menu_css_class' );
?>