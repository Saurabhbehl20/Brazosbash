<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class About extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-about',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'about_intro_section' => get_field('about_intro_section'),
            'full_image_section' => get_field('full_image_section'),
            'about_content_section' => get_field('about_content_section'),
        ];
    }
}
