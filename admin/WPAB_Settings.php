<?php


/**
 * Define the metabox and field configurations.
 */
function cmb2_WPAB_metaboxes()
{

    $cmb = new_cmb2_box(array(
        'id' => 'generate_shortcode1',
        'title' => __('Accordion  Settings', 'cmb2'),
        'object_types' => array('accordion_builders'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));
    $cmb->add_field(array(
        'name' => 'Accordion First Title<span style="color:red;">*</span>',
        'id' => 'fAccordiont',
        'type' => 'text',
    )); 

    $cmb->add_field(array(
        'name' => 'First Accordion Content',
        'id' => 'fa_content',
        'type' => 'textarea',

    ));
    
    $cmb->add_field(array(
        'name' => 'Accordion Second Title<span style="color:red;">*</span>',
        'id' => 'sAccordiont',
        'type' => 'text',
        'placeholder' => 'Enter your Second Tab Title',
    )); 

    $cmb->add_field(array(
        'name' => 'Second Accordion Content',
        'id' => 'sa_content',
        'type' => 'textarea',

    ));
    $cmb->add_field(array(
        'name' => 'Accordion Third Title<span style="color:red;">*</span>',
        'id' => 'tAccordiont',
        'type' => 'text',
        'placeholder' => 'Enter your Third Tab Title',
    )); 
    $cmb->add_field(array(
        'name' => 'Third Accordion Content ',
        'id' => 'ta_content',
        'type' => 'textarea',

    ));
   
    $cmb->add_field(array(
        'name' => 'Accordion Fourth Title<span style="color:red;">*</span>',
        'id' => 'foAccordiont',
        'type' => 'text',
        'placeholder' => 'Enter your Third Tab Title',
    )); 
    $cmb->add_field(array(
        'name' => 'fourth Accordion Content ',
        'id' => 'fou_content',
        'type' => 'textarea',

    ));
    $cmb->add_field(array(
        'name' => 'Background Color',
        'desc' => 'Select background color',
        'id' => 'Acc_back_color',
        'type' => 'colorpicker',
        'placeholder' => '#eee',
    ));

    $cmb->add_field(array(
        'name' => 'Font Color',
        'desc' => 'Select font color',
        'id' => 'Acc_font_color',
        'type' => 'colorpicker',
        'placeholder' => '#000',
    ));

   

}


