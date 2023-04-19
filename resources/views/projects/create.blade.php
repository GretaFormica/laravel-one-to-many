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
        
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" id="title" name="title" />
        
            <label for="image" class="form-label">immagine</label>
            <input type="text" class="form-control" id="image" name="image" />
        
            <label for="text" class="form-label">text</label>
            <input type="text" class="form-control" id="text" name="text" />

            <label for="type_id" class="form-label">tipo</label>
            <select name="type_id" class="form-select">
                <option value="">non categorizzato</option>
                @foreach ($types as $type)
                    <option value=" {{ $type->id }}">{{ $type->label }}</option>
                @endforeach
            </select>
        
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>

</body>
</html>