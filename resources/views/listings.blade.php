<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        {{ $heading }}
    </h1>



    @unless (count($listings) == 0)

        @foreach ($listings as $listing)
            <h2>
                {{ $listing['title'] }}
            </h2>
            <p>
                {{ $listing['description'] }}
            </p>
            <a href={{ url('/listings/' . $listing['id']) }}>
                <button class="btn btn-primary">View More</button>
            </a>
        @endforeach
    @else
        <p>
            No listings found
        </p>
    @endunless
</body>

</html>
