@extends( 'layout/app' )

@section( 'content' )

<div class="light container-small">
        
    <div id="project">

        <!--WALKTHROUGH GIF-->
        <img src="/storage/img/projects/gif/{{ $project->gif }}"
             alt="{{ $project->title }} walkthrough animated gif.">

        <!--TITLE-->
        <h1>{{ $project->title }}</h1>

        <!--DESCRIPTION-->
        {!! $project->description !!}

        <!--TECHNOLOGY USED-->
        <p>{{ $project->tech }}</p>

        <!--LIVE WEBSITE LINK-->
        <a href="{{ $project->link_live }}"
           target="_blank">View Live Project</a>

        <!--LINK TO CODE ON GITHUB-->
        <a href="{{ $project->link_github }}"
           target="_blank">View on Github</a>

    </div>

</div>

@endsection