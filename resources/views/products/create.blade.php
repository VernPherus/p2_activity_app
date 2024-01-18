<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($erros->all()as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>



        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" />
        </div>
        <div>
            <label>quantity</label>
            <input type="text" name="quantity" placeholder="quantity" />
        </div>
        <div>
            <label>price</label>
            <input type="text" name="price" placeholder="price" />
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" />
        </div>
        <div>
            <input type="submit" value="Save a new product" />
        </div>
</body>

</html>