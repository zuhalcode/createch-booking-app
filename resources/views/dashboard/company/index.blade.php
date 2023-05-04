<x-layouts.dashboard-layout>
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
                        <h5 class="card-header">Company Detail</h5>
                        <hr class="my-0" />

                        <div class="card-body">
                            <form id="formAccountSettings" action={{ url("/dashboard/company/$company->id") }}
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="input-bg" class="form-label">Logo Image</label>
                                    <input class="form-control" type="file" id="input-logo" name="logo"
                                        onchange="showImagePreview('input-logo', 'uploaded-logo')" />
                                </div>

                                <div class="mb-3">
                                    <img alt="bg-cover" class="d-block rounded w-25 d-none" id="uploaded-logo" />
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="Name" autocomplete="off" value={{ $company->name }} />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        placeholder="E-mail" autocomplete="off" value={{ $company->email }} />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">(+62)</span>
                                        <input class="form-control" type="number" name="phone"
                                            placeholder="85123456123" required value={{ $company->phone }} />
                                    </div>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="about" class="form-label">Address</label>
                                    <textarea class="form-control" type="text" name="address" placeholder="Address" autocomplete="off">{{ $company->address }}</textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="about" class="form-label">About Us</label>
                                    <textarea class="form-control" type="text" name="about_us" placeholder="About Us" autocomplete="off">{{ $company->about_us }}</textarea>
                                    @error('about_us')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Update Changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </form>
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
