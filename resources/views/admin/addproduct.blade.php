@extends('admin.layouts.main')
@section('content')
<form class="form-horizontal" action={{route('product.store')}} method="post">
  @csrf

<legend > Add PRODUCTS</legend>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Select Basic -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_categorie" class="form-control">
    </select>
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">Price</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="price" placeholder="price" class="form-control input-md" type="text">
    
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <input type="text" name="description">
  </div>
</div>






 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="text">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" class="btn btn-primary" type="submit">Add</button>
  </div>
  </div>

</form>



        </div>
    </div>

@endsection