<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-jet-nav-link href="{{ route('companies') }}" :active="request()->routeIs('companies')">
        {{ __('Companies') }}
    </x-jet-nav-link>
</div>
