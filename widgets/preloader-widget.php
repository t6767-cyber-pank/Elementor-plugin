<?php

class Preloader_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'All - preloader';
    }

    public function get_title()
    {
        return __('All - preloader');
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
        <div class="preloader" id="preloader">
            <span>H</span>
        </div>
        <?php
    }

    protected function _content_template()
    {
    }

}
