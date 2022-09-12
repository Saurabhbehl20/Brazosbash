<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Form extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-form',
        'partials.content-full-width'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'form_section' => get_field('form_section'),
            'full_width_section' => get_field('full_width_section'),
        ];
    }
}
