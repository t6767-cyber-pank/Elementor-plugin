<?php

class Timur_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'scripts init';
    }

    public function get_title()
    {
        return __('scripts init');
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
                'default' => __('Default title'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content'),
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link rel='dns-prefetch' href='//s.w.org'/>
        <script type="text/javascript">
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
                "svgExt": ".svg",
                "source": {"concatemoji": "http:\/\/tesharperpoint.wpengine.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}
            };
            !function (e, a, t) {
                var r, n, o, i, p = a.createElement("canvas"), s = p.getContext && p.getContext("2d");

                function c(e, t) {
                    var a = String.fromCharCode;
                    s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                    var r = p.toDataURL();
                    return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
                }

                function l(e) {
                    if (!s || !s.fillText) return !1;
                    switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                        case"flag":
                            return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                        case"emoji":
                            return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                    }
                    return !1
                }

                function d(e) {
                    var t = a.createElement("script");
                    t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
                }

                for (i = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
                t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function () {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                    "complete" === a.readyState && t.readyCallback()
                })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='wp-block-library-css'
              href='http://tesharperpoint.wpengine.com/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3'
              type='text/css' media='all'/>
        <link rel='stylesheet' id='boostrap_style-css'
              href='http://tesharperpoint.wpengine.com/wp-content/themes/harperpoint/css/style-boostrap.css?ver=5.5.3'
              type='text/css' media='all'/>
        <link rel='stylesheet' id='harper_point_style-css'
              href='http://tesharperpoint.wpengine.com/wp-content/themes/harperpoint/style.css?ver=7aae0ae48a685a49600c2382a1ef7370'
              type='text/css' media='all'/>
        <link rel="https://api.w.org/" href="http://tesharperpoint.wpengine.com/wp-json/"/>
        <link rel="alternate" type="application/json"
              href="http://tesharperpoint.wpengine.com/wp-json/wp/v2/pages/6"/>
        <link rel="EditURI" type="application/rsd+xml" title="RSD"
              href="https://tesharperpoint.wpengine.com/xmlrpc.php?rsd"/>
        <link rel="wlwmanifest" type="application/wlwmanifest+xml"
              href="http://tesharperpoint.wpengine.com/wp-includes/wlwmanifest.xml"/>
        <link rel="canonical" href="http://tesharperpoint.wpengine.com/"/>
        <link rel='shortlink' href='http://tesharperpoint.wpengine.com/'/>
        <link rel="alternate" type="application/json+oembed"
              href="http://tesharperpoint.wpengine.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftesharperpoint.wpengine.com%2F"/>
        <link rel="alternate" type="text/xml+oembed"
              href="http://tesharperpoint.wpengine.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftesharperpoint.wpengine.com%2F&#038;format=xml"/>
        <?php
    }

    protected function _content_template()
    {
    }

}
