@extends('hotels.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('hotels.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="nom" class="col-md-4 col-form-label text-md-end text-start"><strong>nom:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->nom }}
                        </div>
                    </div>

                        <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->description }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="nom_chambre" class="col-md-4 col-form-label text-md-end text-start"><strong>Nom chambre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->nom_chambre }}
                        </div>
                    </div>

                        <div class="row">
                        <label for="prix" class="col-md-4 col-form-label text-md-end text-start"><strong>Prix:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->prix }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="adulte_max" class="col-md-4 col-form-label text-md-end text-start"><strong>adulte:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->adulte_max }}
                        </div>
                    </div>

                    div class="row">
                        <label for="enfant_max" class="col-md-4 col-form-label text-md-end text-start"><strong>max enfant:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->enfant_max }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="atribus" class="col-md-4 col-form-label text-md-end text-start"><strong>atribu:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->atribus }}
                        </div>
                    </div>
                     <div class="row">
                        <label for="statu" class="col-md-4 col-form-label text-md-end text-start"><strong>statu:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $hotel->statu }}
                        </div>
                    </div>



            </div>
        </div>
    </div>
</div>

@endsection
