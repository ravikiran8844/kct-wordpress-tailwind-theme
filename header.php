<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<header id="sticky-header" class="sticky top-0 z-50 w-full max-lg:bg-white max-lg:shadow lg:absolute">
  <nav class="p-4 sm:px-8 lg:px-12 xl:px-16">
    <div>
      <div class="relative flex h-18 items-center justify-between">
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
        <div class="flex max-sm:flex-1 items-center justify-center sm:items-center sm:justify-between">
          <div class="flex shrink-0 items-center">
            <a href="/">
              <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/logo-new.png" alt="logo" class="h-14">
            </a>
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex items-center space-x-4">
              <a href="/" class="rounded-md px-3 py-2 text-sm font-semibold text-black uppercase ">Home</a>
              <a href="/contact" class="rounded-md px-3 py-2 text-sm font-semibold text-black uppercase ">Contact Us</a>
            <div class="relative mt-5 text-center space-y-1">
            <a href="#contact-us" class="flex items-center gap-2 px-6 py-2 text-sm font-semibold bg-[#F78D1E] text-white  rounded-full uppercase hover:scale-101 hover:ring-2 hover:ring-[#F78D1E]">
              <svg class="h-5" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.88203 19.4868L2.87882 19.4836L2.87722 19.4804L2.63184 19.0585L0 20.566L4.32371 28L6.95555 26.4925L2.88203 19.4868ZM20.7788 16.9159C1.59284 4.30972 15.6434 -4.89286 20.7258 2.83125C25.8066 -4.89245 39.9647 4.31009 20.7788 16.9159ZM16.6907 26.4893C15.7477 26.2108 14.864 25.9322 13.7542 25.5549C12.6011 25.1633 11.2283 24.6762 9.34058 23.9917C9.10643 23.9073 8.85623 23.9439 8.6622 24.0697L7.65022 24.6492L4.587 19.3816L7.14025 17.9187C7.1595 17.9091 7.17874 17.898 7.19639 17.8868L7.25733 17.8502L7.35516 17.7945C7.98547 17.4411 8.6462 17.231 9.33583 17.1657C10.0094 17.102 10.7215 17.1721 11.4689 17.3774C11.4849 17.3822 11.5025 17.3885 11.5202 17.3933L11.5811 17.4092C11.6421 17.4268 11.7046 17.4459 11.7656 17.465C11.8121 17.4793 11.8602 17.4904 11.9067 17.4952L17.775 19.0648C17.9755 19.1189 18.1374 19.2495 18.2337 19.4166C18.3299 19.5822 18.3636 19.7859 18.309 19.9865C18.2545 20.1871 18.1246 20.3462 17.9578 20.4418C17.7894 20.5389 17.5841 20.5707 17.3821 20.5166H17.3805L14.1007 19.6442C13.6917 19.536 13.2716 19.7764 13.1625 20.1823C13.0534 20.5882 13.2956 21.0053 13.7046 21.1135L16.9859 21.9859L19.2713 22.5972V22.5956C19.4606 22.6449 19.669 22.6242 19.8535 22.5192L29.7458 16.8441L29.7442 16.8425C30.0457 16.6705 30.344 16.7438 30.5653 16.9268C30.6696 17.0128 30.761 17.1258 30.8347 17.2532C30.9085 17.3789 30.9598 17.5142 30.9855 17.6479C31.0352 17.917 30.9614 18.1908 30.6968 18.342L30.6984 18.3436C30.6712 18.3595 30.6455 18.377 30.6198 18.3961L21.3147 25.4116C21.2938 25.4243 21.2746 25.4386 21.2553 25.4545C20.6106 25.9655 19.9098 26.3062 19.1544 26.4765C18.399 26.6468 17.5776 26.6501 16.6907 26.4893Z" fill="white"/>
              </svg> Donate Now

              </a>
              <div class="text-sm text-black">- Join Hands, Change Lives</div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <a href="/" class="block rounded-md px-3 py-2 text-base font-semibold text-black uppercase ">Home</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-semibold text-black uppercase ">Contact Us</a>
        <!-- <a href="/about" class="block rounded-md px-3 py-2 text-base font-semibold text-[#F78D1E] uppercase hover:bg-[#F78D1E] hover:text-white">About</a> -->
        <div class="relative mt-5  space-y-1">
            <a href="#contact-us" class="inline-flex items-center gap-2 px-6 py-2 text-sm font-semibold bg-[#F78D1E] text-white  rounded-full uppercase hover:scale-101 hover:ring-2 hover:ring-[#F78D1E]">
              <svg class="h-5" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.88203 19.4868L2.87882 19.4836L2.87722 19.4804L2.63184 19.0585L0 20.566L4.32371 28L6.95555 26.4925L2.88203 19.4868ZM20.7788 16.9159C1.59284 4.30972 15.6434 -4.89286 20.7258 2.83125C25.8066 -4.89245 39.9647 4.31009 20.7788 16.9159ZM16.6907 26.4893C15.7477 26.2108 14.864 25.9322 13.7542 25.5549C12.6011 25.1633 11.2283 24.6762 9.34058 23.9917C9.10643 23.9073 8.85623 23.9439 8.6622 24.0697L7.65022 24.6492L4.587 19.3816L7.14025 17.9187C7.1595 17.9091 7.17874 17.898 7.19639 17.8868L7.25733 17.8502L7.35516 17.7945C7.98547 17.4411 8.6462 17.231 9.33583 17.1657C10.0094 17.102 10.7215 17.1721 11.4689 17.3774C11.4849 17.3822 11.5025 17.3885 11.5202 17.3933L11.5811 17.4092C11.6421 17.4268 11.7046 17.4459 11.7656 17.465C11.8121 17.4793 11.8602 17.4904 11.9067 17.4952L17.775 19.0648C17.9755 19.1189 18.1374 19.2495 18.2337 19.4166C18.3299 19.5822 18.3636 19.7859 18.309 19.9865C18.2545 20.1871 18.1246 20.3462 17.9578 20.4418C17.7894 20.5389 17.5841 20.5707 17.3821 20.5166H17.3805L14.1007 19.6442C13.6917 19.536 13.2716 19.7764 13.1625 20.1823C13.0534 20.5882 13.2956 21.0053 13.7046 21.1135L16.9859 21.9859L19.2713 22.5972V22.5956C19.4606 22.6449 19.669 22.6242 19.8535 22.5192L29.7458 16.8441L29.7442 16.8425C30.0457 16.6705 30.344 16.7438 30.5653 16.9268C30.6696 17.0128 30.761 17.1258 30.8347 17.2532C30.9085 17.3789 30.9598 17.5142 30.9855 17.6479C31.0352 17.917 30.9614 18.1908 30.6968 18.342L30.6984 18.3436C30.6712 18.3595 30.6455 18.377 30.6198 18.3961L21.3147 25.4116C21.2938 25.4243 21.2746 25.4386 21.2553 25.4545C20.6106 25.9655 19.9098 26.3062 19.1544 26.4765C18.399 26.6468 17.5776 26.6501 16.6907 26.4893Z" fill="white"/>
              </svg> Donate Now

              </a>
              <div class="text-sm text-black">- Join Hands, Change Lives</div>
            </div>
      </div>
    </div>
  </nav>
</header>

<script>
  window.addEventListener("scroll", function () {
    const header = document.getElementById("sticky-header");

    if (window.scrollY > 300) {
      header.classList.add("lg:bg-white");
      header.classList.add("lg:shadow");
      header.classList.remove("lg:absolute");
      header.classList.add("sticky");
      
    } else {
      header.classList.remove("lg:bg-white");
      header.classList.remove("lg:shadow");
      header.classList.add("lg:absolute");
      header.classList.remove("sticky");    
    }
  });

  document.getElementById('mobile-menu-button').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    menu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>
