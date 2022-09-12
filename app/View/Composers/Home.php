<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-front',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'hero_section' => get_field('hero_section'),
            'get_directions_section' => get_field('get_directions_section'),
            'joining_section' => get_field('joining_section'),
            'sponsors_section' => get_field('sponsors_section'),
            'full_image_section' => get_field('full_image_section'),

            'intro_section' => get_field('intro_section'),
        ];
    }
}
