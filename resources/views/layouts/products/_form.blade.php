
<div class="form-group">
	<label for="title"  class="control-label sr-only"> Name of the product </label>
	<input type="text" id="title" name="title" placeholder="Name of the product" value="{{ old('title')}}" class="form-control"><br>	
</div>

<div class="form-group">
	<label for="description" class="control-label sr-only"> Description </label>
	<textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="form-control">{{ old('description')}}</textarea><br>
</div>

<div class="row">
	<div class="col-lg-6">
		<select class="form-control" id="select_brand" name="brand">
	      @foreach($brands as $brand)
	      	<option value="{!!$brand->id!!}">{{$brand->name}}</option>
	      @endforeach
	    </select><br>
	</div>

	<div class="col-lg-6">
	    <select class="form-control" id="select_category" name="category">
	      @foreach($categories as $category)
	      	<option value="{!!$category->id!!}">{{$category->name}}</option>
	      @endforeach
	    </select>
	</div>
</div>

<br>
<div class="form-group">
	<input type="submit" value="{{$submitButtonText}}" class="btn btn-primary btn-block">		
</div>
