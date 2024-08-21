<?php

declare(strict_types=1);

$title       = $_POST['title'];
$description = $_POST['desc'];
$price       = (float) $_POST['price'];
$branch      = (int) $_POST['branch_id'];
$address     = $_POST['address'];
$rooms       = (int) $_POST['rooms'];

if ($_POST['title']
    && $_POST['desc']
    && $_POST['price']
    && $_POST['address']
    && $_POST['rooms']
) {
    // 1. E'lonni saqlash
    $newAdsId = (new \App\Ads())->create(
        $title,
        $description,
        10, // Bu yerda branch yoki user_id'ni dinamik ravishda berish kerak bo'lishi mumkin.
        2,
        $branch,
        $address,
        $price,
        $rooms
    );
        header('Location: /');

}

echo "Iltimos, barcha maydonlarni to'ldiring!";