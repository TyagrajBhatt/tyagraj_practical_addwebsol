<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

/*
 * Tyagraj's code for practical assignment
 */

function load_scripts() {
    wp_enqueue_script( 'jquery' );

}    
add_action('wp_enqueue_scripts', 'load_scripts');


// Create a custom post type name Car

function register_car_post_type() {

	$labels = array(
	    'name'               => _x( 'Cars', 'post type general name' ),
	    'singular_name'      => _x( 'Car', 'post type singular name' ),
	    'add_new'            => _x( 'Add New Car', 'Car' ),
	    'add_new_item'       => __( 'Add New Car' ),
	    'edit_item'          => __( 'Edit Car' ),
	    'new_item'           => __( 'New Car' ),
	    'all_items'          => __( 'All Cars' ),
	    'view_item'          => __( 'View Cars' ),
	    'search_items'       => __( 'Search Cars' ),
	    'not_found'          => __( 'No Cars found' ),
	    'not_found_in_trash' => __( 'No Cars found in the Trash' ), 
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Cars'
	);

	$args = array(
	    'labels'        => $labels,
	    'description'   => 'Cars',
	    'public'        => true,
	    'show_ui'        => true,
	    'capability_type'  => 'post',
	    'menu_position' => 5,
	    'supports'      => array( 'title' , 'thumbnail', 'page-attributes'),
	    'has_archive'   => true,
	    'menu_icon' => 'dashicons-car',
	);      
    register_post_type('car', $args);
}
add_action('init', 'register_car_post_type');

// Register Custom Taxonomies
function register_car_taxonomies() {
    $taxonomies = array(
        'make' => 'Make',
        'model' => 'Model',
        'year' => 'Year',
        'fuel_type' => 'Fuel Type',
    );

    foreach ($taxonomies as $slug => $name) {
        $labels = array(
            'name' => $name,
            'singular_name' => $name,
        );

        $labels = array(
	    'name'               => _x( $name, 'post type general name' ),
	    'singular_name'      => _x( $name, 'post type singular name' ),
	    'add_new'            => _x( $name, 'Car' ),
	    'add_new_item'       => __( 'Add new '. $name),
	    'edit_item'          => __('Add new '. $name),
	    'new_item'           => __( 'Add new '.  $name),
	    'all_items'          => __( 'All '. $name  ),
	    'view_item'          => __( 'View '. $name ),
	    'search_items'       => __( 'Search  '. $name )

	  	);
        
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true,
            'show_in_rest' => true,
        );
        
        register_taxonomy($slug, 'car', $args);
    }
}
add_action('init', 'register_car_taxonomies');

// Shortcode to display car entry form
function car_entry_form_shortcode() {
    // Fetch taxonomy terms
    $makes = get_terms(array('taxonomy' => 'make', 'hide_empty' => false));
    $models = get_terms(array('taxonomy' => 'model', 'hide_empty' => false));
    $fuel_types = get_terms(array('taxonomy' => 'fuel_type', 'hide_empty' => false));
    $years = get_terms(array('taxonomy' => 'year', 'hide_empty' => false));

    ob_start();
    ?>
    <form id="car-entry-form" enctype="multipart/form-data">
    	<div id="car-entry-response"><h3></h3></div>
        <label>Car Name:</label>
        <input type="text" id="car_name" name="car_name" required uired><br>

        <label>Make:</label>
        <select id="make" name="make" required>
        	<option value=""> Select a make</option>
            <?php foreach ($makes as $make) : ?>
            	
                <option value="<?php echo $make->term_id; ?>"><?php echo $make->name; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Model:</label>
        <select id="model" name="model" required>
        	<option value=""> Select a model</option>
            <?php foreach ($models as $model) : ?>
            	
                <option value="<?php echo $model->term_id; ?>"><?php echo $model->name; ?></option>
            <?php endforeach; ?>
        </select><br>
         <label>Year:</label>
            <select id="year" name="year" required>
            	<option value="">Select a year</option>
            <?php foreach ($years as $year) : ?>
            	
                <option value="<?php echo $year->term_id; ?>"><?php echo $year->name; ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Fuel Type:</label>
        <?php foreach ($fuel_types as $fuel_type) : ?>
            <label><input type="radio" name="fuel_type" value="<?php echo $fuel_type->term_id; ?>" required><?php echo $fuel_type->name; ?></label>
        <?php endforeach; ?>
        <br>

        <label>Image Upload:</label>
        <input type="file" id="car_image" name="car_image" required><br>

        <button type="submit">Submit</button>
    </form>
    
		<script>
		    jQuery(document).ready(function($) {
		        $('#car-entry-form').on('submit', function(e) {
		            e.preventDefault();
		            var formData = new FormData(this);
		            formData.append('action', 'handle_car_entry'); // Add action parameter here

		            
		            $.ajax({
		                url: '<?php echo admin_url("admin-ajax.php"); ?>',
		                type: 'POST',
		                data: formData,
		                processData: false,
		                contentType: false,
		                success: function(response) {
		                    $('#car-entry-response h3').html(response);
		                    $('#car-entry-form')[0].reset();

		                }
		            });
		        });
		    });
		</script>

    <?php
    return ob_get_clean();
}
add_shortcode('car_entry', 'car_entry_form_shortcode');

// form submission and create new Car post
function car_form_submission() {
    if (!isset($_POST['car_name']) || !isset($_POST['make']) || !isset($_POST['model']) || !isset($_POST['fuel_type'])) {
        echo 'Please fill all required fields.';
        wp_die();
    }

    $car_name = sanitize_text_field($_POST['car_name']);
    $make = intval($_POST['make']);
    $model = intval($_POST['model']);
    $year = intval($_POST['year']);
    $fuel_type = intval($_POST['fuel_type']);
    
    // Create a new post of custom type 'car'
    $car_post = array(
        'post_title' => $car_name,
        'post_status' => 'publish',
        'post_type' => 'car',
    );
    $car_post_id = wp_insert_post($car_post);

    if (!is_wp_error($car_post_id)) {
       
        wp_set_post_terms($car_post_id, array($make), 'make');
        wp_set_post_terms($car_post_id, array($model), 'model');
        wp_set_post_terms($car_post_id, array($fuel_type), 'fuel_type');
        wp_set_post_terms($car_post_id, array($year), 'year');

        if (isset($_FILES['car_image']) && !empty($_FILES['car_image']['name'])) {
            $attachment_id = media_handle_upload('car_image', $car_post_id);
            if (!is_wp_error($attachment_id)) {
                set_post_thumbnail($car_post_id, $attachment_id);
            }
        }

        echo  $car_name. ' added successfully!';
    } else {
        echo 'Error occurred while adding car entry.';
    }

    wp_die();
}
add_action('wp_ajax_handle_car_entry', 'car_form_submission');
add_action('wp_ajax_nopriv_handle_car_entry', 'car_form_submission');

// Shortcode to display car list
function car_list_shortcode() {
    $args = array(
        'post_type' => 'car',
        'posts_per_page' => -1,
    );

    $cars = new WP_Query($args);

    ob_start();

    if ($cars->have_posts()) {
        echo '<ul>';
        while ($cars->have_posts()) {
            $cars->the_post();
            
            // Get taxonomy terms
            $make = wp_get_post_terms(get_the_ID(), 'make');
            $model = wp_get_post_terms(get_the_ID(), 'model');
            $year = wp_get_post_terms(get_the_ID(), 'year');
            $fuel_type = wp_get_post_terms(get_the_ID(), 'fuel_type');
            $thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');

            echo '<li>';
            echo $thumbnail ? $thumbnail . '<br>' : ''; // Display thumbnail if available

            echo '<strong>' . get_the_title() . '</strong><br>';

            // Display Make if available
            if (!empty($make) && !is_wp_error($make)) {
                echo 'Make: ' . $make[0]->name . '<br>';
            } else {
                echo 'Make: Not available<br>';
            }

            // Display Model if available
            if (!empty($model) && !is_wp_error($model)) {
                echo 'Model: ' . $model[0]->name . '<br>';
            } else {
                echo 'Model: Not available<br>';
            }

            if (!empty($year) && !is_wp_error($year)) {
                echo 'Year: ' . $year[0]->name . '<br>';
            } else {
                echo 'year: Not available<br>';
            }
            // Display Fuel Type if available
            if (!empty($fuel_type) && !is_wp_error($fuel_type)) {
                echo 'Fuel Type: ' . $fuel_type[0]->name . '<br>';
            } else {
                echo 'Fuel Type: Not available<br>';
            }

            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No cars found.';
    }

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('car-list', 'car_list_shortcode');


