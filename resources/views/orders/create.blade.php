<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create order</title>
</head>

<body>
    @foreach ($users as $user)
        <h1>{{ $user->name }}</h1>
    @endforeach
    @foreach ($products as $product)
        <h1>{{ $product->title }}</h1>
    @endforeach
    <h1>Form</h1>
    <h1>>Users</h1>
    <h1>Products</h1>
    <h1>Period</h1>
    <h1>Days</h1>
    <h1>Comment</h1>
</body>

</html>