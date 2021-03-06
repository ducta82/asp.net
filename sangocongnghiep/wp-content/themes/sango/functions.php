<?php
/**
 * sango functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sango
 */

if ( ! function_exists( 'sango_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
define('THEME_URI', get_template_directory_uri());
function sango_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sango, use a find and replace
	 * to change 'sango' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sango', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'sango' ),
	) );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-2' => esc_html__( 'Second Menu', 'sango' ),
	) );
	register_nav_menus( array(
		'menu-footer1' => esc_html__( 'Menu footer 1', 'sango' ),
	) );
	register_nav_menus( array(
		'menu-footer2' => esc_html__( 'Second footer 2', 'sango' ),
	) );
	register_nav_menus( array(
		'menu-footer3' => esc_html__( 'Second footer 3', 'sango' ),
	) );
	register_nav_menus( array(
		'menu-footer4' => esc_html__( 'Second footer mini', 'sango' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sango_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'sango_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sango_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sango_content_width', 640 );
}
add_action( 'after_setup_theme', 'sango_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sango_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sango' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sango' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_widget("sango_widget");
	register_widget("showpost_Widget");
}
add_action( 'widgets_init', 'sango_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sango_scripts() {
	wp_enqueue_style( 'sango-style', get_stylesheet_uri() );
	wp_enqueue_script( 'sango-jquery', get_template_directory_uri() . '/catalog/view/javascript/jquery/jquery-2.1.1.min.js', array(), '', false );
	wp_enqueue_script( 'sango-magnific-popup', get_template_directory_uri() . '/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js', array(), '', true );
	wp_enqueue_script( 'sango-bootstrap', get_template_directory_uri() . '/catalog/view/javascript/bootstrap/js/bootstrap.min.js', array(), '', false );
	wp_enqueue_script( 'sango-carousel', get_template_directory_uri() . '/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js', array(), '', false );
	wp_enqueue_script( 'sango-countdown', get_template_directory_uri() . '/catalog/view/javascript/pavdeals/countdown.js', array(), '', true );
	wp_enqueue_script( 'sango-themepunch-plugins', get_template_directory_uri() . '/catalog/view/javascript/layerslider/jquery.themepunch.plugins.min.js', array(), '', false );
	wp_enqueue_script( 'sango-themepunch-revolution', get_template_directory_uri() . '/catalog/view/javascript/layerslider/jquery.themepunch.revolution.min.js', array(), '', false );
	wp_enqueue_script( 'sango-common', get_template_directory_uri() . '/catalog/view/javascript/common.js', array(), '', true );
	wp_enqueue_script( 'sango-lexusgolmartcommon', get_template_directory_uri() . '/catalog/view/theme/lexus_golmart/javascript/common.js', array(), '', true );

	//wp_enqueue_script( 'sango-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sango_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * custom post type address
 */
require get_template_directory() . '/inc/custom-post-type-address.php';

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function product_post_type() {

	$labels = array(
		'name'                => __( 'All Products', 'sango' ),
		'singular_name'       => __( 'Product', 'sango' ),
		'add_new'             => _x( 'Add New Product', 'sango', 'sango' ),
		'add_new_item'        => __( 'Add New Products', 'sango' ),
		'edit_item'           => __( 'Edit Product', 'sango' ),
		'new_item'            => __( 'New Product', 'sango' ),
		'view_item'           => __( 'View Product', 'sango' ),
		'search_items'        => __( 'Search Product', 'sango' ),
		'not_found'           => __( 'No Product found', 'sango' ),
		'not_found_in_trash'  => __( 'No Product found in Trash', 'sango' ),
		'parent_item_colon'   => __( 'Parent Product:', 'sango' ),
		'menu_name'           => __( 'Products', 'sango' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array('cat-product', 'post_tag' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-store',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
			)
	);

	register_post_type( 'product', $args );
}

add_action( 'init', 'product_post_type' );


/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function cat_product_taxonomy() {

	$labels = array(
		'name'					=> _x( 'Category Product', 'Taxonomy plural name', 'sango' ),
		'singular_name'			=> _x( 'Category Product', 'Taxonomy singular name', 'sango' ),
		'search_items'			=> __( 'Search Category Product', 'sango' ),
		'popular_items'			=> __( 'Popular Category Product', 'sango' ),
		'all_items'				=> __( 'All Category', 'sango' ),
		'parent_item'			=> __( 'Parent Category Product', 'sango' ),
		'parent_item_colon'		=> __( 'Parent Category Product', 'sango' ),
		'edit_item'				=> __( 'Edit Category Product', 'sango' ),
		'update_item'			=> __( 'Update Category Product', 'sango' ),
		'add_new_item'			=> __( 'Add New Category Product', 'sango' ),
		'new_item_name'			=> __( 'New Category Product', 'sango' ),
		'add_or_remove_items'	=> __( 'Add or remove Category Product', 'sango' ),
		'choose_from_most_used'	=> __( 'Choose from most used sango', 'sango' ),
		'menu_name'				=> __( 'Category Products', 'sango' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'cat-product', array( 'product' ), $args );
}

add_action( 'init', 'cat_product_taxonomy' );
/*
* hiden category product description 
*/
add_filter("manage_edit-cat-product_columns", 'theme_columns'); 
 
function theme_columns($theme_columns) {
    $new_columns = array(
        'cb' => '<input type="checkbox" />',
        'name' => __('Name'),
        'header_icon' => '',
//      'description' => __('Description'),
        'slug' => __('Slug'),
        'posts' => __('Posts')
        );
    return $new_columns;
}

/*
* add custom WYSIWYG Editor in category product edit page
*/
add_action("cat-product_edit_form_fields", 'add_form_fields_example', 10, 2);

function add_form_fields_example($term, $taxonomy){
    ?>
    <tr valign="top">
        <th scope="row">Description</th>
        <td>
            <?php wp_editor(html_entity_decode($term->description), 'description', array('media_buttons' => false)); ?>
            <script>
                jQuery(window).ready(function(){
                    jQuery('label[for=description]').parent().parent().remove();
                });
            </script>
        </td>
    </tr>
    <?php
} 

/**
 * Custom walker class.
 */
class MenuDoc_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	 if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		if ($args->walker->has_children && $depth == 0){
			$afterlink = '<b class="caret"></b>';
			$class_names = $class_names ? ' class="'. esc_attr( $class_names ) . ' parent dropdown"' : '';
        }else{
         	$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : ''; 
        }
		//$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= $afterlink;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/*
* custom breadcrumb product
*/
function the_breadcrumbs_product() {
        global $post;
 		echo '<div class="container"><div class="breadcrumbs"> <ul class="list-unstyled breadcrumb-links">';
        if (!is_home()) {
 		
            echo "<li><a href=".get_option('home').">Trang Chủ</a></li>";
                if (is_singular('product')) {
                	$cats = get_the_terms( $post->ID, 'cat-product' );
	                $parent = $cats[0]->parent;
	                if($parent){
	                	echo '<li><a href="'.get_term_link($parent).'">'.get_cat_name($parent).'</a></li>';
	                	echo '<li><a href="'.get_term_link($cats[0]->term_id).'">'.$cats[0]->name.'</a></li>';
	                	echo '<li>'.get_the_title().'</li>';	
	                }else{
	                	echo '<li><a href="">'.get_the_title().'</a></li>';	
	                }
                }elseif (is_tax( 'cat-product')) {
                	$cats = get_queried_object();
                	$parent = $cats->parent;
                	if($parent){
                		echo '<li><a href="'.get_term_link($parent).'">'.get_cat_name($parent).'</a></li>';
	                	echo '<li><a href="'.get_term_link($cats->term_id).'">'.$cats->name.'</a></li>';
                	}else{
	                	echo '<li><a href="'.get_term_link($cats->term_id).'">'.$cats->name.'</a></li>';
                	}
                }elseif (is_single()) {
                	$cats = get_the_terms( $post->ID, 'category' );
	                $parent = $cats[0]->parent;
	                if($parent){
	                	echo '<li><a href="'.get_term_link($parent).'">'.get_cat_name($parent).'</a></li>';
	                	echo '<li><a href="'.get_term_link($cats[0]->term_id).'">'.$cats[0]->name.'</a></li>';
	                	echo '<li>'.get_the_title().'</li>';	
	                }else{
	                	echo '<li><a href="">'.get_the_title().'</a></li>';	
	                }
                }
                elseif (is_category()) {
                	$cats = get_queried_object();
                	$parent = $cats->parent;
                	if($parent){
                		echo '<li><a href="'.get_term_link($parent).'">'.get_cat_name($parent).'</a></li>';
	                	echo '<li><a href="'.get_term_link($cats->term_id).'">'.$cats->name.'</a></li>';
                	}else{
	                	echo '<li><a href="'.get_term_link($cats->term_id).'">'.$cats->name.'</a></li>';
                	}
                }
                elseif (is_page()) {
 
                if($post->post_parent){
                    $anc = get_post_ancestors( $post->ID );
                    $anc_link = get_page_link( $post->post_parent );
 
                    foreach ( $anc as $ancestor ) {
                        $output = " > <a href=".$anc_link.">".get_the_title($ancestor)."</a> > ";
                    }
 
                    echo $output;
                    the_title();
 
                } else {
                    echo ' > ';
                    echo the_title();
                }
            }
        }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"Archive: "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"Archive: "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"Archive: "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"Author's archive: "; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Blogarchive: "; echo'';}
    elseif (is_search()) {echo"Search results: "; }
    echo '</div></div></div>';
}

/*
* Get custom field 
*/
if(!function_exists('get_custom_field_by_id')){
	function get_custom_field_by_id($id){
		$custom = array();
		$custom['product_price'] = get_field('product_price',$id);
		$custom['dactinh_sp'] = get_field('dactinh_sp',$id);
		$custom['tinh_trang'] = get_field('tinh_trang',$id);
		$custom['kich_thuoc'] = get_field('kich_thuoc',$id);
		$custom['ma_san_pham'] = get_field('ma_san_pham',$id);
		return $custom;
	}
}

/**
 * category Widget Class
 */
class sango_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function sango_widget() {
        parent::WP_Widget(false, $name = 'Hiện category');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        extract( $args );
        $category_id 	= $instance['category_id'];
        $term = get_term_by('id', $category_id, 'cat-product');
        $child_term = get_term_children( $category_id, 'cat-product' );
        ?>
              <?php echo $before_widget; ?>
              <div class="panel panel-primary panel-v3 category">
	                <div class="panel panel-default">
	                    <div class="bg-default-sale panel-heading">
	                        <h4 class="panel-title white font-size-14"><a href="<?php echo get_term_link( $term->term_id, 'cat-product' );?>"><?php echo $term->name;?></a></h4></div>
	                </div>
	                <div class="panel-body tree-menu">
	                    <ul id="accordion1" class="accordion">
	                    <?php
	                    	foreach ( $child_term as $child ) {
								$terms = get_term_by( 'id', $child, 'cat-product' );
								echo '<li><a href="' . get_term_link( $child, 'cat-product' ) . '">' . $terms->name . '</a></li>';
							}
	                    ?>
	                    </ul>
	                </div>
	            </div>
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['category_id'] = strip_tags($new_instance['category_id']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
        $categories = get_terms( array('taxonomy'=> 'cat-product','hide_empty' => false));
        echo '<select id="'.$this->get_field_id('category_id').'" name="'.$this->get_field_name('category_id').'" class="category_filter">';
        foreach ($categories as $value) {
            echo '<option '.selected( $instance['category_id'], $value->term_id).' value="'.$value->term_id.'">'.$value->name.'</option>';
        }
        echo '</select>';
    }
} // end class sango_widget

/**
 * new WordPress Widget format
 */
class showpost_Widget extends WP_Widget {
    function showpost_Widget() {
        $widget_ops = array( 'description' => 'Hiển thị 1 hoặc nhiều bài viết mới' );
        $this->WP_Widget( '','Hiển thị bài viết mới nhất', $widget_ops );
    }
    function widget( $args, $instance ) {
        if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$post_title = ( ! empty( $instance['post_title'] ) ) ? $instance['post_title'] : __( 'Recent Posts' );

		$post_number = ( ! empty( $instance['post_number'] ) ) ? absint( $instance['post_number'] ) : 1;
		if ( ! $post_number )
			$post_number = 1;

		/**
		 * Filters the arguments for the Recent Posts widget.
		 *
		 * @since 3.4.0
		 *
		 * @see WP_Query::get_posts()
		 *
		 * @param array $args An array of arguments used to retrieve the recent posts.
		 */
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $post_number,
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) );
		echo '<div class="panel-orange sidebar panel-v3 productcarousel">';
		if ($r->have_posts()) :
		?>
		<?php echo $args['before_widget']; ?>
		<?php if ( $post_title ) {
			echo '<div class="panel-heading" style="border-top-width: 3px;border-top-style: solid;">';
			echo '<h4 class="panel-title">'.$post_title .'</h4>';
			echo '</div>';
		} ?>
		<div class="" style="border:1px solid #eee">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right">	
					<div class="latest-posts-body" style="margin: 0 auto;width:90%;">
					<?php while ( $r->have_posts() ) : $r->the_post(); ?>
						<div class="box-post">
							<div class="latest-posts-image pull-left">
								<style type="text/css" media="screen">
									.latest-posts-image.pull-left img{
										width: 100%;
									}
								</style>
								<a href="<?php the_permalink(); ?>">
									<?=get_the_post_thumbnail();?>
								</a>
							</div>							  	
							<div>
						  		<h6 class="latest-posts-title">
						  			<a href="<?php the_permalink(); ?>" title="<?php get_the_title() ? the_title() : the_ID(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
						  		</h6>
							</div>
						</div>
					<?php endwhile; ?>
					</div> <!-- end latest-posts-body -->
				</div>
			</div>
		</div>
		</div>	
		<?php echo $args['after_widget']; ?>
		<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;
    echo $after_widget;
    }
    function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['post_title'] = sanitize_text_field( $new_instance['post_title'] );
		$instance['post_number'] = (int) $new_instance['post_number'];
		return $instance;
    }
    function form( $instance ) {
		$post_title     = isset( $instance['post_title'] ) ? esc_attr( $instance['post_title'] ) : '';
		$post_number    = isset( $instance['post_number'] ) ? absint( $instance['post_number'] ) : 1;
    	?>
		<p><label for="<?php echo $this->get_field_id( 'post_title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'post_title' ); ?>" name="<?php echo $this->get_field_name( 'post_title' ); ?>" type="text" value="<?php echo $post_title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'post_number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input class="tiny-text" id="<?php echo $this->get_field_id( 'post_number' ); ?>" name="<?php echo $this->get_field_name( 'post_number' ); ?>" type="number" step="1" min="1" value="<?php echo $post_number; ?>" size="3" /></p>
		<?php
    }
}

/*
* tag cloud 
*/
function tag_cloud_filter($args = array()) {
 $args['smallest'] = 1.3;
 $args['largest'] = 2;
 $args['unit'] = 'em';
 return $args;
}
add_filter('widget_tag_cloud_args', 'tag_cloud_filter', 90);
/*
* Custom comment form
*/
function disable_comment_url($fields) { 
    unset($fields['url']);

    return $fields;
}
add_filter('comment_form_default_fields','disable_comment_url');

//đổi vị trí comment field xuống dưới
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


/*
* get sản phẩm khuyển mãi 
* $j - số lượng sp hiển thị trên slide
*/

if(!function_exists('get_sale_product')){
	function get_sale_product($j){
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => -1,
		'orderby' => 'rand',
		'post_status' => 'publish',
		);              
	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : 
		$i = 0;
		$post_count = $the_query->post_count;
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
		$cls = $i == 0 ? 'active' : '';
		$start_div = $i == 0 ? '<div class="item '.$cls.'"><div class="row products-row">' : '';
		$end_div = ($i+1)%$j == 0 && ($i+1) !== $post_count ? '</div></div><div class="item"><div class="row products-row">' : '';
		$end_div_total = ($i+1) == $post_count ? '</div></div>' : '';
		$price = get_field('product_price',get_the_id());
		echo $start_div;
		?>
		<div class="col-lg-2 col-sm-2 col-xs-6  product-col border">
	        <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">
	            <div class="block-img text-center">
	                <div class="image">
	                    <span class="product-label sale"><span class="product-label-special">Sales</span></span>
	                    <a class="img" itemprop="url" title="Sàn gỗ giá rẻ 8mm" href="<?php the_permalink(); ?>">
		                   <?php the_post_thumbnail();?>
		                 </a>
	                </div>
	            </div>
	            <div class="product-meta">
	                <div class="top">
	                    <h3 class="name" itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
	                    <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
	                        <span class="price-new"><?php echo $price; ?> VND</span>

	                        <meta content="<?php echo $price; ?>" itemprop="price">

	                        <meta content="" itemprop="priceCurrency">
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<?php
		echo $end_div;
		echo $end_div_total;
    	$i++; endwhile;
    endif;                                       	                            
	}
}

/*
* custom metabox cat-product
*/
