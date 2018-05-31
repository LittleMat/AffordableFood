<div class="form-group">
	<label for="title"  class="control-label sr-only"> Name of the product </label>
	<input type="text" id="title" name="title" placeholder="Name of the product" value="{{ isset($product->name) ? $product->name : old('title')}}" class="form-control"><br>	
</div>

<div class="form-group">
	<label for="description" class="control-label sr-only"> Description </label>
	<textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="form-control">{{ isset($product->description) ? $product->description : old('description')}}</textarea><br>
</div>

<div class="row">
	<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-8">
				<select class="form-control" id="select_brand" name="brand">
			      @foreach($brands as $brand)
			      	<option value="{!!$brand->id!!}"
			      		{{isset($product->brand_id) ? (($product->brand_id == $brand->id) ? 'selected' : '') : ''}}>
			      		{{$brand->name}}
			      	</option>
			      @endforeach
			    </select>
			</div>
			<div class="col-lg-4">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_brand">
				  Add brand
				</button>    	
			</div>
	    </div>
	</div>

	<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-8">
			    <select class="form-control" id="select_category" name="category">
			      @foreach($categories as $category)
			      	<option value="{!!$category->id!!}" 
				      		{{isset($product->category_id) ? (($product->category_id == $category->id) ? 'selected' : '') : ''}}>
				      		{{$category->name}}
			      	</option>
			      @endforeach
			    </select>
			</div>
		    <div class="col-lg-4">
		    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_category">
		    	  Add Category
		    	</button>    
		    </div>
		</div>
	</div>
</div> <br> 
	
<div class="row">
	<div class="col-lg-12">
			{{ Form::file('image', array('class'=>'form-control')) }}
	</div>
</div>
	

<br>
<div class="form-group">
	        	{{ Form::submit($submitButtonText, array('class' =>'btn add-margin') ) }}
            {!! Form::close() !!}

</div>



<!-- Button trigger modal -->


<!-- Modal For Brand -->
<div class="modal fade" id="new_brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form action="{{route('brand.store')}}" method="POST" id="brand_form" class="inline-block">
			{{ csrf_field() }}
			{{ method_field('POST') }}

        <input type="text"  class="form-control" name="name_brand" id="brand_name" placeholder="Brand name...">
        <button type="submit" class="btn add-margin" form="brand_form" id="submit_brand" value="Submit" style="display:none"></button>   

		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn add-margin" onClick="getElementById('submit_brand').click()">Add brand</button>   

      </div>
    </div>
  </div>
</div>


<!-- Modal For Category -->
<div class="modal fade" id="new_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form action="{{route('category.store')}}" method="POST"  id="category_form" class="inline-block">
			{{ csrf_field() }}
			{{ method_field('POST') }}

        <input type="text"  class="form-control" name="category_name" id="category_name" placeholder="Category name...">
        <button type="submit" class="btn add-margin" form="category_form" id="submit_category" value="Submit" style="display:none"></button>   

		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn add-margin" onClick="getElementById('submit_category').click()">Add category</button>   

      </div>
    </div>
  </div>
</div>