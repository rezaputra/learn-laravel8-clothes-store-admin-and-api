@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between px-3 py-3">
                            <div class="float-left">
                                <h4>New Product</h4>
                            </div>
                            <div class="float-right">
                                <div class="input-group">
                                    <form action="{{ route('products.search') }}" method="get">
                                        {{-- @csrf --}}
                                        <div class="input-group rounded">
                                            <input name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                              aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                              <button type="submit" class="btn p-0 m-0"><i class="fas fa-search"></i></button>
                                            </span>
                                        </div> 
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>      
                                @forelse ($products as $product)                   
                                    <tr>
                                        <td class="align-middle">{{ $product->id }}</td>
                                        <td class="align-middle">{{ $product->name }}</td>
                                        <td class="align-middle">Rp. {{ number_format($product->price, 2 )}}</td>                                
                                        <td class="align-middle">
                                            <div class="d-inline me-3">
                                                <a href="{{ Route('products.show', $product->id) }}"><i class="fas fa-file-image" style="color: #29A0B1"></i></a>
                                            </div>
                                            <div class="d-inline me-3">
                                                <a href="{{ Route('products.edit', $product->id) }}"><i class="fas fa-pencil-alt" style="color: #FF8300"></i></a>
                                            </div>
                                            <form action="{{ Route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                    <button class="btn btn-denger p-0"><i class="fa fa-trash" style="color: brown"></i></button>                                
                                            </form>
                           
                                        </td>
                                    </tr>
                                    
                                @empty
                                    
                                @endforelse
        
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="pagination mt-5 d-flex justify-content-center fixed">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    
@endsection