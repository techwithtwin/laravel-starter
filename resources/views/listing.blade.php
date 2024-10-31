<a href={{ url('/') }}><button class="btn btn-primary">Go Home</button></a>

@unless (!$listing)
    <h1>
        {{ $listing['title'] }}
    </h1>
    <p>
        {{ $listing['description'] }}
    </p>
@else
    <p>
        No listing found
    </p>
@endunless
