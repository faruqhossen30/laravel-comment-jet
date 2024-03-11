@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" pageoneRoute="{{ route('category.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <section class="container mx-auto bg-gray-100 border-2 rounded-md">
        <div class="flex items-center justify-between p-6 py-8 pl-4 border-b-2 border-gray-200">
            <div class="flex items-end">
                <h2 class="text-3xl font-semibold text-gray-700">Twenty Thirteen</h2>
                <span class="px-2 text-gray-400">1.0</span>
            </div>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                    <path fill-rule="evenodd"
                        d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 0 1-.517.608 7.45 7.45 0 0 0-.478.198.798.798 0 0 1-.796-.064l-.453-.324a1.875 1.875 0 0 0-2.416.2l-.243.243a1.875 1.875 0 0 0-.2 2.416l.324.453a.798.798 0 0 1 .064.796 7.448 7.448 0 0 0-.198.478.798.798 0 0 1-.608.517l-.55.092a1.875 1.875 0 0 0-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 0 1-.064.796l-.324.453a1.875 1.875 0 0 0 .2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 0 1 .796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 0 1 .517-.608 7.52 7.52 0 0 0 .478-.198.798.798 0 0 1 .796.064l.453.324a1.875 1.875 0 0 0 2.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 0 1-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 0 0 1.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 0 1-.608-.517 7.507 7.507 0 0 0-.198-.478.798.798 0 0 1 .064-.796l.324-.453a1.875 1.875 0 0 0-.2-2.416l-.243-.243a1.875 1.875 0 0 0-2.416-.2l-.453.324a.798.798 0 0 1-.796.064 7.462 7.462 0 0 0-.478-.198.798.798 0 0 1-.517-.608l-.091-.55a1.875 1.875 0 0 0-1.85-1.566h-.344ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z"
                        clip-rule="evenodd" />
                </svg>
            </a>


        </div>


        {{-- sidebar start --}}
        <div class="grid grid-cols-6">
            <div class="col-span-1 border">
                {{-- sidebar start --}}
                <a href="#"
                    class="flex items-center p-2 text-base text-gray-900 border-b border-gray-200 shadow-sm hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebaricon">
                        <path
                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path
                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg>

                    <span class="ml-3" sidebar-toggle-item>Home Settings</span>
                </a>

                <ul class="pb-2 space-y-2 border-t border-gray-200 shadow-sm">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-base text-gray-900 border-b-2 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebaricon">
                                <path d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 0 1-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 0 1 6.126 3.537ZM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 0 1 0 .75l-1.732 3c-.229.397-.76.5-1.067.161A5.23 5.23 0 0 1 6.75 12a5.23 5.23 0 0 1 1.37-3.536ZM10.878 17.13c-.447-.098-.623-.608-.394-1.004l1.733-3.002a.75.75 0 0 1 .65-.375h3.465c.457 0 .81.407.672.842a5.252 5.252 0 0 1-6.126 3.539Z" />
                                <path fill-rule="evenodd" d="M21 12.75a.75.75 0 1 0 0-1.5h-.783a8.22 8.22 0 0 0-.237-1.357l.734-.267a.75.75 0 1 0-.513-1.41l-.735.268a8.24 8.24 0 0 0-.689-1.192l.6-.503a.75.75 0 1 0-.964-1.149l-.6.504a8.3 8.3 0 0 0-1.054-.885l.391-.678a.75.75 0 1 0-1.299-.75l-.39.676a8.188 8.188 0 0 0-1.295-.47l.136-.77a.75.75 0 0 0-1.477-.26l-.136.77a8.36 8.36 0 0 0-1.377 0l-.136-.77a.75.75 0 1 0-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 0 0-1.3.75l.392.678a8.29 8.29 0 0 0-1.054.885l-.6-.504a.75.75 0 1 0-.965 1.149l.6.503a8.243 8.243 0 0 0-.689 1.192L3.8 8.216a.75.75 0 1 0-.513 1.41l.735.267a8.222 8.222 0 0 0-.238 1.356h-.783a.75.75 0 0 0 0 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 0 0 .513 1.41l.735-.268c.197.417.428.816.69 1.191l-.6.504a.75.75 0 0 0 .963 1.15l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 0 0 1.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.77a.75.75 0 0 0 1.477.261l.137-.772a8.332 8.332 0 0 0 1.376 0l.136.772a.75.75 0 1 0 1.477-.26l-.136-.771a8.19 8.19 0 0 0 1.294-.47l.391.677a.75.75 0 0 0 1.3-.75l-.393-.679a8.29 8.29 0 0 0 1.054-.885l.601.504a.75.75 0 0 0 .964-1.15l-.6-.503c.261-.375.492-.774.69-1.191l.735.267a.75.75 0 1 0 .512-1.41l-.734-.267c.115-.439.195-.892.237-1.356h.784Zm-2.657-3.06a6.744 6.744 0 0 0-1.19-2.053 6.784 6.784 0 0 0-1.82-1.51A6.705 6.705 0 0 0 12 5.25a6.8 6.8 0 0 0-1.225.11 6.7 6.7 0 0 0-2.15.793 6.784 6.784 0 0 0-2.952 3.489.76.76 0 0 1-.036.098A6.74 6.74 0 0 0 5.251 12a6.74 6.74 0 0 0 3.366 5.842l.009.005a6.704 6.704 0 0 0 2.18.798l.022.003a6.792 6.792 0 0 0 2.368-.004 6.704 6.704 0 0 0 2.205-.811 6.785 6.785 0 0 0 1.762-1.484l.009-.01.009-.01a6.743 6.743 0 0 0 1.18-2.066c.253-.707.39-1.469.39-2.263a6.74 6.74 0 0 0-.408-2.309Z" clip-rule="evenodd" />
                              </svg>


                            <span class="ml-3 text-gray-600 rounded-lg hover:text-gray-800 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 " sidebar-toggle-item>Generale Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-base text-gray-900 border-b-2 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebaricon">
                                <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 18.375V5.625ZM21 9.375A.375.375 0 0 0 20.625 9h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 0 0 .375-.375v-1.5Zm0 3.75a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 0 0 .375-.375v-1.5Zm0 3.75a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 0 0 .375-.375v-1.5ZM10.875 18.75a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5ZM3.375 15h7.5a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375Zm0-3.75h7.5a.375.375 0 0 0 .375-.375v-1.5A.375.375 0 0 0 10.875 9h-7.5A.375.375 0 0 0 3 9.375v1.5c0 .207.168.375.375.375Z" clip-rule="evenodd" />
                              </svg>


                            <span class="ml-3 text-gray-600 rounded-lg hover:text-gray-800 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 " sidebar-toggle-item>Styling Options</span>
                        </a>
                    </li><li>
                        <a href="#"
                            class="flex items-center p-2 text-base text-gray-900 border-b-2 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebaricon">
                                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
                              </svg>



                            <span class="ml-3 text-gray-600 rounded-lg hover:text-gray-800 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 " sidebar-toggle-item>Field Validation</span>
                        </a>
                    </li></li><li>
                        <a href="#"
                            class="flex items-center p-2 text-base text-gray-900 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebaricon">
                                <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                              </svg>




                            <span class="ml-3 text-gray-600 rounded-lg hover:text-gray-800 hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 " sidebar-toggle-item>Select Fields</span>
                        </a>
                    </li>

                </ul>
            </div>
            {{-- sidebar end --}}

            <div class="col-span-5 px-4 border-b">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aperiam maxime nostrum aliquam id? Nostrum esse iure molestias repudiandae, voluptas fugiat accusantium corrupti ex similique sapiente, nulla voluptatibus excepturi eius consequuntur optio omnis quis, amet nobis doloribus explicabo laudantium dolorum. Quidem incidunt excepturi, fuga unde libero ut consequuntur autem. Ipsam nisi, eos tenetur obcaecati officiis voluptate pariatur quasi blanditiis quod consequuntur delectus eum, quas dolorum earum illo, aliquam accusantium eaque hic. Odit, eligendi ab! Temporibus, magni mollitia necessitatibus repellendus maxime laudantium hic, in incidunt veritatis, repellat quam quo libero voluptatem ullam. Voluptatem doloribus repudiandae alias, ad debitis ipsa obcaecati excepturi, ipsum nostrum molestiae nulla eum aut minima repellendus inventore consequatur. Maxime dolorum quas aspernatur deserunt iste amet possimus voluptatum dolor corrupti, quasi eveniet illo dicta, laudantium suscipit reprehenderit veritatis. Impedit hic assumenda consequuntur nihil voluptates laudantium eveniet sunt eaque. Atque nam illo nobis, aperiam eveniet sed dolorum doloribus, beatae cumque ratione, temporibus similique repudiandae placeat asperiores! Aliquid officiis dolore porro sint provident sit odio, inventore exercitationem qui cupiditate aperiam voluptates quisquam harum iste eum consequatur ipsam. Reiciendis minus placeat incidunt voluptatibus neque, voluptate eos fugiat excepturi consectetur saepe doloribus accusantium dicta, ducimus soluta eius. Dignissimos vero fuga pariatur delectus officiis?</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis culpa necessitatibus est praesentium voluptatibus quaerat rem delectus tempora, dolores quidem veritatis saepe sed molestias ratione commodi ea, repellat cum! A maxime cumque nostrum consectetur, eius soluta molestias blanditiis quisquam fuga aut dignissimos quod perferendis rem neque tempore mollitia ipsum doloribus deleniti nulla excepturi. Fugiat beatae nisi culpa, architecto aut similique neque deserunt, eum possimus consequatur obcaecati libero fugit saepe amet necessitatibus aperiam sint at atque sunt illo harum, laborum autem quod? Qui voluptatem laborum molestiae laboriosam ut doloremque earum obcaecati voluptate in ducimus veritatis vitae, hic saepe, consequuntur excepturi aliquam, consequatur ea corporis accusamus. Maxime sunt amet sapiente ullam, exercitationem labore. Necessitatibus unde nostrum, repellat cum ab tempore error eaque veniam qui exercitationem totam inventore maxime veritatis, repudiandae adipisci quibusdam eum doloremque libero! Quia, dolores praesentium recusandae veniam sunt tempora, amet soluta facilis officia omnis a velit quibusdam inventore! Non accusantium voluptatibus ad dolores et assumenda repellendus omnis vero nulla nesciunt minus quia quos iste eligendi nihil minima commodi, magni quidem! Nihil expedita, ut ab possimus sint corrupti cumque aspernatur repellat odit recusandae. Minus accusamus esse, recusandae facilis assumenda ad corporis, rerum quisquam dolorum error eius nemo quaerat, distinctio quibusdam.</p>
            </div>
        </div>
        {{-- sidebar end --}}
    </section>
@endsection
