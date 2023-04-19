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
                        <!-- Contextual Classes -->

                        <div class="card">
                            <h5 class="card-header">Order Detail</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Invoce ID</th>
                                            <th>Invoce Date</th>
                                            <th>User name</th>
                                            <th>Price</th>
                                            <th>Expires</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr class="table-dark">
                                            <td>1</td>
                                            <td>12 Januari 2023</td>
                                            <td>Barry Hunter</td>
                                            <td>Rp. 23.000</td>
                                            <td>12 Juni 2023</td>
                                            <td><span class="badge bg-label-success me-1">Completed</span></td>
                                            <td>
                                                <i class="bx bx-edit-alt me-1"></i>
                                                <i class="bx bx-trash me-1"></i>
                                            </td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>1</td>
                                            <td>12 Januari 2023</td>
                                            <td>Barry Hunter</td>
                                            <td>Rp. 23.000</td>
                                            <td>12 Juni 2023</td>
                                            <td><span class="badge bg-label-danger me-1">Danger</span></td>
                                            <td>
                                                <i class="bx bx-edit-alt me-1"></i>
                                                <i class="bx bx-trash me-1"></i>
                                            </td>
                                        </tr>
                                        <tr class="table-primary">
                                            <td>1</td>
                                            <td>12 Januari 2023</td>
                                            <td>Barry Hunter</td>
                                            <td>Rp. 23.000</td>
                                            <td>12 Juni 2023</td>
                                            <td><span class="badge bg-label-warning me-1">Warning</span></td>
                                            <td>
                                                <i class="bx bx-edit-alt me-1"></i>
                                                <i class="bx bx-trash me-1"></i>
                                            </td>
                                        </tr>

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
        </x-dashboard-layout>
