<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($erros->all()as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>



        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}" />
        </div>
        <div>
            <label>quantity</label>
            <input type="text" name="quantity" placeholder="quantity" value="{{$product->quantity}}" />
        </div>
        <div>
            <label>price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}" />
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
</body>

</html>