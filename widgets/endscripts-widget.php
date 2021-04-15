<?php

class EndScripts_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'scripts end';
    }

    public function get_title()
    {
        return __('scripts end');
    }

    public function get_icon()
    {
        return 'fas fa-ankh';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <script type='text/javascript'
                src='http://tesharperpoint.wpengine.com/wp-content/themes/harperpoint/js/script.js?ver=7aae0ae48a685a49600c2382a1ef7370'
                id='harper_point_scripts-js'></script>
        <script type='text/javascript' src='http://tesharperpoint.wpengine.com/wp-includes/js/wp-embed.min.js?ver=5.5.3'
                id='wp-embed-js'></script>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <!--paroller.js-->

        <script src="/wp-content/themes/harperpoint/js/jquery.paroller.js"></script>
        <script>

            jQuery(document).ready(function () {
                setTimeout(() => {
                    jQuery('.my-paroller').paroller();
                }, 1000)
            });
        </script>
        <?php
    }

    protected function _content_template()
    {
    }

}
