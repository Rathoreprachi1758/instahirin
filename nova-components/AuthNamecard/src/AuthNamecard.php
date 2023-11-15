<?php

namespace App\AuthNamecard;

use Laravel\Nova\Card;

class AuthNamecard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'authNamecard';
    }
    public function view()
    {
        $userName = auth()->check() ? auth()->user()->name : 'Guest';

        return view('Authname', [
            'userName' => $userName,
        ]);
    }
}
