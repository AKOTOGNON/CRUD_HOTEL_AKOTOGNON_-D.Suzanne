@extends('hotels.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Product List</div>
            <div class="card-body">
                <a href="{{ route('hotels.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Product</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">nom</th>
                        <th scope="col">description</th>
                        <th scope="col">Nomchambre</th>
                        <th scope="col">prix</th>
                         <th scope="col">nombre de lit</th>
                        <th scope="col">adulte autoriser</th>
                        <th scope="col">enfant autoriser</th>
                         <th scope="col">atribus</th>
                        <th scope="col">statu</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->nom }}</td>
                            <td>{{ $hotel->description}}</td>
                            <td>{{ $hotel->nom_chambre }}</td>
                            <td>{{ $hotel->prix}}</td>
                            <td>{{ $hotel->nombre_lit}}</td>
                            <td>{{ $hotel->adulte_max}}</td>
                            <td>{{ $hotel->enfant_max}}</td>
                            <td>{{ $hotel->atribus}}</td>
                            <td>{{ $hotel->statu}}</td>

                            <td>
                                <form action="{{ route('hotels.destroy', $hotel->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Product Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $hotels->links() }}

            </div>
        </div>
    </div>
</div>

@endsection
