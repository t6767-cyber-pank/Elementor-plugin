<?php

class SliderBlock_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - slider block';
    }

    public function get_title()
    {
        return __('Home - slider block');
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
        <section>
            <div id="slider-block"></div>
        </section>
        <?php
    }

    protected function _content_template()
    {
    }

}
