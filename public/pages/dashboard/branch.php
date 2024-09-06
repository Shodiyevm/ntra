<?php
loadPartials( path:"header", loadFromPublic: false );
?>
 
<div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="index.html"><img src="assets/images/logo-light.png" alt=""></a>
                    </div>
        
                    <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                        <li>
                            <a href="/admin"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Admin</a>
                        </li>

                        <li>
                            <a href="/"><i class="mdi mdi-home-city me-2"></i>Elonlar</a>
                        </li>

                        <li>
                            <a href="/branch"><i class="mdi mdi-home-heart me-2"></i>Filial</a>
                        </li>

                        <li>
                            <a href="add-property.html"><i class="mdi mdi-home-plus me-2"></i>Add Properties</a>
                        </li>

                        <li>
                            <a href="chat.html"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>User Profile</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="profile-setting.html">Profile Settings</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="mdi mdi-post-outline me-2"></i>Blog</a>
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

                 <!-- Top Header -->

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <?php foreach ($branches as $branch) : ?>
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="relative">
                                <img src="data:image/png;base64,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" alt="Filial rasmi" class="w-full h-48 object-cover">
                                <div class="absolute top-4 end-4">
                                    <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600">
                                        <i class="mdi mdi-heart text-[20px]"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="/branch/<?= $branch->id ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                                        Filial nomi: <?= htmlspecialchars($branch->name); ?>
                                    </a>
                                </div>
                                <div class="pb-6">
                                    <a href="/branch/<?= $branch->id ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                                        Filial manzili: <?= htmlspecialchars($branch->address); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

    </main>
    <!--End page-content" -->
</div>
        <?php
        loadPartials( path:"footer", loadFromPublic: false );
        ?>