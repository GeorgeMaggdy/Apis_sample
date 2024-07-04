<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .custom-btn {
    display: inline-block;
    /* Add any additional styling if needed */
}

    </style>
  </head>
  <body>


<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Blog Site</span>
  </div>
</nav>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 

<div class="d-grid gap-2">
<a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
</div>

<table class="table">

  <thead>


    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($posts as $post)
  <tr>
      <th scope="row">1</th>
      <td>{{$post->title}}</td>
      <td>{{$post->posted_by}}</td>
      <td>{{$post->created_at}}</td>
      <td>
        
      <a href="{{ url('posts/' . $post->id) }}" class="btn btn-info custom-btn">Edit</a>
<a href="{{ route('posts.onlyview', $post->id) }}" class="btn btn-primary custom-btn">View Post</a>

<form action="{{ route('posts.delete', $post->id) }}" method="POST" class="custom-btn">
    @method('HEAD')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>



    </td>

    </tr>
  @endforeach
  
  </tbody>
</table>

</body>


</html>