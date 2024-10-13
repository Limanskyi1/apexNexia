<?php

/**
 * Include Theme Customizer.
 *
 * @since v1.0
 */
$theme_customizer = get_template_directory() . '/inc/customizer.php';
if ( is_readable( $theme_customizer ) ) {
	require_once $theme_customizer;
}


/**
 * Include Support for wordpress.com-specific functions.
 *
 * @since v1.0
 */
$theme_wordpresscom = get_template_directory() . '/inc/wordpresscom.php';
if ( is_readable( $theme_wordpresscom ) ) {
	require_once $theme_wordpresscom;
}


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since v1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


/**
 * General Theme Settings.
 *
 * @since v1.0
 */
if ( ! function_exists( 'starter_pack_setup_theme' ) ) :
	function starter_pack_setup_theme() {
		// Make theme available for translation: Translations can be filed in the /languages/ directory.
		load_theme_textdomain( 'starter_pack', get_template_directory() . '/languages' );

		// Theme Support.
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);


		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide alignment.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Default Attachment Display Settings.
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		// Custom CSS-Styles of Wordpress Gallery.
		add_filter( 'use_default_gallery_style', '__return_false' );
	}
	add_action( 'after_setup_theme', 'starter_pack_setup_theme' );

	// Disable Block Directory: https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/filters/editor-filters.md#block-directory
	remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
	remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
endif;

function themename_custom_logo_setup() {
    $defaults = array(
//        'height'               => 100,
//        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 *
 * @since v2.2
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since v2.2
		 */
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Nav menus.
 *
 * @since v1.0
 */
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'header-menu'   => 'Header Menu',
			'footer-menu' => 'Footer Menu',
            'languages-menu' => 'Languages Menu',
		)
	);
}

/**
 * Loading All CSS Stylesheets and Javascript Files.
 *
 * @since v1.0
 */
function starter_pack_scripts_loader() {
	$theme_version = wp_get_theme()->get( 'Version' ) + 2.4;

	// 1. Styles.
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all' );
	//wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version, 'all' );
	// main.scss: Compiled Framework source + custom styles.

	if ( is_rtl() ) {
		wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), $theme_version, 'all' );
	}

	// 2. Scripts.
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'starter_pack_scripts_loader' );



function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['webm'] = 'video/webm';
    $existing_mimes['mp4'] = 'video/mp4';
    $existing_mimes['svg'] = 'image/svg+xml';
    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );
add_action('wp_head', 'href_head');

function href_head(){
	echo '<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="/wp-content/themes/starter/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <meta name="prmoney" content="CYK9ZiVaoLXLw8sEb8qmgrggmfJ0eqXpeg0uSPdI" />';
}


// turn off Emoji в WordPress
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  }
  add_action( 'init', 'disable_emojis' );
  
  // turn off Emoji в редакторі Gutenberg
  function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
	  return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
	  return array();
	}
  }


//   remove fonts default
  function remove_default_fonts() {
    wp_dequeue_style( 'open-sans' );
    wp_dequeue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'remove_default_fonts' );



function wp_custom_contact_form_script() {
    wp_enqueue_script( 'custom-contact-form-script', get_template_directory_uri() . '/src/js/contact-form-script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_custom_contact_form_script' );

function wp_process_contact_form() {
    if ( isset( $_POST['name'] ) && isset( $_POST['email'] ) ) {
        $name    = sanitize_text_field( $_POST['name'] );
        $email   = sanitize_email( $_POST['email'] );
        $message = sanitize_text_field( $_POST['message'] );

        // Далее можете добавить свою логику обработки формы, например, отправку данных по электронной почте или сохранение в базу данных.

        // Пример отправки письма с данными формы
        $to      = 'support@barko-capital.com'; // Укажите свой адрес электронной почты
        $subject = 'New Contact Form Submission';
        $body    = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
        $headers = array( 'Content-Type: text/html; charset=UTF-8' );

        wp_mail( $to, $subject, $body, $headers );

        // Дополнительный код, который вы хотите выполнить после успешной обработки формы

       // wp_redirect( get_permalink() ); // Редирект обратно на текущую страницу после обработки формы
        exit;
    }
}
add_action( 'init', 'wp_process_contact_form' );


add_action('wp_ajax_ajax_form', 'ajax_form');
add_action('wp_ajax_nopriv_ajax_form', 'ajax_form');

function ajax_form()
{

    extract(array_map("htmlspecialchars", $_POST), EXTR_OVERWRITE);

    if(empty($promo)){
        $link_id = '4475';
        }else {
        $link_id = '';
    }
    
    $promo_sheet = ['111111'];
    if (!in_array($promo, $promo_sheet)) {
        $link_id = '4475'; 
        $promo = '';
    }
    
    if(empty($tradeserv)){
        $tradeserv = 'WebTrade';
    }
    
    $url = "https://marketing.affboat.com/api/v3/integration";

   
    $domain = $_SERVER['SERVER_NAME'];
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $apiData = [
        'api_token' => "w4gr2JbbaTO3cOqeuK0UfK3noOAgz7quJWnbmMkSr2EQ6ldwWU37ywHFr5Jp",
        'fname' => $fname,
        'lname' => isset($lname) ? $lname : 'None',
        'fullphone' => $phone,
        'ip' => $ip,
        'email' => $email,
        'pass' => $pass,
        'domain' => $domain,
        'source' => "innovative-invest.com",
        'client_source' => $domain,
        'country' => isset($country) ? $country : "RU",
        'link_id' => $link_id,
        'utm_source' => isset($utm_source) ? $utm_source : "",
        'utm_medium' => isset($utm_medium) ? $utm_medium : "",
        'utm_campaign' => isset($utm_campaign) ? $utm_campaign : "",
        'utm_term' => isset($utm_term) ? $utm_term : "",
        'utm_content' => isset($utm_content) ? $utm_content : "",
        'click_id' => isset($click_id) ? $click_id : "",
        'promo' => isset($promo) ? $promo : "",
        'trading_platform' => isset($tradeserv) ? $tradeserv : "WebTrade",
        // "message" => "0",
        // 'link_id' =>
    ];
    header('Content-Type: application/json');

    try {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query($apiData)
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        $response = json_decode($server_output);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
        die;
    }

    if ($response->success) {
      
      if ($tradeserv == "MT5"){
            $response->autologin = str_replace('backend','account',$response->autologin );      
        }
      
        echo json_encode([
            'success' => true,
            'autologin' => $response->autologin,
            'password' => ($response->password),
            'login' => ($apiData['email'])
        ]);
        die;
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Server error!',
            'debug' => json_encode($response)

        ]);
        die;
    }

}





// Додаємо пункт меню в адмін панель
function add_custom_theme_page() {
    add_menu_page(
        'Custom fields',          
        'Custom fields',            
        'manage_options',          
        'custom_theme_settings',    
        'display_custom_theme_page' 
    );
}
add_action('admin_menu', 'add_custom_theme_page');

// Виводимо контент сторінки
function display_custom_theme_page() {
    ?>
    <div class="wrap">
        <h1>Custom fields</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_fields_group');
            do_settings_sections('custom_theme_settings'); 
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Реєстрація кастомних полів
function add_custom_fields_settings() {
    add_settings_section(
        'custom_fields_section',  
        'Value of custom fields',
        'display_custom_fields_section', 
        'custom_theme_settings' 
    );

    add_settings_field(
        'custom_field_value_phone', 
        'phone',    
        'display_custom_field_phone', 
        'custom_theme_settings', 
        'custom_fields_section' 
    );

    add_settings_field(
        'custom_field_value_phone2', 
        'phone2',      
        'display_custom_field_phone2', 
        'custom_theme_settings', 
        'custom_fields_section' 
    );

	add_settings_field(
        'custom_field_value_phone3', 
        'phone3',      
        'display_custom_field_phone3', 
        'custom_theme_settings', 
        'custom_fields_section' 
    );

	add_settings_field(
		'custom_field_value_email', 
		'email',      
		'display_custom_field_email', 
		'custom_theme_settings', 
		'custom_fields_section' 
	);
	
	add_settings_field(
		'custom_field_value_brand', 
		'brand',     
		'display_custom_field_brand', 
		'custom_theme_settings', 
		'custom_fields_section'
	);
	
	add_settings_field(
		'custom_field_value_registration_number',
		'registration_number',     
		'display_custom_field_registration_number', 
		'custom_theme_settings', 
		'custom_fields_section' 
	);
	
	add_settings_field(
		'custom_field_value_address', 
		'address',     
		'display_custom_field_address', 
		'custom_theme_settings', 
		'custom_fields_section' 
	);
	
	add_settings_field(
		'custom_field_value_company_name', 
		'company_name',      
		'display_custom_field_company_name', 
		'custom_theme_settings', 
		'custom_fields_section' 
	);
	
	add_settings_field(
		'custom_field_value_website_url',
		'website_url',      
		'display_custom_field_website_url', 
		'custom_theme_settings', 
		'custom_fields_section' 
	);

    add_settings_field(
		'custom_field_value_country_company', 
		'country_company',      
		'display_custom_field_country_company',
		'custom_theme_settings',
		'custom_fields_section'
	);
	

    register_setting('custom_fields_group', 'custom_field_value_phone'); 
    register_setting('custom_fields_group', 'custom_field_value_phone2'); 
	register_setting('custom_fields_group', 'custom_field_value_phone3');
	register_setting('custom_fields_group', 'custom_field_value_email'); 
    register_setting('custom_fields_group', 'custom_field_value_brand'); 
	register_setting('custom_fields_group', 'custom_field_value_registration_number'); 
    register_setting('custom_fields_group', 'custom_field_value_address'); 
	register_setting('custom_fields_group', 'custom_field_value_company_name'); 
    register_setting('custom_fields_group', 'custom_field_value_website_url'); 
    register_setting('custom_fields_group', 'custom_field_value_country_company'); 
}
add_action('admin_init', 'add_custom_fields_settings');

function display_custom_fields_section() {
    echo 'Here you can change the values ​​of custom fields for all pages.';
}

function display_custom_field_phone() {
    $custom_field_value = get_option('custom_field_value_phone'); 
    ?>
    <input type="text" name="custom_field_value_phone" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}

function display_custom_field_phone2() {
    $custom_field_value = get_option('custom_field_value_phone2'); 
    ?>
    <input type="text" name="custom_field_value_phone2" value="<?php echo esc_attr($custom_field_value2); ?>">
    <?php
}

function display_custom_field_phone3() {
    $custom_field_value = get_option('custom_field_value_phone3'); 
    ?>
    <input type="text" name="custom_field_value_phone3" value="<?php echo esc_attr($custom_field_value3); ?>">
    <?php
}

function display_custom_field_email() {
    $custom_field_value = get_option('custom_field_value_email'); 
    ?>
    <input type="text" name="custom_field_value_email" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}

function display_custom_field_brand() {
    $custom_field_value = get_option('custom_field_value_brand');
    ?>
    <input type="text" name="custom_field_value_brand" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}

function display_custom_field_registration_number() {
    $custom_field_value = get_option('custom_field_value_registration_number'); 
    ?>
    <input type="text" name="custom_field_value_registration_number" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}

function display_custom_field_address() {
    $custom_field_value = get_option('custom_field_value_address'); 
    ?>
    <input type="text" name="custom_field_value_address" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}

function display_custom_field_company_name() {
    $custom_field_value = get_option('custom_field_value_company_name'); 
    ?>
    <input type="text" name="custom_field_value_company_name" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}

function display_custom_field_website_url() {
    $custom_field_value = get_option('custom_field_value_website_url'); 
    ?>
    <input type="text" name="custom_field_value_website_url" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}


function display_custom_field_country_company() {
    $custom_field_value = get_option('custom_field_value_country_company'); 
    ?>
    <input type="text" name="custom_field_value_country_company" value="<?php echo esc_attr($custom_field_value); ?>">
    <?php
}


