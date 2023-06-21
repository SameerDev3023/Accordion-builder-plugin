<?php

class WPAB_ShortCode
{

  public function __construct()
  {
    add_shortcode('wpab', array($this, 'WPAB_Shortcode_Func'));
    wp_enqueue_style('bootstrap-cdn', WPAB_PLUGIN_DIR_URL . 'assets/min/bootstrap5.css', array(), '1.0', 'all');
    wp_enqueue_style('Accordion-Style', WPAB_PLUGIN_DIR_URL . 'assets/css/accordion-builder.css', array(), '1.0', 'all');

    add_action('wp_enqueue_scripts', array($this, 'WPAB_Enqueue_Script_Func'));
  

  }


  public function WPAB_Enqueue_Script_Func()
  {
    wp_enqueue_script('Accordion-js', WPAB_PLUGIN_DIR_URL . 'assets/js/accordion-builder.js', '', '1.0', true);
    wp_enqueue_script('Bootstrap-js', WPAB_PLUGIN_DIR_URL . 'assets/js/bootstrap.js', '', '1.1', true);

  }
  public function WPAB_Shortcode_Func($atts, $content = null)
  {
    $atts = shortcode_atts(
      array(
        'id' => '',
        'class' => '',
      ),
      $atts,
      'wpab'
    );
    $id = $atts['id'];
    $accordionTitle1 = get_post_meta($id, 'fAccordiont', true);
    $accordionTitle2 = get_post_meta($id, 'sAccordiont', true);
    $accordionTitle3 = get_post_meta($id, 'tAccordiont', true);
    $accordionTitle4 = get_post_meta($id, 'foAccordiont', true);
    $accordionContent1 = get_post_meta($id, 'fa_content', true);
    $accordionContent2 = get_post_meta($id, 'sa_content', true);
    $accordionContent3 = get_post_meta($id, 'ta_content', true);
    $accordionContent4 = get_post_meta($id, 'fou_content', true);
    $bgColor = get_post_meta($id,'Acc_back_color',true);
    $FontColor = get_post_meta($id,'Acc_font_color',true);
    $AccordionHtml = '
        <div class="container mt-5">
          <div class="accordion-container">
            <div class="accordion-body bg-dark text-white  m-3 rounded-3"style="color:'.$FontColor.'!important;background-color:'.$bgColor.'!important">
              <div class="row py-4 m-2 rounded-4">
                <div class="content-wrapper col-md-11 col-sm-10 col-10">
                '.$accordionTitle1.'
                </div>
                <div
                  class="icon-wrapper bg-danger pb-1 text-center rounded col-md-1 col-sm-2 col-2"
                  style="color:'.$bgColor.'!important;background-color:'.$FontColor.'!important" >
                  <i class="acc-text" aria-hidden="true"></i>
                </div>
                <div class="row mt-3 " >
                  <div class="para-container col-md-12">
                    <p class="accordion-p h6 p-1"  id="acc-para1">
                     '.$accordionContent1.'
                    </p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="accordion-body bg-dark text-white  m-3 rounded-3" style="color:'.$FontColor.'!important;background-color:'.$bgColor.'!important">
                <div class="row py-4 m-2 rounded-4">
                  <div class="content-wrapper col-md-11 col-sm-10 col-10">
                  '.$accordionTitle2.'
                  </div>
                  <div
                    class="icon-wrapper bg-danger pb-1 text-center rounded col-md-1 col-sm-2 col-2"
                    style="color:'.$bgColor.'!important;background-color:'.$FontColor.'!important">
                    <i class="acc-text" aria-hidden="true"></i>
                  </div>
                  <div class="row mt-3 " >
                    <div class="para-container col-md-12">
                      <p class="accordion-p h6 p-1"  id="acc-para2">
                      '.$accordionContent2.'
                      </p>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="accordion-body bg-dark text-white  m-3 rounded-3" style="color:'.$FontColor.'!important;background-color:'.$bgColor.'!important">
                <div class="row py-4 m-2 rounded-4">
                  <div class="content-wrapper col-md-11 col-sm-10 col-10">
                  '.$accordionTitle3.'
                  </div>
                  <div
                    class="icon-wrapper bg-danger pb-1 text-center rounded col-md-1 col-sm-2 col-2"
                    style="color:'.$bgColor.'!important;background-color:'.$FontColor.'!important">
                    <i class="acc-text" aria-hidden="true"></i>
                  </div>
                  <div class="row mt-3 " >
                    <div class="para-container  col-md-12">
                      <p class="accordion-p h6 p-1"  id="acc-para3">
                      '.$accordionContent3.'
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body bg-dark text-white  m-3 rounded-3" style="color:'.$FontColor.'!important;background-color:'.$bgColor.'!important">
                <div class="row py-4 m-2 rounded-4">
                  <div class="content-wrapper col-md-11 col-sm-10 col-10">
                  '.$accordionTitle4.'
                  </div>
                  <div
                    class="icon-wrapper bg-danger pb-1 text-center rounded col-md-1 col-sm-2 col-2"
                    style="color:'.$bgColor.'!important;background-color:'.$FontColor.'!important">
                    <i class="acc-text" aria-hidden="true"></i>
                  </div>
                  <div class="row mt-3 " >
                    <div class="para-container  col-md-12">
                      <p class="accordion-p h6 p-1"  id="acc-para4">
                      '.$accordionContent4.'
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        ';
    return $AccordionHtml;
  }

}
$WPAB_ShortCode = new WPAB_ShortCode;

?>