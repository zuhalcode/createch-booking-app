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
                        <h5 class="card-header">Home Page Detail</h5>
                        <hr class="my-0" />

                        <div class="card-body">
                            <form id="formAccountSettings" action={{ url('/dashboard/landing-page') }} method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="input-bg" class="form-label">Cover Image</label>
                                    <input class="form-control" type="file" id="input-bg" name='image'
                                        onchange="showImagePreview('input-bg', 'uploaded-bg')" />
                                </div>

                                <div class="mb-3">
                                    <img alt="bg-cover" src={{ $cover->image }} class="d-block rounded w-25 d-none"
                                        id="uploaded-bg" />
                                </div>

                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading 1</label>
                                    <input class="form-control" type="text" name="first_heading_text"
                                        placeholder="Heading 1" autocomplete="off"
                                        value={{ $cover->first_heading_text }} />
                                </div>

                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading 2</label>
                                    <input class="form-control" type="text" name="second_heading_text"
                                        placeholder="Heading 2" autocomplete="off"
                                        value={{ $cover->second_heading_text }} />
                                </div>

                                <div class="mb-3">
                                    <label for="about" class="form-label">Short Desc</label>
                                    <textarea class="form-control" type="text" name="short_desc" placeholder="Short Desc" autocomplete="off">{{ $cover->short_desc }}</textarea>
                                </div>



                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">
                                        Update Changes
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
