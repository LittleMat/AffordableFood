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
		<select class="form-control" id="select_brand" name="brand">
	      @foreach($brands as $brand)
	      	<option value="{!!$brand->id!!}"
	      		{{isset($product->brand_id) ? (($product->brand_id == $brand->id) ? 'selected' : '') : ''}}>
	      		{{$brand->name}}
	      	</option>
	      @endforeach
	    </select><br>
	</div>

	<div class="col-lg-6">
	    <select class="form-control" id="select_category" name="category">
	      @foreach($categories as $category)
	      	<option value="{!!$category->id!!}" 
		      		{{isset($product->category_id) ? (($product->category_id == $category->id) ? 'selected' : '') : ''}}>
		      		{{$category->name}}
	      	</option>
	      @endforeach
	    </select>
	</div>

	<div class="col-lg-6">
			{{ Form::file('featured_image', array('class'=>'form-control', 'type'=>"file", 'id'=>"imgInp featured_image")) }}
	</div>

</div>

<br>
<div class="form-group">
	<input type="submit" value="{{$submitButtonText}}" id="createproduct" class="btn btn-primary btn-block">		
</div>
