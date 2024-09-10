<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);
loadPartials(path: 'navbar', loadFromPublic: false);
?>


        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Start Content -->
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-semibold">Hello, Calvin</h5>
                        <h6 class="text-slate-400">Welcome back!</h6>
                    </div>
                </div>

                <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Revenue</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium">$ <span class="counter-value"
                                                                                       data-target="45890">42205</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-currency-usd text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Visitor</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="2456">1857</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-account-group-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Properties</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="358">54</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-city-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Properties for Sell</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="243">60</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-lightning-bolt-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Properties for Rent</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value"
                                                                                     data-target="115">45</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-clock-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->
                </div>

                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-8">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Revenue Analytics</h6>

                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                                            id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>
                            </div>
                            <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                        </div>
                    </div>

                    <div class="lg:col-span-4">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Sales Data</h6>

                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                                            id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>
                            </div>

                            <div class="p-6">
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Website</span>
                                        <span class="text-slate-400">50%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 50%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Team Member</span>
                                        <span class="text-slate-400">12%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Agents</span>
                                        <span class="text-slate-400">6%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 6%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Social Media</span>
                                        <span class="text-slate-400">15%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 15%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Digital Marketing</span>
                                        <span class="text-slate-400">12%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Others</span>
                                        <span class="text-slate-400">5%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 5%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="xl:col-span-3 lg:col-span-6 order-1">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Area Map</h6>

                                <span class="text-slate-400">Last update 5 days ago</span>
                            </div>

                            <div class="p-6">
                                <div id="map" class="w-full h-[236px]"></div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-6 lg:col-span-12 xl:order-2 order-3">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Recent Transections</h6>

                                <a href=""
                                   class="btn btn-link font-normal text-slate-400 hover:text-green-600 after:bg-green-600 transition duration-500">View
                                    orders <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                            <div class="relative overflow-x-auto block w-full xl:max-h-[284px] max-h-[350px]"
                                 data-simplebar>
                                <table class="w-full text-start">
                                    <thead class="text-base">
                                    <tr>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3"></th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[140px]">Date
                                        </th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[120px]">Name
                                        </th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3">Price</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[40px]">Type
                                        </th>
                                        <th class="text-end font-semibold text-[15px] px-4 py-3 min-w-[70px]">Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/1.jpg"
                                                     class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700"
                                                     alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Mr. Rocky
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$1245/M</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Rent
                                        </th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Paid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/2.jpg"
                                                     class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700"
                                                     alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Mr. Cristino
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$12450</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Sell
                                        </th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Unpaid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/3.jpg"
                                                     class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700"
                                                     alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Mr. Jack
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$12450</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Sell
                                        </th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Paid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/4.jpg"
                                                     class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700"
                                                     alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Ms. Cally
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$12450</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Sell
                                        </th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Unpaid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/5.jpg"
                                                     class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700"
                                                     alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Ms. Cristina
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$1245/M</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            Rent
                                        </th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Unpaid</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-3 lg:col-span-6 xl:order-3 order-2">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Top Properties</h6>

                                <a href=""
                                   class="btn btn-link font-normal text-slate-400 hover:text-green-600 after:bg-green-600 transition duration-500">See
                                    More <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                            <div class="relative overflow-x-auto block w-full max-h-[284px] p-6" data-simplebar>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/1.jpg"
                                                 class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700"
                                                 alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-red-600 text-end"><i class="mdi mdi-arrow-bottom-right"></i> 11%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/2.jpg"
                                                 class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700"
                                                 alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 20%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/3.jpg"
                                                 class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700"
                                                 alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 24%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/4.jpg"
                                                 class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700"
                                                 alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 21%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/5.jpg"
                                                 class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700"
                                                 alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div><!--end container-->

       
<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>
