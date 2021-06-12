<div class="form-group">
    <label for="">{{ ucfirst($name) }}</label>
    <div class="bs-example">
        <input type="text" id="{{ $name }}_id" name="{{ $name }}[]"
               value="{{ isset($attributes) ? implode(',',$attributes) : '' }}" data-role="tagsinput" size="3">
    </div>
</div>
