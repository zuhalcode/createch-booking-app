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
                        <!-- Content -->
                        <div class="card mb-4">
                            <h5 class="card-header">Branch Management</h5>
                            <hr class="my-0" />



                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="input-bg" class="form-label">Logo Image</label>
                                    <input class="form-control" type="file" id="input-logo"
                                        onchange="showImagePreview('input-logo', 'uploaded-logo')" />
                                </div>

                                <div class="mb-3">
                                    <img alt="bg-cover" class="d-block rounded w-25 d-none" id="uploaded-logo" />
                                </div>
                                <form id="formAccountSettings" method="POST" onsubmit="return false">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Nama Perusahaan</label>
                                        <input class="form-control" placeholder="Nama Perusahaan" type="text"
                                            id="firstName" name="firstName" autofocus autocomplete="off" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">INA (+62)</span>
                                            <input type="text" id="phoneNumber" name="phoneNumber"
                                                class="form-control" placeholder="8XXX XXXX XXX" />
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">alamat</label>
                                        <input class="form-control" type="text" id="state" name="state"
                                            placeholder="Surabaya" autocomplete="off" />
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Save
                                            changes</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Content --}}
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- / Layout wrapper -->
    </x-dashboard-layout>
