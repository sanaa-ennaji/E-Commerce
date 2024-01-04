<<<<<<< HEAD
// Import Function
import {inputEmpty , displayMessage} from "./config.js";

const openBtn = document.getElementById('btnAdd');
const closeBtn = document.getElementById('btnClose');
const overlayProduct = document.getElementById('overlayProduct');

// Display Form Product
openBtn.addEventListener('click' , () =>{

    if (overlayProduct.classList.contains('hidden')) {
        overlayProduct.classList.remove('hidden');
        $('#upProduct').hide();
        $('#addProduct').show();

        $.ajax({
            type: "GET",
            url: "http://localhost/E-commerce/admin/getAllCategories",
            success: function (categories) {
                $.each(categories['categories'] , function (i , v) {
                    $('#categories').append(`<option value="${v.ID_Category}">${v.Name}</option>`)

                })
            }
        });
    }
})
// Close From Product
closeBtn.addEventListener('click' , () =>{
    overlayProduct.classList.add('hidden');
})

// Validation Formulaire

// ============= Start Jquery ===================
$(document).ready(function() {



    // ==================== fetch Data in load event ======

    $.ajax({
        type: "post",
        url: "http://localhost/E-commerce/admin/getAllProducts",
        dataType: "json",
        success: function (data) {
            console.log(data);
            getAllProduct(data['products'])
        }
    });
    
    // ===================== Delete  Categpry ===========================
    $(document).on('click' , '.delbtn' , function() {

        var id = $(this).closest('tr').find('.categoryID').text();
        $.ajax({
            type: "post",
            url: "http://localhost/E-commerce/admin/deletProduct",
            data: {categoryID : id},
            success: function (data) {
                displayMessage(data.delMessage, $('#alert_delete') , 3000);
                getAllProduct(data.categories)
            }
        });



    })

    // ===================== Update  Categpry ===========================


    // ===================== End Update  Categpry ===========================








    // ===================== Add new Categpry ===========================

    $(document).on('submit' , '#formProduct' , function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        if ($(document.activeElement).attr('id') == 'addProduct') {

            if (validInput($('#fieldErr'))) {
            
                $.ajax({
                    type: "POST",
                    url: "http://localhost/E-commerce/admin/addProduct",
                    data: formData,
                    processData: false,  
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        
                    }
                });
    
    
            }
        }



    })





    // ============= Search In table Categories ===============
    $(document).on('keyup' , '#search_category' , function () {

        var searchValue = $('#search_category').val()

        $.ajax({
            type: "post",
            url: "http://localhost/E-commerce/admin/searchCategories",
            data: {search : searchValue},
            success: function (data) {
                getAllProduct(data)
            }
        });


    })






})
// ============ JQUERY ======================

function getAllProduct(data) {
    $('#tableBody').empty();
    $.each(data, function (i, value) { 
        $("#tableProduct").append(`
            <tr class="h-[80px]">
                <th scope="col" class="px-6 py-2 border border-green-300 categoryID">${value.ID_Product}</th>
                <th scope="col" class="px-6 py-2 border border-green-300 categoryID">${value.Product_Name}</th>
                <th scope="col" class="px-6 py-2 border border-green-300 categoryID">${value.Product_Desc}</th>
                <th scope="col" class="px-6 py-2 border border-green-300 categoryID">${value.Quantity}</th>
                <th scope="col" class="px-6 py-2 border border-green-300 categoryID">${value.Price}</th>
                <th scope="col" class="px-6 py-2 border border-green-300 nameCategory">${value.Name}</th>
                <th scope="col" class="px-6 py-2 border border-green-300 text-center">
                    <!-- ============ Delete Button =============  -->
                    <a href="#" class="font-medium text-rose-500 inline-block  hover:underline delbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                    <!-- ============ Update Button =============  -->
                    <a href="#" class="font-medium inline-block text-green-400 hover:underline upBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    </a>
                </th>
            </tr>
        `);
    });
}

// Valid Form =================
function validInput(messge) {
    var check = true;
    if ($('#productName').val() == '' || $('#descProduct').val() == '' || $('#qunatityProduct').val() == '' || $('#priceProduct').val() == '' || $('#categories').val() == '') {
        messge.empty();
        messge.append(`<span class="py-2 px-3 block" id="displayErr">Please Enter All Field Required</span>`);
        check = false;
    }else {

        var numberRegex = /^[0-9]+$/;

        if (!numberRegex.test($('#priceProduct').val()) || !numberRegex.test($('#qunatityProduct').val())) {
            messge.empty();
            messge.append(`<span class="py-2 px-3 block" id="displayErr">Please Enter Numbers</span>`);
            check = false;
            
        }else {
            if ($('#priceProduct').val() <= 0 || $('#qunatityProduct').val() <= 0 ) {
                messge.empty();
                messge.append(`<span class="py-2  block" id="displayErr">Please Enter Numbers Greather then zero</span>`);
                check = false;
            }else {
                messge.find('#displayErr').remove();
                check = true;
            }
            
        }

    }
    
    var imgFile = $('#file')[0].files[0];
    var allowedTypes = ['image/jpeg' , 'image/png'];
    var maxSizeFile = 1500;

    if (imgFile) {
        if (!allowedTypes.includes(imgFile.type)) {
          $('#errFile').text('Please Upload ' + allowedTypes.join(', '))
          check = false;
        }else {
            if ((imgFile.size / 1024) > maxSizeFile) {
                $('#errFile').text('Please image small than 1.5MB');
                check = false;
            }else {
                $('#errFile').text('');
                check = true;
            }
            
        }
    }else {
        $('#errFile').text('Please upload image');
        check = false;
    }
 

    return check;
}
    








=======
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
>>>>>>> 528b83d62ac35c5fe43ee16a454aa6599d13f54c

