<?php

class Work_custom_right_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Work - custom right';
    }

    public function get_title()
    {
        return __('Work - custom right');
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
                'default' => __('Client <br>Name'),
            ]
        );

        $this->add_control(
            'linktitle',
            [
                'label' => __('Header'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('View project'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Content'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __( 'default: Content'),
                'default' => __( 'Product <br>Lifestyle'),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/client_name.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="client-name">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="client-name-text-block right">
                            <div class="client-name-title">
                                <div class="title-block">
                                    <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                                </div>
                            </div>
                            <div class="client-name-text">
                                <div class="text-block">
                                    <span class="harper-pointer-p"><?= $settings["content"] ?></span>
                                </div>
                            </div>
                            <div class="client-name-link">
                                <a href="<?= $settings["link"]?>" class="harper-point-link"><?= $settings["linktitle"]?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image"]["url"] ?>">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </section>
        <?php
    }

    protected function _content_template()
    {
    }

}
