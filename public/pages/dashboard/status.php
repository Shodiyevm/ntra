<?php

loadPartial('header');
loadPartial('navbar');
/**
 * @var $statuses
 */
?>

<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <?php foreach ($statuses as $status) : 
                  
                ?>
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="pb-6">
                            <a href="/status" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">Status: <?php echo htmlspecialchars($status->name); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<?php loadPartial('footer'); ?>