<div class="train-card rounded-2 bg-dark mb-3 p-3 px-5 text-center">
    <h2>{{ $train->train_code }}</h2>
    <h5 class="mb-3">{{ strtoupper($train->company) }}</h5>
    <div class="separator w-50 m-auto mb-3"></div>
<div class="row row-cols-2 text-start">
    <div class="col row">
        <div class="col-5 offset-3">
            <h3>{{ strtoupper($train->departure_station) }}</h3>
            <h3 class="mb-0">{{ strtoupper($train->arrival_station) }}</h3>
        </div>
        <div class="col-4 text-end">
            <h3>H: {{ substr($train->departure_time, 0, 5) }} </h3>
            <h3>H: {{ substr($train->arrival_time, 0, 5) }} </h3>
        </div>
    </div>
    <div class="col row row-cols-2 d-flex align-items-center justify-content-center">
        <div class="col text-end"><h2>STATUS:</h2></div>
        <div class="col"><h2>@if ($train->is_canceled)
            CANCELLED
        @elseif ($train->is_late)
            LATE
        @else
            ON TIME
        @endif</h2></div>
        {{-- <h2 class="mb-0">
            STATUS:
            @if ($train->is_canceled)
                CANCELLED
            @elseif ($train->is_late)
                LATE
            @else
                ON TIME
            @endif
        </h2> --}}
    </div>
</div>

</div>