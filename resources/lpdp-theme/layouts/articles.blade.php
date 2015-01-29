@extends('press::layouts.base')

@section('content')

	{!! $content['html'] !!}

	<p class="published-date">
		Publié le {{ strftime("%A %e %B %Y", $meta->dateTime()->getTimestamp()) }}
	</p>

	@if($content['footnotes_html'])
	<div class="footnotes">
		<div class="footnotes-sep1"></div>
		<div class="footnotes-sep2"></div>
		{!! $content['footnotes_html'] !!}
	</div>
	@endif
@stop
