<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>



    <form action="{{route('search.results')}}" method="GET">
        @csrf
        <div class="form-group">

    <div class="input-group">
        <div class="form-outline">
          <input type="text" id="form1" name="search" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>

      </div>
    @if($posts->isNotEmpty())
        @foreach ($posts as $post)
            <div class="post-list">
            <p>Title: {{ $post->title }}</p>
            <p>Content: {{ $post->content }}</p><br>
        </div>
        @endforeach
        @else
            <div>
            <h2>No posts found</h2>
            </div>
    @endif


        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</x-app-layout>














