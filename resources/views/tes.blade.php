<div class="modal fade addnew-address" id="addNewAddress" tabindex="-1" aria-labelledby="edditAddressLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body full-grid-mobile">
                <!-- Main Start -->
                <div class="main">
                    <section class="page-body p-0">
                        <div class="row g-0 ratio_asos">
                            <div class="order-2 order-lg-1 col-lg-12">
                                <div class="content-box">
                                    {{-- Login --}}
                                    <div id="login-modal">
                                        <h5>LOGIN <span class="bg-theme-blue"></span></h5>
                                        <p class="font-md content-color">
                                            How do i get access order,wishlist and recomendation ?
                                        </p>

                                        <form method="POST" action={{ url('/login-modal') }}
                                            class="custom-form form-pill">
                                            @csrf
                                            <div class="input-box">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" required name="email"
                                                    id="email" />
                                            </div>

                                            <div class="input-box">
                                                <label for="password">Password</label>
                                                <div class="icon-input">
                                                    <input class="form-control" type="password" required name="password"
                                                        id="password" />
                                                    <img class="showHidePassword"
                                                        src="https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-1.svg"
                                                        alt="eye" />
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn-solid rounded-pill line-none">
                                                    Signin<i class="arrow"></i>
                                                </button>
                                            </div>
                                        </form>

                                        <span class="backto-link font-default content-color text-decoration-none">
                                            If you are new,
                                            <p class="text-decoration-underline theme-color" style="cursor: pointer;"
                                                onclick="handleChangeContent()">
                                                Create Now
                                            </p>
                                        </span>
                                        <span class="line"><span>Or</span></span>

                                        <div class="link-group">
                                            <a href="https://www.google.com/" class="button-link"><img
                                                    src={{ url('/assets/icons/png/google.png') }} alt="google" />
                                                Sign in
                                            </a>
                                        </div>
                                    </div>
                                    {{-- Login --}}

                                    {{-- Register --}}
                                    <div id="register-modal" style="display: none">
                                        <h5>CREATE ACCOUNT<span class="bg-theme-blue"></span></h5>
                                        <p class="font-md content-color">How do i get access order,wishlist and
                                            recommendation ?</p>

                                        <form action={{ url('/register-modal') }} class="custom-form form-pill"
                                            method="POST">
                                            @csrf
                                            <div class="input-box">
                                                <label for="name">Full Name</label>
                                                <input class="form-control" type="text" required name="name"
                                                    id="name" />
                                            </div>
                                            <div class="input-box">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" required name="email"
                                                    id="email" />
                                            </div>
                                            <div class="input-box">
                                                <label for="phone">WhatsApp Number</label>
                                                <input class="form-control" type="phone" required name="phone"
                                                    id="phone" />
                                            </div>
                                            <div class="input-box">
                                                <label for="password">Password</label>
                                                <div class="icon-input">
                                                    <input class="form-control" type="password" required name="password"
                                                        id="password" />
                                                    <img class="showHidePassword"
                                                        src="https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-1.svg"
                                                        alt="eye" />
                                                </div>
                                            </div>

                                            <button type="submit" class="btn-solid rounded-pill line-none theme-color">
                                                SignUp <i class="arrow"></i>
                                            </button>
                                        </form>

                                        <span class="backto-link font-default content-color text-decoration-none">
                                            Already have an Account?
                                            <span class="text-decoration-underline theme-color" style="cursor: pointer"
                                                onclick="handleChangeContent()">
                                                Sign In
                                            </span>
                                        </span>
                                        <span class="line"><span>Or</span></span>
                                        <a href="https://www.google.com/" class="button-link">
                                            <img src="../assets/icons/png/google.png" alt="google" />
                                            Sign up
                                        </a>
                                    </div>
                                    {{-- Register --}}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
