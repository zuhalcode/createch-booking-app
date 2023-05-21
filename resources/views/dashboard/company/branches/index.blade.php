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
                        <!-- Contextual Classes -->

                        <div class="card">
                            <h5 class="card-header">List Branch</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Instagram</th>
                                            <th>Twitter</th>
                                            <th>Facebook</th>
                                            <th>TikTok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @php $count = 1 @endphp
                                        @foreach ($branches as $branch)
                                            <tr class="table-dark cursor-pointer">
                                                <td>{{ $count }}</td>
                                                <td>{{ $branch->name }}</td>
                                                <td>{{ $branch->phone }}</td>
                                                <td>{{ $branch->address }}</td>

                                                @foreach (['instagram', 'twitter', 'facebook', 'tiktok'] as $platform)
                                                    <td>
                                                        {{ $branch->social_medias->where('name', $platform)->first()?->username ?? 'NULL' }}
                                                    </td>
                                                @endforeach

                                                <td>
                                                    <a href={{ url("/$slug/dashboard/branches/$branch->id/products") }}
                                                        class="text-reset">
                                                        <i class="bx bx-show-alt me-1"></i>
                                                    </a>
                                                    <a href={{ url("/$slug/dashboard/branches/$branch->id/edit") }}
                                                        class="text-reset">
                                                        <i class="bx bx-edit-alt me-1"></i>
                                                    </a>
                                                    <i class="bx bx-trash me-1" style="cursor: pointer"
                                                        data-bs-toggle="modal" data-bs-target="#modalUserDelete"></i>
                                                </td>
                                            </tr>
                                            @php $count++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Contextual Classes -->
                    </div>
                </div>
            </div>
            {{-- End Content --}}
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>

        <!-- Modal Edit User -->
        <div class="modal fade" id="modalEditBranch" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form class="modal-content" id="formEditBranch" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Edit Branch</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukkan Nama" required />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                        required />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Surabaya"
                                        autocomplete="off" />
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="modalDeleteBranch" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">
                            Are you sure you want to delete this company?
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This action cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <form action="{{ url('/dashboard/administrators') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Layout wrapper -->

</x-layouts.dashboard-layout>
