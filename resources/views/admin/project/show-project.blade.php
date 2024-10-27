<x-show-modal title="Show Project">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' disabled/>
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" placeholder="Link" disabled
               wire:model='link'/>
        @include('admin.Enhance.error',['name'=> 'link'])
    </div>

    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Category</label>
        <select class="form-control" name="category_id" wire:model="category_id" disabled>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $category_id ? 'selected' : '' }} wire:key="{{ 'category-' . $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        @include('admin.Enhance.error',['name'=> 'category_id'])
    </div>
    @if ($image)
        <div class="my-4">
            <img src="{{ $image }}" alt="New Image Preview" width="150" class="mb-2">
        </div>
    @endif
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" placeholder="Description" disabled
                  wire:model='description'>
        </textarea>
        @include('admin.Enhance.error',['name'=> 'description'])
    </div>

</x-show-modal>