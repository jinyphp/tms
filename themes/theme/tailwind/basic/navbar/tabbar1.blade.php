<!-- naveBar 영역 -->
<nav class="bg-gray-100">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="flex justify-between">
            <!-- 로고와 primary nav 왼쪽 배치 -->
            <div class="flex items-center space-x-4">
                <!-- logo -->
                <div >
                    <a href="#" class="flex items-center px-2 py-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="font-bold">Home</span>
                    </a>
                </div>

                <!-- primary nave -->
                <div class="flex items-center hidden space-x-1 md:flex">
                    <a href="#" class="px-3 py-5 text-gray-600 hover:text-gray-900">Pricing</a>
                    <a href="#" class="px-3 py-5 text-gray-600 hover:text-gray-900">Features</a>
                </div>



            </div>

            <!-- secondary nav 오른쪽 배치 -->
            <!-- secondary nav -->
            <div class="flex items-center hidden space-x-1 md:flex">
                <a href="#" class="px-3 py-5 ">Login</a>
                <a href="#" class="px-3 py-3 text-yellow-900 bg-yellow-400 rounded shadow hover:bg-yellow-300 hover:text-yellow-800 ">signup</a>
            </div>

            <!-- mobile 버튼 -->
            <div class="flex items-center md:hidden">
                <button class="mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <script>
                    const btn = document.querySelector('button.mobile-menu-button');


                    btn.addEventListener('click', function(){
                        console.log('menu mobile button');
                        let menu = document.querySelector('.mobile-menu');
                        menu.classList.toggle('hidden');
                    });
                </script>
            </div>

        </div>
    </div>

    <!-- mobile menu -->
    <div class="hidden mobile-menu md:hidden">
        <a href="#" class="block px-4 py-4 text-sm hover:bg-gray-200">Features</a>
        <a href="#" class="block px-4 py-4 text-sm hover:bg-gray-200">Pricing</a>
    </div>
</nav>

<div class="py-32 text-center">
    <h2 class="text-4xl font-extrabold">navbars in Tailwind</h2>
</div>
