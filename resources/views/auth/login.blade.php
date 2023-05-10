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
                            <h5>LOGIN <span class="bg-theme-blue"></span></h5>
                            <p class="font-md content-color">
                                How do i get access order,wishlist and recomendation ?</p>

                            <form form id="formAuthentication" action={{ url("/$slug/auth/login") }} method="POST"
                                class="custom-form form-pill">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Enter your email or username" autofocus />
                                </div>

                                <div class="input-box">
                                    <label for="password">Password</label>
                                    <div class="icon-input">
                                        <input class="form-control" type="password" name="password" required />
                                        <img class="showHidePassword"
                                            src="https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-2.svg"
                                            alt="eye" />
                                    </div>
                                </div>

                                <button type="submit" class="btn-solid rounded-pill line-none">
                                    Signin <i class="arrow"></i>
                                </button>
                                <a href={{ url("/$slug") }}
                                    class="btn-solid rounded-pill line-none btn-outline mt-3 d-flex justify-content-center">
                                    Home <i class="arrow"></i>
                                </a>
                            </form>

                            <span class="backto-link font-default content-color text-decoration-none">
                                If you are new,
                                <a class="text-decoration-underline theme-color" href={{ url("/$slug/auth/register") }}>
                                    Create Now
                                </a>
                            </span>
                            <span class="line"><span>Or </span> </span>
                            <div class="link-group">
                                <a href="https://www.google.com/" class="button-link">
                                    <img src={{ asset('/assets/icons/png/google.png') }} alt="google" />
                                    Sign in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 order-lg-2 col-lg-7">
                    <div class="img-box">
                        <img class="bg-img" src={{ asset('/assets/images/inner-page/banner-p2.jpg') }} alt="banner" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Main End -->
</x-layouts.app-layout>
