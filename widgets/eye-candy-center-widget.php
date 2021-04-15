<?php

class Eye_Candy_Center_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Eye Candy - center';
    }

    public function get_title()
    {
        return __('Eye Candy - center');
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
            'image1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_page_1.png",
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_page_2.png",
                ],
            ]
        );

        $this->add_control(
            'image3',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_page_3.png",
                ],
            ]
        );

        $this->add_control(
            'image4',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_page_4.png",
                ],
            ]
        );

        $this->add_control(
            'image5',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_page_5.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="eye-candy">
            <div class="container">
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-7 eye-candy-page-1">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-10 eye-candy-page-2">
                        <div class="my-parolle" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                            <div class="img-block">
                                <img class="harper-pointer-img" src="<?= $settings["image2"]["url"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-8"></div>
                    <div class="col-4 eye-candy-page-3">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image3"]["url"] ?>">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-1"></div>
                    <div class="col-10 eye-candy-page-4">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image4"]["url"] ?>">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-8"></div>
                    <div class="col-4 eye-candy-page-5">
                        <div class="my-parolle" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                            <div class="img-block">
                                <img class="harper-pointer-img" src="<?= $settings["image5"]["url"] ?>">
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
