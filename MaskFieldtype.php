<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 06/07/18
 * Time: 13:19
 */

namespace Statamic\Addons\Mask;


use Statamic\Extend\Fieldtype;

class MaskFieldtype extends Fieldtype
{
    public function blank()
    {
        return null;
    }

    public function preProcess($data)
    {
        return $data;
    }

    public function process($data)
    {
        return $data;
    }
}