<?php
/*
Template Name: Home Page
*/
get_header();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<main class="min-h-screen">


    <section class="relative">
        <a href="#about-us">
        <picture>
            <source media="(min-width:768px)" srcset="wp-content/uploads/2025/03/banner_1.webp">
            <source media="(max-width:768px)" srcset="wp-content/uploads/2025/03/mob_banner.webp">
            <img src="wp-content/uploads/2025/03/banner_1.webp" alt="Main Banner" class="w-full h-auto object-cover">
        </picture>
        </a>
       
        <!-- <div class="absolute top-0 left-0 w-full h-full flex justify-center md:justify-start items-center text-center md:text-start gap-4 p-4 py-8 lg:p-12 xl:p-16 before:content-[''] before:absolute before:inset-0 before:bg-black before:bg-opacity-50 before:z-[-1]">
            <div class="space-y-6">
                <div class="text-white text-2xl lg:text-4xl font-bold drop-shadow-lg">BUILDING A BRIGHTER FUTURE</div>
                <div class="text-white text-xl lg:text-2xl font-medium drop-shadow-md">One Initiative at a time….</div>

            </div>
        </div> -->
    </section>





    <section>
        <div class="grid lg:grid-cols-3">
       

            <div class="text-white relative flex justify-center items-center h-full">
                <img loading="lazy" class="w-full h-64 lg:h-84 object-cover" src="wp-content/uploads/2025/03/section2-bg1.webp" alt="">
                <div
                    class="absolute top-0 left-0 w-full h-full z-1 flex justify-center flex-col items-center text-center gap-4 p-4 py-8 lg:p-12 xl:p-16">
                    <div class="text-2xl lg:text-3xl font-semibold ">CHILDREN’S EDUCATION
                    </div>
                    <div class="text-base">
                        Transforming Government Schools into Child-Friendly Hubs.

                    </div>
                </div>
            </div>


            <div class="text-white relative flex justify-center items-center h-full">

                <img loading="lazy" class="w-full  h-64 lg:h-84 object-cover" src="wp-content/uploads/2025/03/section2-bg2.webp" alt="health care">

                <div
                    class="absolute top-0 left-0 w-full h-full z-1 flex justify-center flex-col items-center text-center gap-4 p-4 py-8 lg:p-12 xl:p-16">
                    <div class="text-2xl lg:text-3xl font-semibold ">HEALTH CARE

                    </div>
                    <div class="text-base">
                        Providing state-of-the-art healthcare available for everyone!

                    </div>

                    <div class="mt-2">
                        <a href="https://ejindia.com" class="cursor-pointer font-medium border-white border hover:bg-white hover:text-[#F78D1E] px-4 py-2 rounded-md" target="_blank">
                            Know More
                        </a>
                    </div>
                </div>
            </div>



            <div class="text-white relative flex justify-center items-center h-full">
                <img loading="lazy" class="w-full  h-64 lg:h-84 object-cover" src="wp-content/uploads/2025/03/section2-bg1.webp" alt="">
                <div
                    class="absolute top-0 left-0 w-full h-full z-1 flex justify-center flex-col items-center text-center gap-4 p-4 py-8 lg:p-12 xl:p-16">
                    <div class="text-2xl lg:text-3xl font-semibold ">RURAL DEVELOPMENT
                    </div>
                    <div class="text-base">
                        From Skill Training for Women empowerment to providing free education for orphans, children with
                        a single parent, marginalised, dropouts, tribal students and dropouts.

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white" id="about-us">
        <div class="p-4 py-8 lg:p-12 xl:p-16">
            <div class="grid md:grid-cols-2 gap-10">
                <div>
                    <img loading="lazy" src="wp-content/uploads/2025/03/about-us.webp" alt="">
                </div>

                <div class="space-y-6 m-auto">
                    <div class="text-[#F78D1E] text-lg font-medium">ABOUT US</div>
                    <div class="text-2xl lg:text-4xl font-bold  text-black">Journey to build a brighter future
                        for those in
                        need</div>

                    <div>
                        Krisha Charitable Trust (KCT) is a not-for-profit organization and the CSR arm of Emerald Jewel
                        Industry India Ltd. Established in 1998, KCT is dedicated to empowering communities through
                        education, healthcare, and skill development.

                    </div>

                    <div class="font-semibold text-lg text-black">
                        We strive to
                    </div>

                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-green-600">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>Provide quality education for all, ensuring equal opportunities for tribal students
                                and marginalized communities.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-green-600">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>Promote health and well-being for the underprivileged.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-green-600">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>Streamlining Self-Employment & Career Opportunities through skill-based training
                                programs for sustainable livelihoods.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-green-600">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>Strengthen educational infrastructure and enhance the overall quality of
                                education.</span>
                        </li>
                    </ul>



                </div>
            </div>
        </div>
    </section>



    <section class="bg-[#F7F6F2]">
        <div class="p-4 py-8 lg:p-12 xl:p-16">
            <div class="text-center mb-12">
                <div class="text-[#F78D1E] text-lg font-medium mb-4">Small Steps, Big Impact</div>
                <div class="text-2xl lg:text-4xl font-bold  text-black">Bringing Positive Change Through Action
                </div>


            </div>

            <!-- Swiper Carousel -->
            <div class="swiper swiper-container home-section3">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card bg-white w-full shadow-sm max-w-md mx-auto">
                            <img loading="lazy" class="object-cover w-full h-48" src="wp-content/uploads/2025/03/section3-img1.webp"
                                alt="" />
                            <div class="card-body items-center text-center p-6">
                                <h2 class="card-title text-xl font-semibold  mb-4 text-black">Enabling Essential
                                    Needs</h2>
                                <p>Construction of a girls' washroom at Government Arts College, Coimbatore</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-white w-full shadow-sm max-w-md mx-auto">
                            <img loading="lazy" class="object-cover w-full h-48" src="wp-content/uploads/2025/03/section3-img2.webp"
                                alt="" />
                            <div class="card-body items-center text-center p-6">
                                <h2 class="card-title text-xl font-semibold  mb-4 text-black">World Diabetes Day
                                    & Breast Cancer Awareness Camp</h2>
                                <p>With the Support of Ganga Hospital Spreading Awareness, Saving Lives!"</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card bg-white w-full shadow-sm max-w-md mx-auto">
                            <img loading="lazy" class="object-cover w-full h-48" src="wp-content/uploads/2025/03/section3-img3.webp"
                                alt="" />
                            <div class="card-body items-center text-center p-6">
                                <h2 class="card-title text-xl font-semibold  mb-4 text-black">When words are not enough, Love expresses</h2>
                                <p>Creating Joyful Moments with Special Children – A Truly Fulfilling Experience!</p>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="mt-10">
                    <div class="swiper-pagination "></div>
                </div>

            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="p-4 py-8 lg:p-12 xl:p-16">
            <div class="text-center mb-12">
                <div class="text-[#F78D1E] text-lg font-medium mb-4">Our Impactful Initiatives</div>
                <div class="text-2xl lg:text-4xl font-bold  text-black">Transforming Lives Through Our Projects</div>


            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">


                <div class="card">



                    <div>
                        <div class="swiper swiper-gallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img loading="lazy" class="w-full h-58" src="wp-content/uploads/2025/03/section5-img1.webp"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img loading="lazy" class="w-full h-58" src="wp-content/uploads/2025/03/section5-img1-2.webp"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img loading="lazy" class="w-full h-58" src="wp-content/uploads/2025/03/section5-img1-3.webp"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img loading="lazy" class="w-full h-58" src="wp-content/uploads/2025/03/section5-img1-4.webp"
                                        alt="" />
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>


                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold mb-4 text-black">CHILDREN’S EDUCATION
                        </h2>
                        <div class="font-semibold mb-4 text-black">Government Tribal Residential Higher Secondary School, Anaikatti
                        </div>
                        <p>Stronger Foundations with Modern Infrastructure – New Auditorium, Computer Lab & Revamped Classrooms to Improve Government School.</p>
                    </div>
                </div>

                <div class="card">


                    <div>
                        <div class="swiper swiper-gallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img loading="lazy" class="object-cover w-full h-58" src="wp-content/uploads/2025/03/section5-img2.webp"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img loading="lazy" class="object-cover w-full h-58" src="wp-content/uploads/2025/03/section5-img2-2.webp"
                                        alt="" />
                                </div>


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>


                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold mb-4 text-black">HEALTH CARE
                        </h2>
                        <div class="font-semibold mb-4 text-black">Expert Care, Every Step of the Way!
                        </div>
                        <p>Comprehensive Care with Expert Specialists Across Multiple Medical Departments!</p>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="swiper swiper-gallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img loading="lazy" class="object-cover w-full h-58" src="wp-content/uploads/2025/03/section5-img3.webp"
                                        alt="" />
                                </div>



                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold mb-4 text-black">RURAL DEVELOPMENT
                        </h2>
                        <div class="font-semibold mb-4 text-black"> Fostering Entrepreneurial Growth

                        </div>
                        <p>3-Month Sewing Training with Business Loan Support – Empowering Entrepreneurs for Growth!</p>
                    </div>
                </div>











            </div>
        </div>
    </section>

    <section class="bg-[#F7F6F2]">
        <div class="p-4 py-6 lg:p-12 xl:p-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12">
                <div class="text-center space-y-4">
                    <div class="text-[#F78D1E] font-bold text-4xl lg:text-5xl">
                        <span class="counter" data-target="40">0</span>+
                    </div>
                    <div class="text-xl font-semibold text-black">Network</div>
                </div>
                <div class="text-center space-y-4">
                    <div class="text-[#F78D1E] font-bold text-4xl lg:text-5xl">
                        <span class="counter" data-target="5000">0</span>+
                    </div>
                    <div class="text-xl font-semibold text-black">CSR Activity</div>
                </div>
                <div class="text-center space-y-4">
                    <div class="text-[#F78D1E] font-bold text-4xl lg:text-5xl">
                        <span class="counter" data-target="1000">0</span>+
                    </div>
                    <div class="text-xl font-semibold text-black">Volunteers</div>
                </div>
                <div class="text-center space-y-4">
                    <div class="text-[#F78D1E] font-bold text-4xl lg:text-5xl">
                        <span class="counter" data-target="300000">0</span>+
                    </div>
                    <div class="text-xl font-semibold text-black">Beneficiaries
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font relative">
        <div class="p-4 py-6 lg:p-12 xl:p-16 relative z-1 backdrop-brightness-20">

            <div class="text-center mb-6">
                <div class="text-[#F78D1E] text-lg font-medium mb-4">
                    A Strong Desire to achieve something High
                </div>
                <div class="text-2xl lg:text-4xl font-bold  text-white">What We Realised?
                </div>


            </div>



            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <p class="leading-relaxed text-lg text-white">We recognize that individuals face numerous challenges in their daily lives. Through our dedicated services, We are proud to contribute to the wellness of society by Advancing Education, Social Welfare Programs, Community Empowerment, Supporting NGO's Initiatives Etc.,
                </p>

            </div>
        </div>
        <img loading="lazy" src="wp-content/uploads/2025/03/testimonial-parallax.webp" alt="background image" class="absolute top-0 left-0 w-full h-full object-cover z-0 ">
    </section>


    <section class="bg-white">
        <div class="p-4 py-8 lg:p-12 xl:p-16">
            <div class="text-center mb-12">
                <div class="text-[#F78D1E] text-lg font-medium mb-4">Team Members</div>
                <div class="text-2xl lg:text-4xl font-bold  text-black">BOARD OF TRUSTEES</div>


            </div>


            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">


                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-42 object-contain" src="wp-content/uploads/2025/03/Srinivasan.webp"
                        alt="" />
                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold text-black"> MR. Srinivasan
                        </h2>

                        <p> (Managing Trustee)
                        </p>
                    </div>
                </div>


                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-42 object-contain" src="wp-content/uploads/2025/03/Shakthi-Srinivasan.webp"
                        alt="" />
                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold text-black"> Mrs. Shakthi Srinivasan
                        </h2>

                        <p> Trustee
                        </p>
                    </div>
                </div>



                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-42 object-contain" src="wp-content/uploads/2025/03/Karunakaran.webp"
                        alt="" />
                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold text-black"> Mr. M. Karunakaran
                        </h2>

                        <p>Trustee
                        </p>
                    </div>
                </div>


                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-42 object-contain" src="wp-content/uploads/2025/03/Gopal.webp"
                        alt="" />
                    <div class="card-body items-center text-center p-6">
                        <h2 class="card-title text-xl font-semibold text-black">Mr. G.K. Venkata Gopal
                        </h2>

                        <p>Trustee
                        </p>
                    </div>
                </div>













            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font relative" id="contact-us">
        <div class="p-4 py-6 lg:p-12 xl:p-16 relative z-1 backdrop-brightness-20">

            <div class="text-center mb-10">
                <div class="text-[#F78D1E] text-lg font-medium mb-4">
                    Join Hands with Us

                </div>
                <div class="text-2xl lg:text-4xl font-bold  text-white">Would you like to connect us, Please update the form below


                </div>


            </div>



            <div>
                <div class="flex items-center justify-center p-6">
                    <div class="max-w-lg w-full bg-white shadow-lg rounded-lg p-6">
                        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Contact Us</h2>
                        <form id="contact-form" class="grid md:grid-cols-2 gap-4">

                            <!-- Name -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-1 text-sm">Enter your Name</label>
                                <input id="your-name" type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" placeholder="John Doe" required>
                            </div>

                            <!-- Mobile Number -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-1 text-sm">Mobile Number</label>
                                <input id="your-phone" type="tel" minlength="10" maxlength="10"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    name="phone" id="phone" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" placeholder="9876543210" pattern="[0-9]{10}" required>
                            </div>

                            <!-- Email Address -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-1 text-sm">Email Address</label>
                                <input id="your-email" type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" placeholder="you@example.com" required>
                            </div>

                            <!-- Location -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-1 text-sm">Location</label>
                                <input id="your-location" type="text" name="location" id="location" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" placeholder="City, Country" required>
                            </div>

                            <!-- Comments -->
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 font-medium mb-1 text-sm">Comments</label>
                                <textarea id="your-message" name="comments" id="comments" rows="4" class="w-full resize-none px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" placeholder="Write your message..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center  md:col-span-2">
                                <button type="submit" class="bg-[#F78D1E] cursor-pointer text-white font-bold py-2 px-6 rounded-lg hover:bg-[#F78D1E] transition duration-300">
                                    Submit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>



        </div>
        <img loading="lazy" src="wp-content/uploads/2025/03/contact-banner.webp" alt="background image" class="absolute top-0 left-0 w-full h-full object-cover z-0">
    </section>


    <section class="bg-[#F7F6F2]">
        <div class="p-4 py-8 lg:p-12 xl:p-16">
            <div class="text-center mb-12">
                <div class="text-[#F78D1E] text-lg font-medium mb-4">News & Blog</div>
                <div class="text-2xl lg:text-4xl font-bold  text-black">Newspaper clippings</div>


            </div>


            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">


                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping1.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping2.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping3.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping4.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping5.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping6.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82 object-contain" src="wp-content/uploads/2025/03/newspaper-clipping7.webp"
                        alt="newspaper clipping" />
                </div>

                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping8.webp"
                        alt="newspaper clipping" />
                </div>
                <div class="card w-full max-w-md mx-auto">
                    <img loading="lazy" class="h-82object-contain" src="wp-content/uploads/2025/03/newspaper-clipping9.webp"
                        alt="newspaper clipping" />
                </div>
















            </div>
        </div>
    </section>

</main>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let swiper1 = new Swiper('.home-section3', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1240: {
                slidesPerView: 3,
            },
        },
    });
</script>
<script>
    function animateCountUp(counterElement) {
        const target = +counterElement.getAttribute("data-target");
        let count = 0;
        const speed = target / 100; // Adjust speed

        function updateCount() {
            count += speed;
            if (count < target) {
                counterElement.innerText = Math.floor(count);
                requestAnimationFrame(updateCount);
            } else {
                counterElement.innerText = target;
            }
        }

        updateCount();
    }

    // Intersection Observer to trigger animation on scroll
    const counters = document.querySelectorAll(".counter");
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCountUp(entry.target);
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(counter => observer.observe(counter));
</script>



<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();

        const apiEndpoint = "https://jewelonestaging.brightbridge.co/contact-form-7/v1/contact-forms/30/feedback";
        const formData = new FormData();

        formData.append("your-name", document.getElementById("your-name").value);
        formData.append("your-phone", document.getElementById("your-phone").value);
        formData.append("your-email", document.getElementById("your-email").value);
        formData.append("your-location", document.getElementById("your-location").value);
        formData.append("your-message", document.getElementById("your-message").value);
        formData.append("_wpcf7_unit_tag", "wpcf7-f30-o1"); // Replace with actual unit tag if needed

        fetch(apiEndpoint, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "mail_sent") {
                    Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "Your message has been sent successfully!",
                    });

                    // Reset the form after submission
                    document.getElementById("contact-form").reset();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong. Please try again.",
                    });
                }
            })
            .catch(error => {
                console.error("Error:", error);
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Failed to submit the form. Please try again later.",
                });
            });
    });
</script>



<script>
    let swiper2 = new Swiper(".swiper-gallery", {
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>


<?php get_footer(); ?>