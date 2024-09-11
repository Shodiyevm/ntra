<?php

namespace Controller;

use App\Branch;

class BranchController
{
    public function getBranches(): void
    {
        $branchModel = new Branch();

        $branches = $branchModel->getBranches(); 
        loadView('dashboard/branch', ['branches' => $branches]); 

    }
   
    public function create(): void
    {
     
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            if (isset($_POST['branchName']) && isset($_POST['branchAddress'])) {
                $branchName = trim($_POST['branchName']);
                $branchAddress = trim($_POST['branchAddress']);

                if (!empty($branchName) && !empty($branchAddress)) {
                  
                    $branchModel = new Branch();
                    $branchModel->create($branchName, $branchAddress);

                 
                    header('Location: /branch');
                    exit();
                }
            }
        } else {
            
            loadView('dashboard/createBranch');
        }
    }
    public function getuserBranch(): void  
    {
        $branchModel = new Branch();
        $branches = $branchModel->getBranches();
        loadView('dashboard/userbranch', ['branches' => $branches]);
    }
    
}
