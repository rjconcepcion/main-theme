<?php

if(!function_exists('img')):
	/**
	 * [img fuction para di kana mga echo ng image tags, test mu nlng]
	 * @param  string $url  [url ng image]
	 * @param  array  $attrs[atribute and value]
	 * @return html tag		[i eecho nya ang image tag]
	 */
	function img( $url, $attrs=[] ) {
		$attrib = "";
		if(!$attrib):
			foreach ($attrs as $key => $attr):
				$attrib .= $key."='".$attr."' ";
			endforeach;
		endif;	
		echo "<img src='".$url."' ".$attrib." />";
	}
endif;

if(!function_exists('get_page_by_template')):
	/**
	 * Get pages by template name
	 * @param  string  $file_name file name of template w/o extension file
	 * @param  boolean $all       if false return the first result
	 * @return array 			  pages details
	 */
	function get_page_by_template( $file_name, $all = true ){

		$pages = get_pages(array(
		    'meta_key' => '_wp_page_template',
		    'meta_value' => "template/$file_name.php",
		    "order"		=>	"ASC"
		));
		if($pages):
			if($all)
				return $pages;
			return $pages[0];
		endif;
		return false;
	}
endif;

if(!function_exists('get_id_by_slug')):
	/**
	 * Get post id using post_name
	 * @param  string $slug
	 * @return int/false
	 */	
	function get_id_by_slug( $slug ){
	    global $wpdb;
	    $mylink = $wpdb->get_row( " SELECT ID FROM $wpdb->posts WHERE post_name = '$slug' " );
	    return $mylink ? $mylink->ID : false;
	}
endif;

if(!function_exists('pagination')):
	/**
	 * Archive page pagination
	 */	
	function pagination(){
		global $wp_query;
		echo paginate_links( array(
			'prev_text'	=>	__('Prev'),
			'next_text'	=>	__('Next'),	
			'base'		=>	str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'current'	=>	max( 1, get_query_var('paged') ),
			'total'		=>	$wp_query->max_num_pages,
			'type'		=>	'list'
		) );	
	}
endif;

if(!function_exists('divide_txt')):
	/**
	 * [divide_txt divide string in two strings depending in space]
	 * @param  string $words 
	 * @return string
	 */
	function divide_txt( $words ){
		$arr_ttl = explode(" ", $words);
		$ttl2 = str_replace($arr_ttl[0], "", $words);
		return [$arr_ttl[0],$ttl2];
	}
endif;