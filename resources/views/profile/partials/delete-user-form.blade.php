{{-- DELETE ACCOUNT --}}
<div class="card border-danger">
    <div class="card-header text-white">
        <h5 class="mb-0">{{ __('Delete Account') }}</h5>
    </div>

    <div class="card-body">
        <p class="text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmUserDeletionModal">
            {{ __('Delete Account') }}
        </button>

        {{-- Bootstrap 4 Modal --}}
        <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Are you sure you want to delete your account?') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div class="modal-body">
                            <p class="text-muted">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="form-group">
                                <label for="delete_password">{{ __('Password') }}</label>
                                <input
                                    id="delete_password"
                                    type="password"
                                    name="password"
                                    class="form-control @if($errors->userDeletion->has('password')) is-invalid @endif"
                                    placeholder="{{ __('Password') }}"
                                >

                                @if($errors->userDeletion->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->userDeletion->first('password') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                {{ __('Cancel') }}
                            </button>
                            <button type="submit" class="btn btn-danger">
                                {{ __('Delete Account') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        @if($errors->userDeletion->isNotEmpty())
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    $('#confirmUserDeletionModal').modal('show');
                });
            </script>
        @endif

    </div>
</div>
