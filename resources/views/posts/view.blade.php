<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Blog Site</span>
  </div>
</nav>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
<form action="{{route('posts.update',$posts->id)}}" method="POST" >
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your title</label>
    <input name="title" type="text" class="form-control" class="@error('title') is_invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$posts->title}}">
    @error('title')
    <div class="alert alert-danger">{{$message}}</div>
 @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your name</label>
    <input name="posted_by" type="text" value="{{$posts->posted_by}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="@error('posted_by') is-invalid @enderror" >
    @error('posted_by')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <button type="submit"   class="btn btn-primary">Confirm</button>
</form>

</body>

