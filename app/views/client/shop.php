<?php include APPROOT . '/views/incfiles/header.php' ?>
<?php include APPROOT . '/views/pages/navbar.php' ?>

    <div class="container mx-auto px-4 py-16 flex">
        <!-- Browse Categories on the left -->
        <div class="lg:w-1/5">
            <h2 class="text-4xl font-bold mb-10">Browse Categories</h2>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">Fresh Fish</h3>
                <ul class="space-y-2">
                    <div>
                        <input type="radio" id="huey" name="drone" value="huey" checked />
                        <label for="huey">Huey</label>
                    </div>
                    <div>
                        <input type="radio" id="dewey" name="drone" value="dewey" />
                        <label for="dewey">Dewey</label>
                    </div>
                    <div>
                        <input type="radio" id="louie" name="drone" value="louie" />
                        <label for="louie">Louie</label>
                    </div>
                </ul>
            </div>
        </div>
    
        <section class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0 ">
    <section id="gridArticle" class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-10 items-start ">
    

    <section class="p-4 py-6 bg-green-200 text-center transform duration-500 hover:-translate-y-2 cursor-pointer max-w-md mx-auto">
    <img src="https://www.dropbox.com/s/8ymeus1n9k9bhpd/y16625.png?dl=1" alt="" class="w-full h-80 object-cover">

            <h1 class="text-xl my-3">Comfortable Wooden Chair</h1>
            <p class="mb-3 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, incidunt</p>
            <h2 class="font-semibold mb-3">$39.99</h2>
            <button class="p-2 px-4 bg-green-500 text-white rounded-md hover:bg-green-700 text-sm">Add To Cart</button>
            </section>


        <section class="p-5 py-10 bg-green-200 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
            <img src="https://www.dropbox.com/s/ykdro56f2qltxys/hh2774663-87776.png?dl=1" alt="">
           
            <h1 class="text-3xl my-5">Multipurpose Wooden Trolly</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, incidunt!</p>
            <h2 class="font-semibold mb-5">$19.99</h2>
            <button class="p-2 px-6 bg-green-500 text-white rounded-md hover:bg-green-700">Add To Cart</button>
        </section>

        <section class="p-5 py-10 bg-green-200 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
            <img src="https://www.dropbox.com/s/1fav310i2eqkdz8/tool2.png?dl=1" alt="">
            
            <h1 class="text-3xl my-5">Multipurpose Wooden Tool</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, incidunt!</p>
            <h2 class="font-semibold mb-5">$34.99</h2>
            <button class="p-2 px-6 bg-green-500 text-white rounded-md hover:bg-green-700">Add To Cart</button>
        </section>
    </section>
</section>
    </div>
    <script src="<?= URLROOT ?>js/shop.js"></script>
    <?php include APPROOT . '/views/pages/footer.php' ?>



    



