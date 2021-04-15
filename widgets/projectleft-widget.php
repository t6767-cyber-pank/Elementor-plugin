<?php

class Project_Left_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Project left';
    }

    public function get_title()
    {
        return __('Project left');
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
                'default' => __('Client Name / Location, CA 2019'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Link Title'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __( 'default: Content'),
                'default' => __( 'View project'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => __( 'default: Content'),
                'default' => __( '/'),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/lifestyle_1.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point lifestyle-img-block">
            <div class="container">
                <div class="row lifestyle-img-mt">
                    <div class="col-9">
                        <div>
                            <div data-v-2a4d5934="" class="img-block"><img data-v-2a4d5934="" data-src="<?= $settings["image"]["url"] ?>" class="active" src="<?= $settings["image"]["url"] ?>" lazy="loaded"></div>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function () {
                                    document.vueInitImg('lifestyle-img-1-vue', '<?= $settings["image"]["url"] ?>', '1');
                                });
                            </script>
                        </div>
                        <div class="lifestyle-label">
                            <?= $settings["title"]?>
                            <a href="/" class="harper-point-link">
                                <?= $settings["content"]?>
                            </a>
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
