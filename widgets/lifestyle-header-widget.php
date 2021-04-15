<?php

class Lifestyle_Header_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Lifestyle - header';
    }

    public function get_title()
    {
        return __('Lifestyle - header');
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
                'default' => __('Lifestyle'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('It’s not always enough to just photograph your product—bringing humans into your photos is what helps your current and potential customers connect with your brand. With the help of carefully selected props, locations and models, we pop life into your photos.'),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/lifestyle_page.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point-header before_1 lifestyle-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 harper-point-title">
                        <div class="title-block">
                            <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-10 offset-2 harper-point-title-img">
                                <div class="img-block">
                                    <img class="harper-pointer-img" src="<?= $settings["image"]["url"] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="color-green harper-point-green">
                <div class="container">
                    <div class="row">
                        <div class="col-10 col-lg-7 offset-2">
                            <div class="text-block">
                                <span class="harper-pointer-p"><?= $settings["content"] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
    }

    protected function _content_template()
    {
    }

}
