// Import Function
import {inputEmpty , displayMessage} from "./config.js";

const openBtn = document.getElementById('btnAdd');
const closeBtn = document.getElementById('btnClose');
const overlayCategory = document.getElementById('overlayCategory');

// Display Form Category
openBtn.addEventListener('click' , () =>{
    if (overlayCategory.classList.contains('hidden')) {
        overlayCategory.classList.remove('hidden');
    }
})
// Close From Category
closeBtn.addEventListener('click' , () =>{
    overlayCategory.classList.add('hidden');
})

// Validation Formulaire

const categoryName = $('#fieldName');
const categoryDesc = $('#fieldDesc');
const errMessage = $('#fieldErr');

// ============= Start Jquery ===================
$(document).ready(function() {
    getCategories();
    // Add new Categpry 
    $(document).on('submit' , '#formCategory' , function (e) {
        e.preventDefault();
        let formInfo = new FormData(this)

        if(categoryDesc.val() == '' || categoryName.val() == '') {
            errMessage.removeClass('opacity-0')
            errMessage.text('Please All Field Required');
        }else {
            errMessage.addClass('opacity-0');
            errMessage.text('');
        }
    
        if (errMessage.text() == '') {
            $.ajax({
                method : 'post',
                url : 'http://localhost/E-commerce/admin/addcategory',
                processData: false,  
                contentType: false,
                cache: false,
                data : formInfo,
                success : function(respo) {
                    overlayCategory.classList.add('hidden');
                    displayMessage(respo , $('#alert_add') , 6000);
                    inputEmpty(categoryDesc , categoryName);
                    getCategories();

                },
                
            })
        }
    })





})
// ============ JQUERY ======================

function getCategories() {
    $.ajax({
        type: "post",
        url: "http://localhost/E-commerce/admin/getAllCategories",
        dataType: 'json',
        success: function (respo) {
            console.log(respo);
            $('#tableBody').empty();
            $.each(respo, function (i, value) { 
                $("#tableBody").append(`
                    <tr class="h-[80px]">
                        <th scope="col" class="px-6 py-2 border border-green-300">${value.ID_Category}</th>
                        <th scope="col" class="px-6 py-2 border border-green-300">${value.Name}</th>
                        <th scope="col" class="px-6 py-2 border border-green-300 max-w-[200px]">${value.Description}</th>
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
        },
        error: function (xhr, status, error) {
            console.error("AJAX request failed:", xhr,status, error);
        }
    });
    

}







