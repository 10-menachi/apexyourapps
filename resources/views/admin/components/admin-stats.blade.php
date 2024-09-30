<div class="row">
    @foreach ($statuses as $status)
        @include('admin.components.stats-card')
    @endforeach
</div>
