<x-dashboard-layout>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <x-dashboard.sidebar />

            <!-- Layout container -->
            <div class="layout-page">
                <x-dashboard.navbar />

                {{-- Content --}}
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header">Product Details</h5>
                                    <!-- Product -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src={{ asset('/img/avatars/1.png') }} alt="user-avatar"
                                                class="d-block rounded" height="100" width="100"
                                                id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new image</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" class="account-file-input"
                                                        hidden accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>

                                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="product" class="form-label">Product Name</label>
                                                    <input class="form-control" placeholder="Product" autocomplete="off"
                                                        type="text" id="product" name="product" autofocus />
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="price" class="form-label">Price</label>
                                                    <input class="form-control" placeholder="Price" autocomplete="off"
                                                        type="text" id="price" name="price" autofocus />
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-message">
                                                        Product Description
                                                    </label>
                                                    <textarea id="basic-default-message" name="description" class="form-control"
                                                        placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="max_user" class="col-md-2 col-form-label">
                                                        Max User
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="number" name="max_user"
                                                            id="max_user" placeholder="0" />
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="slot" class="col-md-2 col-form-label">Time</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="time"
                                                            placeholder="12:30:00" id="slot" name="slot" />
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="product" class="form-label">Addon Name</label>
                                                    <input class="form-control" placeholder="Addon Name"
                                                        autocomplete="off" type="text" id="product" name="product"
                                                        autofocus />
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="price" class="form-label">Addon Price</label>
                                                    <input class="form-control" placeholder="Addon Price"
                                                        autocomplete="off" type="text" id="price" name="price"
                                                        autofocus />
                                                </div>

                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary me-2">
                                                        Save changes
                                                    </button>
                                                    <button type="reset" class="btn btn-outline-secondary">
                                                        Cancel
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                    <!-- /Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                {{-- End Content --}}
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
</x-dashboard-layout>
