<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Recover My Password</h1>

                <form method="POST" action="{{ route('forget.password.store') }}" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" required />
                    <x-form.button>Recover Password</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
