<?php
loadPartials("header");
loadPartials( "navbar" );
?>


<div class="container-fluid relative px-5">
    <div class="layout-specing">
        <section class="relative lg:py-24 py-16">
            <div class="container relative" >
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <?php foreach ($branches as $branch) : ?>
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="relative" mb-8>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAAtFBMVEX///8AAAC6i1Tz8/Tk1MW/lGS7jVe4iE7y6uK1gUH17+n9+/qzfjq8j1u5ilH5+fnYwKeJiovTuJvj4+Tt7e759fK2hEfLqofX19cAABCgoKHPsZHGoHhlZ2zIpH5ub3OXmZwXFxZ3en7r39PCmm21tbXdxrFJSlDCwsPgzbpCQ0nLzM1gYF8AAAlUVVmBgoMAABk5Oj4HECCxeC0XGR4pLTUjJCdHR0cWHCkjJC4MDxgyMjG21JYIAAAN8ElEQVR4nO2cC3uiOBfHIYUEhESKErUgugWdUketzk7bd+f7f6/3hGtQepnWtvZ58n92ZxW55EdOzg1mNU1JSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSenrZAVvOy5wTjuOkyijxhuGFYTpG2/Ch8owXa/3l8c4CXVH5wlDeWT91SGW72J0rjCMUeP1Q3OMlBB6rjDEo4SFr52cHuzNvZicKYxrJamNouRVuycx4qbhhPxsYWAV2MxcvuzVHM9ktpjEc4bRnIwzFL5E048RQZnY66xhwH5Mwsz+s7taHEyssMYzh9F6I4Z+Pbdwlr8wqybv3GFgQVDsPrlwYM0jM6u+nT0MpDYm42H3IK2YkLSZt7OBaaeWMoyWRJyNOpIbEShbYTLksbyb9XcpxAnlh3K8b8HAwuHkOOI4S5NTTzbAFoy1jPyvyqFDm46yGqcNowUeI+lBHu34lJtZa5sEk/gRs72vgvEJJjT2SpwDGIg4mLTjpzNCPErao61hkjBlcL4vhDFNm9DUy78dwuTZGvabrwHklUfrqISxRibiJI7418HwUc8wbYTNpdYFI+IniqovPYrI6CiY5jC9kGJix5Y1+kIz4zGYmIE5WJvRBaP1UsbM4qMFLOHxOcA1Wz5ByBalUO9rYXKrMSiGwfgdMFoQA41YVAll3Os4R0goAZaiqjsHGE3zTBgStbuCRAgxsge8BHWxBCNGEY1LH34eMFBppZiSzh5AyEicpZwuj39yLJgYGtfO+kxgwI5GlNpR0pGbeLBaUJod/2AtMadY6hucDYzoARDC/I50GUyJHNtYYECWZqZMOsc5wRAv5SxdHk6OkSJ2XExbISV2mLTSmc+B6SVd/UrvAMa1RNVMR20/kFCS+iYx2zRZKloAgbghL5pZYC3/tiH3rFKaplHoGa1xHsNoTmJybMrrIxH9J0htGJKODWJatAAA5vk1Y2VhlMp5xCn0C4MQ/JN69S3ugIEBhTYicTMYjIhgWyLE650TAi7ByD8+B5N4KRKXJfS0LJrlUooZQzA226WeJa7p2R0wIolhzK0iBy1YBA2uaEIb192yp2B6WeraBEjgsuTELGDknIVWsoxNE6C4S6CW6ZyZfEwYu/mogqiJ+x5DVOxgpXLZ3AHjBJZPXZthapqhb2J20gWTy/EJyeNebsWQnNgoYnJvWc7NllA2AyjEdykf80Qu4IhcQDrsCKZneabLIRePRpmlBWFlj6dVMCKsvKGOtQxjGBQ1vaS7OEtEpW8Av5xb+oSNPFgB8nI+gIEqwAYS8DV53eP4Nv4YZ22lhDb+1cr8FEMEDzOrA0YLfNFGZ+12oIdg4UetXECGsZYpRpxHfmaVhy3Btj+o32GYPJLt14fEinMWe1bxaztrzkxM8UHIIRTTttU0MIkXIVgmYU0CpyQk7kpeTyFnSXksfV/akQEpJCeRwDmEScCt0tZYIFAS1u5n1DBGmBIOhZEv3S2Lyk2pU8sJEZcMfilcc8+IXMgj/V7ShumnzBSlWTMajxLshRwdm5ljxCaghEYrzgQmox+x+OvzQxLSjGVZxJkgiVyGzagNE0EB4/ickWo8PiwYQ7MiQuS7LdIZI6WIu17PaQfNiLGuEuh06jHMGgdsV/ZupS6i1JXWqseRcGRLiPXFiEKGbUFhmMiWDE2sO4aJm094CyZETLbpj1ACEa+6XgMDOBGiGNf3PHFRlKMZkMaEosvEMStYM0gK6tNB9IKam5YzIMOA5zM/EqS4CEGjynHactBcUorc0pHCBJrVpFFG/CCE2qAeJqtyNycYcQrBqppRCcaAnOhDOQrBPS6v2IYxTJwyjkWLM4hQvVS0XsQgP0Vx02WC6JtPRW8J8RFLDquBgaWFPs6RNQoiTsvc8QCGGz4Um6PE8bEtLd0gRu1nykEqWlOBAc7YTFFXogkzxjp6Bh8gyBSLu3kI4/Y0I+ZclGKRtH8Aa7/9SMBCLDJ8BMkOVJodMAHkQZ9VP0OumPvkIxjRx1uaBMxK2u6IDgxtPyE3wFsQHmWi0oyOzMxZoqee7pxezhLuKVw064ARJT+kMZKVgcWMLB8WvVx2MYrNvBb2+fGaSRD/sCzmWGU58AQMOGOE64kICQMMJ2QsrXeFIgXSsByiA8bCH5nFHKsXE550w1iwYDIoD8o8xmflo+cRQyVNLwXckVn0mDpgEMIdTbYPVJKiX04XjMhgwCvHBOXuyIM6u/w9Zix3Cxn8BCVnxnOTOoLRUoZO3L94URDHccaPYRK38EM+gZzUyaA+qVdyBLUZOCqOmEh0wMeJ3vQhTAYHjj6Ro5DHMEJHMD1aldKJiUiaMtmvpQSPYkiHiniapOL5wAEMS1GTKnyiRoQew4RVQBUjg8ljcg7vRAiqzzriZBSM6hCGFl2Pz1YAt/0waFoubgplC8rKVkECsVBOBYIRsi2vDYMo+cgS5mkl+KA7Y1tgOfUWx4eJYWaTlYhOC2HS2BPwaB5pw/DPdWSNjANvxkZIeqLkEeJnkPtWNFbM8wc1qdRnwihFLRj3Y8ux57Sk7awZ0vnayBImcp4EV3yw3sWbJRCC0jp/diDPaWXN0Re+exJ4UqQWMG793SkNqkdQHjbg16LJCdVMk4UadgvG6nq682lyWq+b0OY5uQaerLCvwEVQvRgU/yrtLWRSUwSqU3lmTt+IfaPg3jfF/YigqpfpICg7KbKrMQcRtutVDu7vU/Ow18owm15sRnCTVvZMiK9YMiZKebXWHIrOEsaKEK/GBSWM1Pu0UmI20cMxIDBWUwPJzdf5r+cECUzVhoIagUkuOIkklgw3vb3MRvF5vDt3pIw1BB6XwqPTqxdTsKTNNBlNE+fs5Hgc1ZnXkneVWIFHm/xF5KLnuGAKOb6N6uI9Y/JKKXdosaTYPV+WvHHZ0BiM0Ham5fi46V9YEXa/KhF7nYKUsPo1SwMz0up+jVhTzoHze/p14TMR0PCaBhaF3A2MOKkddi8mX/dqyavVi5jtV5aWpMitcxcom2s/3AOw82fJ7adFw4tyLRAtAIkF+WcaYNqyYonGAgbhEnoxItXTA62XfheWA5peLIKPFTNeF9SQ3nwbFvFiLwy9WupBCDTA0riFiBHv27DkL8+z+k0tQYOaF5YTWFPfiUUAQApZ03ic1yFFxP1zjy+HCkIX18He8erYmZjfj0WkLi46TokNBDnMt2MRT3F4U62VmzIbn3Ge/KwyjOxWe9ZzsflNWYr+UmNUgX+m3YtXygDXVbnh3ujVf7v2TCX6mMWLSuIvzo3OtUZ+pay4CJ+Qcdr+2fT43qrCugyT2d8vvBwrED7MZPwt/1OK85NjQHTB33rpyzL42bbH3qDg2y99JSUlJSWll9S/mi7KT4vpongbYTjbjuV9VrPr6jWFi9VqUOw9va40uyh/m9WbpmL/m+vrYXnYYjaHPwfT+aDcMLyarvJjFjfVJq0/Xozfl95dbPR/b4pP1/osv7hzpetzeZ9LXS+uOL7VQesrGP1Ab1SSj6VNsH8fDrspz7DVf/fFDrtVuWEw1ef94pj6Uqs/+s+L98FM1/r2ooQp7mR/M1n/HEj7zCf/5D/c3Ov7h4ffE7HfxU/QbrIT/ynv/1DaBGccbyb6rJzRy8ltDvOjmnGAuSpg7uptV/p69m6Y/SS/gRfbEmaoPz4+rqR9SpjxRt/NB4Ob6b4YCPxQ3F5JfdhUfryZPO71cnDjze4pmL1emvlgttbfD/O4ng5lmIV+C5c6hpmvC7MZzvRdPnEXl/rlwdWbTf0rfXarl/dk8GOrPQHzqG+LmV3t9++H0Xe7/ObUMBv9elEuHxkGft8U11rsi2XyLMxgoy9m+rQc+2L4FMzv3/8rTjbXf//3fpjtVt9dNDB9/XGxmuwlf1bAwPUvC6Na7YopehZmvP7feL7X5R87YTYALT4Nft9uTgBzBYO7yseRw9zoDwNxWztgyhWyun0Zpi8mF/yT7OM7YaaX97fFZbeXJzCzuXatw0rtlzBTfZODNed9C8xQnFd70K9fhFnNBLG4qVcngLnUxg/6rIbR7y6Fm5w0zvktMAP9DuZ2NpHtrNvMBpf61gEX+mN8Ghhte6cPSpgb/X6Vj7dxzm+BWeQDv/lXtrMnYMDK++Dlt/DvSWAuHtabEma2/qPl7rdOYd4C0we/AjsP79eXL8GMwbAX2uR+cRoYOOvV+p/FVQ7zZ7LpD4dANqlP/AaYob6+FKeBhOBlmPl/twN9MzwZjPawvp0LmNX93Y/t9fX2x74xkDfALPT9Rpzm9u5Ps/aeghns9GuwstPBrPTHWwGz3d8VqeK+cURHceZlmKk+KU/z3/xFGPATd3/GJ4TRfur79fWwv1nvFrk2k//aMMNrfVrALB5fzAD0ySY/y81+8vNlmJt/JxvtlDADAXMBnqVcsZd7vTKQ6d0/os641NdVSvb4Qm4G81wmd1P9oTbXsX57MxyALg5gtN95jD4djBjr9cW8Xio3f/Q5hD4Y09VjsYoB9OFGjPe+XDxPw0AqWp5mUWPlWeXtg9BcgsknazDunwRmk/tQLS+3ZnCNKsr1d/Bxqz/udo8V4Fyf3O92fx4ra4FsbnsIU2zS9YfqNHDWBqbUtUhDy+LshxTP3gujDVZ1KQufxvU3bTwGP/Mjv3hVMC6KsUwH9bFD7UDD/ATjcXOaVW1mF6txoaHWLw8Fy5Nhpu+EeUHj+aWUcmqL+eXV4Mmd/179waAp74aDo3ujpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpPQ1+j+G/EFhmxKslgAAAABJRU5ErkJggg==" alt="Filial rasmi" class="w-full h-48 object-cover">
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
                
</div>
        <?php
         loadPartials("footer");
        ?>