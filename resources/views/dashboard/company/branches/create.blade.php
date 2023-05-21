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
                        <div class="card mb-3">
                            <h5 class="card-header">Branch Management</h5>

                            <hr class="my-0" />

                            <div class="card-body">
                                <form method="POST" action={{ url("/$slug/dashboard/branches") }}>
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Branch Name</label>
                                            <input class="form-control" placeholder="Branch Name" type="text"
                                                name="name" value="{{ old('name') }}" autofocus
                                                autocomplete="off" />
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class=" col mb-3">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">INA (+62)</span>
                                                <input type="text" id="phone" name="phone" class="form-control"
                                                    placeholder="8XXX XXXX XXX" value="{{ old('phone') }}" />
                                            </div>
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
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

                                        <div class="col mb-3">
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
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" name="address"
                                                placeholder="Surabaya" autocomplete="off"
                                                value="{{ old('address') }}" />
                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col mb-3">
                                            <label class="form-label">Admin</label>
                                            <select class="form-select" name="admin" id="city">
                                                <option selected>Choose...</option>
                                                @foreach ($admins as $admin)
                                                    <option value={{ $admin->id }}>
                                                        {{ ucfirst($admin->name) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="state" class="form-label">
                                                Instagram <small>(optional)</small>
                                            </label>
                                            <input class="form-control" type="text" name="socmed[instagram]"
                                                placeholder="Instagram" autocomplete="off"
                                                value="{{ old('socmed.instagram') }}" />
                                            @error('socmed.instagram')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col mb-3">
                                            <label for="state" class="form-label">
                                                TikTok <small>(optional)</small>
                                            </label>
                                            <input class="form-control" type="text" name="socmed[tiktok]"
                                                placeholder="Tiktok" autocomplete="off"
                                                value="{{ old('socmed.tiktok') }}" />
                                            @error('socmed.tiktok')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="state" class="form-label">
                                                Facebook <small>(optional)</small>
                                            </label>
                                            <input class="form-control" type="text" name="socmed[facebook]"
                                                placeholder="Facebook" autocomplete="off"
                                                value="{{ old('socmed.facebook') }}" />
                                            @error('socmed.facebook')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col mb-3">
                                            <label for="state" class="form-label">
                                                Twitter <small>(optional)</small>
                                            </label>
                                            <input class="form-control" type="text" name="socmed[twitter]"
                                                placeholder="Twitter" autocomplete="off"
                                                value="{{ old('socmed.twitter') }}" />
                                            @error('socmed.tiktok')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
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
