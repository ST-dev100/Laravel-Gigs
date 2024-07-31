
<x-layout>
@include('partials._hero')
@include('partials._search')


<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    {{-- <h1>{{ $listing }}</h1> --}}
    @if (count($jobs)==0)
        <h1>No listing</h1>
    @endif

    @foreach ($jobs as $job)
        {{-- <a href="/listings/{{$job['id']}}"><h2>{{ $job['title'] }}</h2></a> 
        <h2>{{ $job['tags'] }}</h2>
        <br>
        <p>{{ $job['description'] }}</p> --}}
         <!-- Item 1 -->
         <x-listing-card :job="$job"/>
    @endforeach
    <div class="mt-6 p-4">
        {{$jobs->links()}}
    </div>
</div>
</x-layout>
