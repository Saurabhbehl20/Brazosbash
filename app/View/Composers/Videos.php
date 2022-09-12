<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Videos extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-videos',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'video_section' => get_field('video_section'),
        ];
    }
}
