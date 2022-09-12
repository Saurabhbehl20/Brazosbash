<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class DefaultPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'page',
        'archive-gallery',
        'single-gallery',
        'partials.content-single-gallery',
        'partials.content-intro',
        'partials.content-bottom'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'events_hero_section' => get_field('events_hero_section','option'),
            'inner_hero_section' => get_field('inner_hero_section'),
            'gallery' => get_field('gallery','option'),
            'gallery_images' => get_field('gallery'),
            'intro_section' => get_field('intro_section'),
            'bottom_content' => get_field('bottom_content', 'option')
        ];
    }
}
