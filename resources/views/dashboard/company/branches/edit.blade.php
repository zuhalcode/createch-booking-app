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
                        <div class="card mb-3">
                            <h5 class="card-header">Branch Management</h5>

                            <hr class="my-0" />

                            <div class="card-body">
                                <form method="POST" action={{ "/$slug/dashboard/branches/$branch->id" }}>
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Branch Name</label>
                                            <input class="form-control" placeholder="Branch Name" type="text"
                                                name="name" value="{{ $branch->name }}" autocomplete="off"
                                                autofocus />
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class=" col mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">INA (+62)</span>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="8XXX XXXX XXX" value="{{ $branch->phone }}" />
                                            </div>
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Province</label>
                                            <select class="form-select text-capitalize" id="province_id">
                                                <option selected>{{ $branch->city->province->name }}</option>
                                                @foreach ($provinces as $province)
                                                    <option value={{ $province->id }}>
                                                        {{ $province->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col mb-3">
                                            <label class="form-label">City</label>
                                            <select class="form-select text-capitalize" name="city" id="city">
                                                <option value={{ $branch->city->id }} selected>
                                                    {{ $branch->city->name }}
                                                </option>
                                                @foreach ($cities as $city)
                                                    <option value={{ $city->id }}>
                                                        {{ $city->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col mb-3">
                                            <label class="form-label">Admin</label>
                                            <select class="form-select text-capitalize" name="admin" id="city">
                                                <option selected>Choose...</option>
                                                @foreach ($admins as $admin)
                                                    <option value={{ $admin->id }}>
                                                        {{ $admin->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="state" class="form-label">Address</label>
                                        <input class="form-control" type="text" name="address" placeholder="Surabaya"
                                            autocomplete="off" value="{{ $branch->address }}" />
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        @foreach (['instagram', 'twitter', 'facebook', 'tiktok'] as $platform)
                                            <div class="col mb-3">
                                                <label for="{{ $platform }}" class="form-label">
                                                    {{ ucfirst($platform) }} <small>(optional)</small>
                                                </label>
                                                <input class="form-control" type="text"
                                                    name="socmed[{{ $platform }}]"
                                                    placeholder="{{ ucfirst($platform) }}" autocomplete="off"
                                                    value="{{ $branch->social_medias->where('name', $platform)->first()?->username }}" />
                                                @error('socmed.{{ $platform }}')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">
                                            Update Branch
                                        </button>
                                        <a href={{ url("/$slug/dashboard/branches") }}
                                            class="btn btn-outline-secondary">
                                            Cancel
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Content --}}
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</x-layouts.dashboard-layout>
