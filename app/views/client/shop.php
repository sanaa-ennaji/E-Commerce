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
    


    </section>
</section>
    </div>
    <script src="<?= URLROOT ?>js/shop.js"></script>
    <?php include APPROOT . '/views/pages/footer.php' ?>



    



