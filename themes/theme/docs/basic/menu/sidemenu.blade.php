<!-- Navbar -->
<nav class="bg-white js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light border-end"
    data-hs-nav-scroller-options='{
  "type": "vertical",
  "target": ".navbar-nav .active",
  "offset": 80
 }'>
    <!-- Navbar Toggle for Mobile -->
    <button type="button" class="navbar-toggler btn btn-white d-grid w-100" data-bs-toggle="collapse"
        data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
        aria-controls="navbarVerticalNavMenu">
        <span class="d-flex justify-content-between align-items-center">
            <span class="mb-0 h3">Docs Index</span>

            <span class="navbar-toggler-default">
                <i class="bi-list"></i>
            </span>

            <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
            </span>
        </span>
    </button>
    <!-- End Navbar Toggle for Mobile -->

    <!-- Navbar Collapse -->
    <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
        <div class="navbar-brand-wrapper border-end" style="height: auto;">
            <!-- Default Logo -->
            <div class="mb-3 d-flex align-items-center">
                <a class="navbar-brand" href="/docs">
                    Document
                </a>
                <a class="navbar-brand-badge" href="/theme/boot/space/documentation/changelog">
                    <span class="badge bg-soft-primary text-primary ms-2">v9.x</span>
                </a>
            </div>
            <!-- End Default Logo -->
        </div>

        <div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">


            @livewire('docs-index')

        </div>

    </div>
    <!-- End Navbar Collapse -->
</nav>

<!-- End Navbar -->
