<div class="min-h-screen font-sans leading-normal tracking-normal">

    <nav class="fixed top-0 z-10 flex flex-wrap items-center justify-between w-full p-3 bg-black ">
        <!-- Flex Between Left Logo-->
        <div class="flex items-center flex-shrink-0 mr-6 text-white">
            <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                <span class="pl-2 text-2xl font-semibold">Logo</span>
            </a>
        </div>

        <!-- Mobile Button-->
        <div class="block lg:hidden">
            <button id="nav-toggle" class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded hover:text-white hover:border-white">
                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>

        <!-- Flex Between Right-->
        <div class="flex-grow hidden w-full pt-6 lg:flex lg:items-center lg:w-auto lg:block lg:pt-0" id="nav-content">
            <ul class="items-center justify-end flex-1 list-reset lg:flex">
                <li class="mr-6">
                    <a class="inline-block px-2 py-2 text-white no-underline hover:text-blue-300" href="#">
                        Home
                    </a>
                </li>
            <li class="mr-6">
                <a class="inline-block px-2 py-2 text-white no-underline hover:text-blue-300" href="#">
                    About
                </a>
            </li>
            <li class="mr-6">
                <a class="inline-block px-2 py-2 text-white no-underline hover:text-blue-300" href="#">
                    Services
                </a>
            </li>
            <li class="mr-6">
                <a class="inline-block px-2 py-2 text-white no-underline hover:text-blue-300" href="#">
                    Contact
                </a>
            </li>
            <li class="mr-6">
                <a class="inline-block px-2 py-2 text-white no-underline hover:text-blue-300" href="#">
                    Login
                </a>
            </li>
            <li class="mr-6">
                <a class="inline-block px-2 py-2 text-white no-underline hover:text-blue-300" href="#">
                    Register
                </a>
            </li>
            </ul>
        </div>
    </nav>

    <script>
        document.getElementById('nav-toggle').onclick = function(){
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>
</div>
