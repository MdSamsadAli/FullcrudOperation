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
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Add Data</h1>
            <div class="mb-3">
                <label for="posttitle"><b>Post Title</b></label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="postauthor"><b>Post Author</b></label>
                <input type="text" name="author" class="form-control">
            </div>

            <div class="mb-3">
                <label for="postauthor"><b>Author Photo</b></label>
                <input type="file" name="image" class="form-control">
            </div>
            
            <input type="submit" name="insert" value="insert" class="btn btn-primary">
        </form>
    </div>
</body>
</html>