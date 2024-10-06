            <span wire:loading.remove>
                {{ $buttonName }}
            </span>
    <div class="text-center">
        <div class="spinner-border spinner-border-sm text-white" role="status" wire:loading="submit">
            <span class="visually-hidden" >Loading...</span>
        </div>
    </div>
