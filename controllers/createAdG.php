<?php

$branches = (new App\Branch())->getBranches();
$ads = (new \App\Ads())->getAds();

loadView('dashboard/create-ad', ['branches' => $branches, 'ads' => $ads]);
?>