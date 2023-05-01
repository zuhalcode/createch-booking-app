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
                                data-bs-target="#modalAdmin">
                                Tambah Admin Perusahaan
                            </button>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Company</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @php $count = 1 @endphp
                                        @foreach ($users as $user)
                                            <tr class="table-dark">
                                                <td>{{ $count }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->company->name }}</td>
                                                <td><span class="badge bg-label-success me-1">Active</span></td>
                                                <td>
                                                    <i class="bx bx-trash me-1" style="cursor: pointer"
                                                        data-bs-toggle="modal" data-bs-target="#modalDeleteAdmin"></i>
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

        <!-- Modal Add Admin -->
        <div class="modal fade" id="modalAdmin" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form class="modal-content" method="POST" action={{ '/dashboard/administrators' }}>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Tambah Admin Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" />
                            </div>

                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Nama" />
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">No WhatsApp</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                                    <input type="text" name="phone" class="form-control phone-mask"
                                        placeholder="0851 2345 2678" aria-label="0851 2345 2678"
                                        aria-describedby="basic-icon-default-phone2" />
                                </div>
                            </div>

                            <div class="form-password-toggle mb-3">
                                <label class="form-label" for="basic-default-password12">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="basic-default-password12"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="basic-default-password2" />
                                    <span id="basic-default-password2" class="input-group-text cursor-pointer"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Tambah Admin</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="modalDeleteAdmin" tabindex="-1" aria-hidden="true">
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
</x-layouts.dashboard-layout>
