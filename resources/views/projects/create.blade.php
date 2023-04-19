<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
</head>
<body>
    
    <div class="container p-5">

        {{-- <a href="{{ route('music.create')}}" class="btn btn-primary my-5">create music</a> --}}
    
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
        
            <label for="name" class="form-label">titolo</label>
            <input type="text" class="form-control" id="title" name="title" />
        
            <label for="number" class="form-label">immagine</label>
            <input type="text" class="form-control" id="image" name="image" />
        
            <label for="type" class="form-label">text</label>
            <input type="text" class="form-control" id="text" name="text" />
        
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>

</body>
</html>