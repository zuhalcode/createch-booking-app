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
                            <form id="formAccountSettings" action={{ url('/dashboard/company') }} method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        placeholder="E-mail" autocomplete="off" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">(+62)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="85461620" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="my-3">
                                    <label for="state" class="form-label">
                                        Instagram
                                    </label>
                                    <input class="form-control" type="text" id="socialmedia" name="socialmedia"
                                        placeholder="Instagram" autocomplete="off" />
                                </div>

                                <div class="my-3">
                                    <label for="state" class="form-label">
                                        Twitter
                                    </label>
                                    <input class="form-control" type="text" id="socialmedia" name="socialmedia"
                                        placeholder="Twitter" autocomplete="off" />
                                </div>

                                <div class="my-3">
                                    <label for="state" class="form-label">
                                        Facebook
                                    </label>
                                    <input class="form-control" type="text" id="socialmedia" name="socialmedia"
                                        placeholder="Facebook" autocomplete="off" />
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">
                                        Save changes
                                    </button>
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
