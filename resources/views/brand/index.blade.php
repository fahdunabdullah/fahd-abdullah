@extends('brand.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Brand</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('brand.create') }}"> Create New brand</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>create</th>
            <th>update</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($brands as $brand)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->create }}</td>
            <td>{{ $brand->update }}</td>
            <td>
                <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('brands.show',$brand->create) }}">create</a>
    
                    <a class="btn btn-primary" href="{{ route('brands.edit',$brand->update) }}">update</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $brands->links() !!}
      
@endsection