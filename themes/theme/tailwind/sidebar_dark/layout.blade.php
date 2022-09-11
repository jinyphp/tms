<!-- Page Container -->
<div
  id="page-container"
  x-data="{ userDropdownOpen: false, mobileSidebarOpen: false, desktopSidebarOpen: true }"
  {{ $attributes->merge(['class' => 'flex flex-col mx-auto w-full min-h-screen']) }}
  x-bind:class="{
    'lg:pl-64': desktopSidebarOpen
  }"
>

    <!-- Page Sidebar -->
    <x-theme-sidebar>
    </x-theme-sidebar>
    <!-- Page Sidebar -->


    <!-- Page Header -->
    <x-theme-header>
    </x-theme-header>
    <!-- END Page Header -->

    <!-- Page Content -->
    {{$slot}}
    <!-- END Page Content -->

    <!-- Page Footer -->
    <x-theme-footer>
    </x-theme-footer>
    <!-- END Page Footer -->

</div>
<!-- END Page Container -->
