<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Entertainment extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-entertainment',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'entertainment' => get_field('entertainment'),
        ];
    }
}
