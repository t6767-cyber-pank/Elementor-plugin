<?php

class MainSlider_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Home - Main Slider';
    }

    public function get_title()
    {
        return __('Home - Main Slider');
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
                'default' => __('Immortalizing<br> moments<br> of magic'),
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        //Immortalizing<br> moments<br> of magic
        ?>
        <section class="harper-point-header home-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 harper-point-title">
                        <div id="immortalizing-moments-magic-title-vue"></div>
                        <script type="text/javascript">
                            document.addEventListener('DOMContentLoaded', function () {
                                document.vueInitTitle('immortalizing-moments-magic-title-vue', '<?= $settings["title"]?>', '8em');
                            });
                        </script>
                    </div>
                    <div class="col-9 offset-3">
                        <div class="flex-center flex-column home-page-img">
                            <div id="slider-home"></div>
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
