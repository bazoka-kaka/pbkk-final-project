@props(['job'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block object-contain rounded-lg"
      src="{{$job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/jobs/{{$job->id}}">{{$job->title}}</a>
      </h3>
      <p class="mt-2">{{ \Illuminate\Support\Str::limit($job->description, $limit=25, $end='...') }}</p>
      <div class="text-lg mt-2">
        <i class="fa-regular fa-clock"></i> {{$job->duration}} months
      </div>
      <x-job-tags :tagsCsv="$job->tags" />
      {{-- <div class="text-lg mt-4">
        <i class="fa-regular fa-clock"></i> {{$job->user_id}} months
      </div> --}}
    </div>
  </div>
</x-card>