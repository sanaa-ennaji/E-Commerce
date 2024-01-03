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

$(document).ready(function() {


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
                    console.log(respo);
                }
            })
        }



    })




})





