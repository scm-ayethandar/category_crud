<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <a class="btn btn-primary" href="/categories/create">Create A Category</a>

        @if ($categories->count()) 
        <table class='table mt-5'> 
                <thead>
                  <tr>
                    <th scope='col'>Category ID</th>
                    <th scope='col'>Category Name</th>
                    <th scope='col'>Actions</th>
                  </tr>
                </thead> 
                <tbody class='table-group-divider'>
                @foreach ($categories as $category)
                <tr>
                    <th scope='row'>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="/categories/{{ $category->id }}/edit/" class="btn btn-outline-success">Edit</a>
                            <form action="/categories/{{ $category->id }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure to delete?')">
                                @method('DELETE')
                                {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                                @csrf
                                <button type="submit" class="btn btn-outline-danger ms-2">Delete</button>
                            </form>
                        </div>
                    </td>
                  </tr>                     
                @endforeach
                </tbody>
            </table>
                @else
                    <p>There are no categories.</p>
                @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>
</html> 