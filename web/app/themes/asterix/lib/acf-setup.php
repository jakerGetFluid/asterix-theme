<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5aa0304dd46ca',
	'title' => 'Flexible Content',
	'fields' => array(
		array(
			'key' => 'field_5aa0305d807f7',
			'label' => 'Flexible Content',
			'name' => 'subtext_flexible_content',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
  
        //WYSIWYG Columns
				'5aa0306233123' => array(
					'key' => '5aa0306233123',
					'name' => 'subtext_wysiwyg_columns',
					'label' => 'WYSIWYG Columns',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5aa03082807f8',
							'label' => 'Column Configuration',
							'name' => 'subtext_column_configuration',
							'type' => 'radio',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'Full-Width' => 'Full-Width',
								'1/2 + 1/2' => '1/2 + 1/2',
								'1/3 + 2/3' => '1/3 + 2/3',
								'2/3 + 1/3' => '2/3 + 1/3',
							),
							'allow_null' => 0,
							'other_choice' => 0,
							'save_other_choice' => 0,
							'default_value' => '',
							'layout' => 'vertical',
							'return_format' => 'value',
						),
					),
					'min' => '',
					'max' => '',
				),
  
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>