@extends('layouts.app')

@section('content')
    <div class="row mb-6 gy-6">
        <div class="col-xl">
            <div class="card p-5">
                <h2 class="fs-4">Profile Information</h2>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </div>

    <div class="row mb-6 gy-6">
        <div class="col-xl">
            <div class="card p-5">
                <h2 class="fs-4">Update Password</h2>
                <p class="mb-4">Ensure your account is using a long, random password to stay secure.</p>
                @include('profile.partials.update-password-form')

            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <!-- Laravel Javascript Validation -->
    <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\ProfileUpdateRequest', '#update-profile-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\PasswordUpdateRequest', '#update-password-form') !!}

    <script src="{{ asset('assets/js/form-submit-handler.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Initialize forms.
            initializeFormSubmit('#update-profile-form');
            initializeFormSubmit('#update-password-form');
        });
    </script>
@endpush
