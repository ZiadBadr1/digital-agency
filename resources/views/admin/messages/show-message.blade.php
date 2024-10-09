<x-show-modal title="Show Counter">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name"
               disabled wire:model='name' />
        @include('admin.Enhance.error',['name'=>'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Email"
               disabled wire:model='email' />
        @include('admin.Enhance.error',['name'=>'email'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Subject</label>
        <input type="text" class="form-control" placeholder="Subject"
               disabled wire:model='subject' />
        @include('admin.Enhance.error',['name'=>'subject'])
    </div>
    <div class="col-md-12 mb-0">
        <label class="form-label">Message</label>
        <textarea class="form-control" placeholder="Message" disabled
                  wire:model='message'>
        </textarea>
        @include('admin.Enhance.error',['name'=> 'message'])
    </div>
</x-show-modal>
