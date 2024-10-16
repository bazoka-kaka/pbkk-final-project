<x-layout>
  <a href="/" class="inline-block text-black ml-4 mt-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4 mt-20">
    <x-card class="p-10">
      <div class="flex items-center justify-center text-center">
        {{-- left --}}
        <div class="w-1/2 flex items-center">
          <img class="w-64 mr-6 rounded-md"
            src="{{$job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png')}}" alt="" />

          <div class="text-left">
            <h3 class="text-3xl">
              {{$job->title}}
            </h3>

            <div class="text-lg my-2">
              <i class="fa-regular fa-clock"></i> {{$job->duration}} months
            </div>

            <x-job-tags :tagsCsv="$job->tags" />
          </div>
        </div>
        {{-- right --}}
        <div class="w-1/2 text-left">
          <h3 class="text-3xl font-bold mb-4">Job Description</h3>
          <div class="text-lg space-y-6">
            {{$job->description}}

            <a href="mailto:{{$job->email}}"
              class="block bg-blue-600 text-white mt-6 py-2 rounded-xl hover:opacity-80 text-center"><i
                class="fa-solid fa-envelope"></i>
              Contact Recruiter</a>

            {{-- <a href="{{$job->website}}" target="_blank"
              class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
              Visit Website</a> --}}
          </div>
        </div>
      </div>
    </x-card>

    {{-- <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/jobs/{{$job->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card> --}}
  </div>
</x-layout>