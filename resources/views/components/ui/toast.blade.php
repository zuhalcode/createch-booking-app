{{-- Toast --}}
<div class="bs-toast toast fade show {{ $type }} position-absolute" style="top: 10px; right: 20px;" role="alert"
    aria-live="assertive" aria-atomic="true">
    <div class="toast-header ">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">{{ ucfirst($title) }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ $slot }}
    </div>
</div>
{{-- End Toast --}}
