@extends('layouts.app')
@section('title', 'Comment Jet | Price')
@section('content')

    <section class="container mx-auto  ">
        <div class=" py-4 lg:py-10 flex flex-col items-center">
            <h2 class="text-[38px] text-center lg:text-[64px] leading-[44px] lg:leading-[82px] font-medium max-w-4xl">
                Innovate and Thrive with Our Visual Workspace!</h2>
            <p class=" mt-4 lg:mt-0 text-[18px] text-center lg:text-[22px] leading-6 lg:leading-9 max-w-4xl">Commentjet provides a visual
                workspace for innovation that enables
                distributed teams of any size to dream, design, and build the future together.</p>
        </div>
        <img src="{{ asset('img/about/aboutus.png') }}" class="mx-auto py-4" alt="">
    </section>

    <section class="container mx-auto grid grid-cols-2 py-7 lg:py-[100px] gap-10">
        <div class="col-span-2 lg:col-span-1 order-2 lg:order-1">
            <h2 class="text-[48px] lg:text-[64px] leading-[44px] lg:leading-[82px] font-medium py-2">Our Mission</h2>
            <p class="text-[18px] lg:text-[22px] leading-6 lg:leading-9 py-2">
                Our mission is to empower individuals and organizations to unleash their full creative potential through our
                innovative visual workspace. We believe that by providing intuitive tools and a collaborative platform, we
                can revolutionize the way people work and innovate.
            </p>
            <p class="text-[18px] lg:text-[22px] leading-6 lg:leading-9 py-2">At the core of our mission is a commitment to
                helping our users thrive in a rapidly evolving world. We strive to foster a culture of creativity,
                collaboration, and continuous learning, enabling our users to stay ahead of the curve and achieve their
                goals. Join us on our mission to redefine the future of work and unlock new possibilities for growth and
                success.</p>
        </div>
        <div class="col-span-2 lg:col-span-1 p-[50px] rounded-3xl order-1 lg:order-2"
            style="background-image:url('{{ asset('img/about/missoin.png') }}'); background-size:cover">
            <img src="{{ asset('img/about/commenjetlogo.png') }}" class=" lg:pt-8 pb-4 w-[135px] lg:w-auto h-[17] lg:h-auto"
                alt="">
            <h4 class="text-4xl lg:text-[64px] leading-[44px] lg:leading-[82px]">Maximize Productivity, Minimize Effort: Our
                Time-Saving Mission!</h4>
        </div>
    </section>
    <section class="lg:p-20 py-16 flex flex-col lg:flex-row justify-center items-center lg:space-x-10 mb-6" style="background-image: url('{{asset('img/about/bgdes.png')}}')">
        <div class="lg:ml-36">
            <div class=" bg-white h-40 w-40 rounded-full flex items-center justify-center">
                <img src="{{asset('img/logo.png')}}" class=" h-12" alt="">
            </div>
        </div>
        <div class="text-white pt-3 lg:pt-0 text-center lg:text-left px-2">
            <h4 class="text-[22px] leading-[26.63px] font-semibold py-3 lg:py-0">Our motto</h4>
            <span class="text-[48px] lg:text-[64px] leading-[50px] lg:leading-[76px] font-medium">Reclaim Your Time: Save a
                <span class=" text-[#9FE870]">Day</span> Every <span class=" text-[#9FE870]">Week</span>!</span>
        </div>
    </section>
    <section class=" container mx-auto pt-6 lg:pt-20">
        <div class=" items-center">
            <h2 class="text-center text-[38px] leading-[44px] lg:text-[64px] lg:leading-[82px] font-medium">Life at
                Commentjet</h2>
            <p class="text-[18px] lg:text-[22px] leading-6 lg:leading-9 text-center py-2 lg:py-0">San Diego HQ, United
                States, Canada,
                Ireland, United Kingdom,
                Australia, and across the globe.</p>
            <div class="flex justify-center mt-8 mb-4 lg:mb-0 lg:mt-16 ">
                <div>
                    <x-button.shadowbuttonlink title="Join Our Team" route="#" />
                </div>
            </div>
        </div>
        <img src="{{ asset('img/about/Life at Commentjet.png') }}" alt="">
    </section>
    <section class="bg-none lg:mt-[100px]" style="background-image:url('{{ asset('img/giggag.png') }}')">
        <div class="container mx-auto text-center py-3 lg:py-[100px] mt-14">
            <h2 class="font-semibold text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px]">Frequently asked questions
            </h2>
            <p class="text-[18px] lg:text-[22px] leading-6 lg:leading-9 py-4 lg:py-2">Please check the answers from us, If
                you have a quarry remaining
                contact at <a href="#" class="text-[#0066FF]">support@feedbex.com</a></p>
        </div>
    </section>
    <section class="container mx-auto">
        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-transparent dark:bg-gray-900 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400">
            <h2 id="accordion-flush-heading-0" class=" bg-transparent">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-y border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span>How do I share my feedback using the design sharing tool?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>

                </button>
            </h2>
            <h2 id="accordion-flush-heading-2">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                    aria-controls="accordion-flush-body-2">
                    <span>Can I monitor the progress of my project easily?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <h2 id="accordion-flush-heading-3">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                    aria-controls="accordion-flush-body-3">
                    <span> What's the process for sharing projects with clients and team members?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <h2 id="accordion-flush-heading-4">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                    aria-controls="accordion-flush-body-4">
                    <span>Can you explain how the platform streamlines project management?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <h2 id="accordion-flush-heading-5">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-5" aria-expanded="false"
                    aria-controls="accordion-flush-body-5">
                    <span> How does the tool work?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <h2 id="accordion-flush-heading-6">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-6" aria-expanded="false"
                    aria-controls="accordion-flush-body-6">
                    <span>Is the feedback process user-friendly for both clients and team members?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <h2 id="accordion-flush-heading-7">
                <button type="button"
                    class="flex text-left lg:items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-7" aria-expanded="false"
                    aria-controls="accordion-flush-body-7">
                    <span> Can I access project details on the go?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="min-w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
        </div>
        <div class="flex justify-center mt-16 ">
            <div>
                <x-button.shadowbuttonlink title="Load More" route="#" />
            </div>
        </div>
    </section>

    <x-section-start-use />

@endsection
