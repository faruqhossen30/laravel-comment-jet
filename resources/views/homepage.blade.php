@extends('layouts.app')
@section('title', 'Comment Jet | Home')
@section('content')
    <section class="container mx-auto">
        <div class="flex flex-col items-center container mx-auto lg:py-6 lg:mt-4">

            <h2 data-aos="fade-down" data-aos-duration="2000"
                class="max-w-4xl font-semibold  text-center py-10 text-[38px] leading-[44px] lg:text-[64px] lg:leading-[82px]">
                Fastest way to design and complete
                your project</h2>
            <p class="text-center text-[18px] leading-7 lg:leading-9 lg:text-[22px]">Provide visual feedback and report bugs
                in seconds!</p>
            <div class="flex space-x-2 py-6">
                <a href="#"
                    class="text-white rounded-lg bg-green-600 py-[20px] px-6 text-[16px] leading-[18px] font-semibold">Get
                    Started</a>
                <a href="#"
                    class="text-black rounded-lg border-black border-2 bg-white py-[20px] px-6 text-base leading-[18px] font-semibold">Watch
                    Demo</a>
            </div>

        </div>
    </section>

    <section class="container mx-auto">
        <img data-aos="zoom-in" data-aos-duration="2000" src="{{ asset('img/homewindow.png') }}" class="w-full"
            alt="">
    </section>
    <section class="container mx-auto text-center py-[73px] lg:py-[120px]">
        <h2 data-aos="fade-right" data-aos-duration="2000"
            class="heading-two max-w-4xl text-center text-[38px] leading-[44px] lg:text-[64px] lg:leading-[82px] inline-block">
            Unlock efficiency and streamline your projects with a single platform</h2>
        <p class=" text-[18px] lg:text-[22px] leading-7 lg:leading-9 pt-6">Revolutionize your workflow: experience the power
            of consolidation</p>
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 items-center gap-8 lg:gap-32">
            <div data-aos="fade-right" data-aos-duration="2000" class="col-span-2 lg:col-span-1 p-6 rounded-3xl"
                style="background: rgba(222, 220, 216, 1);">
                <img src="{{ asset('img/share-member.png') }}" class="p-6 w-full"
                    style="background: rgba(222, 220, 216, 1);" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1">
                <div data-aos="fade-left" data-aos-duration="2000" class="flex flex-col space-y-6">
                    <h2 class="text-[30px] lg:text-[52px] leading-10 lg:leading-[64px] font-medium">Share your design in a
                        second</h2>
                    <p class="text-[18px] lg:text-[22px] leading-7 lg:leading-9">You have the power to copy the link
                        generated by our platform for
                        quick access, or chart your own unique project, inviting clients and members to set sail
                        alongside you on this exciting journey of teamwork and achievement.</p>
                    <x-button.shadowbuttonlink title="Try it Now" route="#" />
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 items-center gap-8 lg:gap-32 container mx-auto py-[120px]">
            <div class="col-span-2 lg:col-span-1 order-2 lg:order-1" data-aos="fade-right" data-aos-duration="2000">
                <div class="flex flex-col space-y-6">
                    <h2 class="text-[30px] lg:text-[52px] leading-10 lg:leading-[64px] font-medium">Simple and divided
                        Timeline view </h2>
                    <p class="text-[18px] lg:text-[22px] leading-7 lg:leading-9">You have the power to copy the link
                        generated by our platform for
                        quick access, or chart your own unique project, inviting clients and members to set sail
                        alongside you on this exciting journey of teamwork and achievement.</p>
                    <x-button.shadowbuttonlink title="Try it Now" route="#" />
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 pt-6 pl-6 rounded-3xl order-1 lg:order-2" data-aos="fade-left"
                data-aos-duration="2000" style="background: rgba(222, 220, 216, 1);">
                <img src="{{ asset('img/homewindow.png') }}" class="pt-6 pl-6 h-[601px]"
                    style="background: rgba(222, 220, 216, 1);" alt="">
            </div>

        </div>
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 items-center gap-8 lg:gap-32 container mx-auto">
            <div class="col-span-2 lg:col-span-1 pt-6 pl-6 rounded-3xl" data-aos="fade-right" data-aos-duration="2000"
                style="background: rgba(222, 220, 216, 1);">
                <img src="{{ asset('img/feedback.png') }}" class="pt-6 pl-6 h-[645px]"
                    style="background: rgba(222, 220, 216, 1);" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1" data-aos="fade-left" data-aos-duration="2000">
                <div class="flex flex-col space-y-6">
                    <h2 class="text-[30px] lg:text-[52px] leading-10 lg:leading-[64px] font-medium">Just one tap to give
                        your feedback</h2>
                    <p class="text-[18px] lg:text-[22px] leading-7 lg:leading-9">With just a single tap, you can
                        effortlessly provide your valuable
                        feedback using our tool. No more complexities, no more hassle—your thoughts and insights are
                        just a touch away, helping us create better designs tailored to your vision.</p>
                    <x-button.shadowbuttonlink title="Try it Now" route="#" />
                </div>
            </div>
        </div>
    </section>
    <div class="py-6 text-center mt-28 pt-36 bg-no-repeat" style="background-image: url('{{ asset('img/giggag.png') }}')">
        <h2 class="max-w-4xl text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px] font-medium inline-block"
            data-aos="fade-down" data-aos-duration="2000">Tool that dedicated to
            help you and make your
            project building faster</h2>
        <p class="text-[18px] lg:text-[22px] leading-7 lg:leading-9 py-6">Revolutionize your workflow: experience the power
            of consolidation</p>
    </div>

    <div class="flex gap-4 container mx-auto">
        <div class="flex-1 rounded-3xl p-10 bg-[#E4E2DF]" data-aos="zoom-in" data-aos-duration="2000">
            <div class="space-y-6 py-12">
                <h2 class="text-[42px] leading-[54px] font-medium">A simple overview of how project is going</h2>
                <p class="text-[22px] leading-9">Stay Informed, Stay Ahead: Get a Snapshot of Your Project's Journey
                </p>
                <x-button.shadowbuttonlink title="Try it Now" route="#" />
            </div>
            <div class="grid grid-cols-12 justify-between gap-4">
                <div class="col-span-7  bg-white p-3 rounded-3xl">
                    <div class=" flex flex-col gap-1 divide-y">
                        <div class="space-y-2 ">
                            <div class="flex justify-between">
                                <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Ordered by</span>
                                <span class="text-[11.7px] leading-[14.316px] font-semibold">Dan Grabrial</span>
                            </div>
                            <div class="flex justify-between">
                                <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Delivery
                                    date</span>
                                <span class="text-[11.7px] leading-[14.316px] font-semibold">May 10, 2:58 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Project
                                    value</span>
                                <span class="text-[11.7px] leading-[14.316px] font-semibold">£2000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Order number</span>
                                <span class="text-[11.7px] leading-[14.316px] font-semibold">#F071BF2736783</span>
                            </div>
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between">
                                <h2 class="font-semibold leading-[14.16px] text-[11.7px] my-2">
                                    Track Order
                                </h2>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>

                            </div>

                            <ol
                                class="relative text-gray-500 border-s border-green-500 dark:border-gray-700 dark:text-gray-400">

                                <li class="mb-7 ms-4">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-6 bg-white rounded-full -start-4 dark:ring-gray-900 dark:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>

                                    </span>
                                    <h3 class="font-semibold text-[10px] leading-3 py-2">Order in progress</h3>
                                </li>
                                <li class="mb-7 ms-4">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-6 bg-white rounded-full -start-4 dark:ring-gray-900 dark:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-circle text-green-500" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                    </span>
                                    <h3 class=" text-[10px] leading-3  py-2 font-semibold">Review delivery</h3>
                                </li>
                            </ol>

                        </div>
                    </div>

                </div>
                <div class="col-span-5 bg-white p-4 rounded-3xl">
                    <div class="flex justify-between my-2">
                        <h2 class="font-semibold text-[11.7px] leading-[14.16px]">Order Details</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </div>
                    <div class="bg-white border rounded-md flex justify-between p-2 my-6">
                        <div class="flex justify-between space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4">
                                <path
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                <path
                                    d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>
                            <span class=" text-[9.42px]">Final_File.zip</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12 2.25a.75.75 0 0 1 .75.75v11.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3a.75.75 0 0 1 .75-.75Zm-9 13.5a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Ordered by</span>
                            <span class="text-[11.7px] leading-[14.316px] font-semibold">Dan Grabrial</span>
                        </div>
                        <div class="flex justify-between">
                            <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Delivery
                                date</span>
                            <span class="text-[11.7px] leading-[14.316px] font-semibold">May 10, 2:58 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Project
                                value</span>
                            <span class="text-[11.7px] leading-[14.316px] font-semibold">£2000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class=" text-gray-500 text-[10.03px] leading-3 font-semibold">Order number</span>
                            <span class="text-[11.7px] leading-[14.316px] font-semibold">#F071BF2736783</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex-1 rounded-3xl p-10 bg-[#E4E2DF]" data-aos="zoom-in" data-aos-duration="2000">
            <div class="space-y-6 py-12">
                <h2 class="text-[42px] leading-[54px] font-medium">Help and solution with <br>note in each project</h2>
                <p class="text-[22px] leading-9">Stay Informed, Stay Ahead: Get a Snapshot of Your Project's
                    <br>Journey
                </p>
                <x-button.shadowbuttonlink title="Try it Now" route="#" />
            </div>
            <div class="grid grid-cols-12 justify-between gap-4 py-2">
                <div class="col-span-7 bg-white p-3 rounded-3xl">
                    <div class="flex justify-between p-1">
                        <h2 class="font-semibold text-[12.42px] leading-[15px]">
                            Private note
                        </h2>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-green-500 leading-[15px]">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h2 class=" font-semibold text-green-500 text-[12.42px] leading-[15px]">Add Note</h2>
                        </div>
                    </div>
                    <div class="text-center py-6">
                        <div class="flex justify-center">
                            <img src="{{ asset('img/6189389_3207951 1.png') }}" alt="">
                        </div>
                        <span class="text-gray-300 font-semibold text-[10.65px] ">Nothing available now</span>
                    </div>
                </div>
                <div class="col-span-5 bg-white p-4 rounded-3xl">
                    <h2 class="font-semibold text-xs leading-4">Support</h2>
                    <div class="divide-y">
                        <div class="flex justify-between py-4 ">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>
                                <div class="pl-2">
                                    <h1 class="text-[11px] leading-[13px] font-semibold">FAQs</h1>
                                    <p class="text-[9px] leading-3 text-gray-700">Find needed answers.</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                        <div class="flex justify-between py-4 ">
                            <div class="flex">
                                <img src="{{ asset('img/support.png') }}" class="w-4 h-4" alt="">
                                <div class="pl-2">
                                    <h1 class="text-[11px] leading-[13px] font-semibold">FAQs</h1>
                                    <p class="text-[9px] leading-3 text-gray-700">Find needed answers.</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="container hidden lg:block  mx-auto bg-[#9FE870] my-6 rounded-3xl">
        <div class="grid grid-cols-12">
            <div class="col-span-6 px-12 py-20 space-y-6" data-aos="fade-right" data-aos-duration="2000">
                <h3 class="text-[42px] leading-[54px] font-medium">A simple overview of how project is going</h3>
                <p>Stay Informed, Stay Ahead: Get a Snapshot of Your Project's Journey</p>
                <x-button.shadowbuttonlink title="Try it Now" route="#" />
            </div>
            <div class="col-span-6 flex justify-end" data-aos="fade-left" data-aos-duration="2000">
                <img src="{{ asset('img/dashboard.png') }}" class="mt-14" alt="">
            </div>
        </div>
    </div>

    <div class="container mx-auto text-center py-12 lg:pt-[120px]">
        <h2 class="max-w-4xl font-semibold  text-center py-5 lg:py-10 text-[38px] leading-[44px] lg:text-[64px] lg:leading-[82px] inline-block"
            data-aos="fade-right" data-aos-duration="2000">
            How the magic unfolds: Unveiling the inner workings
        </h2>
        <p class="text-[18px] lg:text-[22px] leading-7 lg:leading-9">Discover the Alchemy Behind Our Seamless Process</p>
    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-6">
            <div class=" col-span-12 lg:col-span-4 flex flex-col justify-center items-center " data-aos="zoom-in"
                data-aos-duration="2000">
                <img src="{{ asset('img/upload1.png') }}" alt="">
                <h3 class="text-2xl font-semibold leading-[54px]">Upload Design</h3>
                <p class="text-[18px] leading-7 lg:leading-8 text-center ">Upload your design and share the generated link
                    with
                    others</p>
            </div>
            <div class=" col-span-12 lg:col-span-4 flex flex-col justify-center items-center py-4" data-aos="zoom-in"
                data-aos-duration="2000">
                <img src="{{ asset('img/Colaborate1.png') }}" alt="">
                <h3 class="text-2xl font-semibold leading-[54px]">Colaborate</h3>
                <p class="text-[18px] leading-7 lg:leading-8 text-center ">Collaborate with other members using feedbex and
                    get
                    feedback</p>
            </div>
            <div class=" col-span-12 lg:col-span-4 flex flex-col justify-center items-center " data-aos="zoom-in"
                data-aos-duration="2000">
                <img src="{{ asset('img/Success 1.png') }}" alt="">
                <h3 class="text-2xl font-semibold leading-[54px]">Complete Project</h3>
                <p class="text-[18px] leading-7 lg:leading-8 text-center ">After finalizing everything just upload final
                    file
                    to complete the project</p>
            </div>
        </div>
    </div>
    <hr class="mt-24 border-t-2">
    <section class=" container mx-auto justify-center mt-24 lg:mt-0">
        <div class=" container mx-auto flex justify-center">
            <button class="flex space-x-1 bg-[#02A750] rounded-full px-3 py-2 text-white "
                style="box-shadow: 0px 3px 4px 0px rgba(0,0,0,0.5); border-width:3px">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                        clip-rule="evenodd" />
                </svg>
                <span>Pricing</span>
            </button>

        </div>
        <h2 class="max-w-4xl text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px] text-center font-medium py-6 mx-auto"
            data-aos="fade-left" data-aos-duration="2000">Best in your range start using now</h2>
        <p class="text-[18px] lg:text-2xl leading-7 lg:leading-9 font-normal text-center	">Revolutionize your workflow:
            experience the power of consolidation</p>
        {{-- pricing button start --}}
        <div class="container flex justify-center mx-auto my-5 items-center">
            <div class="px-2 text-[18px] lg:text-[22px] leading-9 font-semibold">Buy Monthly</div>
            <label class="inline-flex items-center mb-5 cursor-pointer my-2 px-2">
                <input type="checkbox" value="" class="sr-only peer" checked>
                <div
                    class="relative w-11 lg:w-20 h-6 lg:h-12 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 lg:after:w-10 lg:after:h-10 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
            </label>
            <div class="px-2 text-blue-600 text-[18px] lg:text-[22px] leading-9 font-semibold">Buy Annually <span
                    class=" hidden lg:inline-block p-1 bg-[#02A75024] rounded-sm text-green-600 text-sm	">Save 14%</span>
            </div>
        </div>
        {{-- pricing button end --}}



    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-12 gap-3">
            <div class=" col-span-12 lg:col-span-5 bg-[#E4E2DF] p-10 rounded-lg" data-aos="fade-right"
                data-aos-duration="2000">
                <h3 class="text-[42px] leading-[54px] font-medium mt-16 lg:mt-10">Professionals</h3>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>All Basic Services</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Create Project Timeline</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Up to 10 Members</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>100 Quick Shares</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Up-to 100Mb File Upload</span>
                    </div>
                </div>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="lg:flex lg:justify-between items-center space-y-6 lg:space-y-0">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                        <span class="text-2xl font-semibold">Free for Now</span>
                    </div>
                    <div>
                        <x-button.shadowbuttonlink title="Subscribe" route="#" />
                    </div>
                </div>
            </div>
            <div class="hidden lg:block col-span-7 bg-[#9FE870] p-10 rounded-lg" data-aos="fade-left"
                data-aos-duration="2000">
                <button class="text-base border-black border rounded-full px-2 my-2 font-normal	">MOST PREMIUM</button>
                <h3 class="text-[42px] leading-[54px] font-medium ">Unlimited</h3>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="flex gap-36">
                    <div class="col-1">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>All Basic Services</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Create Project Timeline</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Up to 100 Members</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Unlimited Quick Shares</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Up-to 5Gb File Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>CommentJet Wallet</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Project Extension</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Project Milestone Support</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>Weekly Updates</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                        <span class="text-2xl font-semibold">19.50$ / Month</span>
                    </div>
                    <div>
                        <x-button.shadowbuttonlink title="Subscribe" route="#" />
                    </div>
                </div>


            </div>
        </div>
    </section>
    <x-frontend.section-faq />
    <x-section-start-use />

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <style type="text/css">
        .slider {
            position: relative;
            margin: 0 auto;
        }

        .owl-nav .owl-next {
            position: absolute;
            top: calc(50% - 20px);
            right: 0;
            margin-right: -20px !important;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: white !important;
            color: gray !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        /* .owl-nav .owl-next span{
                                                        font-size: 30px;
                                                    } */

        .owl-nav .owl-prev {
            position: absolute;
            top: calc(50% - 20px);
            left: 0;
            margin-left: -20px !important;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: white !important;
            color: gray !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .owl-nav .owl-prev:hover {
            background-color: #FF003A !important;
            color: gray !important;
        }

        .owl-nav .owl-next:hover {
            background-color: #FF003A !important;
            color: white !important;
        }

        .custompacity {
            opacity: .2;
        }
    </style>
@endpush


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('#featureSlider').owlCarousel({
            items: 4,
            loop: false,
            center: true,
            autoplay: true,
            dots: false,
            loop: true,
            margin: 10,
            nav: true,
            URLhashListener: true,
            autoplayHoverPause: true,
            startPosition: 'URLHash',
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 4,
                }
            }
        });
    </script>
@endpush
