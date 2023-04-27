<x-layouts.dashboard-layout>
    @if (session('success'))
        <x-ui.toast type="bg-success">{{ session('success') }}</x-ui.toast>
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
                        <div class="row mb-5">
                            @foreach ($products as $product)
                                <x-ui.card :product="$product" />
                            @endforeach
                        </div>
                        <!--/ Contextual Classes -->
                    </div>
                </div>

                {{-- End Content --}}
            </div>
            <!-- / Layout page -->

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->
    </div>
</x-layouts.dashboard-layout>
