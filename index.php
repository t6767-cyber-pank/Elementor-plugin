<?php
/**
 * Plugin Name: Vasterra theme Elementor
 * Description: pluginCreated by Vasterra.
 * Plugin URI:  http://vasterra.com/
 * Version:     1.0.0
 * Author:      Vasterra
 * Author URI:  http://vasterra.com/
 * Text Domain: elementor-test-extension
 */

final class Timur_Extension {
    // Блок констант
	const VERSION = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';
	const MINIMUM_PHP_VERSION = '7.0';

	private static $_instance = null;
	
	// Инициализация класса
	public static function instance() {
		if ( is_null( self::$_instance ) ) { self::$_instance = new self(); }
		return self::$_instance;
	}

	public function __construct() {
		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}
	
	public function i18n() {
		load_plugin_textdomain( 'elementor-test-extension' );
	}
	
	
	public function init() {
		// Проверка активирован ли элементор
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}
		// Проверка версии Elementor
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}
		// Проверка версии PHP
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}
		// После проверок добавляем модуле элементора
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );
	}
	
	public function includes() {}
	
	/****Инициализация виджитов****/
	public function init_widgets() {
		// Include Widget files
		//require_once( __DIR__ . '/widgets/timur-widget.php' );
		// Register widget
		//\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Timur_Widget() );

        // Include Widget files
        //require_once( __DIR__ . '/widgets/tabs-widget.php' );
        // Register widget
        //\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Tabs_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/mainslider-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \MainSlider_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/preloader-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Preloader_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/immortalizing-moments-magic-text-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \ImmortalizingMoments_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/hello-harper-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HelloHarper_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/our-work-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OurWork_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/hudson-west-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HudsonWest_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/simon-schuster-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \SimonSchuster_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/ymca-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/slider-block-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \SliderBlock_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/eye-candy-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \EyeCandy_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/lets-talk-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \LetsTalk_Widget() );

        // Include Widget files
        require_once( __DIR__ . '/widgets/work-widget.php' );
        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Work_Widget() );

        require_once( __DIR__ . '/widgets/work-custom-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Work_custom_Widget() );

        require_once( __DIR__ . '/widgets/work-custom-right-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Work_custom_right_Widget() );

        require_once( __DIR__ . '/widgets/livestyle-service-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \LiveStyle_Service_Widget() );

        require_once( __DIR__ . '/widgets/product-service-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Service_Widget() );

        require_once( __DIR__ . '/widgets/food-servive-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_Service_Widget() );

        require_once( __DIR__ . '/widgets/headshots-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_Service_Widget() );

        require_once( __DIR__ . '/widgets/Architecture-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Architecture_Service_Widget() );

        require_once( __DIR__ . '/widgets/gifts-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \GIFs_Service_Widget() );

        require_once( __DIR__ . '/widgets/eye-candy-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Eye_Candy_Header_Widget() );

        require_once( __DIR__ . '/widgets/eye-candy-center-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Eye_Candy_Center_Widget() );

        require_once( __DIR__ . '/widgets/about-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \About_Header_Widget() );

        require_once( __DIR__ . '/widgets/about-who-we-are-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \About_Who_We_Widget() );

        require_once( __DIR__ . '/widgets/about-studio-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \About_Studio_Widget() );

        require_once( __DIR__ . '/widgets/about-process-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \About_Process_Widget() );

        require_once( __DIR__ . '/widgets/lifestyle-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_Header_Widget() );

        require_once( __DIR__ . '/widgets/projectleft-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Project_Left_Widget() );

        require_once( __DIR__ . '/widgets/projectright-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Project_Right_Widget() );

        //require_once( __DIR__ . '/widgets/endscripts-widget.php' );
        // Register widget
        //\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \EndScripts_Widget() );

        require_once( __DIR__ . '/widgets/HomeHeaderWidget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HomeHeaderWidget() );

        require_once( __DIR__ . '/widgets/HomeGreenBlock.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HomeGreenBlock() );

        require_once( __DIR__ . '/widgets/joy-organics-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_Organics_Widget() );

        require_once( __DIR__ . '/widgets/Mpi-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Mpi_Widget() );

        require_once( __DIR__ . '/widgets/services-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Header_Widget() );

        require_once( __DIR__ . '/widgets/services-lifestyle-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Lifestyle_Widget() );

        require_once( __DIR__ . '/widgets/services-product-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Product_Widget() );

        require_once( __DIR__ . '/widgets/services-food-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Food_Widget() );

        require_once( __DIR__ . '/widgets/services-headshots-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Headshots_Widget() );

        require_once( __DIR__ . '/widgets/services-architecture-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Architecture_Widget() );

        require_once( __DIR__ . '/widgets/services-gifs-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Services_Gif_Widget() );


        require_once( __DIR__ . '/widgets/contact-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Contact_Header_Widget() );

        require_once( __DIR__ . '/widgets/contact-block-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Contact_Block_Widget() );

        require_once( __DIR__ . '/widgets/contact-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Contact_Header_Widget() );

        require_once( __DIR__ . '/widgets/contact-form-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Contact_Form_Widget() );

        require_once( __DIR__ . '/widgets/country-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Country_Header_Widget() );

        require_once( __DIR__ . '/widgets/country-title-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Country_Title_Widget() );


        require_once( __DIR__ . '/widgets/country-text-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Country_Text_Widget() );

        require_once( __DIR__ . '/widgets/country-img-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Country_Img_Widget() );

        require_once( __DIR__ . '/widgets/country-img-2-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Country_Img_2_Widget() );

        require_once( __DIR__ . '/widgets/product-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Header_Widget() );

        require_once( __DIR__ . '/widgets/food-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_Header_Widget() );

        require_once( __DIR__ . '/widgets/headshots-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_Header_Widget() );

        require_once( __DIR__ . '/widgets/architecture-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Architecture_Header_Widget() );

        require_once( __DIR__ . '/widgets/hudson-west-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_West_Header_Widget() );

          require_once( __DIR__ . '/widgets/simon-and-schuster-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Simon_Schuster_Header_Widget() );

        require_once( __DIR__ . '/widgets/ymca-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_Header_Widget() );

        require_once( __DIR__ . '/widgets/joy-organics-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_Organics_Header_Widget() );

        require_once( __DIR__ . '/widgets/mpi-header-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Mpi_Header_Widget() );

        require_once( __DIR__ . '/widgets/lifestyle-img-1-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_Img_1_Widget() );


        require_once( __DIR__ . '/widgets/product-img-1-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Img_1_Widget() );

        require_once( __DIR__ . '/widgets/food-img-1-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_Img_1_Widget() );

        require_once( __DIR__ . '/widgets/headshots-img-1-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_Img_1_Widget() );

        require_once( __DIR__ . '/widgets/architecture-img-1-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Architecture_Img_1_Widget() );

        require_once( __DIR__ . '/widgets/lifestyle-black-1-widget.php' );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_black_1_Widget() );

        require_once(__DIR__ . '/widgets/product-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Img_1_Widget() );

        require_once(__DIR__ . '/widgets/food-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_black_1_Widget() );

        require_once(__DIR__ . '/widgets/headshots-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_black_1_Widget() );

        require_once(__DIR__ . '/widgets/lifestyle-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/product-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/food-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/headshots-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/architecture-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Architecture_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/lifestyle-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_img_3_Widget() );

        require_once(__DIR__ . '/widgets/lifestyle-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_black_2_Widget() );

        require_once(__DIR__ . '/widgets/lifestyle-slider.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Lifestyle_slider_Widget() );

        require_once(__DIR__ . '/widgets/product-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_black_1_Widget() );


        require_once(__DIR__ . '/widgets/product-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_black_2_Widget() );


        require_once(__DIR__ . '/widgets/product-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Img_3_Widget() );

        require_once(__DIR__ . '/widgets/other-services-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Other_Services_Widget() );


        require_once(__DIR__ . '/widgets/food-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_black_2_Widget() );


        require_once(__DIR__ . '/widgets/food-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Food_Img_3_Widget() );


        require_once(__DIR__ . '/widgets/headshots-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_black_2_Widget() );

        require_once(__DIR__ . '/widgets/headshots-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Headshots_Img_3_Widget() );

        require_once(__DIR__ . '/widgets/architecture-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Architecture_black_1_Widget() );

        require_once(__DIR__ . '/widgets/hudson-west-img-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_West_Img_1_Widget() );

        require_once(__DIR__ . '/widgets/hudson-west-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_west_black_1_Widget() );

        require_once(__DIR__ . '/widgets/hudson-west-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_West_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/hudson-west-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_West_Img_3_Widget() );


        require_once(__DIR__ . '/widgets/hudson-west-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_west_black_2_Widget() );

        require_once(__DIR__ . '/widgets/hudson-west-slider.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Hudson_slider_Widget() );

        require_once(__DIR__ . '/widgets/more-mork-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \More_work_Widget() );

        require_once(__DIR__ . '/widgets/simon-schuster-img-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Simon_Schuster_Img_1_Widget() );

        require_once(__DIR__ . '/widgets/simon-schuster-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Simon_Schuster_Img_2_Widget() );

        require_once(__DIR__ . '/widgets/simon-schuster-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Simon_Schuster_black_2_Widget() );

        require_once(__DIR__ . '/widgets/simon-schuster-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Simon_schuster_Img_3_Widget() );

        require_once(__DIR__ . '/widgets/simon-schuster-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Simon_Schuster_black_1_Widget() );

        require_once(__DIR__ . '/widgets/ymca-img-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_Img_1_Widget() );

        require_once(__DIR__ . '/widgets/joy-organics-img-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_Organics_1_Widget() );

        require_once(__DIR__ . '/widgets/mpi-img-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \MPI_1_Widget() );

        require_once(__DIR__ . '/widgets/ymca-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_black_1_Widget() );

        require_once(__DIR__ . '/widgets/joy-organics-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_Organics_black_1_Widget() );

        require_once(__DIR__ . '/widgets/mpi-black-1-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Mpi_black_1_Widget() );

        require_once(__DIR__ . '/widgets/ymca-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_black_2_Widget() );

        require_once(__DIR__ . '/widgets/joy-organics-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_Organics_black_2_Widget() );

        require_once(__DIR__ . '/widgets/mpi-black-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Mpi_black_2_Widget() );


        require_once(__DIR__ . '/widgets/ymca-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_Img_2_Widget());

        require_once(__DIR__ . '/widgets/joy-organics-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_Organics_2_Widget());

        require_once(__DIR__ . '/widgets/mpi-img-2-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Mpi_2_Widget());


        require_once(__DIR__ . '/widgets/ymca-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Ymca_Img_3_Widget());

        require_once(__DIR__ . '/widgets/joy-organics-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Joy_organics_Img_3_Widget());

        require_once(__DIR__ . '/widgets/mpi-img-3-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Mpi_Img_3_Widget());


    }

	public function init_controls() {
		// Include Control files
		require_once( __DIR__ . '/controls/timurControl.php' );
		// Register control
		\Elementor\Plugin::$instance->controls_manager->register_control( 'control-type-', new \TimurControl() );
	}
	
	/****Проверки****/
	// Вывод соощения. Если элементор не активирован говорит чтобы сначала активировали элементор
	public function admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-extension' ) . '</strong>'
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
	
	// Вывод сообщения. Если версия элементора не совпадает
	public function admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-extension' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
	
	// Вывод сообщения. Если версия php не совпадает
	public function admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'elementor-test-extension' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

}
// Вызов инициализации
Timur_Extension::instance();
