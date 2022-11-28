<?php


if($_GET['dd'] == 'jam'){ 

	$aarrays = array(
		array(
			'name' => 'final test',
			'extra_charge' => '',
			'area_options' => array(
			array(
				'primary_design_area' => 'Green',
				'secondary_design_area' => 'Gold',
				'tertiary_design_area' => 'Red',
				'quaternary_design_area' => 'White',
				'main_images' => '994',
				'primary_images' => '995',
				'secondary_images' => '996',
				'tertiary_images' => '994',
				'quaternary_images' => '995'
			),
			array(
				'primary_design_area' => 'White',
				'secondary_design_area' => 'Red',
				'tertiary_design_area' => 'Gold',
				'quaternary_design_area' => 'Green',
				'main_images' => '995',
				'primary_images' => '994',
				'secondary_images' => '996',
				'tertiary_images' => '995',
				'quaternary_images' => '994'
			),
	        ),	        
    	),
    	array(
	 	'name' => 'White Artboard2',
	        'extra_charge' => '',
	        'area_options' => array(
	            array(
	                'primary_design_area' => 'Red',
	                'secondary_design_area' => 'Gold',
	                'tertiary_design_area' => 'Green',
	                'quaternary_design_area' => '',
	                'main_images' => '994',
	                'primary_images' => '',
	                'secondary_images' => '',
	                'tertiary_images' => '994',
	                'quaternary_images' => ''
	            ),
	            /*array(
	                'primary_design_area' => 'Black22',
	                'secondary_design_area' => 'Black22',
	                'tertiary_design_area' => 'Blue22',
	                'quaternary_design_area' => '',
	                'main_images' => '3048',
	                'primary_images' => '',
	                'secondary_images' => '',
	                'tertiary_images' => '',
	                'quaternary_images' => ''
	            ),*/
	        ),	       
    	),
    );

	$count = 0;
	$post_id = '1027';
	
	foreach ($aarrays as $array) {
		
		$inner_count = 0;

		update_post_meta($post_id, 'art_board_list_'.$count.'_name' , $array['name']);
		update_post_meta($post_id, '_art_board_list_'.$count.'_name' , 'field_5ced13495af11');
					
		update_post_meta($post_id, 'art_board_list_'.$count.'_extra_charge' , $array['extra_charge']);
		update_post_meta($post_id, '_art_board_list_'.$count.'_extra_charge' , 'field_5d0cbd51704ab');

		foreach ($array['area_options'] as $value) {

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_primary_design_area' , $value['primary_design_area']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_primary_design_area' , 'field_5ced15d0c484b');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_secondary_design_area' , $value['secondary_design_area']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_secondary_design_area' , 'field_5ced16461cc3d');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_tertiary_design_area' , $value['tertiary_design_area']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_tertiary_design_area' , 'field_5ced16531cc3e');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_quaternary_design_area' , $value['quaternary_design_area']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_quaternary_design_area' , 'field_5ced165a1cc3f');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_main_images' , $value['main_images']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_main_images' , 'field_5ced16671cc40');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_primary_images' , $value['primary_images']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_primary_images' , 'field_5ced1ad31d9d8');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_secondary_images' , $value['secondary_images']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_secondary_images' , 'field_5ced1aec1d9d9');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_tertiary_images' , $value['tertiary_images']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_tertiary_images' , 'field_5cf0e7177f21a');

			update_post_meta($post_id, 'art_board_list_'.$count.'_area_options_'.$inner_count.'_quaternary_images' , $value['quaternary_images']);
			update_post_meta($post_id, '_art_board_list_'.$count.'_area_options_'.$inner_count.'_quaternary_images' , 'field_5ced165a1cc3f');

			$inner_count++;
		}

		update_post_meta($post_id, 'art_board_list_'.$count.'_area_options' , $inner_count);
		update_post_meta($post_id, '_art_board_list_'.$count.'_area_options' , 'field_5ced134e5af12');
		
		$count++;

		update_post_meta($post_id, 'art_board_list' , $count);
		update_post_meta($post_id, '_art_board_list' , 'field_5ced13385af10');
	}


}


?>
