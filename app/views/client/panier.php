<?php require APPROOT. '/views/pages/head.php'?>

<body>
<?php require APPROOT. '/views/pages/navbar.php'?>
<body>
    <div class="container mx-auto  bg-white font-sans">
        <h1 class="text-3xl font-semibold mb-4 ml-14"> Panier</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- CARD1 -->
            <div id="vid" class="bg-gray-100 p-6 rounded-lg shadow-md ml-14">
                <img src="product_image.jpg" alt="Product Image" class="w-full h-32 object-cover mb-4">
                <h2 class="text-xl font-semibold mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Product Description</p>
                <p class="text-gray-800 font-semibold mb-2">$99.99</p>
                <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600">Remove</button>
            </div>

            <!-- forech -->


        </div>
           
      
    </div>
    <button id="btn" class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 ">Valide Panier</button>
</body>
</html>