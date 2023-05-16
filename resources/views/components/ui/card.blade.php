<div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
        <img class="card-img-top" src={{ url($product->image) }} alt="Card image cap" />
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">
                {{ Str::of($product->description)->words(12, '...') }}
            </p>
            <p class="btn btn-outline-primary">
                <a class="text-reset" href={{ url("/$slug/dashboard/products/$product->id/edit") }}>
                    Edit
                </a>
            </p>
            @if (Str::contains(request()->url(), 'dashboard/branches'))
                <p class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalConfirmDeleteOnBranch">
                    Delete
                </p>
            @else
                <p class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalConfirmDelete">
                    Delete
                </p>
            @endif
        </div>
    </div>
    <!-- Vertically Centered Modal -->

    <!-- Modal -->
    <div class="modal fade" id="modalConfirmDelete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">
                        Are you sure you want to delete this product?
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
                    <form action="{{ url('/dashboard/products', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete On Branch -->
    <div class="modal fade" id="modalConfirmDeleteOnBranch" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">
                        Confirm removal of product from current branch?
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">This action cannot be undone.</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <form action="{{ url("/$slug/dashboard/products/branches/" . request()->route('branchId')) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value={{ $product->id }} name="product_id">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
