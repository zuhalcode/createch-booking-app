<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>

    <!-- Main Start -->
    <main class="main">
        <!-- 404 Section Start -->
        <section class="page-not-found">
            <div class="container">
                <div class="row gx-md-2 gx-0 gy-md-0 gy-3">
                    <div class="col-md-8 m-auto">
                        <div class="page-image">
                            <img src="https://themes.pixelstrap.com/oslo/assets/images/inner-page/404.svg"
                                class="img-fluid blur-up lazyload" alt="" />
                        </div>
                    </div>

                    <div class="col-md-8 mx-auto mt-md-5 mt-3">
                        <div class="page-container pass-forgot">
                            <div>
                                <h2>page not found</h2>
                                <p class="font-md">The page you are looking for doesn't exist or an other error
                                    occurred. Go back, or head over to choose a new direction.</p>
                                {{-- <a href={{ url("/$slug") }} class="btn-solid mb-line">Back Home Page <i
                                        class="arrow"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 Section End -->
    </main>
    <!-- Main End -->
</x-layouts.app-layout>
