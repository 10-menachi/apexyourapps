<div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-icon">
                    <div class="text-center icon-big icon-{{ $status['color'] }} bubble-shadow-small">
                        <i class="{{ $status['icon'] }}"></i>
                    </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                    <div class="numbers">
                        <p class="card-category">{{ $status['category'] }}</p>
                        <h4 class="card-title">{{ $status['value'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
