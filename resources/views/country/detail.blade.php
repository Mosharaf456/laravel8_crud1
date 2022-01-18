<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>laravel crud</title>
</head>
<body>
    <div class="container">
        <h1>{{$country->name}} Detail </h1>
        <h2> {{$country->capital}} </h2>

        <table class="table">
            <thead>
                <tr>
                    <th>@Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>

                    <th>Created on</th>
                    <th>Updated on</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($country->persons as $person)
                   <tr>
                       <td> {{ $person->id }} </td>
                       <td> {{ $person->name }} </td>
                       <td> {{ $person->email }} </td>
                       <td> {{ $person->phone }} </td>

                       <td> {{ $person->created_at->diffForHumans() }} </td>
                       <td> {{ $person->updated_at->format('y - m - d') }} </td>
                    {{--  --}}    
                   </tr>
                @endforeach
            </tbody>
    </div>
</body>
</html>