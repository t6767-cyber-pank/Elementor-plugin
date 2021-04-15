<?php

class HelloHarper_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - hello harper';
    }

    public function get_title()
    {
        return __('Home - hello harper');
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
                'default' => __('Hello, we’re <br>Harper Point'),
            ]
        );

        $this->add_control(
            'linktitle',
            [
                'label' => __('Link title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('About use'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __( 'default: Content'),
                'default' => __( 'For over 15 years, our two-person power team has been producing vibrant, creative, eye-catching photos for brands. You name it, we’ve shot it—and we’re as passionate now as we’ve ever been.'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/about'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/Product-photography-by-harper-point--032-Harper-Point-Sol-Water-2016-07-25-0148.png",
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/Product-photography-by-harper-point--Good-Brew-Coffee-2020-09-0001.gif",
                ],
            ]
        );

        $this->add_control(
            'image3',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/Product-photography-by-harper-pointProduct-Photography.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="hello-harper-point">
            <div class="hello-harper-point-group"></div>
            <div class="help-harder-block">
                <div class="col-4" id="hello-harper-point-img1">
                    <div class="img-block">
                        <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
                    </div>
                </div>
                <div class="col-2" id="hello-harper-point-img2">
                    <div class="img-block">
                        <img class="harper-pointer-img" src="<?= $settings["image2"]["url"] ?>">
                    </div>
                </div>
                <div class="col-6" id="hello-harper-point-img3">
                    <div class="img-block">
                        <img class="harper-pointer-img" src="<?= $settings["image3"]["url"] ?>">
                    </div>
                </div>
            </div>

            <div class="color-green">
                <div class="text-center">
                    <div class="title-block">
                        <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                    </div>
                </div>
                <div class="text-center pl-5 pr-5 p-lg-0">
                    <div class="text-block">
                        <span class="harper-pointer-p"><?= $settings["content"] ?></span>
                    </div>
                </div>
                <div class="text-center">
                    <a href="<?= $settings["link"] ?>" class="harper-point-link"><?= $settings["linktitle"] ?></a>
                </div>

            </div>
        </section>


        <?php
    }

    protected function _content_template()
    {
    }

}
