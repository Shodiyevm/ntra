<?php

/**
 *  $var  $id
 */


$ad = (new \App\Ads())->getAdr($id);

// $ad->image ="../assets/images/ads/{$ad->image}";


loadView('single-ad', ['ad' => $ad]);

 
?>
