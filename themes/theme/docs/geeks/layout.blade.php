<div class="row">
    <div class="px-5 offset-xl-1 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 px-xl-0">
        <!-- Content -->
        {{$slot}}
    </div>

    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 d-none d-xl-block position-fixed end-0">
        <!-- sidebar nav fixed -->
        <div class="sidebar-nav-fixed">
            <span class="px-4 mb-2 d-block text-uppercase ls-md fw-semi-bold fs-6">Contents</span>
            <ul class="list-unstyled">
                <li><a href="#intro" class="active">Introduction</a></li>
                <li><a href="#accordion-flush">Flush</a></li>
            </ul>
        </div>
    </div>
</div>
