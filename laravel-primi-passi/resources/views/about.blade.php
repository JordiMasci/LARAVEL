<!DOCTYPE html>
<html lang="en">

<head>
    <!-- includiamo la head -->
    @include('models.head')
</head>

<body>
    @include('models.navbar')

    <div class="container mt-5">
        <h1 class="mb-5">{{ $titolo }}</h1>
        <ul>
            @foreach ($arrayLista as $item)
                <li>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
