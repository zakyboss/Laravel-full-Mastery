<x-layout> 
   
    <x-slot:heading> <h1>Below Are the Available Jobs</h1></x-slot:heading>
  @foreach ($jobs as $job)
          <a href="job{{}}"><h3>{{ $job['Description'] }}  {{ $job['Salary'] }}    {{ $job['YOE'] }}</h3></a>

  @endforeach
</x-layout>