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
                            <h5 class="card-header">List Perusahaan</h5>
                            <button type="button" class="btn btn-primary w-25 mx-2" data-bs-toggle="modal"
                                data-bs-target="#modalCompany">
                                Tambah Perusahaan Baru
                            </button>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Admin</th>
                                            <th>Phone</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @php $count = 1 @endphp
                                        @foreach ($companies as $company)
                                            <tr class="table-dark">
                                                <td>{{ $count }}</td>
                                                <td>{{ $company->name }}</td>
                                                <td>{{ $company->email }}</td>
                                                @if ($company->users->where('role_id', 2)->first())
                                                    <td>{{ $company->users->where('role_id', 2)->first()->name }}</td>
                                                @else
                                                    <td>None</td>
                                                @endif

                                                <td>{{ $company->phone }}</td>
                                                <td>{{ $company->created_at }}</td>
                                                <td><span class="badge bg-label-success me-1">Active</span></td>
                                                <td>
                                                    <i class="bx bx-edit-alt me-1"
                                                        onclick="showModalEditCompany('{{ $company->id }}')"
                                                        style="cursor: pointer"></i>
                                                    <i class="bx bx-trash me-1" style="cursor: pointer"
                                                        data-bs-toggle="modal" data-bs-target="#modalCompanyDelete"></i>
                                                </td>
                                            </tr>
                                            @php $count++ @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Contextual Classes -->
                    </div>
                    {{-- End Content --}}
                </div>
                <!-- / Layout page -->
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Modal Add Company -->
        <div class="modal fade" id="modalCompany" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form class="modal-content" method="POST" action={{ "/$slug/dashboard/companies" }}>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Masukkan Nama Perusahaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <input type="text" name="name" id="company-name" class="form-control"
                                    placeholder="Masukkan Nama" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah Perusahaan</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Edit Company -->
        <div class="modal fade" id="modalEditCompany" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form class="modal-content" id="formEditCompany" method="POST" action=''>
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Nama Perusahaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col mb-0">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="xxxx@xxx.xx" />
                            </div>
                            <div class="col mb-0">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control phone-mask"
                                    placeholder="0851 2379 9894" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col mb-3">
                                <label class="form-label">Admin</label>
                                <select class="form-select" name="user_id">
                                    <option selected>Choose...</option>
                                    @foreach ($admins as $admin)
                                        <option value={{ $admin->id }}>{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit Perusahaan</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="modalCompanyDelete" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Are you sure you want to delete this company?
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This action cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>

                        <form action="{{ url("/$slug/dashboard/companies", $company->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard-layout>
