<form class="row" wire:submit.prevent='submit'>
    @if (session()->has('message'))
        <div class="alert alert-primary my-success-alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="col-md-6">
        <label class="form-label">Name</label>                                 
        <input type="text" class="form-control" placeholder="Name" wire:model='settings.name' />
        @include('admin.Enhance.error',['name' => 'settings.name'])
    </div>
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Email" wire:model='settings.email' />
        @include('admin.Enhance.error',['name' => 'settings.email'])

    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="Address" wire:model='settings.address' />
        @include('admin.Enhance.error',['name' => 'settings.address'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" placeholder="Phone" wire:model='settings.phone' />
        @include('admin.Enhance.error',['name' => 'settings.phone'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Facebook</label>
        <input type="text" class="form-control" placeholder="Facebook" wire:model='settings.facebook' />
        @include('admin.Enhance.error',['name' => 'settings.facebook'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Twitter</label>
        <input type="text" class="form-control" placeholder="Twitter" wire:model='settings.twitter' />
        @include('admin.Enhance.error',['name' => 'settings.twitter'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Linkedin</label>
        <input type="text" class="form-control" placeholder="Linkedin" wire:model='settings.linkedin' />
        @include('admin.Enhance.error',['name' => 'settings.linkedin'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Instagram</label>
        <input type="text" class="form-control" placeholder="Instagram" wire:model='settings.instagram' />
        @include('admin.Enhance.error',['name' => 'settings.instagram'])
    </div>
    <div class="col-md-12 mt-4">
        @include('admin.Enhance.loading',['buttonName'=> "Update"])
    </div>
</form>