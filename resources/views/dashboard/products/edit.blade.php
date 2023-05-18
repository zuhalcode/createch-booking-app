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
                                    <h5 class="card-header">Edit Product</h5>
                                    <hr class="my-0" />
                                    <form id="formAccountSettings" method="POST"
                                        action={{ url("/$slug/dashboard/products/$product->id") }} class="card-body"
                                        enctype="multipart/form-data">

                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <label for="input-bg" class="form-label">Product Image</label>
                                            <input class="form-control" name="image" type="file"
                                                id="input-product-img"
                                                onchange="showImagePreview('input-product-img', 'uploaded-product-img')" />
                                        </div>

                                        <div class="mb-3">
                                            <img alt="bg-cover" class="d-block rounded w-25 d-none"
                                                id="uploaded-product-img" />
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="product" class="form-label">Product Name</label>
                                                <input class="form-control" placeholder="Product" autocomplete="off"
                                                    type="text" id="product" name="name" autofocus
                                                    value="{{ $product->name }}" required />
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="price" class="form-label">Price</label>
                                                <input class="form-control" placeholder="Price" autocomplete="off"
                                                    type="text" id="price" name="price" autofocus
                                                    value={{ $product->price }} required />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">
                                                    Product Description
                                                </label>
                                                <textarea id="basic-default-message" name="description" class="form-control" rows="5"
                                                    placeholder="Hi, Do you have a moment to talk Joe?">{{ $product->description }}
                                                </textarea>
                                            </div>


                                            {{-- Input AddOns --}}
                                            <div class="mt-2">
                                                <label
                                                    class="form-label d-flex align-items-center gap-2 justify-content-start">
                                                    Addons
                                                </label>
                                            </div>
                                            {{-- Input AddOns --}}

                                            {{-- AddOns --}}
                                            @foreach ($addons as $addon)
                                                <div class="row">
                                                    <input type="hidden" value="{{ $addon->id }}"
                                                        name="addons_id[]">
                                                    <div class="mb-2 col-md-6">
                                                        <label class="form-label">Name</label>
                                                        <input class="form-control" placeholder="Addon Name"
                                                            autocomplete="off" type="text" name="addons_name[]"
                                                            autofocus value="{{ $addon->name }}" required />
                                                    </div>

                                                    <div class="mb-2 col-md-6">
                                                        <label for="price" class="form-label">Price</label>
                                                        <input class="form-control" placeholder="Price"
                                                            autocomplete="off" type="text" id="price"
                                                            name="addon-price[]" autofocus value={{ $addon->price }}
                                                            required />
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{-- AddOns --}}

                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">
                                                    Save changes
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    Cancel
                                                </button>
                                            </div>
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
