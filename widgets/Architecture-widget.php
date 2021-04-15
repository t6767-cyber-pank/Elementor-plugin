<?php

class Architecture_Service_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Architecture service';
    }

    public function get_title()
    {
        return __('Architecture service');
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
                'default' => __('Architecture'),
            ]
        );

        $this->add_control(
            'title_link',
            [
                'label' => __('Title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Learn more'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('url'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Link'),
                'default' => __('/'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __( 'default: Content'),
                'default' => __( 'we take photos of places and spaces to try and help people feel like they are there.'),
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/architecture.png",
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/architecture.png",
                ],
            ]
        );

        $this->add_control(
            'image3',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/architecture_1.png",
                ],
            ]
        );


        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point services-architecture architecture">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8  order-2 order-lg-1">
                        <div class="balencing-rugged-sophistication p-lg-5">
                            <div class="harper-point-title">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <div class="harper-point-text flex-end">
                                            <a href="<?= $settings["link"]?>">
                                                <div data-v-632d03d0="" class="title-block"><h1 data-v-632d03d0="" class="tile-absolute active" style="font-size: 5em;"><?= $settings["title"]?></h1> <h1 data-v-632d03d0="" class="title-opacity" style="font-size: 5em;"><?= $settings["title"]?></h1></div>
                                                <script type="text/javascript">
                                                    document.addEventListener('DOMContentLoaded', function () {
                                                        document.vueInitTitle('architecture-title-vue', '<?= $settings["title"]?>', '5em');
                                                    });
                                                </script>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12 img-mb-servicer">
                                        <div data-v-3059c385="" class="img-block"><img data-v-3059c385="" data-src="<?= $settings["image1"]["url"] ?>" class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading"></div>
                                        <script type="text/javascript">
                                            document.addEventListener('DOMContentLoaded', function () {
                                                document.vueInitImg('architecture-img-mb-vue', '<?= $settings["image1"]["url"] ?>', '1');
                                            });
                                        </script>
                                    </div>
                                </div>

                            </div>
                            <div class="harper-point-text">
                                <div data-v-5bfbeaf5="" class="text-block"><span data-v-5bfbeaf5="" class="active" style="font-size: 1.2em;"><?= $settings["content"]?></span></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitText('architecture-text-vue', '<?= $settings["content"]?>', '1.2em');
                                    });
                                </script>
                            </div>
                            <div class="harper-point-link text-left">
                                <a href="<?= $settings["link"]?>" class="harper-point-link">
                                    <?= $settings["title_link"]?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4  order-1 order-lg-2 img-servicer">
                        <div class="lifestyle-img">
                            <div data-v-3059c385="" class="img-block"><img data-v-3059c385="" data-src="<?= $settings["image2"]["url"] ?>" class="active" src="<?= $settings["image2"]["url"] ?>" lazy="loaded"></div>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    document.vueInitImg('architecture-img-vue', '<?= $settings["image2"]["url"] ?>', '1');
                                });
                            </script>
                        </div>
                    </div>

                    <div class="col-12 order-3 col-lg-10 architecture-img-1">
                        <div data-v-3059c385="" class="img-block"><img data-v-3059c385="" data-src="<?= $settings["image3"]["url"] ?>" class="active" src="<?= $settings["image3"]["url"] ?>" lazy="loaded"></div>
                        <script type="text/javascript">
                            document.addEventListener('DOMContentLoaded', function () {
                                document.vueInitImg('architecture-1-vue', '<?= $settings["image3"]["url"] ?>', '1');
                            });
                        </script>
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
