<x-update-modal title="Update Category">
    <div class="col-md-12 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
</x-update-modal>