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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Contextual Classes -->
                        <button type="button" class="btn btn-primary mb-3 row col-lg-2 mx-0" data-bs-toggle="modal"
                            data-bs-target="#modalAddBranchProducts">
                            Add Products
                        </button>

                        <div class="row mb-5 ">
                            @foreach ($branchProducts as $product)
                                <x-ui.card :product="$product" :slug="$slug" />
                            @endforeach
                        </div>
                        <!--/ Contextual Classes -->
                    </div>
                </div>
                {{-- End Content --}}

            </div>
            <!-- Layout page -->

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>

        <!-- Modal Add Admin -->
        <div class="modal fade" id="modalAddBranchProducts" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <form class="modal-content" method="POST"
                    action={{ "/$slug/dashboard/products/branches/$branch->id" }}>
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">
                            Add Products
                            <i class='bx bxs-plus-circle cursor-pointer' onmouseover="handleOnHover('plus-product')"
                                id='plus-product' style="font-size: 16px"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="col mb-3" id="branch-product-container"
                            data-company-products="{{ json_encode($companyProducts) }}">
                            <label class="form-label">Products</label>
                            <select class="form-select" name="products[]">
                                <option selected>Choose...</option>
                                @foreach ($companyProducts as $product)
                                    <option value={{ $product->id }}>
                                        {{ ucfirst($product->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Products</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <!-- Layout wrapper -->
</x-layouts.dashboard-layout>
