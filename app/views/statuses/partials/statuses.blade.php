@forelse($statuses as $status)
    @include('statuses.partials.status')
@empty
    <p>This user hasn't yet posted statuses</p>
@endforelse