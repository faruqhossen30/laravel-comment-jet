@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" pageoneRoute="{{ route('category.index') }}" pagetwo="Create" />
@endsection
@section('content')

<section
    class="container m-8 mx-auto rounded-lg dark:bg-gray-900 dark:text-slate-400 dark:border-gray-500">

    <div class="grid grid-cols-6 gap-10 border-gray-200 lg:gap-8 dark:border-gray-900">
        <div class="col-span-6 bg-white rounded-md lg:col-span-2 dark:bg-gray-800">
            <div class="p-10">
                <h3 class="py-2 text-4xl font-semibold text-center dark:text-white">Jamed Allan</h3>
                <p class="py-2 text-xl text-center dark:text-white">email</p>

                <a href="#" class="flex items-start justify-center py-2">
                    <img src="{{ asset('img/6189389_3207951 1.png') }}" class="h-40 rounded-full" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-white bg-gray-400 rounded-full max-w-6 max-h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </a>


                <div class="items-center text-center dark:text-white">
                    <x-form.submit-button class="" title="Updead New Photo"/>
                    <a href="#">
                        <h3 class="inline-block p-2 text-center bg-red-600 rounded-md dark:text-white">Updead New Photo</h3>
                    </a>
                </div>
                <div class="p-4 my-4 space-y-2 text-center bg-blue-300 rounded-lg dark:bg-blue-700 dark:text-white">
                    <p class="text-sm ">Update a new avater. Larger image will be resized automatically.</p>
                    <p class="text-sm">Maximum upload size is 1 <b>MB</b></p>
                </div>
                <p class="mt-2 text-sm text-center dark:text-white">Member Since:29 Sectember 2023</p>
            </div>
        </div>
        <div class="col-span-6 bg-gray-100 rounded-md lg:col-span-4 dark:bg-gray-700">
            <div class="">
                <h2 class="px-12 py-8 text-3xl font-semibold dark:text-white">Edit Profile</h2>
                <div class="pb-8 bg-white rounded-b-lg dark:bg-gray-800">
                    <form class="max-w-2xl mx-auto">

                        <div class="grid md:grid-cols-2 md:gap-8">
                            <div class="relative z-0 w-full my-5 mt-12 group">
                                <label for="floating_first_name" class=" dark:text-white">Full name</label>
                                <input type="text" name="floating_first_name" id="floating_first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900  border-2 border-gray-300 dark:bg-gray-900 dark:focus:bg-white dark:text-white dark:border-gray-600 dark:focus:border-blue-500 "
                                    placeholder=" Full name" required />

                            </div>
                            <div class="relative z-0 w-full mb-5 lg:mt-12 group">

                                <label for="floating_last_name" class=" dark:text-white">User name</label>
                                <input type="text" name="floating_last_name" id="floating_last_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:bg-gray-900 dark:focus:bg-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" User name" required />
                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_password" class=" dark:text-white">Password</label>
                                <input type="password" name="floating_password" id="floating_password"
                                    class="block py-2.5 px-0 w-full text-sm dark:bg-gray-900 dark:focus:bg-white text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Password" required />

                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_repeat_password"
                                    class=" dark:text-white">Confirm password</label>
                                <input type="password" name="repeat_password" id="floating_repeat_password"
                                    class="block py-2.5 px-0 w-full text-sm dark:bg-gray-900 dark:focus:bg-white text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Confirm password" required />

                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_email"
                                    class=" dark:text-white">Email address</label>
                                <input type="email" name="floating_email" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm dark:bg-gray-900 dark:focus:bg-white text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Email address" required />

                            </div>

                            <div class="relative z-0 w-full mb-5 group dark:text-white">
                                <label for="floating_email"
                                    class="">Confirm Email address</label>
                                <input type="email" name="floating_email" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm dark:bg-gray-900 dark:focus:bg-white text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Confirm Email address" required />

                            </div>


                        </div>

                        <h4 class="py-4 dark:text-white">Social Profile</h4>
                        <div></div>

                        <x-form.submit-button title="Submit"/>
                    </form>
                </div>


            </div>
        </div>
    </div>

</section>

@endsection
