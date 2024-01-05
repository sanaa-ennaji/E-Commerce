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
        <div id="overlayProduct" class="fixed  hidden inset-0 top-0 left-0 bg-black w-full h-full bg-opacity-30 backdrop-blur-sm  z-50 flex items-center justify-center">

            <form action="" id="formProduct" class="w-[550px] bg-white p-5 rounded-lg relative" enctype="multipart/form-data">
                <div>
                    <h2 class="text-center text-xl font-semibold  py-3 text-gray-800 mt-2 rounded-md" id="nameFrom">Formulaire Product</h2>
                </div>
                <p class="mt-2 text-md font-medium text-red-600 bg-red-50  rounded-lg dark:text-red-500" id="fieldErr">

                </p>
                <div class="pt-3">
                    <label for="error" class="block mb-2 text-md font-medium text-secondary">Name Product</label>
                    <input type="text" id="productName" class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 " placeholder="Enter Product name" name="productName">
                </div>
                <div class="pt-3">
                    <label for="error" class="block mb-2 text-md font-medium text-secondary ">Description</label>
                    <input type="text" id="descProduct" class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 " placeholder="Enter Product Description" name="descProduct">
                </div>
                <div class="pt-3">
                    <label for="error" class="block mb-2 text-md font-medium text-secondary "> Qunatity</label>
                    <input type="text" id="qunatityProduct" class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 " placeholder="Enter Quantity" name="quantity">
                </div>
                <div class="pt-3">
                    <label for="error" class="block mb-2 text-md font-medium text-secondary ">Price</label>
                    <input type="text" id="priceProduct" class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 " placeholder="Enter Price" name="price">
                </div>
                <div class="pt-3">


                    <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Image Product</label>
                    <input name="img_product" class="block w-full text-sm text-gray-400 border border-gray-300 rounded-lg cursor-pointer file:py-2 file:px-5 file:text-sm file:outline-none file:bg-green-500 file:border-none file:text-white file:font-medium" aria-describedby="file_input_help" id="file" type="file">
                    <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG</p>
                    <span class="font-medium text-sm block text-rose-500" id="errFile"></span>

                </div>

                <div class="pt-3">

                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 ">Select Category</label>
                    <select id="categories" name="categories" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400 ">
                        <option selected  value="">Choose a Category</option>

                    </select>

                </div>

                <div class="flex gap-5 items-center justify-center">
                    <button id="addProduct" type="submit" name="addProduct" class=" mt-5  items-center px-4 py-2 w-[200px]  text-center border
                    border-transparent text-sm leading-6 font-medium rounded-md text-white bg-green-500 focus:outline-none
                    transition duration-150 ease-in-out" style="display: block;">
                        Add Product
                    </button>
                    <button id="upProduct" class="mt-5 block items-center px-4 py-2 w-[200px] text-center border
                    border-transparent text-sm leading-6 font-medium rounded-md text-white bg-green-600 focus:outline-none
                    transition duration-150 ease-in-out">
                        Update Product
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
                <h1 class="text-xl font-bold">PRODUCTS</h1>
                <div class="flex items-center gap-5">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5  aria-hidden=" true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search_product" class="block p-2 ps-10 text-sm outline-none focus:rounded-lg focus:border-2 focus:border-white  text-white border-b border-white  w-80 bg-transparent placeholder:text-white" placeholder="Search...">

                    </div>
                    <button id="btnAdd">
                        <a href="#" class="inline-flex items-center px-6 py-2 border border-transparent text-sm
                    leading-6 font-medium rounded-md text-black bg-white  hover:text-white hover:bg-slate-500 focus:outline-none
                     transition duration-150 ease-in-out">Add Product</a>
                    </button>
                </div>
            </div>
            <div class="relative w-[95%] mx-auto overflow-x-auto  sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right shadow-sm text-white">
                    <thead class="text-sm text-white uppercase  bg-green-500">
                        <tr>
                            <th scope="col" class="px-6 py-2">
                                ID Product
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Name Product
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Description Product
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Quantity Product
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Price Product
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Category Product
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableProduct" class="bg-green-50 text-slate-800">

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

<!-- ================== Load Script ========================= -->
<script type="module" src="<?= URLROOT ?>js/product.js"></script>

<?php include APPROOT . '/views/incfiles/footer.php' ?>