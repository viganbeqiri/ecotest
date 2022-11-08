@props(['opportunities'])
<x-opportunity-featured-card :opportunity="$opportunities[0]"/>

@if ($opportunities->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($opportunities->skip(1) as $opportunity)
            <x-opportunity-card
                :opportunity="$opportunity"
                class=" {{ $loop->iteration <3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif
