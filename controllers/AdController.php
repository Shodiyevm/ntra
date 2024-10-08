<?php

declare(strict_types=1);

namespace Controller;
use App\Session;

class AdController

{
    public function index(): void
    {
        $ads = (new \App\Ads())->getAds();
        loadView('dashboard/adminpro', ['ads' => $ads]);
    }
    public function show(int $id): void
    {
        $ad = (new \App\Ads())->getAd($id);
        $ad->image = "../assets/images/ads/$ad->image";

        loadView('single-ad', ['ad' => $ad]);
    }
    
    public function create(): void
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $user_id = ( new Session)->getId();
        $status_id =$_POST['status_id'];
        $branch_id = (int) $_POST['branch_id'];
        $address = $_POST['address'];
        $price = (float) $_POST['price'];
        $rooms = (int) $_POST['rooms'];

        if ($title && $description && $price && $address && $rooms) {
            $newAdsId = (new \App\Ads())->createAds(
                $title,
                $description,
                $user_id,
                2,
                7,
                $address,
                $price,
                $rooms
            );

            if ($newAdsId) {
                $imageHandler = new \App\Image();
                $fileName = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int) $newAdsId, $fileName);

                header('Location: /');
                exit();
            }
           
            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }


    public function edit(int $id): void
{
   
    
 
    loadView('dashboard/create-ad', ['ad' => $ad = (new \App\Ads())->getAd($id)]);
}

    public function update(int $id): void
    {
    
        $ad = new \App\Ads();
        $image = new \App\Image();

        if ($_FILES['image']['error'] != 4) {
            $uploadPath = basePath("/public_html/assets/images/ads/");
            $imageDetails = $image->getImage($id);
            $newFileName = $image->handleUpload();
            // Eski rasmni o'chirish
            if ($imageDetails && file_exists($uploadPath . $imageDetails->name)) {
                unlink($uploadPath . $imageDetails->name);
            }

            // Rasm nomini yangilash
            $image->updateImage($imageDetails->id, $newFileName);
        }

        $ad->updateAds(
            id: $id,
            title: $_POST['title'],
            description: $_POST['description'],
            price: (float)$_POST['price'],
            address: $_POST['address'],
            rooms: (int)$_POST['rooms']
        );

        redirect('/profile');
    }
    public function createAdForm(): void
{
    $branches=(new \App\Branch())->getBranches();
    $users=(new \App\User())->getUsers();
    loadView('dashboard/create-ad' , ['branches' => $branches] , ['users' => $users]);
}

public function home()
{
   
    $searchPhrase = $_GET['search_phrase'] ?? '';
    $ads = (new \App\Ads())->getAds();
    $branches = (new \App\Branch())->getBranches();
    // $users=(new \App\User())->getUsers();

    loadView('home', ['ads' => $ads, 'branches' => $branches]);
}

  

    public function delete(int $id): void
    {
        
        (new \App\Ads())->deleteAds($id);
        redirect('/profile');
    }
   
    public function search(): void
    {

        $searchPhrase = $_REQUEST['search_phrase'];

        $searchBranch = $_GET['search_branch'] ? (int) $_GET['search_branch'] : null;
        $gender=$_GET['gender'] ? $_GET['gender'] : null;
        $searchMinPrice = $_GET['min_price'] ? (int) $_GET['min_price'] : 0;
        $searchMaxPrice = ($_GET['max_price']) ? (int) $_GET['max_price'] : PHP_INT_MAX;



        $ads = (new \App\Ads())->superSearch($searchPhrase, $searchBranch, $gender, $searchMinPrice, $searchMaxPrice) ;
        $branches = (new \App\Branch())->getBranches();
        $genders = (new \App\User())->getUsers();
        loadView('home', ['ads' => $ads, 'branches' => $branches , 'genders' => $genders]);
    }

    public function showcontact(): void
    {
        loadView('dashboard/contact');
    }
}


