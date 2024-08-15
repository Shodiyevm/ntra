<?php


use App\Ads;

function  getAds() {

    return (new Ads())->getAds();

}