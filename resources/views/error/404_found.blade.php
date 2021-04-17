@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')


    <section id="error-page">
        <div class="image-center">
            <img src="{{url('theme_light\assets\image\Asset2404graphic.svg')}}" alt="">
        </div>
        <br>
        <br>

        <h1>Hmmm.. We didn't find anything</h1>
        <h3>Try find something else for your new project</h3>

        <br>


        <form class="example" action="/action_page.php" style="margin:auto;max-width:50%">
            <input type="text" placeholder="Projects you are looking for.." name="search2">
            <button type="submit">Search</button>
        </form>

        <br>

        <p>Or go back to <a href="#">Home</a></p>
    </section>

@endsection







