<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/output.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="p-4 py-6 lg:px-12 xl:px-16 shadow-md bg-white">
    <div>
       <div class="flex gap-10 items-center justify-between">
            <div>
                <a href="/">
                <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/logo.png" alt="logo" class="h-14">
                </a>
            </div>
            <div>
                <nav class="flex gap-6">
                    <a href="/" class="relative group text-black">Home
                        <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/contact" class="relative group text-black">Contact
                        <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </nav>
            </div>
       </div>
    </div>
</header>

