<x-layouts.dashboard-layout>
    @if (session('success'))
        <x-ui.toast type="bg-success">
            {{ session('success') }}
        </x-ui.toast>
    @endif

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
                                                <td>{{ $company->user->name }}</td>
                                                <td>{{ $company->phone }}</td>
                                                <td>{{ $company->created_at }}</td>
                                                <td><span class="badge bg-label-success me-1">Active</span></td>
                                                <td>
                                                    <i class="bx bx-edit-alt me-1" id="editCompanyIcon"
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
                <form class="modal-content" method="POST" action={{ '/dashboard/companies' }}>
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
                            </div>

                            {{-- <div class="col mb-3">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="company-slug" readonly />
                            </div> --}}
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
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Masukkan Nama Perusahaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input type="text" name="name" id="nameWithTitle" class="form-control"
                                    placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Email</label>
                                <input type="text" name="email" id="emailWithTitle" class="form-control"
                                    placeholder="xxxx@xxx.xx" />
                            </div>
                            <div class="col mb-0">
                                <label class="form-label" for="basic-default-phone">Phone</label>
                                <input type="text" name="phone" id="basic-default-phone"
                                    class="form-control phone-mask" placeholder="0851 2379 9894" />
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
                        <h5 class="modal-title" id="deleteModalLabel">
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
                        <form action="{{ url('/dashboard/companies', $company->id) }}" method="POST">
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
