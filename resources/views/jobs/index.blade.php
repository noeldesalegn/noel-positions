<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

{{--            <form class="mt-6">--}}
{{--                <input type="text" placeholder="web Developer..." class='rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl'>--}}
{{--            </form>--}}
            <x-forms.form class="mt-6" action="/search">
                <x-forms.input :label="false" name="q" placeholder="web Developer..." />
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading> Featured Jobs </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                @foreach( $featuredJobs as $job )
                    <x-job-card :$job />
            @endforeach
        </section>
        <section>
            <x-section-heading> Tags </x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                    {{-- if you prefer you can use this <x-tag :tag="$tag" /> --}}
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading> Recent Jobs </x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach( $jobs as $job )
                    <x-job-card-wide :$job />
                @endforeach

            </div>
        </section>
    </div>
</x-layout>
