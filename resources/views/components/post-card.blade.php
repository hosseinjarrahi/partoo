<div class="card promoting-card neo shadow" {{ $attributes }} data-aos="fade-up-right">
    <div class="card-body d-flex flex-row">
        <img src="{{ asset('img/avatar.svg') }}" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
        <div>
            <p class="card-title mb-2">{{ $post->title }}</p>
            <p class="card-text"><i class="far fa-clock pr-2"></i>{{ $post->created_at->diffForHumans() }}</p>
        </div>
    </div>

    @if ($post->pic)
        <div class="view overlay">
            <img class="card-img-top rounded-0" src="{{ asset($post->pic) }}" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
    @endif

    <div class="card-body">
        <div class="collapse-content">
            <p class="card-text" id="collapseContent">{{ $post->short_desc }}</p>
            <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse"
               href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
        </div>
    </div>

    <div class="card-footer">
        <a href="{{ $post->link }}" class="text-white btn-sm btn">مطالعه بیشتر ...</a>
    </div>
</div>
