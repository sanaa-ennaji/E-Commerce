function getAllCategories(result) {
    $.ajax({
        type:"post",
        url:"http://localhost/E-commerce/admin/getAllCategories",
        dataTypes: 'json',
        success:function (respo){
            console.log(respo);
    $('#categoryFiltre').empty();
    $.each(result, function (i, value) { 
        $("#categoryFiltre").append(`
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

getAllCategories();