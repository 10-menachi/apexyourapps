@extends('layouts.account')
@section('title', 'Account')

@section('content')
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
                @include('components.account.sidebar')
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <!-- Page title -->
                        <h1 class="mb-1 h2 mb-sm-2">Personal info</h1>

                        <!-- Basic info -->
                        <div class="py-4 border-bottom">
                            <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
                                <h2 class="mb-0 h6">Basic info</h2>
                                <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed"
                                    href=".basic-info" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="basicInfoPreview basicInfoEdit">Edit</a>
                            </div>
                            <div class="collapse basic-info show" id="basicInfoPreview">
                                <ul class="m-0 list-unstyled fs-sm">
                                    <li>{{ Auth::user()->name }}</li>
                                    <li>{{ Auth::user()->dob ? \Carbon\Carbon::parse(Auth::user()->dob)->format('m d, Y') : '-' }}
                                    </li>
                                    <li>{{ Auth::user()->lang ?? '-' }}</li>
                                </ul>
                            </div>
                            <div class="collapse basic-info" id="basicInfoEdit">
                                <form class="row g-3 g-sm-4 needs-validation" action="{{ route('profile.update') }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="col-sm-6">
                                        <label for="ln" class="form-label">Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ Auth::user()->name }}" required>
                                            <div class="invalid-feedback">Please enter your name!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="dob" class="form-label">Date of birth</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-icon-end" id="dob"
                                                name="dob"
                                                data-datepicker="{

                                                }"
                                                value="{{ \Carbon\Carbon::parse(Auth::user()->dob) ?? '' }}"
                                                placeholder="Choose date">
                                            <i
                                                class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Language</label>
                                        <select class="form-select" name="lang" required>
                                            <option value="" disabled>Select language</option>
                                            <option value="en" {{ Auth::user()->lang == 'en' ? 'selected' : '' }}>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/flags/en-us.png') }}"
                                                        class="flex-shrink-0 me-2" width="20" alt="English"> English
                                                </div>
                                            </option>
                                            <option value="fr" {{ Auth::user()->lang == 'fr' ? 'selected' : '' }}>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/flags/fr.png') }}"
                                                        class="flex-shrink-0 me-2" width="20" alt="Français">
                                                    Français
                                                </div>
                                            </option>
                                            <option value="de" {{ Auth::user()->lang == 'de' ? 'selected' : '' }}>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/flags/de.png') }}"
                                                        class="flex-shrink-0 me-2" width="20" alt="Deutsch"> Deutsch
                                                </div>
                                            </option>
                                            <option value="it" {{ Auth::user()->lang == 'it' ? 'selected' : '' }}>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/flags/it.png') }}"
                                                        class="flex-shrink-0 me-2" width="20" alt="Italiano">
                                                    Italiano
                                                </div>
                                            </option>
                                        </select>


                                    </div>
                                    <div class="col-12">
                                        <div class="gap-3 pt-2 d-flex pt-sm-0">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                                data-bs-target=".basic-info" aria-expanded="true"
                                                aria-controls="basicInfoPreview basicInfoEdit">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="py-4 border-bottom">
                            <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
                                <div class="gap-3 d-flex align-items-center me-4">
                                    <h2 class="mb-0 h6">Contact</h2>
                                </div>
                                <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed"
                                    href=".contact-info" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="contactInfoPreview contactInfoEdit">Edit</a>
                            </div>
                            <div class="collapse contact-info show" id="contactInfoPreview">
                                <ul class="m-0 list-unstyled fs-sm">
                                    <li class="mb-1">{{ Auth::user()->email }}</li>
                                    <li>{{ Auth::user()->phone ?? '-' }}
                                        @if (Auth::user()->email_verified_at)
                                            <span class="text-success ms-1">Verified</span>
                                        @else
                                            <a href="{{ route('verification.notice') }}"
                                                class="text-danger ms-1 float-end">Verify</a>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="collapse contact-info" id="contactInfoEdit">
                                <form class="row g-3 g-sm-4 needs-validation" action="{{ route('profile.update') }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <div class="position-relative">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ Auth::user()->email }}" required>
                                            <div class="invalid-feedback">Please enter a valid email address!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                data-input-format='{
                                                "numericOnly": true,
                                                "delimiters": [" "],
                                                "blocks": [4, 2, 2, 2]
                                            }'
                                                placeholder="0712 34 56 78" value="{{ Auth::user()->phone ?? '' }}"
                                                required>
                                            <div class="invalid-feedback">Please enter your phone number!</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="gap-3 pt-2 d-flex pt-sm-0">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                                data-bs-target=".contact-info" aria-expanded="true"
                                                aria-controls="contactInfoPreview contactInfoEdit">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="py-4 border-bottom">
                            <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
                                <div class="gap-3 d-flex align-items-center me-4">
                                    <h2 class="mb-0 h6">Password</h2>
                                </div>
                                <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed"
                                    href=".password-change" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="passChangePreview passChangeEdit">Edit</a>
                            </div>
                            <div class="collapse password-change show" id="passChangePreview">
                                <ul class="m-0 list-unstyled fs-sm">
                                    <li>**************</li>
                                </ul>
                            </div>
                            <div class="collapse password-change" id="passChangeEdit">
                                <form class="row g-3 g-sm-4 needs-validation" action="{{ route('password.update') }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-sm-6">
                                        <label for="update_password_current_password" class="form-label">Current
                                            Password</label>
                                        <div class="password-toggle">
                                            <input type="password"
                                                class="form-control @error('current_password') is-invalid @enderror"
                                                id="update_password_current_password" name="current_password"
                                                placeholder="Enter your current password" required>
                                            <label class="password-toggle-button" aria-label="Show/hide password">
                                                <input type="checkbox" class="btn-check"
                                                    onclick="togglePasswordVisibility('update_password_current_password', this)">
                                            </label>
                                        </div>
                                        @error('current_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="update_password_password" class="form-label">New Password</label>
                                        <div class="password-toggle">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="update_password_password" name="new_password"
                                                placeholder="Create new password" required>
                                            <label class="password-toggle-button" aria-label="Show/hide password">
                                                <input type="checkbox" class="btn-check"
                                                    onclick="togglePasswordVisibility('update_password_password', this)">
                                            </label>
                                        </div>
                                        @error('new_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="update_password_password" class="form-label">Confirm New
                                            Password</label>
                                        <div class="password-toggle">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="update_password_password" name="password_confirmation"
                                                placeholder="Confirm new password" required>
                                            <label class="password-toggle-button" aria-label="Show/hide password">
                                                <input type="checkbox" class="btn-check"
                                                    onclick="togglePasswordVisibility('update_password_password', this)">
                                            </label>
                                        </div>
                                        @error('new_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="gap-3 pt-2 d-flex pt-sm-0">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                                data-bs-target=".password-change" aria-expanded="true"
                                                aria-controls="passChangePreview passChangeEdit">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Delete account -->
                        <div class="pt-3 mt-2 mt-sm-3">
                            <h2 class="h6">Delete account</h2>
                            <p class="fs-sm">When you delete your account, your public profile will be deactivated
                                immediately. If you change your mind before the 14 days are up, sign in with your email
                                and password, and we'll send you a link to reactivate your account.</p>
                            <a class="text-danger fs-sm fw-medium" href="#!">Delete account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.account.footer')

@endsection
