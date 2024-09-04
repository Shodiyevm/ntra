<?php

declare(strict_types=1);
loadPartials('header');
loadPartials('navbar');
?>


    <div class="page-wrapper toggled">
        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-bar flex justify-between">
                    <div class="flex items-center space-x-1">

                        <!-- Searchbar -->
                    </div>

                    <ul class="list-none mb-0 space-x-1">
                        <!-- Country Dropdown -->

                        <!-- Country Dropdown -->

                        <!-- Notification Dropdown -->

                        <!-- Notification Dropdown -->

                        <!-- User/Profile Dropdown -->

                        <!-- User/Profile Dropdown -->
                    </ul>
                </div>
            </div>
            <!-- Top Header -->

            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">

                    </div>

                    <div class="container relative">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">

                            <form id="ads-create" action="/branch/create" method="post" enctype="multipart/form-data">
                            <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                                <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                                    <!-- Content -->
                                    <div class="col-span-12">
                                        <label for="title" class="font-medium">Filial nomi</label>
                                        <input name="branchName" id="title" type="text" class="form-input mt-2" placeholder="Filial nomini kiriting :">
                                    </div>

                                    <div class="col-span-12">
                                        <label for="title" class="font-medium">Filial Manzili</label>
                                        <input name="branchAddress" id="title" type="text" class="form-input mt-2" placeholder="Filial manzilini kiriting kiriting :">
                                    </div>

                                    <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Property</button>

                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
                <div class="container-fluid">
                    <div class="grid grid-cols-1">
                        <div class="sm:text-start text-center mx-md-2">
                            <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->
<?php
loadPartials('footer');
?>