<!-- Page Container -->
<div id="page-container"
    x-data="{ userDropdownOpen: false, mobileSidebarOpen: false, desktopSidebarOpen: true, mobileSideContentOpen: false }"
    class="flex flex-col w-full min-h-screen mx-auto bg-gray-100" x-bind:class="{
    'lg:pl-64': desktopSidebarOpen
    }">

    <!-- Page Sidebar -->
    <nav id="page-sidebar"
        class="fixed top-0 bottom-0 left-0 z-50 flex flex-col w-full h-full transition-transform duration-500 ease-out transform bg-white border-r border-gray-200 lg:w-64"
        x-bind:class="{
        '-translate-x-full': !mobileSidebarOpen,
        'translate-x-0': mobileSidebarOpen,
        'lg:-translate-x-full': !desktopSidebarOpen,
        'lg:translate-x-0': desktopSidebarOpen,
    }" aria-label="Main Sidebar Navigation">

        <!-- Sidebar Header -->
        <div class="flex items-center justify-between flex-none w-full h-16 px-4 lg:justify-center">

            <!-- Brand -->
            <a href="javascript:void(0)"
                class="inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-gray-600 hover:text-gray-500">
                <svg class="inline-block w-5 h-5 text-indigo-400 hi-solid hi-cube-transparent" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9.504 1.132a1 1 0 01.992 0l1.75 1a1 1 0 11-.992 1.736L10 3.152l-1.254.716a1 1 0 11-.992-1.736l1.75-1zM5.618 4.504a1 1 0 01-.372 1.364L5.016 6l.23.132a1 1 0 11-.992 1.736L4 7.723V8a1 1 0 01-2 0V6a.996.996 0 01.52-.878l1.734-.99a1 1 0 011.364.372zm8.764 0a1 1 0 011.364-.372l1.733.99A1.002 1.002 0 0118 6v2a1 1 0 11-2 0v-.277l-.254.145a1 1 0 11-.992-1.736l.23-.132-.23-.132a1 1 0 01-.372-1.364zm-7 4a1 1 0 011.364-.372L10 8.848l1.254-.716a1 1 0 11.992 1.736L11 10.58V12a1 1 0 11-2 0v-1.42l-1.246-.712a1 1 0 01-.372-1.364zM3 11a1 1 0 011 1v1.42l1.246.712a1 1 0 11-.992 1.736l-1.75-1A1 1 0 012 14v-2a1 1 0 011-1zm14 0a1 1 0 011 1v2a1 1 0 01-.504.868l-1.75 1a1 1 0 11-.992-1.736L16 13.42V12a1 1 0 011-1zm-9.618 5.504a1 1 0 011.364-.372l.254.145V16a1 1 0 112 0v.277l.254-.145a1 1 0 11.992 1.736l-1.735.992a.995.995 0 01-1.022 0l-1.735-.992a1 1 0 01-.372-1.364z"
                        clip-rule="evenodd" />
                </svg>
                <span>JinyTMS</span>
            </a>
            <!-- END Brand -->

            <!-- Close Sidebar on Mobile -->
            <div class="lg:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-red-600 border border-transparent rounded focus:outline-none hover:text-red-400 focus:ring focus:ring-red-500 focus:ring-opacity-50 active:text-red-600"
                    x-on:click="mobileSidebarOpen = false">
                    <svg class="inline-block w-4 h-4 -mx-1 hi-solid hi-x" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" /></svg>
                </button>
            </div>
            <!-- END Close Sidebar on Mobile -->
        </div>
        <!-- END Sidebar Header -->

        <!-- Sidebar Navigation -->
        <div class="overflow-y-auto">
            <div class="w-full p-4">
                <nav class="space-y-1">

                    <a href="/jinyerp/tms"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-700 bg-gray-100 rounded">

                        <span class="flex items-center flex-none opacity-50">
                            <svg class="inline-block w-5 h-5 hi-outline hi-home" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                        </span>

                        <span class="py-2 grow">
                            Dashboard
                        </span>

                    </a>

                    <div class="px-3 pt-5 pb-2 text-xs font-medium tracking-wider text-gray-500 uppercase">
                        <a href="/jinyerp/tms">Projects</a>
                    </div>

                    @php
                        $projects = DB::table('jinyerp_tms_projects')->get();
                        $statuss = DB::table('jinyerp_tms_translate_status')
                            ->select(DB::raw('sum(total) as total_sum, sum(finish) as finish_sum, code, count(id) as pages'))
                            ->groupBy('code')
                            ->get();

                        for($i=0; $i<count($projects);$i++) {
                            foreach($statuss as $status) {
                                if($projects[$i]->code == $status->code) {
                                    $projects[$i]->total = $status->total_sum;
                                    $projects[$i]->finish = $status->finish_sum;
                                    $projects[$i]->pages = $status->pages;
                                    break;
                                }
                            }
                        }
                    @endphp

                    @foreach($projects as $project)
                    <a href="/jinyerp/tms/project/{{$project->code}}"
                    class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                        <span class="flex items-center flex-none opacity-50">
                            <svg class="inline-block w-5 h-5 hi-outline hi-view-grid" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </span>
                        <span class="py-2 grow">{{$project->title}}</span>
                        <span
                            class="px-2 py-1 text-xs font-medium leading-4 text-gray-600 bg-gray-500 rounded-full bg-opacity-10">
                            {{$project->files}}
                        </span>
                    </a>
                    @endforeach

                    {{--
                    <a href="javascript:void(0)"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                        <span class="flex items-center flex-none opacity-50">
                            <svg class="inline-block w-5 h-5 hi-outline hi-plus-circle text-emerald-600"
                                stroke="currentColor" fill="none" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </span>
                        <span class="py-2 grow">Add New</span>
                    </a>
                    --}}


                    <div class="px-3 pt-5 pb-2 text-xs font-medium tracking-wider text-gray-500 uppercase">
                        Setting
                    </div>

                    <a href="/jinyerp/tms/terms"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">

                        <span class="flex items-center flex-none opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </span>

                        <span class="py-2 grow">용어사전</span>
                    </a>

                    <a href="/jinyerp/tms/memory"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">

                        <span class="flex items-center flex-none opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </span>

                        <span class="py-2 grow">번역메모리</span>
                    </a>

                    <a href="/jinyerp/tms/mypage"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                        <span class="flex items-center flex-none opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>


                        <span class="py-2 grow">MyPage</span>
                    </a>

                    {{--
                    <a href="javascript:void(0)"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                        <span class="flex items-center flex-none opacity-50">
                            <svg class="inline-block w-5 h-5 hi-outline hi-cog" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </span>
                        <span class="py-2 grow">Settings</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex items-center px-3 space-x-3 font-medium text-gray-600 rounded hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                        <span class="flex items-center flex-none opacity-50">
                            <svg class="inline-block w-5 h-5 text-red-600 hi-outline hi-lock-open" stroke="currentColor"
                                fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                        </span>
                        <span class="py-2 grow">Log out</span>
                    </a>
                    --}}
                </nav>
            </div>
        </div>
        <!-- END Sidebar Navigation -->
    </nav>
    <!-- Page Sidebar -->

    <!-- Page Header -->
    <header id="page-header" class="fixed top-0 left-0 right-0 z-30 flex items-center flex-none h-16 bg-white shadow-sm"
    x-bind:class="{
    'lg:pl-64': desktopSidebarOpen
    }">
    <div class="flex justify-between w-full px-4 mx-auto max-w-10xl lg:px-8">
        <!-- Left Section -->
        <div class="flex items-center space-x-2">
            <!-- Toggle Sidebar on Desktop -->
            <div class="hidden lg:block">
                <button type="button"
                    class="inline-flex items-center justify-center px-3 py-2 space-x-2 font-semibold leading-6 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                    x-on:click="desktopSidebarOpen = !desktopSidebarOpen">
                    <svg class="inline-block w-5 h-5 hi-solid hi-menu-alt-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" /></svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Desktop -->

            <!-- Toggle Sidebar on Mobile -->
            <div class="lg:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center px-3 py-2 space-x-2 font-semibold leading-6 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                    x-on:click="mobileSidebarOpen = true">
                    <svg class="inline-block w-5 h-5 hi-solid hi-menu-alt-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" /></svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Mobile -->

            <!-- Search -->
            <div class="hidden sm:block">
                <form onsubmit="return false;">
                    <input type="text"
                        class="block w-full px-3 py-2 text-sm leading-5 border border-gray-200 rounded focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                        id="search" name="search" placeholder="Search..">
                </form>
            </div>
            <div class="sm:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                    <svg class="inline-block w-5 h-5 hi-solid hi-search" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" /></svg>
                </button>
            </div>
            <!-- END Search -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="flex items-center space-x-2">
            <!-- Notifications -->
            <button type="button"
                class="inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                <svg class="inline-block w-5 h-5 hi-outline hi-bell" stroke="currentColor" fill="none"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                <span class="text-indigo-500">•</span>
            </button>
            <!-- END Notifications -->

            <!-- User Dropdown -->
            <div class="relative inline-block">
                <!-- Dropdown Toggle Button -->
                <button type="button"
                    class="inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                    id="tk-dropdown-layouts-user" aria-haspopup="true" x-bind:aria-expanded="userDropdownOpen"
                    x-on:click="userDropdownOpen = true">
                    <span>Admin</span>
                    <svg class="inline-block w-5 h-5 opacity-50 hi-solid hi-chevron-down" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" /></svg>
                </button>
                <!-- END Dropdown Toggle Button -->

                <!-- Dropdown -->
                <div x-show="userDropdownOpen" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="transform opacity-0 scale-75"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-75"
                    x-on:click.outside="userDropdownOpen = false" role="menu"
                    aria-labelledby="tk-dropdown-layouts-user"
                    class="absolute right-0 w-48 mt-2 origin-top-right rounded shadow-xl z-1">
                    <div class="bg-white divide-y divide-gray-100 rounded ring-1 ring-black ring-opacity-5">
                        <div class="p-2 space-y-1">
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center px-3 py-2 space-x-2 text-sm font-medium text-gray-600 rounded hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                                <svg class="inline-block w-5 h-5 opacity-50 hi-solid hi-user-circle"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                        clip-rule="evenodd" /></svg>
                                <span>Profile</span>
                            </a>
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center px-3 py-2 space-x-2 text-sm font-medium text-gray-600 rounded hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                                <svg class="inline-block w-5 h-5 opacity-50 hi-solid hi-inbox" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                        clip-rule="evenodd" /></svg>
                                <span>Inbox</span>
                            </a>
                        </div>
                        <div class="p-2 space-y-1">
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center px-3 py-2 space-x-2 text-sm font-medium text-gray-600 rounded hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                                <svg class="inline-block w-5 h-5 opacity-50 hi-solid hi-cog" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd" /></svg>
                                <span>Settings</span>
                            </a>
                        </div>
                        <div class="p-2 space-y-1">
                            <form onsubmit="return false;">
                                <button type="submit" role="menuitem"
                                    class="flex items-center w-full px-3 py-2 space-x-2 text-sm font-medium text-left text-gray-600 rounded hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                                    <svg class="inline-block w-5 h-5 opacity-50 hi-solid hi-lock-closed"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" /></svg>
                                    <span>Sign out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Dropdown -->
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    </header>
    <!-- END Page Header -->

    <!-- Page Content -->
    <main id="page-content" class="flex flex-col flex-auto max-w-full pt-16 lg:flex-row-reverse">

        <!-- Toggle Side Content -->
        @if(isset($side_content))
            <div class="w-full p-4 lg:hidden lg:p-8 bg-gray-50">
                <button type="button"
                    class="inline-flex items-center justify-center w-full px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                    x-on:click="mobileSideContentOpen = !mobileSideContentOpen">
                    Toggle Side Content
                </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div
                class="flex-col flex-none w-full p-4 lg:flex lg:w-80 xl:w-96 lg:p-8 bg-gray-50"
                x-bind:class="{'hidden': !mobileSideContentOpen,}">
                {{$side_content}}
            </div>
        @endif
        <!-- END Side Content -->


        <!-- Main Content -->
        <div class="flex flex-col flex-grow w-full p-4 mx-auto max-w-10xl">
            <!-- ADD YOUR MAIN CONTENT BELOW -->
            {{$slot}}
            <!-- ADD YOUR MAIN CONTENT ABOVE -->
        </div>
        <!-- END Main Content -->

    </main>
    <!-- END Page Content -->

    @theme('tailwind.docs.footers.footer')
</div>
<!-- END Page Container -->
