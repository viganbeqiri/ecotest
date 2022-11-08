<x-layout>
    @include('opportunities._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($opportunities->count())
            <x-opportunities-grid :opportunities="$opportunities"/>

            {{ $opportunities->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later</p>
        @endif
    </main>
</x-layout>
