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
          <input type="search" id="form1" name="search" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>

      </div>


        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</x-app-layout>














