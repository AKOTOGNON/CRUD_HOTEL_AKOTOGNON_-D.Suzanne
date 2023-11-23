@extends('hotels.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Product
                </div>
                <div class="float-end">
                    <a href="{{ route('hotels.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('hotels.update', $product->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="nom" class="col-md-4 col-form-label text-md-end text-start">nom</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ $hotel->nom }}">
                            @if ($errors->has('nom'))
                                <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>
                    </div>

                     <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nom_chambre" class="col-md-4 col-form-label text-md-end text-start">nom_chambre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nom_chambre') is-invalid @enderror" id="nom_chambre" name="nom_chambre" value="{{ $hotel->nom_chambre }}">
                            @if ($errors->has('nom_chambre'))
                                <span class="text-danger">{{ $errors->first('nom_chambre') }}</span>
                            @endif
                        </div>
                    </div>

                     <div class="mb-3 row">
                        <label for="prix" class="col-md-4 col-form-label text-md-end text-start">Prix</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix" value="{{ $hotel->prix }}">
                            @if ($errors->has('prix'))
                                <span class="text-danger">{{ $errors->first('prix') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="adulte_max" class="col-md-4 col-form-label text-md-end text-start">maxadulte</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('adulte_max') is-invalid @enderror" id="adulte_max" name="adulte_max" value="{{ $hotel->adulte_max }}">
                            @if ($errors->has('adulte_max'))
                                <span class="text-danger">{{ $errors->first('adulte_max') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="enfant_max" class="col-md-4 col-form-label text-md-end text-start">maxadulte</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('enfant_max') is-invalid @enderror" id="enfant_max" name="enfant_maxx" value="{{ $hotel->enfant_max }}">
                            @if ($errors->has('enfant_max'))
                                <span class="text-danger">{{ $errors->first('enfant_max') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="atribus" class="col-md-4 col-form-label text-md-end text-start">atibu</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('atribus') is-invalid @enderror" id="enfant_max" name="atibus" value="{{ $hotel->atribus }}">
                            @if ($errors->has('atribus'))
                                <span class="text-danger">{{ $errors->first('atribus') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="statu" class="col-md-4 col-form-label text-md-end text-start">statu</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('atribus') is-invalid @enderror" name="statu" value="{{ $hotel->statu }}">
                            @if ($errors->has('statu'))
                                <span class="text-danger">{{ $errors->first('statu') }}</span>
                            @endif
                        </div>
                    </div>







                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
