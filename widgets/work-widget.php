<?php

class Work_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Work - header';
    }

    public function get_title()
    {
        return __('Work - header');
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
                'default' => __('Work'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('We take photographs that<br> make you feel something.'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/work.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point-header left before" id="work">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="flex-center flex-column balencing-rugged-sophistication mt-3">
                            <div class="harper-point-title">
                                <div class="title-block">
                                    <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                                </div>
                            </div>
                            <div class="harper-point-text">
                                <div class="text-block">
                                    <span class="harper-pointer-p">
                                        <?= $settings["content"] ?>
                                    </span>
                                </div>
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
