@extends('layouts.admin')

@section('title', 'Discounts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-dark">Discounts</h1>
    <a href="{{ route('admin.discounts.create') }}" class="btn btn-success shadow-sm">Create discount</a>
</div>

<!-- Stats -->
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <a href="{{ route('admin.discounts') }}" class="text-decoration-none">
            <div class="card border shadow-sm p-3 text-center h-100 {{ !request('status') ? 'border-primary bg-primary bg-opacity-10' : '' }}">
                <div class="h3 fw-bold text-dark mb-0">{{ $total }}</div>
                <div class="small text-muted text-uppercase tracking-wide mt-1">Total</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-md-3">
        <a href="{{ route('admin.discounts', ['status' => 'active']) }}" class="text-decoration-none">
            <div class="card border shadow-sm p-3 text-center h-100 {{ request('status') == 'active' ? 'border-success bg-success bg-opacity-10' : '' }}">
                <div class="h3 fw-bold text-success mb-0">{{ $active }}</div>
                <div class="small text-muted text-uppercase tracking-wide mt-1">Active</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-md-3">
        <a href="{{ route('admin.discounts', ['status' => 'expired']) }}" class="text-decoration-none">
            <div class="card border shadow-sm p-3 text-center h-100 {{ request('status') == 'expired' ? 'border-secondary bg-secondary bg-opacity-10' : '' }}">
                <div class="h3 fw-bold text-secondary opacity-50 mb-0">{{ $expired }}</div>
                <div class="small text-muted text-uppercase tracking-wide mt-1">Expired</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-md-3">
        <a href="{{ route('admin.discounts', ['status' => 'inactive']) }}" class="text-decoration-none">
            <div class="card border shadow-sm p-3 text-center h-100 {{ request('status') == 'inactive' ? 'border-secondary bg-secondary bg-opacity-10' : '' }}">
                <div class="h3 fw-bold text-secondary opacity-50 mb-0">{{ $inactive }}</div>
                <div class="small text-muted text-uppercase tracking-wide mt-1">Inactive</div>
            </div>
        </a>
    </div>
</div>

<div class="card border shadow-sm mb-4">
    <!-- Toolbar -->
    <div class="card-header bg-light border-bottom p-3 d-flex gap-3">
        <div class="flex-grow-1">
             <form action="{{ route('admin.discounts') }}" method="GET">
                 <!-- Preserve other filters -->
                 @foreach(request()->except(['search', 'page']) as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                 @endforeach
                 <div class="input-group input-group-sm">
                     <span class="input-group-text bg-white border-end-0 text-muted"><i class="fas fa-search"></i></span>
                     <input type="text" name="search" value="{{ request('search') }}" placeholder="Search discounts" class="form-control border-start-0 shadow-none">
                 </div>
             </form>
        </div>
        
        <!-- Filter Dropdown -->
        <div class="dropdown">
            <button class="btn btn-white border btn-sm shadow-sm text-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="fas fa-filter me-2"></i> {{ request('type') ? ucfirst(request('type')) : 'All Types' }}
            </button>
            <ul class="dropdown-menu shadow-sm border-0">
                <li><a class="dropdown-item small {{ !request('type') ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['type' => null, 'page' => 1])) }}">All Types</a></li>
                <li><a class="dropdown-item small {{ request('type') == 'percentage' ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['type' => 'percentage', 'page' => 1])) }}">Percentage</a></li>
                <li><a class="dropdown-item small {{ request('type') == 'fixed' ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['type' => 'fixed', 'page' => 1])) }}">Fixed Amount</a></li>
            </ul>
        </div>

        <!-- Sort Dropdown -->
        <div class="dropdown">
            <button class="btn btn-white border btn-sm shadow-sm text-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="fas fa-sort me-2"></i> Sort
            </button>
            <ul class="dropdown-menu shadow-sm border-0 dropdown-menu-end">
                <li><a class="dropdown-item small {{ !request('sort') || request('sort') == 'newest' ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['sort' => 'newest', 'page' => 1])) }}">Newest First</a></li>
                <li><a class="dropdown-item small {{ request('sort') == 'oldest' ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['sort' => 'oldest', 'page' => 1])) }}">Oldest First</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item small {{ request('sort') == 'code_asc' ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['sort' => 'code_asc', 'page' => 1])) }}">Code (A-Z)</a></li>
                <li><a class="dropdown-item small {{ request('sort') == 'code_desc' ? 'active bg-light text-dark fw-bold' : '' }}" href="{{ route('admin.discounts', array_merge(request()->query(), ['sort' => 'code_desc', 'page' => 1])) }}">Code (Z-A)</a></li>
            </ul>
        </div>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 text-secondary">
            <thead class="bg-light text-uppercase small fw-medium text-muted">
                <tr>
                    <th class="px-3 py-3" style="width: 50px;"><div class="form-check"><input type="checkbox" class="form-check-input"></div></th>
                    <th class="px-3 py-3">Discount code</th>
                    <th class="px-3 py-3">Status</th>
                    <th class="px-3 py-3">Discount</th>
                    <th class="px-3 py-3">Valid Period</th>
                    <th class="px-3 py-3 text-end">Used</th>
                    <th class="px-3 py-3 text-end">Actions</th>
                </tr>
            </thead>
            <tbody class="border-top-0">
                @forelse($discounts as $discount)
                <tr class="cursor-pointer" onclick="window.location='{{ route('admin.discounts.edit', $discount->id) }}'">
                    <td class="px-3 py-3" onclick="event.stopPropagation()"><div class="form-check"><input type="checkbox" class="form-check-input" value="{{ $discount->id }}"></div></td>
                    <td class="px-3 py-3">
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-dark">{{ $discount->code }}</span>
                            <span class="small text-muted">
                                @if($discount->products->count() > 0)
                                    {{ $discount->products->first()->title }} 
                                    @if($discount->products->count() > 1) 
                                        + {{ $discount->products->count() - 1 }} more 
                                    @endif
                                @else
                                    All Products
                                @endif
                            </span>
                        </div>
                    </td>
                    <td class="px-3 py-3">
                        @php
                            $status = $discount->computed_status;
                            $badgeClass = match($status) {
                                'active' => 'bg-success bg-opacity-10 text-success',
                                'scheduled' => 'bg-info bg-opacity-10 text-info',
                                'expired' => 'bg-secondary bg-opacity-10 text-secondary',
                                'draft' => 'bg-warning bg-opacity-10 text-warning',
                                'archived' => 'bg-light text-muted border',
                                default => 'bg-secondary bg-opacity-10 text-secondary'
                            };
                        @endphp
                        <span class="badge {{ $badgeClass }} rounded-pill px-2 py-1 fw-medium">
                            {{ ucfirst($status) }}
                        </span>
                    </td>
                    <td class="px-3 py-3 text-dark">
                        {{ $discount->value }}{{ $discount->type == 'percentage' ? '%' : ' AED' }} off
                    </td>
                    <td class="px-3 py-3 text-muted small">
                        {{ $discount->starts_at->format('M d, Y') }} 
                        @if($discount->ends_at)
                            - {{ $discount->ends_at->format('M d, Y') }}
                        @endif
                    </td>
                    <td class="px-3 py-3 text-end">
                        {{ $discount->uses_count }}
                    </td>
                    <td class="px-3 py-3 text-end">
                        <div class="d-flex justify-content-end gap-2" onclick="event.stopPropagation()">
                             <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="btn btn-white btn-sm border-0 text-secondary hover-text-primary p-1"><i class="fas fa-edit"></i></a>
                             
                             <form action="{{ route('admin.discounts.destroy', $discount->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this discount?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-white btn-sm border-0 text-secondary hover-text-danger p-1"><i class="fas fa-trash"></i></button>
                             </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-5 text-muted">No discounts found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="px-3 py-3">
            {{ $discounts->appends(request()->query())->links() }}
        </div>
    </div>
</div>
<style>
    .hover-text-primary:hover { color: var(--bs-primary) !important; }
    .hover-text-danger:hover { color: var(--bs-danger) !important; }
</style>


@endsection
