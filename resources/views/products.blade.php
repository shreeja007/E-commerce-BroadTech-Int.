<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="\resources\css\app.css">
</head>
<body>
    <h1>Products</h1>

    @foreach($products as $product)
        <article>
            <h2><a href="/product/{{$product['id']}}">{{ $product['product_name']}}</a></h2>
            <p>{{ $product['product_desc']}}</p>
        </article>
    @endforeach
</body>
</html>