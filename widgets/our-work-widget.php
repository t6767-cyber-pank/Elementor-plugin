<?php

class OurWork_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - our work';
    }

    public function get_title()
    {
        return __('Home - our work');
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

        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Our Work'),
            ]
        );

        $this->add_control(
            'linktitle',
            [
                'label' => __('Link Title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('View all'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/work'),
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="our-work">
            <div class="container">
                <div class="text-center">
                    <a href="<?= $settings["link"]?>">
                        <div class="title-block">
                            <h1 class="harper-pointer-h"><?= $settings["title"]?></h1>
                        </div>
                    </a>
                </div>
                <div class="text-center block-link">
                    <a href="<?= $settings["link"]?>" class="harper-point-link"><?= $settings["linktitle"]?></a>
                </div>
            </div>
        </section>
        <?php
    }

    protected function _content_template()
    {
    }

}
