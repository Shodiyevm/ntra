<?php
loadPartials( path:"header", loadFromPublic: false );
loadPartials( path:"navbar", loadFromPublic: false );
?>




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
                 
       
             
     
        <?php
        loadPartials( path:"footer", loadFromPublic: false );
        ?>