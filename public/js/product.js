// ============ JQUERY ======================
    function getProducts(){
        $.ajax({
            type:"post",
            url:"http://localhost/E-commerce/client/getAllProducts",
            dataTypes: 'json',
            success:function (respo){
                console.log(respo);
                $('#gridArticle').empty();
                $.each(respo, function (i, value){
                    $('#gridArticle').append(`



                    `);
                });
            },
            error:function(xhr, status, error){
                console.error("AJAXrequest failed:", xhr, status, error);
            }


        });


    }

