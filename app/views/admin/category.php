<?php include APPROOT . '/views/incfiles/header.php' ?>
<?php include APPROOT . '/views/incfiles/sidebare.php' ?>


<div class="flex-1 overflow-hidden">
    <div class="py-4 flex items-center justify-between px-3 bg-green-500 text-black">
        <form>
            <div class="flex">
                <div class="relative ms-5 w-[500px]">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 outline-none rounded-lg  dark:placeholder-gray-400  dark:focus:border-blue-500" placeholder="Search All" required>
                    <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-black bg-slate-300 rounded-e-lg   hover:bg-green-200 focus:ring-4 focus:outline-none focus:ring-green-300  ">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <div>
            profile
        </div>
    </div>

    <!-- ================= main Page ============== -->
    <div class="p-6 h-full bg-gray-50">
        <div id="overlayCategory" class="fixed  inset-0 top-0 left-0 bg-black w-full h-full bg-opacity-30 backdrop-blur-sm  z-50 flex items-center justify-center">

            <form action="" id="formCategory" class="w-[550px] bg-white p-5 rounded-lg relative">
                <div>
                    <h2 class="text-center text-xl font-semibold bg-green-500 py-3 text-white mt-5 rounded-md text-white">Add Category</h2>
                </div>
                <p class="mt-2 text-md opacity-0 font-medium text-red-600 bg-red-50 py-2 px-3 rounded-lg dark:text-red-500" id="fieldErr"></p>
                <div class="py-3">
                    <label for="error" class="block mb-2 text-md font-medium text-secondary">Name Category</label>
                    <input type="text" id="fieldName" class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 " placeholder="Enter nom" name="name">
                </div>
                <div class="py-3">
                    <label for="error" class="block mb-2 text-md font-medium text-secondary ">Description</label>
                    <input type="text" id="fieldDesc" class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 " placeholder="Enter nom" name="desc">
                </div>

                <div class="flex gap-5 items-center justify-center">
                    <button id="addCategory" type="submit" name="addClient" class=" mt-5  items-center px-4 py-2 w-[200px]  text-center border
                    border-transparent text-sm leading-6 font-medium rounded-md text-white bg-green-500 focus:outline-none
                    transition duration-150 ease-in-out" style="display: block;">
                        Add Category
                    </button>
                    <button id="updateClient" class="mt-5 block items-center px-4 py-2 w-[200px] text-center border
                    border-transparent text-sm leading-6 font-medium rounded-md text-secondary bg-four focus:outline-none
                    transition duration-150 ease-in-out" style="display: none;">
                        Update Client
                    </button>
                </div>

                <div class="absolute top-[10px] right-[20px] cursor-pointer" id="btnClose">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </form>
        </div>

        <main class="">
            <!-- ================== ALERT ADD +++++++++++++++++++++++++++ -->
            <div id="alert_add" class="flex w-[95%] mx-auto items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 hidden" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div id="" class="ms-3 text-sm font-medium alert">

                </div>
            </div>
            <!-- ================== ALERT DELETE +++++++++++++++++++++++++++ -->
            <div id="alert_delete" class="flex w-[95%] mx-auto items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 hidden" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div id="" class="ms-3 text-sm font-medium alert">

                </div>
            </div>
            <div class=" w-[95%] mx-auto my-5 flex items-center justify-between p-3 bg-green-500 text-white rounded-lg">
                <h1 class="text-xl font-bold">CATEGORIES</h1>
                <div class="flex items-center gap-5">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5  aria-hidden=" true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search_client" class="block p-2 ps-10 text-sm outline-none focus:rounded-lg focus:border-2 focus:border-white  text-white border-b border-white  w-80 bg-transparent placeholder:text-white" placeholder="Search...">

                    </div>
                    <button id="btnAdd">
                        <a href="#" class="inline-flex items-center px-6 py-2 border border-transparent text-sm
                    leading-6 font-medium rounded-md text-black bg-white  hover:text-white hover:bg-slate-500 focus:outline-none
                     transition duration-150 ease-in-out">Add Category</a>
                    </button>
                </div>
            </div>
            <div class="relative w-[95%] mx-auto overflow-x-auto  sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <thead class="text-sm text-white uppercase  bg-green-500">
                        <tr>
                            <th scope="col" class="px-6 py-2">
                                ID Category
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Name Category
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Description Category
                            </th>

                            <th scope="col" class="px-6 py-2">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="bg-gray-200 text-slate-800">
                        <tr>
                            <th scope="col" class="px-6 py-2">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Accesoire Informatique
                            </th>
                            <th scope="col" class="px-6 py-2 max-w-[200px]" >
                            Les accessoires informatiques ont évolué pour répondre aux besoins spécifiques des passionnés de jeux vidéo, et parmi eux, les souris et claviers gaming se démarquent. Ces accessoires sont conçus pour offrir une expérience de jeu optimale, avec des fonctionnalités avancées et un design ergonomique.
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Actions
                            </th>
                        </tr>
                    </tbody>
                </table>
                <!-- ================ Pagination ================== -->
                <nav class="text-center my-5" aria-label="Page navigation example">
                    <ul class="inline-flex  text-sm mx-auto" id="pagination">

                    </ul>
                </nav>

            </div>
        </main>
    </div>
</div>























<?php include APPROOT . '/views/incfiles/footer.php' ?>