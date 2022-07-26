<?php

namespace Delzdev\Pixel;

use Statamic\Fields\Fieldtype;

class Pixel extends Fieldtype
{
    protected $icon = 'earth';
    protected $categories = ['text'];

    /**
     * @return string
     */
    public static function title()
    {
        return 'Pixel';
    }

    /**
     * Adding the h-[] around the value
     *
     * @param $data
     *
     * @return string
     */
    public function process($data)
    {
        if (! $data) {
            return;
        }
        
        return 'h-[' . $data . ']';
    }
}
