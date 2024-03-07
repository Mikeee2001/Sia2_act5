<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <a href ="{{route('home')}}">Back</a>
  <body>
  @csrf
  
  <form>
    <div class="container mt-5">
    <h1>Create Blog</h1>
<div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Blog Name</label>
  <div class="col-sm-10">
    <input name="blog-name" type="name" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Blog Name" required>
  </div>
</div>
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
  <div class="col-sm-10">
    <input name="description"type="description" class="form-control" id="colFormLabel" placeholder="Blog Description" required>
  </div>
</div>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Ammount</label>
  <div class="col-sm-10">
    <input name="ammount" type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Ammount" required>
  </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  <div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body >
</html>



