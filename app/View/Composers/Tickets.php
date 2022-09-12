<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Tickets extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-tickets',
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
            'brazos_bash_entry' => get_field('brazos_bash_entry'),
            'two_column_content' => get_field('two_column_content')
        ];
    }
}
