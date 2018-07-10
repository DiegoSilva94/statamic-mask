<?php

namespace Statamic\Addons\Mask;

use Statamic\Extend\Listener;

class MaskListener extends Listener {
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
    	'cp.add_to_head' => 'addToHead'
    ];

    public function addToHead()
    {
        return '<script type="text/javascript" src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>';
    }
}