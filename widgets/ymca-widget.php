<?php

class Ymca_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - ymca';
    }

    public function get_title()
    {
        return __('Home - ymca');
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
                'default' => __('YMCA'),
            ]
        );

        $this->add_control(
            'linktitle',
            [
                'label' => __('Header'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: ModalTitle'),
                'default' => __('View project'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Lifestyle <br>Architecture'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/ymca'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/ymca.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="ymca">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
                        </div>
                    </div>
                    <div class="col-5">
                        <div id="ymca-text-block">
                            <div id="ymca-title">
                                <div class="title-block">
                                    <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                                </div>
                            </div>
                            <div id="ymca-text">
                                <div class="text-block">
                                    <span class="harper-pointer-p"><?= $settings["content"] ?></span>
                                </div>
                            </div>
                            <div id="ymca-schuster-link">
                                <a href="<?= $settings["link"] ?>"
                                   class="harper-point-link"><?= $settings["linktitle"] ?></a>
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
