<x-layouts.dashboard-layout>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <x-dashboard.sidebar :slug="$slug" />

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
                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">Branch Name</label>
                                        <input class="form-control" placeholder="Branch Name" type="text"
                                            id="firstName" name="firstName" autofocus autocomplete="off" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">INA (+62)</span>
                                            <input type="text" id="phone" name="phone" class="form-control"
                                                placeholder="8XXX XXXX XXX" />
                                        </div>
                                    </div>

                                    <div class="mb-3 ">
                                        <label class="form-label">Province</label>
                                        <select class="form-select" id="province_id">
                                            <option selected>Choose...</option>
                                            @foreach ($provinces as $province)
                                                <option value={{ $province->id }}>
                                                    {{ ucfirst($province->name) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 ">
                                        <label class="form-label">City</label>
                                        <select class="form-select" name="city" id="city">
                                            <option selected>Choose...</option>
                                            @foreach ($cities as $city)
                                                <option value={{ $city->id }}>
                                                    {{ ucfirst($city->name) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="state" class="form-label">Address</label>
                                        <input class="form-control" type="text" id="state" name="state"
                                            placeholder="Surabaya" autocomplete="off" />
                                    </div>

                                    <div class="my-3">
                                        <label for="state" class="form-label">Instagram</label>
                                        <input class="form-control" type="text" name="socmed[instagram]"
                                            placeholder="Instagram" autocomplete="off" />
                                    </div>

                                    <div class="my-3">
                                        <label for="state" class="form-label">TikTok</label>
                                        <input class="form-control" type="text" name="socmed[tiktok]"
                                            placeholder="Tiktok" autocomplete="off" />
                                    </div>

                                    <div class="my-3">
                                        <label for="state" class="form-label">Facebook</label>
                                        <input class="form-control" type="text" name="socmed[facebook]"
                                            placeholder="Facebook" autocomplete="off" />
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">
                                            Create Branch
                                        </button>
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
