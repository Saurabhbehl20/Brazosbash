<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class sponsor extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-sponsor',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'corporate_sponsors' => get_field('corporate_sponsors'),
            'platinum_sponsors' => get_field('platinum_sponsors_'),
            'diamond_sponsors' => get_field('diamond_sponsors'),
            'gold_sponsors' => get_field('gold_sponsors'),
            'thank_you_section' => get_field('thank_you_section'),
        ];
    }
}
