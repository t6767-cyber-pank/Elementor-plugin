<?php

class About_Who_We_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Who we are';
    }

    public function get_title()
    {
        return __('Who we are');
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
                'default' => __('Who we are'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'url',
                'placeholder' => __('default: Content'),
                'default' => __('<p>Picture this: Two lifelong photographers who were raised on opposite sides of the country end up working together at a photo studio, where they fall in love. Full of excitement for the future, these bright-eyed artists take a leap of faith and start their own photography business.
</p><p>It sounds a bit like a movie plot, but it’s actually the story of how Harper Point came to be.
</p><p>When Nathan was a child, his mother introduced him to photography. She would wake Nathan up at the crack of dawn to photograph the sunrise at an apple orchard during New England fall or the Olympic torch as it passed through their town.
</p><p>As an adult, Nathan read Jack Kerouac, which resulted in the mandatory cross-country-on-a-Greyhound trip. He quickly got hooked on California
</p><p>Kira’s journey began at the age of five, when her family took a chance and started a photography business. She grew up answering phones and labeling mailings for a business that would someday be the home of her own creative endeavor.
</p><p>Nathan got a job at this same photo studio, where he met Kira. Four years later, they got married, moved to Colorado and started their own company.
</p><p>In their 15-plus-year business career, Nathan and Kira have photographed everything under the sun. Now, they take that knowledge and distill it into a commercial photography business that elevates brands and creates space for their greatest adventure—their family.
</p><p>Fun fact: Harper Point was named after their dog, Harper, and a tiny sign Nathan saw for Harper`s Landing while living in Massachusetts.</p>'),
            ]
        );


        $this->add_control(
            'image1',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/who_we_are.png",
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => "/wp-content/themes/harperpoint/library/img/who_we_are_1.png",
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="harper-point gifs" id="who-we-are">
            <div class="container">
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
                    <div class="col-4 offset-8 offset-lg-0 who-we-are-img">
                        <div class="img-block">
                            <img class="harper-pointer-img" src="<?= $settings["image1"]["url"] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 gifs-img-1">
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
