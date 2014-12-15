<?php

namespace Howtomakeaturn\Allpay;

class Helper{
    public function deadline($date)
    {
        $dt = new \DateTime($date);
        $dt->sub(new \DateInterval('PT' . 1 . 'M'));
        return $dt;
    }     
}
