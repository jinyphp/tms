<div class="min-h-screen">

    <button class="px-6 py-3 text-gray-100 bg-red-600 rounded shadow" id="delete-btn">
        Delete
    </button>

    <!-- Popup -->
    <div class="absolute inset-0 items-center justify-center hidden bg-black bg-opacity-50" id="overlay">
        <div class="max-w-sm px-2 py-1 text-gray-800 bg-gray-200 rounded shadow-xl">
            <div class="flex items-center justify-between">
                <h4 class="text-lg font-bold">Confirm Delete?</h4>
                <span class="p-1 rounded-full cursor-pointer hover:bg-gray-500" id="close-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
            <div class="mt-2 text-sm">
                <p>fksd;flkjdflasdflkasdfj</p>
            </div>
            <div class="flex justify-end mt-3 space-x-3">
                <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                <button class="px-3 py-1 text-gray-200 bg-red-800 rounded hover:bg-red-600 ">Delete</button>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded',function(){
            const overlay = document.querySelector('#overlay');
            const deleteBtn = document.querySelector('#delete-btn');
            const closeBtn = document.querySelector('#close-modal');



            deleteBtn.addEventListener('click', function(){
                overlay.classList.toggle('hidden');
                overlay.classList.toggle('flex');
            });

            closeBtn.addEventListener('click', function(){
                overlay.classList.toggle('hidden');
                overlay.classList.toggle('flex');
            });
        });
    </script>
</div>
