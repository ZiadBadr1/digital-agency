<x-show-modal title="Show Counter">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name"
               disabled wire:model='name' />
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Icon" disabled
               wire:model='icon' />
        @include('admin.Enhance.error',['name'=> 'icon'])
    </div>
    <div class="col-md-12 mb-0">
        <label class="form-label">Description</label>
        <textarea class="form-control" placeholder="Description" disabled
                  wire:model='description'>
        </textarea>
        @include('admin.Enhance.error',['name'=> 'description'])
    </div>
</x-show-modal>
