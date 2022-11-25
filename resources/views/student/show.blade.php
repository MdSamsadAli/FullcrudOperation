<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelCrudOperation</title>
    <!-- bootstrap and CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">You can see here the records</h1>

        <a href="{{route("add_more")}}" class="btn btn-primary">Insert</a>
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>PostId</th>
                <th>Post Title</th>
                <th>Post Author</th>
                <th>Author Image</th>
                <th>Post delete</th>
                <th>Post Edit</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->post_title}}</td>
                <td>{{$post->post_author}}</td>
                <td>
                    <img src="{{asset("uploads/admin/".$post->image)}}" alt="image" width="200px">
                </td>
                {{-- <td>{{$post->image}}</td> --}}
                <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-secondary">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>