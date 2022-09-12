<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class innerhero extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-innerhero',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'inner_hero_section' => get_field('inner_hero_section'),
        ];
    }
}
