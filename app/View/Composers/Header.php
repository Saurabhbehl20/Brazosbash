<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
        'sections.footer',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'logo' => get_field('logo','option'),
            'slider' => get_field('slider','option'),
            'contact' => get_field('contact','option'),
            'link' => get_field('link','option'),

            'cta' => get_field('cta','option'),
            'social_icons' => get_field('social_icons','option'),
        ];
    }
}
