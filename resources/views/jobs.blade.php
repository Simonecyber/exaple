<x-layout>
	<x-slot:heading>
		Jobs Listing
	</x-slot:heading>

	<ul>

		@foreach ($jobs as $job)
		<li>
			<a class="text-blue-400 hover:underline" href="/jobs/{{ $job['id'] }}">
				<strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
			</a>
		</li>
		@endforeach
	</ul>

</x-layout>