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
                                    <h5 class="card-header">
                                        Slot Detail
                                        <i class='bx bxs-plus-circle cursor-pointer'
                                            onmouseover="handleOnHover('plus-slot')" id='plus-slot'
                                            style="font-size: 16px"></i>
                                    </h5>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST"
                                            action={{ url('/dashboard/slots') }}>
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        Select Product
                                                    </label>
                                                    <select class="form-select" name="product_id"
                                                        aria-label="Default select example" required>
                                                        <option selected>Choose your product</option>
                                                        @foreach ($products as $product)
                                                            <option value={{ $product->id }}>
                                                                {{ $product->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('product_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="max_user" class="form-label ">
                                                        Max User
                                                    </label>
                                                    <div class="mb-3 d-flex flex-column gap-1" id="max-user-container">
                                                        <div class="col-md-12">
                                                            <input class="form-control" type="number" name="max_user[]"
                                                                id="max_user" placeholder="0" required />
                                                        </div>
                                                        @error('max_user')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Time</label>
                                                    <div class="mb-3 d-flex flex-column gap-1" id="slot-container">
                                                        <div class="col-md-12">
                                                            <input class="form-control" type="time"
                                                                placeholder="12:30:00" name="time[]" required />
                                                        </div>
                                                        @error('time')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
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
