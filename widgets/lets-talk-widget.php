<?php

class LetsTalk_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'All - lets talk';
    }

    public function get_title()
    {
        return __('lets talk');
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
                'placeholder' => __('default: ModalTitle'),
                'default' => __('Let’s<br>talk'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/contact'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/lets-talk.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="lets-talk">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-lg-6">
                        <div class="img-center" id="lets-talk-title">
                            <a href="<?= $settings["link"]?>">
                                <div class="title-block">
                                    <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-lg-6">
                        <div class="img-center" id="lets-talk-img">
                            <div class="img-block">
                                <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
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
