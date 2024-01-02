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


