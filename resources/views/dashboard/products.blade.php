<x-layouts.dashboard-layout>
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
                                    <h5 class="card-header">Product Detail</h5>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input-bg" class="form-label">Product Image</label>
                                            <input class="form-control" type="file" id="input-product-img"
                                                onchange="showImagePreview('input-product-img', 'uploaded-product-img')" />
                                        </div>

                                        <div class="mb-3">
                                            <img alt="bg-cover" class="d-block rounded w-25 d-none"
                                                id="uploaded-product-img" />
                                        </div>
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

                                                {{-- Input AddOns --}}
                                                <div>
                                                    <label
                                                        class="form-label d-flex align-items-center gap-2 justify-content-start">
                                                        Addons
                                                        <i class='bx bxs-plus-circle cursor-pointer' id='plus-addon'
                                                            style="font-size: 16px"></i>
                                                    </label>
                                                </div>
                                                {{-- Input AddOns --}}

                                                {{-- AddOns --}}
                                                <div id="addons-container" class="row">
                                                    <div class="mb-2 col-md-6">
                                                        <label for="product" class="form-label">Name</label>
                                                        <input class="form-control" placeholder="Addon Name"
                                                            autocomplete="off" type="text" id="product"
                                                            name="product" autofocus />
                                                    </div>

                                                    <div class="mb-2 col-md-6">
                                                        <label for="price" class="form-label">Price</label>
                                                        <input class="form-control" placeholder="Addon Price"
                                                            autocomplete="off" type="text" id="price"
                                                            name="price" autofocus />
                                                    </div>
                                                </div>
                                                {{-- AddOns --}}

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
