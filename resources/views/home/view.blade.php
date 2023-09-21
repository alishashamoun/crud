<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a class='btn btn-primary' href="/home/create">Create</a>
    @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
  @endif
    <table class='table table-hover'>
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @php
            $id=1
            @endphp
            @foreach($home as $row)
            
            <tr>
                <td>{{$id++}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->description}}</td>
                <td>
                    <a href="/home/edit/{{$row->id}}">edit</a>
                    <form method='post' action="/home/delete/{{$row->id}}">
                        @csrf
                        @method('delete')
                        <button onclick='return confirm("are you sure want to delete this?")' class='btn btn-danger' type='submit'>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>