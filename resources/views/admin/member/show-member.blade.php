<x-show-modal title="Member">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' disabled/>
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" placeholder="Position" wire:model='position' disabled/>
        @include('admin.Enhance.error',['name'=>'position'])
    </div>
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model='image' disabled/>
        @include('admin.Enhance.error',['name'=>'image'])
    </div>
    @if ($image)
        <div class="my-4">
            <img src="{{ $image }}" alt="New Image Preview" width="150" class="mb-2">
        </div>
    @endif
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Facebook</label>
        <input type="url" class="form-control" placeholder="Facebook" wire:model='facebook' disabled/>
        @include('admin.Enhance.error',['name'=>'facebook'])
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Twitter</label>
        <input type="url" class="form-control" placeholder="Twitter" wire:model='twitter' disabled/>
        @include('admin.Enhance.error',['name'=>'twitter'])
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Linkedin</label>
        <input type="url" class="form-control" placeholder="Linkedin" wire:model='linkedin' disabled/>
        @include('admin.Enhance.error',['name'=>'linkedin'])
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Instagram</label>
        <input type="url" class="form-control" placeholder="Instagram" wire:model='instagram' disabled/>
        @include('admin.Enhance.error',['name'=>'instagram'])
    </div>

</x-show-modal>