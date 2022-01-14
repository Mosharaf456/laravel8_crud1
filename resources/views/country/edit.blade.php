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
        <h1>Edit Country</h1>
        <form action="/countries/create" method= "POST" >
            @csrf

            <div class="form-group">
                <label for="">Country Name</label>
                <input type="text" name="name" class="form-control" value={{$country->name}} >
            </div>
            <div class="form-group">
                <label for="">Country Capital</label>
                <input type="text" name="capital" class="form-control" value={{$country->capital}} >
            </div>
            
            <div class="form-group">
                <label for="">Currency Name</label>
                <input type="text" name="currency" class="form-control" value={{$country->currency}}>
            </div>
            <div class="form-group">
                <label for="">Population</label>
                <input type="text" name="population" class="form-control" value={{$country->population}}>
            </div>

            <button type="submit"  class="btn btn-primary">Update Country</button>
        </form>
    </div>
</body>
</html>