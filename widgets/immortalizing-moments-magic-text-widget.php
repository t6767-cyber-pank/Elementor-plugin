<?php

class ImmortalizingMoments_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - immortalizing moments';
    }

    public function get_title()
    {
        return __('Home - immortalizing moments');
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
                'default' => __('We take photographs that make you feel something.<br> We never settle for good enough.'),      ]
        );

        $this->add_control(
            'linktitle',
            [
                'label' => __('Link title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Our services'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/services'),
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="immortalizing-moments-magic-text">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="text-block">
                            <span class="harper-pointer-p"><?= $settings["title"] ?></span>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-lg-2">
                        <a href="<?= $settings["link"]?>" class="harper-point-link"><?= $settings["linktitle"]?></a>
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
