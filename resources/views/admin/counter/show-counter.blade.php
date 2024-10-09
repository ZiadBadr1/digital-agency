<x-show-modal title="Show Counter">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name"
               disabled
               wire:model='name' />
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Counter</label>
        <input type="number" class="form-control" placeholder="10" min="1"
               disabled
               wire:model='count' />
        @include('admin.Enhance.error',['name'=> 'count'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="number" class="form-control" placeholder="Icon"
               disabled
               wire:model='icon' />
        @include('admin.Enhance.error',['name'=> 'icon'])
    </div>
</x-show-modal>
