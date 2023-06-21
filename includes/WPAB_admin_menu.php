<?php

class WPAB_Admin_menu{


    public function __construct(){
        add_action('add_meta_boxes', array($this, 'WPAB_Register_meta_box'));

        add_action('admin_menu',array($this,'WPAB_Admin_Menu_Func'));
        add_action('init',array($this,'WPAB_Register_Post'));
        add_action('admin_init', array($this, 'ws_ct_settings'));
        require_once WPAB_PLUGIN_DIR_PATH . 'admin/WPAB_Settings.php';

        add_action( 'cmb2_admin_init', 'cmb2_WPAB_metaboxes' );
    }
    public function WPAB_Register_meta_box(){
        add_meta_box('WPAB_shortcode', 'Accordion Shortcode', array($this, 'WPAB_shortcode_accordion'), 'accordion_builders', 'side', 'high');

    }
    function WPAB_shortcode_accordion()
    {
        $id = get_the_ID();
        $dynamic_attr = '';
        esc_html_e('Paste this shortcode anywhere in Page/Post.', 'ws-custom-tabs');

        $element_type = get_post_meta($id, 'pp_type', true);
        $dynamic_attr .= "[wpab id=\"{$id}\"";
        $dynamic_attr .= ']';
        ?>
        <input style="width:100%" onClick="this.select();" type="text" class="regular-small" name="my_meta_box_text"
            id="my_meta_box_text" value="<?php echo esc_attr(htmlentities($dynamic_attr)); ?>" readonly />
        <div>
        </div>
        <?php
    }
    public function WPAB_Admin_Menu_Func(){
        add_menu_page(
            'WPAB_Accordion_Builder',
            'Accordion Builder',
            'manage_options',
            'WPAB_Accordion_Builder',
            array($this,'WPAB_Add_Menu_Func'),
           'dashicons-menu',
            5
        );

        add_submenu_page(
            'WPAB_Accordion_Builder',
            '↳ Add Accordion',
            '↳ Add Accordion',
            'manage_options',
            'post-new.php?post_type=accordion_builders',
                false,
                10
        );
        add_submenu_page(
            'WPAB_Accordion_Builder',
            '↳ Edit Accordion',
            '↳ Edit Accordion',
            'manage_options',
            'edit.php?post_type=accordion_builders',
            false,
            17
        );
    }

    public function WPAB_Register_Post()
    {
        $args = array(
            'labels' => array(
                'name' => 'Add Accordion',
                'singular_name' => 'Add Accordion',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'WPAB_Post_Type'),
            'publicly_queryable' => true,
            'show_in_menu' => 'WPAB_Accordion_Builder',
            'supports' => array('title', 'thumbnail'), // Exclude 'editor' from supports
        );
        register_post_type('Accordion_Builders', $args);
    }
}
$WPAB_Admin_menu = new WPAB_Admin_menu;
?>