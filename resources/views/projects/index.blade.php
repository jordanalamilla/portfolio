@extends( 'layouts/app' )

@section( 'content' )

<div class="light container-small">

    <div id="work">

        @if( !count( $projects ) )

            <p>No projects.</p>
    
        @else

            @foreach( $projects as $project )

                <img class="untouchable"
                    src="/storage/img/projects/image/{{ $project->image }}"
                    alt="{{ $project->title }} by Jordan Alamilla">
        
                <div class="project-info untouchable">

                    <div class="project-title">

                        <a href="/projects/{{ $project->id }}">
                            <h2>{{ $project->title }}</h2>
                        </a>
                        
                    </div>

                    <div class="light-text project-tech"><p>{{ $project->tech }}</p></div>

                </div>

            @endforeach

        @endif

    </div>

</div>

@include( 'contact' )

@endsection