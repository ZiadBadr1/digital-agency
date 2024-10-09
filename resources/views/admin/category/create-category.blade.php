<x-create-modal title="Add New Category">
    <div class="col-md-12 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
</x-create-modal>