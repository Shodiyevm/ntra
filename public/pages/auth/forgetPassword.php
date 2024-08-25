<?php
loadPartial('header');
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

<section class="h-screen flex items-center justify-center relative overflow-hidden bg-[url('../../assets/images/01.jpg')] bg-no-repeat bg-left-bottom bg-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
    <div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
            <div class="relative overflow-hidden bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                <div class="p-6">
                    <a href="">
                        <img src="assets/images/logo-dark.png" class="mx-auto block dark:hidden" alt="">
                        <img src="assets/images/logo-light.png" class="mx-auto dark:block hidden" alt="">
                    </a>
                    <h5 class="my-6 text-xl font-semibold">Reset Your Password</h5>
                    <div class="grid grid-cols-1">
                        <p class="text-slate-400 mb-6">Please enter your email address. You will receive a link to create a new password via email.</p>
                        <form class="text-start" method="post" action="/forget/password">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-medium" for="LoginEmail">Email Address:</label>
                                    <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com">
                                </div>

                                <div class="mb-4">
                                    <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Send</a>
                                </div>

                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Remember your password ? </span><a href="login.html" class="text-black dark:text-white font-medium">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 text-center">
                    <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Designed by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section><!--end section -->

<div class="fixed bottom-3 end-3">
    <a href="" class="back-button btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i data-feather="arrow-left" class="size-4"></i></a>
</div>

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="size-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="size-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- LTR & RTL Mode Code -->
<div class="fixed top-[40%] -end-3 z-50">
    <a href="" id="switchRtl">
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden" >LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->

<!-- JAVASCRIPTS -->
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>

<