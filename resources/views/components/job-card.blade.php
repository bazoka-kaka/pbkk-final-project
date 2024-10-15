@props(['job'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block object-contain"
      src="{{$job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/jobs/{{$job->id}}">{{$job->title}}</a>
      </h3>
      <x-job-tags :tagsCsv="$job->tags" />
      <div class="text-lg mt-4">
        <i class="fa-regular fa-clock"></i> {{$job->duration}} months
      </div>
      {{-- <div class="text-lg mt-4">
        <i class="fa-regular fa-clock"></i> {{$job->user_id}} months
      </div> --}}
    </div>
  </div>
</x-card>