<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home edit</title>
        <!-- bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@if ($errors->any())

<div class="alert alert-danger">

    <button type="button" class="close" data-dismiss="alert">×</button>    

   {{$errors->first()}}

</div>

@endif
    <form method='post' action="/home/update/{{$home->id}}">
        @csrf
        @method('put')
        <input type="text" class='form-control' value='{{$home->title}}' name='title'  placeholder='please input field'>
        <input type="text" class='form-control' value='{{$home->description}}' name='description'   placeholder='please input field'>
        <button class='btn btn-primary' type='submit'>update</button>
        <a class='btn btn-danger' href="/home">cancel</a>

    </form>
        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>