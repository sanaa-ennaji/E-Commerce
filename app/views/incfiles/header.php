<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- =============== css file ============= -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/main.css">
    <title><?= SITENAME;?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- ========== Tailwind CSS ============== -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
            theme: {
                extend: {
                colors: {
                    primary: '#EE696B',
                    secondary: '#523A78',
                    dark: '#11101d',
                }
                }
            }
            }
        </script>

</head>
<body class="body">
