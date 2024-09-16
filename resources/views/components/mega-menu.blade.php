<div class="col-lg-3">
    <div class="navbar-nav">
        <div class="dropdown w-100">
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
            <button type="button"
                class="mb-2 btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none"
                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <i class="ci-grid fs-lg"></i>
                <span class="ms-2 me-auto">Categories</span>
            </button>
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
                    @include('components.mega-menu-item', ['category' => $category])
                @endforeach
            </ul>
        </div>
    </div>
</div>
