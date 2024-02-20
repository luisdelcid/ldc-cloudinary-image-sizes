<?php namespace LDC_WP_Cloudinary;

final class Loader {

	/**
	 * @return array
	 */
	public function fl_builder_photo_sizes_select($sizes){

		return $sizes;
	}

	/**
	 * @return array|bool
	 */
	public function image_downsize($downsize, $id, $size){

		return $downsize;
	}

	/**
	 * @return array
	 */
	public function image_size_names_choose($size_names){

		return $size_names;
	}

    /**
	 * @return void
	 */
	public function load(){
        add_filter('fl_builder_photo_sizes_select', [$this, 'fl_builder_photo_sizes_select']);
    	add_filter('image_downsize', [$this, 'image_downsize'], 10, 3);
    	add_filter('image_size_names_choose', [$this, 'image_size_names_choose']);
    }

}
