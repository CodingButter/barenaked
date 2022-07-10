<?php
function cptui_register_my_cpts_our_work()
{

    /**
     * Post Type: Our Work.
     */

    $labels = [
        "name" => __("Our Work", "barenaked"),
        "singular_name" => __("Client Projects", "barenaked"),
        "menu_name" => __("Client Work", "barenaked"),
        "all_items" => __("Client Projects", "barenaked"),
        "add_new" => __("Add new Client", "barenaked"),
        "add_new_item" => __("Add new Client Project", "barenaked"),
        "edit_item" => __("Edit Client Project", "barenaked"),
        "new_item" => __("New Client Project", "barenaked"),
        "view_item" => __("View Client Project", "barenaked"),
        "view_items" => __("View Client Projects", "barenaked"),
        "search_items" => __("Search Client Project", "barenaked"),
        "not_found" => __("No Client Project Found", "barenaked"),
        "not_found_in_trash" => __("No Client Project in Trash", "barenaked"),
        "featured_image" => __("Featured Project Image", "barenaked"),
        "set_featured_image" => __("Set Featured Project Image", "barenaked"),
        "remove_featured_image" => __("Remove Featured Project Image", "barenaked"),
        "use_featured_image" => __("Use Featured Project Image", "barenaked"),
        "archives" => __("Our Work", "barenaked"),
        "insert_into_item" => __("Insert Into Client Projects", "barenaked"),
        "uploaded_to_this_item" => __("Upload to this Client Project", "barenaked"),
        "filter_items_list" => __("Filter Client Projects", "barenaked"),
        "items_list_navigation" => __("Our Work Listing Screen", "barenaked"),
        "items_list" => __("Our Work List", "barenaked"),
        "attributes" => __("Client Project Attributes", "barenaked"),
        "name_admin_bar" => __("New Client Project", "barenaked"),
        "item_published" => __("Client Project Published", "barenaked"),
        "item_published_privately" => __("Client Project Published Privately", "barenaked"),
        "item_reverted_to_draft" => __("Client Project Reverted to Draft", "barenaked"),
        "item_scheduled" => __("Client Project Scheduled", "barenaked"),
        "item_updated" => __("Client Project Updated", "barenaked"),
    ];

    $args = [
        "label" => __("Our Work", "barenaked"),
        "labels" => $labels,
        "description" => "Client Websites We have created",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => "our-work",
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "our-work", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("our-work", $args);
}

add_action('init', 'cptui_register_my_cpts_our_work');
/*
{"our-work":{"name":"our-work","label":"Our Work","singular_label":"Client Projects","description":"Client Websites We have created","public":"true","publicly_queryable":"true","show_ui":"true","show_in_nav_menus":"true","delete_with_user":"false","show_in_rest":"true","rest_base":"","rest_controller_class":"","rest_namespace":"","has_archive":"true","has_archive_string":"our-work","exclude_from_search":"false","capability_type":"post","hierarchical":"false","can_export":"false","rewrite":"true","rewrite_slug":"","rewrite_withfront":"true","query_var":"true","query_var_slug":"","menu_position":"","show_in_menu":"true","show_in_menu_string":"","menu_icon":"","register_meta_box_cb":null,"supports":["title","thumbnail"],"taxonomies":[],"labels":{"menu_name":"Client Work","all_items":"Client Projects","add_new":"Add new Client","add_new_item":"Add new Client Project","edit_item":"Edit Client Project","new_item":"New Client Project","view_item":"View Client Project","view_items":"View Client Projects","search_items":"Search Client Project","not_found":"No Client Project Found","not_found_in_trash":"No Client Project in Trash","featured_image":"Featured Project Image","set_featured_image":"Set Featured Project Image","remove_featured_image":"Remove Featured Project Image","use_featured_image":"Use Featured Project Image","archives":"Our Work","insert_into_item":"Insert Into Client Projects","uploaded_to_this_item":"Upload to this Client Project","filter_items_list":"Filter Client Projects","items_list_navigation":"Our Work Listing Screen","items_list":"Our Work List","attributes":"Client Project Attributes","name_admin_bar":"New Client Project","item_published":"Client Project Published","item_published_privately":"Client Project Published Privately","item_reverted_to_draft":"Client Project Reverted to Draft","item_scheduled":"Client Project Scheduled","item_updated":"Client Project Updated","parent_item_colon":""},"custom_supports":"","enter_title_here":"Add Client Project"}}
*/