<?php require APPROOT. '/views/incfiles/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
      
        .sidebar {
            display: none;
            position: fixed;
            right: 0;
            height: 100%;
            width: 350px;
            border-left:  5px solid rgb(1,100, 0) ;
            background-color: #ffffff;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow-y: auto;
            padding: 1rem;
        }
    </style>
</head>
<body>
<nav class="relative bg-white shadow">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl text-green-500">E-COMMERCE</h1>
        </div>

        <div class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-green-500 md:mx-4 md:my-0" href="#">Home</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-green-500 md:mx-4 md:my-0" href="#">Shop</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-green-500 md:mx-4 md:my-0" href="#">Contact</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-green-500 md:mx-4 md:my-0" href="#">About</a>
            </div>

            <div class="flex justify-center md:block">
        <a id="Sidebar" class="relative text-gray-700 transition-colors duration-300 transform hover:text-gray-600" href="#">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
        </div>
    </div>
</nav>
<div id="sidebar" class="sidebar">

 <div>

 <button disabled="disabled">
    remove 
 </button>
 </div>

 <button>valid cart </button>
</div>
<script>
    const toggleSidebar = document.getElementById('Sidebar');
    const sidebar = document.getElementById('sidebar');
    toggleSidebar.addEventListener('click', () => {
        sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
    });
</script>
</body>
</html>