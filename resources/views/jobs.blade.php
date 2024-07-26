<x-layout>
	<x-slot:heading>
		Jobs Listing
	</x-slot:heading>

	<div class="space-y-4">

		@foreach ($jobs as $job)
		<a class="block px-4 py-6 border border-gray-200 rounded-lg" href="/jobs/{{ $job['id'] }}">
			<div class="font-bold text-blue-500">
				{{ $job->employer->name }}
			</div>
			<div>
				<strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
			</div>
		</a>
		@endforeach
	</div>

</x-layout>