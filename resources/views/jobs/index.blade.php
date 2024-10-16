<x-layout>
  @include('partials._hero')

  @auth
    <a href="/jobs/create" class="bg-green-500 text-white font-semibold py-2 flex items-center gap-2 px-5 rounded-lg hover:bg-green-400 transition duration-200 w-fit mr-16 ml-auto"><i class="fas fa-plus"></i> Post Job</a>
  @endauth

  <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-16 mt-4">
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
