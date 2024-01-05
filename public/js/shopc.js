function getCategories(result) {
    $.ajax({
        type:"post",
        url:"http://localhost/E-commerce/client/getCategories",
        dataTypes: 'json',
        success:function (respo){
            console.log(respo);
        $('#category-filtre').empty();
        
        $.each(respo, function (i, value) {
            $("#category-filtre").append(`
                <div>
                    <input type="radio" id="huey" name="drone" value="huey" checked />
                    <label for="huey">${value.Name}</label>
                </div>
            `);
        });
},
error:function(xhr, status, error){
    console.error("AJAXrequest failed:", xhr, status, error);
} 
});


}

getCategories();