<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <!-- component -->
<section class="absolute h-full w-full top-0">
    <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url(&quot;https://demos.creative-tim.com/tailwindcss-starter-project/static/media/register_bg_2.2fee0b50.png&quot;); background-size: 100%; background-repeat: no-repeat;"></div>
    <div class="container my-auto mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4 pt-32">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg bg-gray-300 border-0">
                    <div class="flex-auto px-4 lg:px-10 py-4 pt-0">
                        <form action="" method="post">
                            <div class="relative w-full mb-3 mt-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Name</label>
                                <input type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Name" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Adresse</label>
                                <input type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Adresse" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                                <input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Email" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                <input type="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Password" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password Confirmation</label>
                                <input type="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Password" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="text-center mt-6">
                                <button class="bg-green-500 text-white active:bg-green-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="button" style="transition: all 0.15s ease 0s;">Sign Up</button>
                            </div>
                        </form>
                        <div class="relative w-full mb-6">
                            <div class=""><a href="#" class="text-gray-900"><small> By signing up, you agree to the Terms of Service and Privacy Policy </small></a></div>
                        </div>
                        <div class="text-grey-dark mt-6">
                            Already have an account? 
                            <a class="no-underline border-b border-black text-blue-600" href="<?php echo URLROOT; ?>sign/SignIn">
                                Log in
                            </a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>