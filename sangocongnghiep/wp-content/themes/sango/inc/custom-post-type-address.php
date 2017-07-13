<?php
/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function address_post_type() {

  $labels = array(
    'name'                => __( 'Tất cả địa chỉ', 'sango' ),
    'singular_name'       => __( 'Địa chỉ', 'sango' ),
    'add_new'             => _x( 'Thêm địa chỉ mới', 'sango' ),
    'add_new_item'        => __( 'Thêm địa chỉ mới', 'sango' ),
    'edit_item'           => __( 'Sửa địa chỉ', 'sango' ),
    'new_item'            => __( 'Địa chỉ mới', 'sango' ),
    'view_item'           => __( 'Xem địa chỉ', 'sango' ),
    'search_items'        => __( 'Tìm địa chỉ', 'sango' ),
    'not_found'           => __( 'Không tìm thấy', 'sango' ),
    'not_found_in_trash'  => __( 'Không tìm thấy trong thùng rác', 'sango' ),
    'parent_item_colon'   => __( 'Địa chỉ cha:', 'sango' ),
    'menu_name'           => __( 'Địa chỉ', 'sango' ),
  );

  $args = array(
    'labels'                   => $labels,
    'hierarchical'        => false,
    'description'         => 'description',
    'taxonomies'          => array('cat-address', 'post_tag' ),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-sticky',
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => true,
    'has_archive'         => true,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
    'supports'            => array(
      'title', 'editor'
      )
  );

  register_post_type( 'address', $args );
}

add_action( 'init', 'address_post_type' );


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
function cat_address_taxonomy() {

  $labels = array(
    'name'          => _x( 'Category Địa chỉ', 'Taxonomy plural name', 'sango' ),
    'singular_name'     => _x( 'Category Địa chỉ', 'Taxonomy singular name', 'sango' ),
    'search_items'      => __( 'Tìm Category Địa chỉ', 'sango' ),
    'popular_items'     => __( 'Popular Category Địa chỉ', 'sango' ),
    'all_items'       => __( 'Tất cả Category', 'sango' ),
    'parent_item'     => __( 'Category Địa chỉ cha', 'sango' ),
    'parent_item_colon'   => __( 'Category Địa chỉ cha', 'sango' ),
    'edit_item'       => __( 'Sửa Category Địa chỉ', 'sango' ),
    'update_item'     => __( 'Update Category Địa chỉ', 'sango' ),
    'add_new_item'      => __( 'Thêm mới Category Địa chỉ', 'sango' ),
    'new_item_name'     => __( 'Category Địa chỉ mới', 'sango' ),
    'add_or_remove_items' => __( 'Thêm hoặc xóa Category Địa chỉ', 'sango' ),
    'choose_from_most_used' => __( 'Sử dụng nhiều', 'sango' ),
    'menu_name'       => __( 'Category Địa chỉ', 'sango' ),
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

  register_taxonomy( 'cat-address', array( 'address' ), $args );
}

add_action( 'init', 'cat_address_taxonomy' );

?>