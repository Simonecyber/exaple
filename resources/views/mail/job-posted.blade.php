<div>
	<h2>{{ $job->title; }}</h2>
	Congrats! Your job is now live on our website.
	<a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listing</a>
</div>