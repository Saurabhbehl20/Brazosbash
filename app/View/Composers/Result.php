<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Result extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-result',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'results' => get_field('results'),
            'table' => get_field('table'),
        ];
    }
}
