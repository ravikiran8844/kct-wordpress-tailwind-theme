<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- <header class="p-4 py-6 lg:px-12 xl:px-16 shadow-md bg-white">
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
</header> -->

<header>
<nav class="p-4 lg:px-12 xl:px-16 shadow-md bg-white">
  <div>
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button id="mobile-menu-button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" id="menu-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" id="close-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-center sm:justify-between">
        <div class="flex shrink-0 items-center">
        <a href="/">
        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/logo.png" alt="logo" class="h-14">
        </a>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-[#F78D1E] hover:text-white">Home</a>
            <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-[#F78D1E] hover:text-white">Contact</a>
            <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-[#F78D1E] hover:text-white">About</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-[#F78D1E] hover:text-white">Home</a>
      <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-[#F78D1E] hover:text-white">Contact</a>
      <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-[#F78D1E] hover:text-white">About</a>
    </div>
  </div>
</nav>

</header>
<script>
  document.getElementById('mobile-menu-button').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    menu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>
