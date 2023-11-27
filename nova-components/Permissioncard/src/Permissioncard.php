<?php
namespace NovaComponents\Permissioncard\src;
// namespace NovaComponents\Permissioncard;
use Laravel\Nova\Card;
// dd('Here');

class Permissioncard extends Card
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
        return 'permissioncard';
    }

    public function calculate()
    {
        return [
            'message' => 'This is your custom permission card.',
        ];
    }
}
