<?php 

$wp_customize->add_section('team_background', array(
    'title' => __('Team Image'),
    'priority' => 1
));

$wp_customize->add_setting('team_background_image', array(
    'capability' => 'edit_theme_options',
    // 'default' => __('We\'d love to hear from you.')
));

$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'team_background', array(
    'label'      => __( 'Upload a logo', 'theme_name' ),
    'section'    => 'team_background',
    'settings'   => 'team_background_image',
    'context'    => 'your_setting_context' 
    ))
);

?>
