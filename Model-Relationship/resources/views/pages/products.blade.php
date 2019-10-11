<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Producst List</title>
</head>

<body>

    <div class="container py-2">
        <h2 class="text-secondary display-4 text-center">Inner Join Example</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Category Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->name }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</body>

</html>
