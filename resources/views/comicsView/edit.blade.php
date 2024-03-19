@extends('layouts.basic')

@section('title', 'DC Comics | Create')

@section('content')
    <div>
        <h2>Modifica prodotto</h2>
        

            <div class="container">
                <form action="{{route("comics.update", $comic)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            id="title"
                            value="{{$comic->title}}"
                        />
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3">
                            {{$comic->description}}"
                        </textarea>
                    </div>
    
    
                    <div class="mb-3">
                        <label for="type" class="form-label">Thumbnail</label>
                        <input
                            type="text"
                            class="form-control"
                            name="thumb"
                            id="thumb"
                            value="{{$comic->thumb}}"
                        />
                    </div>
    
                    <div class="mb-3">
                        <label for="image" class="form-label">Prezzo</label>
                        <input
                            type="number" step="0.01"
                            class="form-control"
                            name="price"
                            id="price"
                            value="{{$comic->price}}"
                        />
                    </div>
    
                    <div class="mb-3">
                        <label for="cooking_time" class="form-label">Serie</label>
                        <input
                            type="text"
                            class="form-control"
                            name="series"
                            id="series"
                            value="{{$comic->series}}"
                        />
                    </div>
    
                    <div class="mb-3">
                        <label for="weight" class="form-label">Data d'uscita</label>
                        <input
                            type="date"
                            class="form-control"
                            name="sale_date"
                            id="sale_date"
                            value="{{$comic->sale_date}}"
                        />
                    </div>
    
                    <div class="mb-3">
                        <label for="weight" class="form-label">Tipo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="type"
                            id="type"
                            value="{{$comic->type}}"
                        />
                    </div>
    
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Modifica
                    </button>
    
    
                </form>
            </div>
        </form>

    </div>
@endsection