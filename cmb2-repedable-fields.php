<?php
// add_action( 'cmb2_init', 'cmb2_add_metabox_one' );
// function cmb2_add_metabox_one() {

// 	$prefix = '_firebox_';

// 	$cmb = new_cmb2_box( array(
// 		'id'           => $prefix . 'custom_meta_box_1',
// 		'title'        => __( 'custom_meta_box_1', 'firebox' ),
// 		'object_types' => array( 'post' ),
// 		'context'      => 'normal',
// 		'priority'     => 'high',
// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'camera_model', 'firebox' ),
// 		'id' => $prefix . 'camera_model',
// 		'type' => 'text',
// 		'default' => 'canon',
// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'camera_location', 'firebox' ),
// 		'id' => $prefix . 'camera_location',
// 		'type' => 'text',
// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'image_date', 'firebox' ),
// 		'id' => $prefix . 'image_date',
// 		'type' => 'text_date',
// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'license', 'firebox' ),
// 		'id' => $prefix . 'license',
// 		'type' => 'checkbox',
// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'license_information', 'firebox' ),
// 		'id' => $prefix . 'license_information',
// 		'type' => 'textarea',
// 		'attributes' => array(
// 			'data-conditional-id' => $prefix . 'license',
// 		),

// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'cmb2_image_feild', 'cmb2' ),
// 		'id' => $prefix . 'cmb2_image_feild',
// 		'type' => 'file',
// 	) );
	
// 	$cmb->add_field( array(
// 	'name' => 'oEmbed',
// 	'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
// 	'id'   => 'wiki_test_embed',
// 	'type' => 'oembed',
// ) );

// }

// //* cmb2 pricing Table creation *//

// function cmb2_add_pricing_table() {

// 	$prefix = '_firebox_';

// 	$cmb = new_cmb2_box( array(
// 		'id'           => $prefix . 'pricing_table',
// 		'title'        => __( 'pricing table', 'firebox' ),
// 		'object_types' => array( 'page' ),
// 		'context'      => 'normal',
// 		'priority'     => 'default',
// 	) );

// 	$group = $cmb->add_field( array(
// 		'name' => __( 'pricing_table', 'firebox' ),
// 		'id' => $prefix . 'pricing_table',
// 		'type' => 'group',
// 	) );

// 	$cmb->add_group_field( 	$group, array(
// 		'name' => __( 'pricing_title', 'firebox' ),
// 		'id' => $prefix . 'pricing_title',
// 		'type' => 'text',
// 	) );

// 		$cmb->add_group_field( 	$group, array(
// 		'name' => __( 'pricing_option', 'firebox' ),
// 		'id' => $prefix . 'pricing_option',
// 		'type' => 'text',
// 		'repeatable' => true,
// 	) );

// 	$cmb->add_group_field( 	$group, array(
// 		'name' => __( 'price', 'firebox' ),
// 		'id' => $prefix . 'price',
// 		'type' => 'text',
// 	) );


// }
// add_action( 'cmb2_init', 'cmb2_add_pricing_table' );


//* Cmb Two Service Section Created *//

function cmb2_add_services() {

	$prefix = '_firebox_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'icon_and_content',
		'title'        => __( 'icon_and_content', 'firebox' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$service = $cmb->add_field( array(
		'id' => $prefix . 'icon_and_content',
		'type' => 'group',
	) );

	$cmb->add_group_field( $service, array(
		'id' => $prefix . 'icon',
		'type' => 'text',
	) );

	$cmb->add_group_field( $service, array(
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $service, array(
		'id' => $prefix . 'content',
		'type' => 'wysiwyg',
	) );

}

add_action( 'cmb2_init', 'cmb2_add_services' );


// outfut area//
 <!-- This area dynamick start -->
                <?php

            $firbox_icon_area_id = get_post_meta( get_the_ID(), "_firebox_icon_and_content", true );

            foreach( $firbox_icon_area_id as $firbox_icon_area ) :
                 $firebox_icon = $firbox_icon_area['_firebox_icon'];
                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
                        <i class="fa <?php echo esc_attr( $firebox_icon ); ?>"></i>
                        <h3><?php echo esc_html( $firbox_icon_area['_firebox_title'] ); ?></h3>
                        <p><?php echo esc_html( $firbox_icon_area['_firebox_content'] ); ?>.</p>
                    </div>
                </div><!--col-md-4 -->
            <?php endforeach; ?>