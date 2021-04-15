<?php

class About_Studio_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'About studio';
    }

    public function get_title()
    {
        return __('About studio');
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
                'default' => __('The studio'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/studio.png",
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/studio_1.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point studio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-none d-lg-flex">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
                        </div>              </div>
                    <div class="col-12 col-lg-8">
                        <div class="flex-center flex-column balencing-rugged-sophistication p-lg-5">
                            <div>
                                <div class="title-block">
                                    <h1 class="harper-pointer-h"><?= $settings["title"] ?></h1>
                                </div>
                            </div>
                            <div>
                                <div class="text-block">
                                    <span class="harper-pointer-p"><?= $settings["content"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-1"></div>
                    <div class="col-10 studio-img-1">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image2"]["url"] ?>">
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
