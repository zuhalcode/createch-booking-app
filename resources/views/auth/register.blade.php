<x-layouts.app-layout>
    <!-- Loader Start -->
    <div class="loader-wrapper">
        <div class="loader animate">
            <span>O</span>
            <span>S</span>
            <span>L</span>
            <span>O</span>
        </div>
    </div>
    <!-- Loader End -->

    <!-- Main Start -->
    <div class="main">
        <section class="page-body p-0">
            <div class="row g-0 ratio_asos">
                <div class="order-2 order-lg-1 col-lg-5">
                    <div class="content-box">
                        <div>
                            <h5>CREATE ACCOUNT<span class="bg-theme-blue"></span></h5>
                            <p class="font-md content-color">How do i get access order,wishlist and recommendation ?</p>

                            <form id="formAuthentication" action={{ url("/$slug/auth/register") }} method="POST"
                                class="custom-form form-pill">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your name" value="{{ old('name') }}" autofocus required />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Enter your email" value="{{ old('email') }}" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="input-box">
                                    <label for="password">Password</label>
                                    <div class="icon-input">
                                        <input class="form-control" type="password" required name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <img class="showHidePassword"
                                            src="https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-2.svg"
                                            alt="eye" />
                                    </div>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="input-box">
                                    <label for="password">Repeat Password</label>
                                    <div class="icon-input">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            required />
                                        <img class="showHidePassword"
                                            src="https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-2.svg"
                                            alt="eye" />
                                    </div>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn-solid rounded-pill line-none theme-color">
                                    SignUp <i class="arrow"></i>
                                </button>
                                <a href={{ url("/$slug") }}
                                    class="btn-solid rounded-pill line-none btn-outline mt-3 d-flex justify-content-center">
                                    Home <i class="arrow"></i>
                                </a>
                            </form>

                            <span class="backto-link font-default content-color text-decoration-none">
                                Already have an Account?
                                <a class="text-decoration-underline theme-color" href={{ url("/$slug/auth/login") }}>
                                    Sign In
                                </a>
                            </span>

                            <span class="line"><span>Or </span> </span>
                            <a href="https://www.google.com/" class="button-link">
                                <img src={{ asset('/assets/icons/png/google.png') }} alt="google" />
                                Sign up
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-1 order-lg-2 col-lg-7">
                    <div class="img-box">
                        <img class="bg-img" src={{ asset('/assets/images/inner-page/banner-p2.jpg') }}
                            alt="banner" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main End -->
</x-layouts.app-layout>
