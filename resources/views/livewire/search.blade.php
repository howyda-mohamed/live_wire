<section class="border p-4 mb-4 d-flex align-items-center flex-column">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->


            <!-- Toggle button -->

            <h1>search</h1>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Dropdown menu -->

                    </li>

                </ul>
                <!-- Left links -->

                <!-- Search form -->
                <div class="input-group ps-5">
                    <div id="navbar-search-autocomplete" class="form-outline">
                        <input wire:model.debounce.300ms="search" type="search" id="form1" class="form-control" />
                    </div>
                    @if (strlen($search) > 2)
                        <ul>
                            @forelse ($search_results as $res)
                                <li>{{ $res->name }}</li>
                                <li>{{ $res->email }}</li>
                            @empty
                                <li>no search result for {{ $search }}</li>
                            @endforelse

                        </ul>
                    @endif


                </div>

            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</section>
