<div class="relative min-h-screen md:flex">
    <!-- mobile menu bar -->
    <div class="flex justify-between text-gray-100 bg-gray-800 md:hidden">
        <!-- logo -->
        <a href="#" class="block p-4 font-bold text-white">Home</a>

        <!-- mobile menu button -->
        <button class="p-4 mobile-menu-button focus:outline-none focus:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <script>
            const btn= document.querySelector('.mobile-menu-button');

            btn.addEventListener('click', function() {
                let sidebar= document.querySelector('.sidebar');
                sidebar.classList.toggle('-translate-x-full');
            });
        </script>
    </div>


    <!-- sidebar -->
    <div class="absolute inset-y-0 left-0 w-64 px-2 py-6 space-y-6 text-blue-100 transition duration-200 ease-in-out transform -translate-x-full bg-blue-800 sidebar md:relative md:translate-x-0">
        <!-- logo -->
        <a href="#" class="flex items-center px-4 space-x-2 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="text-2xl font-extrabold">Home</span>
        </a>

        <!-- navr-->
        <nav>
            <a href="#" class="block px-4 py-2 transition duration-200 rounded hover:bg-blue-700 hover:text-white ">
                Home
            </a>
            <a href="#" class="block px-4 py-2 transition duration-200 rounded hover:bg-blue-700 hover:text-white ">
                About
            </a>
            <a href="#" class="block px-4 py-2 transition duration-200 rounded hover:bg-blue-700 hover:text-white ">
                Features
            </a>
            <a href="#" class="block px-4 py-2 transition duration-200 rounded hover:bg-blue-700 hover:text-white ">
                Pricing
            </a>
        </nav>
    </div>

    <!-- content -->
    <div class="flex-1 p-10 text-2xl font-bold">
        content
    </div>
</div>
