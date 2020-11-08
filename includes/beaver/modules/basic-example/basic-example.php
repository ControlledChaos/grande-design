<?php
/**
 * Basic example Beaver Builder module
 *
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @package    Grande_Design
 * @subpackage Includes\Beaver
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Basic example Beaver Builder module
 *
 * @since  1.0.0
 * @access public
 */
class GGD_Basic_Example_Module extends FLBuilderModule {

    /**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

        parent::__construct( [
            'name'          => __( 'Basic Example', 'grande-design' ),
            'description'   => __( 'An basic example for coding new modules.', 'grande-design' ),
            'category'      => __( 'Example Modules', 'grande-design' ),
            'dir'           => GGD_PATH . 'includes/beaver/modules/basic-example/',
            'url'           => GGD_URL . 'includes/beaver/modules/basic-example/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ] );

    }
}

/**
 * Register the module and its form settings.
 *
 * @since  1.0.0
 * @access public
 * @return array Returns the array of module fields.
 */
FLBuilder::register_module( 'GGD_Basic_Example_Module', [
    'general' => [ // Tab
        'title'    => __( 'General', 'grande-design' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title' => __( 'Section Title', 'grande-design' ), // Section Title
                'fields' => [ // Section Fields
                    'text_field' => [
                        'type'        => 'text',
                        'label'       => __( 'Text Field', 'grande-design' ),
                        'default'     => '',
                        'maxlength'   => '2',
                        'size'        => '3',
                        'placeholder' => '10',
                        'class'       => 'my-css-class',
                        'description' => 'px',
                        'help'        => __( 'Put your help inf here.', 'grande-design' ),
                        'preview'     => [
                            'type'     => 'css',
                            'selector' => '.fl-example-text',
                            'property' => 'font-size',
                            'unit'     => 'px'
                        ]
                    ],
                    'textarea_field' => [
                        'type'        => 'textarea',
                        'label'       => __( 'Textarea Field', 'grande-design' ),
                        'default'     => '',
                        'placeholder' => __( 'Placeholder Text', 'grande-design' ),
                        'rows'        => '6',
                        'preview'     => [
                            'type'     => 'text',
                            'selector' => '.fl-example-text'
                        ]
                    ],
                    'color_field' => [
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'grande-design' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'preview'       => [
                            'type'     => 'css',
                            'selector' => '.fl-example-text',
                            'property' => 'color'
                        ]
                    ],
                    'custom_field_example' => [
                        'type'    => 'ggd-custom-beaver-field',
                        'label'   => __( 'Custom Field Example', 'grande-design' ),
                        'default' => ''
                    ],
                ]
            ]
        ]
    ]
] );