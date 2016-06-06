@extends('layout')

@section('content')
     <div class="container">
        <div class="content">
        	@foreach ($users as $user)
        	<div>
           		{{ $user->fname }}
        	</div>
        	@endforeach
        </div>
    </div>
@stop