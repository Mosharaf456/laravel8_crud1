<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Display all form Data of Persons</title>
</head>
<body>

    <div class="container">
        <h1>Person List</h1>
        <p><a href="/persons/create">Create New People</a></p>
        <table class="table">
            <thead>
                <tr>
                    <th>@Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country Name</th>
                    <th>Created on</th>
                    <th>Updated on</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persons as $person)
                   <tr>
                       <td> {{ $person->id }} </td>
                       <td> 
                        <a href="/persons/{{$person->id}}" >{{ $person->name }} </a> 
                        </td>
                       <td> {{ $person->email }} </td>
                       <td> {{ $person->phone }} </td>
                       <td> {{ $person->country->name }} </td>
                       <td> {{ $person->created_at->diffForHumans() }} </td>
                       <td> {{ $person->updated_at->format('y - m - d') }} </td>
                    {{--  --}}
                       <td>
                        <a href="/persons/{{$person->id}}/edit" class="btn btn-success btn-sm">Edit</a> | 
                        <form action="/persons/{{$person->id}}/delete" method="POST">
                            {{--cross site request forjery ;;another doesn,t  interfare --}}
                            @csrf
                            {{-- Delete query in blade format  --}}
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                       </td>
                    
                   </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>