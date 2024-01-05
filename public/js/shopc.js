function getCategories() {
    $.ajax({
        type: "post",
        url: "http://localhost/E-commerce/client/getCategories",
        dataType: 'json',
        success: function (respo) {
            console.log(respo);
            $('#category-filtre').empty();

            $.each(respo, function (i, value) {

                $("#category-filtre").append(`
                    <div>
                        <input type="radio" class="category" id="category" name="category" value="${value.ID_Category}" />
                        <label for="category-${value.ID_category}">${value.Name}</label>
                    </div>
                `);

            });

           
        },
        error: function (xhr, status, error) {
            console.error("AJAX request failed:", xhr, status, error);
        }
    });
}

$(document).ready(function () {
    $(document).on("click", ".category", function() {
        var idCategory = $(this).attr('value');

        $.ajax({
            type: "post",
            url: "http://localhost/E-commerce/client/getProductsByCategory",
            data: { idCategory: idCategory }, 
            dataType: 'json',
            success: function (response) {
                console.log(response);
                
            },
            
            

        })
    });
})


getCategories();

