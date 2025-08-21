<div class="mb-3">
    <label for="product_id" class="form-label">Select Package</label>
    <select name="product_id" class="form-select" required>
        <option value="">-- Choose --</option>
        @foreach ($packages as $id => $title)
            <option value="{{ $id }}"
                {{ old('product_id', $detail->product_id ?? '') == $id ? 'selected' : '' }}>
                {{ $title }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Category</label>
    <input type="text" name="category" class="form-control" value="{{ old('category', $detail->category ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label>Sub Category</label>
    <input type="text" name="subcategory" class="form-control"
        value="{{ old('subcategory', $detail->subcategory ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Product</label>
    <input type="text" name="product" class="form-control" value="{{ old('product', $detail->product ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label>Position</label>
    <input type="number" name="position" class="form-control" step="0.01"
        value="{{ old('position', $detail->position ?? 0) }}">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea id="product_details" name="product_details" class="form-control summernote" rows="4">{{ old('product_details', $detail->product_details ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-success">Save</button>
