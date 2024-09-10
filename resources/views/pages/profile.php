<?php

loadPartials( path:"header", loadFromPublic: false );
?>
    
    <body class="font-body text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->


        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="index.html"><img src="assets/images/logo-light.png" alt=""></a>
                    </div>
        
                    <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                      
                        <li>
                            <a href="/"><i class="mdi mdi-home-city me-2"></i>Elonlar</a>
                        </li>

                        <li>
                            <a href="/profile"><i class="mdi mdi-home-heart me-2"></i>Mening elonlarim</a>
                        </li>

                        <li>
                            <a href="/ads/create"><i class="mdi mdi-home-plus me-2"></i>Elon Qoshish</a>
                        </li>

                        <li>
                            <a href="chat.html"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>User Profile</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="/profile">Profile</a></li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href=""><i class="mdi mdi-post-outline me-2"></i>Blog</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="mdi mdi-file-document-outline me-2"></i>Pages</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="starter.html">Starter</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="review.html">Review</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Term & Condition</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="mdi mdi-login me-2"></i>Authentication</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="signup-success.html">Signup Success</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="lock-screen.html">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="mdi mdi-layers me-2"></i>Miscellaneous</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="comingsoon.html">Comingsoon</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="error.html">Error</a></li>
                                    <li><a href="thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-slate-800 text-center">
                            <span class="relative z-10">
                                <span class="text-xl font-medium h5 text-white">Upgrade to Pro</span>

                                <span class="text-slate-400 mt-3 mb-5 block">Get one month free and subscribe to pro</span>

                                <a href="https://1.envato.market/hously" target="_blank" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
                            </span>
                
                            <span class="mdi mdi-home-city-outline text-[160px] absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center opacity-[0.02] text-white z-0"></span>
                        </li>
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-gray-50 dark:bg-slate-800">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar flex justify-between">
                        <div class="flex items-center space-x-1">
                            <!-- Logo -->
                            <a href="#" class="xl:hidden block me-2">
                                <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                                <span class="md:block hidden">
                                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                            </a>
                            <!-- Logo -->

                            <!-- show or close sidebar -->
                            <a id="close-sidebar" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" href="javascript:void(0)">
                                <i data-feather="menu" class="size-4"></i>
                            </a>
                            <!-- show or close sidebar -->
            
                            <!-- Searchbar -->
                            <div class="ps-1.5">
                                <div class="form-icon relative sm:block hidden">
                                    <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                                    <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                                </div>
                            </div>
                            <!-- Searchbar -->
                        </div>

                        <ul class="list-none mb-0 space-x-1">
                            <!-- Country Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                                    <img src="assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="list-none py-2 text-start">
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="assets/images/flags/germany.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> German</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="assets/images/flags/italy.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Italian</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="assets/images/flags/russia.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Russian</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="assets/images/flags/spain.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Spanish</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Country Dropdown -->

                            <!-- Notification Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                                    <i data-feather="bell" class="size-4"></i>
                                    <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                                    </span>
                                    <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="shopping-cart" class="size-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block">Order Complete</span>
                                                        <small class="text-slate-400">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <img src="assets/images/client/04.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block"><span class="font-semibold">Message</span> from Luis</span>
                                                        <small class="text-slate-400">1 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="dollar-sign" class="size-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block"><span class="font-semibold">One Refund Request</span></span>
                                                        <small class="text-slate-400">2 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="truck" class="size-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block">Deliverd your Order</span>
                                                        <small class="text-slate-400">Yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <img src="assets/images/client/05.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block"><span class="font-semibold">Cally</span> started following you</span>
                                                        <small class="text-slate-400">2 days ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- Notification Dropdown -->
            
                            <!-- User/Profile Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                    <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"><img src="assets/images/client/07.jpg" class="rounded-md" alt=""></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="profile.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-account-outline me-2"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="chat.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                                        </li>
                                        <li>
                                            <a href="profile-setting.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-cog-outline me-2"></i>Settings</a>
                                        </li>
                                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                        <li>
                                            <a href="lock-screen.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-lock-outline me-2"></i>Lockscreen</a>
                                        </li>
                                        <li>
                                            <a href="login.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-logout me-2"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- User/Profile Dropdown -->
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                <div class="container-fluid relative px-3">
                    <div class="layout-specing">
                        <div class="grid grid-cols-1">
                            <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                                <div class="relative shrink-0">
                                    <img src="assets/images/bg.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                                    <div class="absolute inset-0 bg-black/70"></div>
                                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-12 grid-cols-1">
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                                <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                                    <div class="profile-pic text-center mb-5">
                                        <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                                        <div>
                                            <div class="relative size-24 mx-auto">
                                                <img src="assets/images/client/07.jpg" class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                                <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                            </div>
    
                                            <div class="mt-4">
                                                <h5 class="text-lg font-semibold"><?php echo (new App\Session())->getName(); ?></h5>
                                        
                                                <p class="text-slate-400"><?php  echo (new App\Session())->getEmail(); ?></p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="border-t border-gray-100 dark:border-gray-700">
                                        <h5 class="text-xl font-semibold mt-4">Personal Details :</h5>
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                <div class="flex-1">
                                                    <h6 class="text-green-600 dark:text-white font-medium mb-0">Email :</h6>
                                                    <a href="" class="text-slate-400"><?php echo (new App\Session())->getEmail(); ?></a>
                                                </div>
                                            </div>
                                            <div class="flex items-center mt-3">
                                                <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                <div class="flex-1">
                                                    <h6 class="text-green-600 dark:text-white font-medium mb-0">Position:</h6>
                                                  <a href="" class="text-slate-400"><?php echo (new App\Session())->getposition(); ?></a>
                                                </div>
                                            </div>
                                            <div class="flex items-center mt-3">
                                                <i data-feather="italic" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                <div class="flex-1">
                                                    <h6 class="text-green-600 dark:text-white font-medium mb-0">Language :</h6>
                                                    <a href="" class="text-slate-400">English</a>, <a href="" class="text-slate-400">Uzbek</a>
                                                </div>
                                            </div>
                                            <div class="flex items-center mt-3">
                                                <i data-feather="globe" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                <div class="flex-1">
                                                    <h6 class="text-green-600 dark:text-white font-medium mb-0">Website :</h6>
                                                    <a href="" class="text-slate-400">www.najottalim.com</a>
                                                </div>
                                            </div>
                                           
                                            <div class="flex items-center mt-3">
                                                <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                <div class="flex-1">
                                                    <h6 class="text-green-600 dark:text-white font-medium mb-0">Location :</h6>
                                                    <a href="" class="text-slate-400">Beijing, China</a>
                                                </div>
                                            </div>
                                            <div class="flex items-center mt-3">
                                                <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                                <div class="flex-1">
                                                    <h6 class="text-green-600 dark:text-white font-medium mb-0">Cell No :</h6>
                                                    <a href="" class="text-slate-400"><?php echo (new App\Session())->getPhone(); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <h5 class="text-xl font-semibold">Calvin Carlo</h5>
                            
                                        <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                                    </div>
                    
                                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-xl font-semibold">My Property :</h5>

                                <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                                    <?php
                                    ;
                                    /**
                                     * @var  $ads
                                     */
                                    foreach ($ads as $ad): ?>
                                       
                                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                            <div class="relative">
                                                <img src="assets/images/ads/<?php echo $ad->image; ?>" alt="">
                                                
                                                <div class="absolute top-4 end-4">
                                                 
                                                <a href="ads/update/<?php echo $ad->id; ?>" class="icon-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </a>
                                                   
                                                </div>
                                                
                                            </div>
                                                
                                            <div class="p-6">
                                                <div class="pb-6">
                                                    <a href="/ads/<?php echo $ad->id?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?php echo $ad->title?></a>
                                                </div>

                                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                    <li class="flex items-center me-4">
                                                        <i class="mdi mdi-compress-arrows text-2xl me-2 text-green-600"></i>
                                                        <span><?php echo $ad->rooms?></span>
                                                    </li>

                                                    <li class="flex items-center me-4">
                                                        <i class="mdi mdi-bed-double text-2xl me-2 text-green-600"></i>
                                                        <span>4 Beds</span>
                                                    </li>

                                                    <li class="flex items-center">
                                                        <i class="mdi mdi-bath text-2xl me-2 text-green-600"></i>
                                                        <span>4 Baths</span>
                                                    </li>
                                                </ul>

                                                <ul class="pt-6 flex justify-between items-center list-none">
                                                    <li>
                                                        <span class="text-slate-400">Price</span>
                                                        <p class="text-lg font-medium">$ <?= $ad->price?></p>
                                                        </li>
                                                <form action="ads/delete/<?php echo $ad->id; ?>" method="POST" style="display: inline;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                   <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; cursor: pointer;">
                                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="width: 20px; height: 20px; margin-right: 5px;">
                                                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18.75A2.25 2.25 0 0 1 3.75 21H20.25A2.25 2.25 0 0 1 23 18.75V5.25A2.25 2.25 0 0 1 20.25 3H3.75A2.25 2.25 0 0 1 1.5 5.25v13.5A2.25 2.25 0 0 1 3.75 21ZM6.75 7.5H18M9 7.5V6.75a2.25 2.25 0 0 1 4.5 0V7.5M10.5 12V15M13.5 12V15" />
                                                         </svg>
                                                           O'chirish
                                                    </button>
                                                 </form>

                                                
                                                </ul>
                                            </div>
                                        </div><!--end property content-->
                                    <?php
                                    endforeach; ?>
                                </div>
                            </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div><!--end container-->

              
            </main>
            <!--End page-content" -->
        </div>
      
        <?php
        loadPartials(path: 'footer', loadFromPublic: false);
        ?>