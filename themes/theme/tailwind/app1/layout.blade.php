<!-- Page Container -->
<div id="page-container" x-data="{ userDropdownOpen: false, mobileNavOpen: false }"
        class="flex flex-col w-full min-h-screen mx-auto bg-gray-100">

        @theme('tailwind.app1.header')

        <!-- Page Content -->
        <main id="page-content" class="flex flex-col flex-auto max-w-full">
            {{$slot}}
        </main>
        <!-- END Page Content -->

</div>
<!-- END Page Container -->

@theme('tailwind.app1.footer')
