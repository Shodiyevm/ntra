<?php

$ads = (new  \App\Ads())->getAds();


loadView('home', [ 'ads' => $ads]);