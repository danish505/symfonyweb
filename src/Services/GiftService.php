<?php

namespace App\Services;


class GiftService{


    public $gift_array = ['Flower','LCD','Cell','Motorcycle'];


    public function __construct(){
        shuffle($this->gift_array);
    }
}