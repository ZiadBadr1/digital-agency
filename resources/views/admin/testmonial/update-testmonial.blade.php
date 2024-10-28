<x-update-modal title="Add New Testimonial">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name'/>
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" placeholder="Position"
               wire:model='position'/>
        @include('admin.Enhance.error',['name'=> 'position'])
    </div>
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model='temporaryImage'/>
        @include('admin.Enhance.error',['name'=>'temporaryImage'])
        @include('admin.Enhance.error',['name'=>'image'])
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