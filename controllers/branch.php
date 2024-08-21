<?php


declare(strict_types=1);


$ads = (new \App\Branch())->getBranches();
loadView('dashboard/branch', ['ads' => $ads]);