@extends( 'layouts/app' )

@section( 'content' )

    <!--LANDING-->
    <div class="light container-small">
        
        <div id="landing">

            <div id="landing-image">
                <img class="untouchable"
                        src="images/computer.gif"
                        alt="An animated gif image of code being written on a computer">
            </div>
            
            <div id="landing-intro">
                
                <h1>Jordan Alamilla: Web Developer</h1>
                <p class="light-text">Hi there, my skills include both front and back end technologies, making me a versatile addition to any team. I'm passionate about creating optimized code and simple, yet functional design.</p>
                
            </div>
            
            <div class="next-section">
                
                <p><a href="#work">View My Work</a></p>
                <p class="untouchable">&darr;</p>
                
            </div>

        </div>
        
    </div>

    <!--WORK-->

    <div class="light container-small">

        <div id="work">

            @if( !count( $projects ) )

                <p>No projects.</p>
        
            @else

                @foreach( $projects as $project )

                    <div class="project">

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

                    </div>

                @endforeach

            @endif

        </div>

    </div>

@include( 'contact' )

@endsection