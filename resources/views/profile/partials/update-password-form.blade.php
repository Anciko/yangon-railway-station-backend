<form method="post" action="{{ route('password.update') }}" >
    @csrf
    @method('put')
    <div class="mb-6">
        <label class="form-label" for=current_password">Current Password</label>
        <input type="password" name="current_password" class="form-control" id=current_password">
    </div>

    <div class="mb-6">
        <label class="form-label" for=password">New Password</label>
        <input type="password" name="password" class="form-control" id=password">
    </div>

    <div class="mb-6">
        <label class="form-label" for=password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" id=password_confirmation">
    </div>

    <div class="d-flex justify-content-center gap-3">
        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
       <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
