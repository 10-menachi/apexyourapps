<div class="col-lg-3">
    <div class="navbar-nav">
        <div class="dropdown w-100">
            <!-- Desktop Dropdown Toggle -->
            <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown" data-bs-trigger="hover"
                data-bs-theme="dark">
                <a class="top-0 position-absolute start-0 w-100 h-100" href="{{ route('categories.index') }}">
                    <span class="visually-hidden">Categories</span>
                </a>
                <button type="button"
                    class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                    <i class="ci-grid fs-lg"></i>
                    <span class="ms-2 me-auto">Categories</span>
                </button>
            </div>

            <!-- Mobile Dropdown Toggle -->
            <button type="button"
                class="mb-2 btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none"
                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <i class="ci-grid fs-lg"></i>
                <span class="ms-2 me-auto">Categories</span>
            </button>

            <!-- Dropdown Menu -->
            <ul class="py-1 dropdown-menu dropdown-menu-static w-100 rounded-top-0 rounded-bottom-4 p-lg-1"
                style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                <li class="pt-2 d-lg-none">
                    <a class="dropdown-item fw-medium" href="{{ route('categories.index') }}">
                        <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                        All Categories
                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                    </a>
                </li>
                @foreach ($categories as $category)
                    <li class="dropend position-static">
                        <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown"
                            data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                href="{{ route('categories.index') }}">
                                <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                                <span class="text-truncate">{{ $category->name }}</span>
                                <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                                {{ $category->name }}
                                <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                        </div>
                        <div class="p-4 dropdown-menu rounded-4"
                            style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                <div style="min-width: 194px">
                                    <div class="d-flex w-100">
                                        <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                            href="{{ route('categories.index') }}">{{ $category->name }}</a>
                                    </div>
                                    <ul class="gap-2 nav flex-column mt-n2">
                                        @foreach ($category->subcategories as $subcategory)
                                            <li class="pt-1 d-flex w-100">
                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                    href="{{ route('categories.show', $subcategory->slug) }}">{{ $subcategory->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Special Offer -->
                                <div class="d-none d-lg-block">
                                    <div class="d-none d-xl-block" style="width: 284px"></div>
                                    <div class="position-relative w-100 d-none d-xl-block">
                                        <a class="d-block" href="#">
                                            <img class="img-fluid"
                                                src="{{ url('storage/uploads/categories/' . $category->image) }}"
                                                alt="Category Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
