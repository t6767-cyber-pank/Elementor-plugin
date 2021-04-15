<?php

class About_Process_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'About process';
    }

    public function get_title()
    {
        return __('About process');
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
                'default' => __('Our process'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __( 'default: Content'),
                'default' => __( '<p>We’ve been doing this photography thing for a while, so we have our process down to a T. Before, during and after the shoot, we keep our lines of communication open. Harper Point is just the two of us, so you don’t have to worry about information getting lost in translation.<p><p>Above all, we aim to translate what your product is into an eye-catching photo that tells a good story quickly. We are always happy to hear your ideas! The overwhelming majority of our clients are repeat customers—we value great working relationships.</p>'),
            ]
        );


        $this->add_control(
            'image1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/our_process.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point our-process">
            <div class="container mt-5">
                <div class="row">
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
                <div class="row">
                    <div class="col-10 offset-1 offset-lg-0 our-process-img">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
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
