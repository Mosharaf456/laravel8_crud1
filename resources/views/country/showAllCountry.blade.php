<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Display all form Data</title>
</head>
<body>

    <div class="container">
        <h1>Country List</h1>
        <p><a href="/countries/create">Create New Country</a></p>
        <table class="table">
            <thead>
                <tr>
                    <th>@Id</th>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Currency</th>
                    <th>Population</th>
                    <th>Created on</th>
                    <th>Updated on</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $v)
                   <tr>
                       <td> {{ $v->id }} </td>
                       <td> 
                        <a href="/countries/{{$v->id}}" >{{ $v->name }} </a> 
                        </td>
                       <td> {{ $v->capital }} </td>
                       <td> {{ $v->currency }} </td>
                       <td> {{ $v->population }} </td>
                       <td> {{ $v->created_at->diffForHumans() }} </td>
                       <td> {{ $v->updated_at->format(' y - m - d ') }} </td>
                       <td><a href="/countries/{{$v->id}}/edit" class="btn btn-success btn-sm">Edit</a> | <a href="#" class="btn btn-danger btn-sm">Delete</a> </td>
                   </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>