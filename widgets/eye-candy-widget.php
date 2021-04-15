<?php

class EyeCandy_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - eye candy';
    }

    public function get_title()
    {
        return __('Home - eye candy');
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
                'default' => __('Eye Candy'),
            ]
        );

        $this->add_control(
            'linktitle',
            [
                'label' => __('Link title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('View all'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/eye-candy'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_1.png",
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_2.png",
                ],
            ]
        );

        $this->add_control(
            'image3',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_3.png",
                ],
            ]
        );

        $this->add_control(
            'image4',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_4.png",
                ],
            ]
        );

        $this->add_control(
            'image5',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_5.png",
                ],
            ]
        );

        $this->add_control(
            'image6',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_6.png",
                ],
            ]
        );

        $this->add_control(
            'image7',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_7.png",
                ],
            ]
        );

        $this->add_control(
            'image8',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_8.png",
                ],
            ]
        );

        $this->add_control(
            'image9',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_9.png",
                ],
            ]
        );

        $this->add_control(
            'image10',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/eye_candy_10.png",
                ],
            ]
        );


        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="eye-candy">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <a href="<?= $settings["link"]?>">
                            <div id="eye-candy-title-vue"></div>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    document.vueInitTitle('eye-candy-title-vue', '<?= $settings["title"]?>', '3em');
                                });
                            </script>
                        </a>
                        <div id="eye-candy-link">
                            <a href="<?= $settings["link"]?>" class="harper-point-link"><?= $settings["linktitle"]?></a>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6 text-center">
                        <div class="img-center my-paroller" id="eye-candy-img-1"
                             data-paroller-factor="-0.1"
                             data-paroller-type="foreground"
                             data-paroller-direction="vertical">
                            <div id="eye-candy-1-vue"></div>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    document.vueInitImg('eye-candy-1-vue', '<?= $settings["image1"]["url"] ?>', '1');
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div>
                            <div id="eye-candy-2-vue"></div>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    document.vueInitImg('eye-candy-2-vue', '<?= $settings["image2"]["url"] ?>', '1');
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-b">
                    <div class="col-1 text-center">
                    </div>
                    <div class="col-6 text-center">
                        <div class="img-center" id="eye-candy-img-3">
                            <div class="my-paroller" data-paroller-factor="-0.1" data-paroller-type="foreground"
                                 data-paroller-direction="vertical">
                                <div id="eye-candy-3-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-3-vue', '<?= $settings["image3"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 text-center">
                        <div class="img-center" id="eye-candy-img-4">
                            <div class="my-paroller1">
                                <div id="eye-candy-4-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-4-vue', '<?= $settings["image4"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-b">
                    <div class="col-10 text-center">
                        <div class="img-center" id="eye-candy-img-5">
                            <div class="my-paroller" data-paroller-factor="-0.1" data-paroller-type="foreground"
                                 data-paroller-direction="vertical">
                                <div id="eye-candy-5-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-5-vue', '<?= $settings["image5"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mt-10">
                    <div class="col-1 text-center">
                    </div>
                    <div class="col-6 text-center">
                        <div class="img-center" id="eye-candy-img-6">
                            <div class="my-paroller" data-paroller-factor="-0.2" data-paroller-type="foreground"
                                 data-paroller-direction="vertical">
                                <div id="eye-candy-6-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-6-vue', '<?= $settings["image6"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 text-center">
                        <div class="img-center" id="eye-candy-img-7">
                            <div class="my-paroller" data-paroller-factor="0.2" data-paroller-type="foreground"
                                 data-paroller-direction="vertical">
                                <div id="eye-candy-7-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-7-vue', '<?= $settings["image7"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-b">
                    <div class="col-1 text-center"></div>
                    <div class="col-8 text-center">
                        <div class="img-center" id="eye-candy-img-8">
                            <div class="my-paroller1">
                                <div id="eye-candy-8-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-8-vue', '<?= $settings["image8"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row mt-10">
                    <div class="col-6 text-center">
                        <div class="img-center" id="eye-candy-img-9">
                            <div class="my-parolle" data-paroller-factor="0.1" data-paroller-type="foreground"
                                 data-paroller-direction="vertical">
                                <div id="eye-candy-9-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-9-vue', '<?= $settings["image9"]["url"] ?>', '1');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="img-center" id="eye-candy-img-10">
                            <div class="my-paroller" data-paroller-factor="-0.1" data-paroller-type="foreground"
                                 data-paroller-direction="vertical">
                                <div id="eye-candy-10-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitImg('eye-candy-10-vue', '<?= $settings["image10"]["url"] ?>', '1');
                                    });
                                </script>
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
