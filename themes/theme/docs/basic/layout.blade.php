<!-- ========== HEADER ========== -->
@theme('/docs/space/headers/header')
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    @theme('/docs/space/menu/sidemenu')

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
        {{$slot}}
    </div>

    <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
