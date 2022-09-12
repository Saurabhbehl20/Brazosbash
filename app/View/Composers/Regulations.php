<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Regulations extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-rules&regulation',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'rules_and_regulations' => get_field('rules_and_regulations'),
        ];
    }
}
