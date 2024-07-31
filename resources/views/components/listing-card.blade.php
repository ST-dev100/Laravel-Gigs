@props(['job'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            {{-- src="images/acme.png" --}}
            src="{{$job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$job['id']}}">{{ $job['title'] }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$job->company}}</div>
            <x-listing-tags :tagsCsv="$job->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$job->location}}
            </div>
        </div>
    </div>
</x-card>
