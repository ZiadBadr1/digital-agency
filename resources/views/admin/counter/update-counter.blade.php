<x-update-modal title="Update Skill">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Counter</label>
        <input type="number" class="form-control" placeholder="10" min="1"
               wire:model='count' />
        @include('admin.Enhance.error',['name'=> 'count'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Icon"
               wire:model='icon' />
        @include('admin.Enhance.error',['name'=> 'icon'])
    </div>
</x-update-modal>