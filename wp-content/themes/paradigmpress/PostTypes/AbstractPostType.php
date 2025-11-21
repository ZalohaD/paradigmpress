<?php

namespace ParadigmPress\PostTypes;

abstract class AbstractPostType
{
    protected string $post_type;
    protected string $singular;
    protected string $plural;

    public function __construct()
    {
        add_action('init', [$this, 'register']);
    }

    abstract protected function get_post_type(): string;
    abstract protected function get_singular(): string;
    abstract protected function get_plural(): string;

    protected function get_labels(): array
    {
        $singular = $this->singular;
        $plural = $this->plural;

        return [
            'name' => $plural,
            'singular_name' => $singular,
            'add_new' => __('Add new', 'paradigmpress'),
            'add_new_item' => __('Add ', 'paradigmpress') . $singular,
            'edit_item' => __('Edit ', 'paradigmpress') . $singular,
            'new_item' => __('New ', 'paradigmpress') . $singular,
            'view_item' => __('View ', 'paradigmpress') . $singular,
            'search_items' => __('Search ', 'paradigmpress') . $plural,
            'not_found' => __('No ', 'paradigmpress') . $plural . __(' found', 'paradigmpress'),
            'not_found_in_trash' => __('No ', 'paradigmpress') . $plural . __(' found in Trash', 'paradigmpress'),
            'menu_name' => $plural,
            'all_items' => __('All ', 'paradigmpress') . $plural,
        ];
    }

    protected function get_args(): array
    {
        return [
            'labels' => $this->get_labels(),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => $this->post_type],
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'show_in_rest' => true, // Gutenberg
        ];
    }

    public function register(): void
    {
        $this->post_type = $this->get_post_type();
        $this->singular = $this->get_singular();
        $this->plural = $this->get_plural();

        register_post_type($this->post_type, $this->get_args());
    }
}
