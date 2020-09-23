<div class="container">
    <div id="carouselExampleIndicators" class="carousel rounded shadow overflow-hidden my-5 slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($slides as $slide)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="@if($loop->index == 0) active @endif"></li>
            @endforeach
        </ol>

        <div class="carousel-inner">
            @foreach($slides as $slide)
                <a href="{{ route('category.home',['category' => $slide->category_id]) }}" class="carousel-item @if($loop->index == 0) active @endif">
                    <img src="{{ asset($slide->pic) }}" class="d-block w-100">
                </a>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

</div>
