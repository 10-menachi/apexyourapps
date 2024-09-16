<!-- Category -->
<div class="col">
    <div class="hover-effect-scale">
        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                <img src="{{ url('storage/uploads/categories/' . $category->image) }}" class="hover-effect-target"
                    alt="{{ $category->name }}">
            </div>
        </a>
        <h2 class="pb-2 mb-1 h6 d-flex w-100">
            <a class="animate-underline animate-target d-inline text-truncate"
                href="shop-catalog-electronics.html">{{ $category->name }}</a>
        </h2>
        <ul class="gap-2 nav flex-column mt-n1">
            @foreach ($category->brands() as $brand)
                <li class="pt-1 d-flex w-100">
                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                        href="shop-catalog-electronics.html">{{ $brand }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
