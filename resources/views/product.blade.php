@extends('master')
@section('content')
<div class="container-fluid custom-product" style="height:500px;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
           @foreach ($products as $items)
           <div class="carousel-item active">
                <img src="{{$items['gallery']}}" class="d-block w-100" alt="...">
            </div>
            
           @endforeach

        </div>
    </div>

</div>

@endsection

