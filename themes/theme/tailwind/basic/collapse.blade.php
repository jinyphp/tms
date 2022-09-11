<div>
    <div class="relative">
        <a href="#" class="text-copy-primary hover:text-gray-600">
            Feature
        </a>
        <div class="absolute mt-4 overflow-hidden font-normal normal-case bg-gray-300 border rounded-lg shadow-md mega-menu w-160"
            style="left:-60px">
            <div class="flex px-8 py-6 -mx-4 border-b">
                <div class="w-1/2 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad saepe quas deserunt illum eaque iure neque, ea, </div>
                <div class="w-1/2 px-4">quaerat magni possimus voluptas labore? Culpa reprehenderit incidunt corrupti provident soluta laborum modi.</div>
            </div>

        </div>

    </div>


    <br><hr><br>

    <style>
        #collapse:checked ~ label + div {
            display: flex;
        }
        #collapse:checked ~ label svg{
            transform: rotate(-180deg);
        }
    </style>
    <input type="checkbox" class="hidden" id="collapse" >
    <label for="collapse">
        <div class="flex items-center ">
            <span>collapse</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </label>
    <div class="flex flex-col hidden w-32 p-2 mt-1 text-sm bg-gray-200 rounded" >
        <a href="#" class="px-2 py-1 rounded hover:bg-blue-200">Profile</a>
        <a href="#" class="px-2 py-1 rounded hover:bg-blue-200">Post</a>
        <a href="#" class="px-2 py-1 rounded hover:bg-blue-200">Settings</a>
    </div>

    <br><hr><br>


    <button class="px-4 py-2 bg-blue-300 rounded" id="menu-btn">
        Menu
    </button>

    <div class="flex flex-col hidden w-32 p-2 mt-1 text-sm bg-gray-200 rounded " id="dropdown">
        <a href="#" class="px-2 py-1 rounded hover:bg-blue-200">Profile</a>
        <a href="#" class="px-2 py-1 rounded hover:bg-blue-200">Post</a>
        <a href="#" class="px-2 py-1 rounded hover:bg-blue-200">Settings</a>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function(){
            const menuBtn = document.querySelector('#menu-btn');
            const dropdown = document.querySelector('#dropdown');

            menuBtn.addEventListener('click', function(){
                dropdown.classList.toggle('hidden');
            });
        })
    </script>

    <br><hr><br>

    switch
    <style>
        #switch:checked ~ label div.switch-dot {
            transform: translateX(0.75rem);
        }
        #switch2:checked ~ label div.switch-dot {
            transform: translateX(0.75rem);
        }
    </style>
    <div class="flex items-center space-x-2">
        <span class="text-sm text-gray-800">Light</span>
        <div>
            <input type="checkbox" name="" id="switch" class="hidden">
            <label for="switch">
                <div class="flex items-center h-5 p-1 bg-gray-300 rounded-full w-9">
                    <div class="w-4 h-4 duration-300 ease-in-out transform bg-white rounded-full shadow-md switch-dot">

                    </div>
                </div>
            </label>
        </div>
        <span class="text-sm text-gray-400">Dark</span>
    </div>
    <div>
        <div>
            <input type="checkbox" name="" id="switch2" class="hidden">
            <label for="switch">
                <div class="flex items-center h-5 p-1 bg-blue-300 rounded-full w-9">
                    <div class="w-4 h-4 duration-300 ease-in-out transform bg-white rounded-full shadow-md switch-dot">

                    </div>
                </div>
            </label>
        </div>
    </div>



</div>
