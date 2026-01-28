<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }} 
                kategori {{ $product->category->category }}</li>
        @endforeach
</body>
</html>

</body>
</html>