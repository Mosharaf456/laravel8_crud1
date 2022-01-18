<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>One to many ORM _laravel8</title>
</head>
<body>
    <div class="container">
        <h1>Create Persons</h1>
        <form action="/persons/create" method= "POST" >
            @csrf

            <div class="form-group">
                <label for="">Person Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Person Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Person Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Country ID</label>
                <select name="country_id" id="country_id" class="form-control">
                    <option value="">Select Your Country</option>
                    @foreach ($countries as $country)
                   <option value="{{$country->id}}">{{$country->name}}</option>
                   @endforeach
                </select>
            </div>
            <button type="submit"  class="btn btn-primary">Create Person</button>
        </form>
    </div>
</body>
</html>