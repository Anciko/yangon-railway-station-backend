<form method="post" action="{{ route('password.update') }}" id="update-password-form">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label" for=current_password">Current Password</label>
        <input type="password" name="current_password" class="form-control" id=current_password">
    </div>

    <div class="mb-3">
        <label class="form-label" for=password">New Password</label>
        <input type="password" name="password" class="form-control" id=password">
    </div>

    <div class="mb-3">
        <label class="form-label" for=password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" id=password_confirmation">
    </div>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        <button type="submit" class="btn btn-primary waves-effect waves-light">
            <span class="submit-text">Update</span>

            <span class="loading-text d-none">
                <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>
                Loading...
            </span>
        </button>
    </div>
</form>
