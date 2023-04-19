<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>edit</title>
</head>
<body>
    <div class="container my-5">

        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="title">Titolo</label>
                    <input type="text" 
                           class="form-control" 
                           id="title" 
                           name="title"
                           value="{{ old('title') ?? $project->title }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Immagine</label>
                    <input type="text" 
                           class="form-control" 
                           id="image" 
                           name="image"
                           value="{{ old('image') ?? $project->image }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="text">text</label>
                    <input type="text" 
                           class="form-control" 
                           id="text" 
                           name="text"
                           value="{{ old('text') ?? $project->text }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="type_id">Tipo</label>
                    <select name="type_id" class="form-select">
                        <option value="">non categorizzato</option>
                        @foreach ($types as $type)
                            <option value=" {{ $type->id }}">{{ $type->label }}</option>
                        @endforeach
                    </select>
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-primary my-4">Salva</button>
        </form>
    </div>
</body>
</html>