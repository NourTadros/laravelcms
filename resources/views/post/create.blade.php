@extends('layout.app')



@section('content')


<form method="post" action="/posts">
<input type="text" name="title" placeholder="Enter title">
<input type="submit"name="submit">

</form>


@yield('footer')