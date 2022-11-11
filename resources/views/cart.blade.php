@extends('layouts.app')

@section('content')
<div class="container">


<div class="list-group">
    @foreach($products as $product)
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
            <span class="justify-content-start">
                <img src="{{$product->image}}" alt="..">
            </span>


            <h5 class="mb-1">{{$product->name}}</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1">{{$product->brand}}<br>{{$product->type}}</p>
        <small>And some small print.</small>
    </a>
 @endforeach
</div>
<form>
    <input id="datepicker"/>
    <input id="datepicker-end"/>
</form>

</div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.umd.min.js"></script>
    <script>
        const picker = new easepick.create({
            element: document.getElementById('datepicker'),
            plugins: ['RangePlugin', 'LockPlugin'],
            RangePlugin: {
                tooltip: true,
                elementEnd: document.getElementById('datepicker-end'),
            },
            LockPlugin: {
                filter(date, picked) {
                        return '(]';
                    }

                    },
            css: [
                'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.css',
                'https://easepick.com/css/demo_hotelcal.css',
            ],
        });
    </script>
@endpush
