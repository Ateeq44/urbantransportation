{{-- UPDATE PASSWORD --}}
<div class="card mb-4">
    <div class="card-header">
        <h5 class="mb-0">{{ __('Update Password') }}</h5>
        <small class="text-muted">{{ __('Ensure your account is using a long, random password to stay secure.') }}</small>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="current_password">{{ __('Current Password') }}</label>
                <input
                    id="current_password"
                    type="password"
                    name="current_password"
                    class="form-control @if($errors->updatePassword->has('current_password')) is-invalid @endif"
                    autocomplete="current-password"
                >
                @if($errors->updatePassword->has('current_password'))
                    <div class="invalid-feedback">
                        {{ $errors->updatePassword->first('current_password') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="password">{{ __('New Password') }}</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    class="form-control @if($errors->updatePassword->has('password')) is-invalid @endif"
                    autocomplete="new-password"
                >
                @if($errors->updatePassword->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->updatePassword->first('password') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    class="form-control @if($errors->updatePassword->has('password_confirmation')) is-invalid @endif"
                    autocomplete="new-password"
                >
                @if($errors->updatePassword->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{ $errors->updatePassword->first('password_confirmation') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <span class="ml-2 text-success">{{ __('Saved.') }}</span>
            @endif
        </form>
    </div>
</div>
