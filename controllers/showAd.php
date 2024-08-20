<?php



$ad = (new \App\Ads())->getAdr($id);

 loadView('single-ad', ['ad' => $ad]);

 
?>
