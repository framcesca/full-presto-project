<x-layout>
    <x-slot name='title'>Crea annuncio</x-slot>

    {{-- Container Fluid --}}
    <div class="container-fluid bg-container-fluid">

        {{-- Container Margin --}}
        <div class="container">

            {{-- Wrapping Container Form --}}
            <div class="container-ad-form">
                <h1 class="text-center mb-5">Crea il tuo annuncio</h1>

                <livewire:ad-form></livewire:ad-form>

            </div> {{-- End Wrapping Container Form --}}

        </div> {{-- End Container Fluid --}}

    </div> {{-- End Container Fluid --}}

</x-layout>