@extends( 'layouts/app' )

@section( 'content' )

<div class="light container-small">
        
    <div id="dash">

        <h1>Dashboard</h1>

        <table>

            @if( !count( $projects ) )

                <p>No projects.</p>

            @else

                @foreach( $projects as $project )

                    <tr>
                        <td><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></td>
                        <td><a href="/projects/{{ $project->id }}/edit"><i class="fas fa-pencil-alt"></i></a></td>

                        <td>

                            <button class="delete-button"
                                    data-id="{{ $project->id }}"
                                    data-title="{{ $project->title }}"><i class="fas fa-times"></i></button>

                        </td>
                    </tr>

                @endforeach

            @endif

        </table>

        <a class="button" href="/projects/create">Add New Project</a>

    </div>

</div>

@endsection