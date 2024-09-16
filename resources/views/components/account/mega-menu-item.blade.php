<li class="dropend position-static">
    <div class="pt-2 pb-1 rounded position-relative px-lg-2" data-bs-toggle="dropdown" data-bs-trigger="hover">
        <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
            <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
            <span class="text-truncate">{{ $category->name }}</span>
            <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
        </a>
        <div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
            <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i> {{ $category->name }}
            <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
        </div>
    </div>
    <div class="p-4 dropdown-menu rounded-4"
        style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
        <div class="gap-4 d-flex flex-column flex-lg-row h-100">
            <div style="min-width: 194px">
                <div class="d-flex w-100">
                    <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                        href="shop-catalog-electronics.html">{{ $category->name }}</a>
                </div>
                <ul class="gap-2 nav flex-column mt-n2">
                    @foreach ($category->subcategories as $subcategory)
                        <li class="pt-1 d-flex w-100">
                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                href="shop-catalog-electronics.html">{{ $subcategory->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="d-none d-lg-block">
                <div class="d-none d-xl-block" style="width: 284px"></div>
                <div class="d-xl-none" style="width: 240px"></div>
                <div
                    class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                    <div class="px-2 text-center">
                        <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save
                            up to $400</span>
                        <div class="mb-2 fs-sm text-light-emphasis">Starts from
                            <del>$1,599.00</del> $1,399.00
                        </div>
                        <div class="mb-4 h2">Surface Laptop Studio</div>
                    </div>
                    <img src="{{ url('storage/uploads/categories/' . $category->image) }}" width="252"
                        alt="{{ $category->name }}" />
                    <div class="mt-4 text-center">
                        <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop
                            now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
