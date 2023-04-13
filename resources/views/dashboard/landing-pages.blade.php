<x-dashboard-layout>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <x-dashboard.sidebar />

            <!-- Layout container -->
            <div class="layout-page">
                <x-dashboard.navbar />

                {{-- Content --}}
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src={{ url('/img/avatars/1.png') }} alt="user-avatar" class="d-block rounded"
                                    height="100" width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 1MB</p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-0" />

                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading 1</label>
                                    <input class="form-control" type="text" name="first_heading" id="heading"
                                        placeholder="Heading 1" autocomplete="off" />
                                </div>

                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading 2</label>
                                    <input class="form-control" type="text" name="second_heading" id="heading"
                                        placeholder="Heading 2" autocomplete="off" />
                                </div>

                                <div class="mb-3">
                                    <label for="about" class="form-label">Short Desc</label>
                                    <textarea class="form-control" type="text" name="short_desc" id="about" placeholder="Short Desc"
                                        autocomplete="off"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image Input</label>
                                    <input class="form-control" type="file" id="formFile" />
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        placeholder="E-mail" autocomplete="off" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">(+62)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="85461620" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">
                                        Social Media
                                    </label>
                                    <input class="form-control" type="text" id="socialmedia" name="socialmedia"
                                        placeholder="Social Media" autocomplete="off" />
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">
                                        Save changes
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                        </div>


                    </div>
                </div>
                {{-- End Content --}}
            </div>
        </div>
        <!-- / Layout page -->
    </div>


    <!-- / Layout wrapper -->
</x-dashboard-layout>
