<x-update-modal title="Add New Project">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name'/>
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" placeholder="Link"
               wire:model='link'/>
        @include('admin.Enhance.error',['name'=> 'link'])
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model='temporaryImage'/>
        @include('admin.Enhance.error',['name'=>'temporaryImage'])
        @include('admin.Enhance.error',['name'=>'image'])
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Category</label>
        <select class="form-control" name="category_id" wire:model="category_id">
            @if(count($categories) > 0)
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            wire:key="{{ 'category-' . $category->id }}">{{$category->name}}</option>
                @endforeach
            @endif
        </select>
        @include('admin.Enhance.error',['name'=> 'category_id'])
    </div>
    @if ($image && !$temporaryImage)
        <div class="my-4">
            <img src="{{ $image }}" alt="New Image Preview" width="150" class="mb-2">
        </div>
    @endif
    @if ($temporaryImage)
        <div class="my-4">
            <img src="{{ $temporaryImage->temporaryUrl() }}" alt="New Image Preview" width="150" class="mb-2">
        </div>
    @endif
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" placeholder="Description"
                  wire:model='description'>
        </textarea>
        @include('admin.Enhance.error',['name'=> 'description'])
    </div>

</x-update-modal>