 @extends('layouts/app')

 @section('content')
   <div class="container">
     <div class="row">
       <div class="col-8">
         <div class="card">
           <div class="card-header">
             List
           </div>
           <div class="card-body">
             @if(session('deletestatus'))
               <div class="alert alert-danger">
                 {{ session('deletestatus') }}
               </div>
              @endif
             <table class="table table-bordered">
               <thead>
                 <tr>
                   <th>SL No:</th>
                   <th>Product Name</th>
                   <th>Product Description</th>
                   <th>Product Price</th>
                   <th>Product Quantity</th>
                   <th>Aler Quantity</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                   @forelse ($products as $product)
                     <tr>
                       <td>{{ $loop->index +1 }}</td>
                       <td>{{ $product->product_name }}</td>
                       <td>{{ $product->product_description }}</td>
                       <td>{{ $product->product_price }}</td>
                       <td>{{ $product->product_quantity }}</td>
                       <td>{{ $product->alert_quantity }}</td>
                       <td>
                         <a href="{{ url('delete/product') }}/{{ $product->id }}" class="btn btn-sm btn-secondary">Delete</a>
                         <hr>
                         <a href="{{ url('edit/product') }}/{{ $product->id }}" class="btn btn-sm btn-secondary">Edit</a>
                       </td>

                     </tr>
                   @empty
                     <tr class="text-center">
                       <td colspan="6">No Data Found</td>
                     </tr>
                   @endforelse
               </tbody>
             </table>
             {{ $products->links() }}

           </div>
         </div>

       </div>
       <div class="col-4">
         <div class="card">
           <div class="card-header">
           Form
           </div>
           <div class="card-body">
                  @if(session('status'))
                    <div class="alert alert-success">
                      {{ session('status') }}
                    </div>
                   @endif
                   @if ($errors->all())
                     <div class="alert alert-danger">
                       @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                       @endforeach
                     </div>
                   @endif



                 <form action="{{ url('add/product/insert') }}" method="post">
                   @csrf
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your product Name" name="product_name" value="{{ old('product_name') }}">
                  </div>

                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea name="product_description" class="form-control" row="3">{{ old('product_description') }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Product Price</label>
                    <input type="text" class="form-control" placeholder="Enter Your product price" name="product_price" value="{{ old('product_price') }}">
                  </div>

                  <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter Your product Quantity" name="product_quantity" value="{{ old('product_quantity') }}">
                  </div>

                  <div class="form-group">
                    <label>Alert Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter Your Product Alert" name="alert_quantity" value="{{ old('alert_quantity') }}">
                  </div>
                  <button type="submit" class="btn btn-info">Add Product</button>
                </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 @endsection
