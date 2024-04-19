<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        value="{{ old('name') }}">

    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


</div>
