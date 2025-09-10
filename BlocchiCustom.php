/* registro il blocco */

acf_register_block_type(array(
				'name'				=> 'hero_banner',
				'title'				=> 'Hero banner',
				'description'		=> 'Banner with image ( or a slider ), txt and CTA',
				'render_callback'	=> array( $this, 'acf_blocchi_callback'),
				'category'			=> 'publifarm_singoli',
				'keywords'			=> array( 'link', 'home' ),
				//'supports'			=> ['mode'=> false],
				'mode' => 'edit'
			));
