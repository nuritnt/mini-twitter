<!-- extent layout master.blade.php -->
@extends('layouts.master')

<!-- sets value for section title to "Mini Twitter" -->
<!-- section title is used in messages.blade.php -->
@section('title', 'Mini Twitterli')

<!-- starts section content, defines some html for section and end content -->
<!-- puts value for section title to "Mini Twitter"  -->
<!-- section content is used in messages.blade.php -->
@section('content')

<h2>Create new message: </h2>

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">

    <!-- this blade directive is necessary for all forms posts somewhere in beweeen the formtags -->

    @csrf
    <button type="submit">Submit</button>
</form>



<h2>Recent messages:</h2>

<!-- loops through the $messages array -->
<!-- this blade template gets the array from the MessageController.php -->
<!-- for each element of the loop (which we call $message) -->
<!-- we print the properties (titles, content, created_at) in an <li> element -->
<ul>
@foreach ($messages as $message)
    <li>
        <span>
            <a href="/message/{{$message->id}}">{{ $message->title }}:</a>
        </span><br>
        <span>{{ $message->content }}</span><br>
        <span>{{ $message->created_at->diffForHumans() }}</span><br>
    </li>
@endforeach
</ul>

@endsection
