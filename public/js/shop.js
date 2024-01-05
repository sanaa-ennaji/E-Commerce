// ============ JQUERY ======================
    function getProducts(){
        $.ajax({
            type:"post",
            url:"http://localhost/E-commerce/client/getProducts",
            dataTypes: 'json',
            success:function (result){
                console.log(result);
                $('#gridArticle').empty();
                $.each(result, function (i, value){
                    $('#gridArticle').append(`

                    <section class="p-4 py-6 bg-green-200 text-center transform duration-500 hover:-translate-y-2 cursor-pointer max-w-md mx-auto">
                    <img src="http://localhost/E-commerce/public/images/products/${value.IMG_Product}" alt="" class="w-full h-80 object-cover">
                    
                            <h1 class="text-xl my-3">${value.Product_Name}</h1>
                            <p class="mb-3 text-md">${value.Product_Desc}</p>
                            <h2 class="font-semibold mb-3">${value.Price}</h2>
                            <button class="p-2 px-4 bg-green-500 text-white rounded-md hover:bg-green-700 text-sm">Add To Cart</button>
                            </section>

                    `);
                });
            },
            error:function(xhr, status, error){
                console.error("AJAXrequest failed:", xhr, status, error);
            }


        });


    }

    getProducts();