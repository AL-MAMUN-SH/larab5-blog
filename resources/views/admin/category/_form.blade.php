
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" value="{{ old('name',isset($category)?$category->name:null) }}" name="name" class="form-control" id="name" placeholder="Enter category name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
   <div class="form-group">
       <label for="">STATUS : </label>
       <br>
       <input type="radio" @if(old('status',isset($category)?$category->status:null) == 'Active') checked @endif name="status" id="active" value="Active">&nbsp;&nbsp;
       <label for="active">Active</label>
       <input type="radio" @if(old('status',isset($category)?$category->status:null) == 'Inactive') checked @endif name="status" id="inactive" value="Inactive">&nbsp;&nbsp;
       <label for="inactive">Inactive</label>
       @error('status')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
   </div>
