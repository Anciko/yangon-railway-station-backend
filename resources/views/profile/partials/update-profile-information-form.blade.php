<form method="POST" action="{{ route('profile.update') }}" id="update-profile-form">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
    </div>

    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">

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
