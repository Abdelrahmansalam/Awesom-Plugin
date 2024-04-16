<?php
namespace My_Awesome_Plugin;

use function Extended_CPTS\register_extended_post_type;

class CustomPostTypes {
    public static function init() {
        self::create_awesomes_post_type();
    }

    private static function create_awesomes_post_type() {
        \register_extended_post_type( 'awesomes', [
            'show_in_feed' => true,
            'public'       => true,
            'labels'       => [
                'singular' => 'Awesome',
                'plural'   => 'Awesomes',
            ],
            'supports' => ['title', 'editor', 'thumbnail']
        ]);
    }
}

// add_action('init', [CustomPostTypes::class, 'init']);