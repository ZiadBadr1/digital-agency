<form id="formAuthentication" class="mb-3" wire:submit.prevent="submit" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
                type="text"
                class="form-control"
                placeholder="Enter your email "
                wire:model="email"
                autofocus
        />
        @error('email')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            <a href="auth-forgot-password-basic.html">
                <small>Forgot Password?</small>
            </a>
        </div>
        <div class="input-group input-group-merge">
            <input
                    type="password"
                    class="form-control"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                    wire:model="password"

            />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox"  wire:model="remember"/>
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">
            <span wire:loading.remove>
                Sign in
            </span>
        <div class="text-center">
        <div class="spinner-border spinner-border-sm text-white" role="status" wire:loading="submit">
            <span class="visually-hidden" >Loading...</span>
        </div>
        </div>
        </button>
    </div>
</form>
