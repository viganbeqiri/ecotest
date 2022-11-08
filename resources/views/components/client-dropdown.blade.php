<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentClient) ? ucwords($currentClient->name) : 'Clients' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/?{ http_build_query(request()->except('client', 'page')) }}"
                     :active="request()->routeIs('home')">All
    </x-dropdown-item>

    @foreach($clients as $client)
        <x-dropdown-item
            href="/?client={{ $client->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->fullUrlIs("*?client={$client->slug}*")'
        >{{ ucwords($client->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>


