@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Edit Barang</strong>
        </div>
        
        <div class="card-body card-block">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="form-group">
                    <label for="name" class="mb-2 mt-3">Nama Barang</label>
                    <input  type="text"
                            name="name"
                            value="{{ $product->name }}"
                            class="form-control @error('name') is-invalid @enderror"/>
                    @error('name')<div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <label for="price" class="mb-2 mt-3">Harga Barang</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input  type="number"
                            name="price"
                            value="{{ $product->price }}"
                            class=" form-control @error('price') is-invalid @enderror"/>
                    <span class="input-group-text">.00</span>
                </div>
                <div class="d-block">@error('price')<div class="text-muted">{{ $message }}</div>@enderror</div>
                
                <div class="form-group">
                    <label for="quantity" class="mb-2 mt-3">Kuantitas Barang</label>
                    <input  type="number"
                            name="quantity"
                            value="{{ $product->quantity }}"
                            class="form-control @error('quantity') is-invalid @enderror"/>
                    @error('quantity')<div class="text-muted">{{ $message }}</div>@enderror                        
                </div>
                <div class="form-group">
                    <label for="description" class="mb-2 mt-3">Deskripsi Barang</label>
                    <textarea   name="description"
                                class="form-control @error('description') is-invalid @enderror editor" >{{ $product->description }}</textarea>
                    @error('description')<div class="text-muted">{{ $message }}</div>@enderror              
                </div>
                
                <div class="form-group mt-4">
                    <button class="btn btn-primary" type="submit">Update barang</button>
                </div>
            </form>
    </div>

    
    </div>
    
@endsection

@push('before-script')

    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
                .create( document.querySelector( '.editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
    
@endpush