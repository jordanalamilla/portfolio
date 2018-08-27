@extends( 'layouts/app' )

@section( 'content' )

<div class="light container-small">
        
    <div id="project">

        <!--WALKTHROUGH GIF-->
        <a href="{{ $project->link_live }}"
           target="_blank">

            <img class="untouchable"
                 src="/storage/img/projects/gif/{{ $project->gif }}"
                 alt="{{ $project->title }} walkthrough animated gif.">
        </a>

        <!--TITLE-->
        <h1>{{ $project->title }}</h1>

        <!--DESCRIPTION-->
        <div id="project-description">
            {!! $project->description !!}
        </div>

        <!--TECHNOLOGY USED-->
        <p id="project-tech">Made with: {{ $project->tech }}</p>

        <!--LIVE WEBSITE LINK-->
        <a class="button"
           href="{{ $project->link_live }}"
           target="_blank">View Live Project</a>

        <!--LINK TO CODE ON GITHUB-->
        <a class="button"
           href="{{ $project->link_github }}"
           target="_blank">View on Github</a>

    </div>

</div>

@endsection