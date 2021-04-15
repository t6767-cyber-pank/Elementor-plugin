<?php

class Tabs_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'TabsName';
    }

    public function get_title()
    {
        return __('TabsVasterra');
    }

    public function get_icon()
    {
        return 'fas fa-atom';
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
            'title_color',
            [
                'label' => __('Title Color'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Scheme_Color::get_type(),
                    'value' => \Elementor\Scheme_Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => __('Title1'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Title'),
            ]
        );

        $this->add_control(
            'content1',
            [
                'label' => __('Content1'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Default content'),
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => __('Title2'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Title'),
            ]
        );

        $this->add_control(
            'content2',
            [
                'label' => __('Content2'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Default content'),
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => __('Title3'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Title'),
            ]
        );

        $this->add_control(
            'content3',
            [
                'label' => __('Content3'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Default content'),
            ]
        );

        $this->add_control(
            'title4',
            [
                'label' => __('Title4'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Title'),
            ]
        );

        $this->add_control(
            'content4',
            [
                'label' => __('Content4'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Default content'),
            ]
        );

        $this->add_control(
            'title5',
            [
                'label' => __('Title5'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __('default: Title'),
                'default' => __('Title'),
            ]
        );

        $this->add_control(
            'content5',
            [
                'label' => __('Content5'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('Default content'),
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
                            <a href="/contact">
                                <div id="lets-talk-title-vue"></div>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function () {
                                        document.vueInitTitle('lets-talk-title-vue', 'Let’s<br>talk', '5em');
                                    });
                                </script>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-lg-6">
                        <div class="img-center" id="lets-talk-img">
                            <div id="lets-talk-vue"></div>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    document.vueInitImg('lets-talk-vue', '/wp-content/themes/harperpoint/library/img/lets-talk.png', '1');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type='text/javascript'
                src='http://tesharperpoint.wpengine.com/wp-content/themes/harperpoint/js/script.js?ver=7aae0ae48a685a49600c2382a1ef7370'
                id='harper_point_scripts-js'></script>
        <script type='text/javascript' src='http://tesharperpoint.wpengine.com/wp-includes/js/wp-embed.min.js?ver=5.5.3'
                id='wp-embed-js'></script>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <!--paroller.js-->

        <script src="/wp-content/themes/harperpoint/js/jquery.paroller.js"></script>
        <script>

            jQuery(document).ready(function () {
                setTimeout(() => {
                    jQuery('.my-paroller').paroller();
                }, 1000)
            });

        </script>

        <?php
    }

    protected function _content_template()
    {
    }

}
