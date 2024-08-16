<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex- flex-col- items-center pt-16 pb-16">

        <p>This is a sample data with search, sorting and filter, this works well with other control panels when force https is enable</p>
        <div class="mt-8 ">

            <x-splade-table class="mt-5" :for="$data">

            </x-splade-table>

        </div>
    </x-panel>
</x-layout>
