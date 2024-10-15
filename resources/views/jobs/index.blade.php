<x-layout>
  @if (!Auth::check())
    @include('partials._hero')
  @endif

  <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-16">

    @unless(count($jobs) == 0)

    @foreach($jobs as $job)
    <x-job-card :job="$job" />
    @endforeach

    @else
    <p>No jobs found</p>
    @endunless

  </div>

  <div class="mt-6 p-4">
    {{$jobs->links()}}
  </div>
</x-layout>
