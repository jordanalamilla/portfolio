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
                        <td><a href="/projects/{{ $project->id }}/edit">edit</a></td>

                        <td>

                            <form method="POST"
                                action="/projects/{{ $project->id }}">

                                <!--DELETE SPOOF-->
                                <input type="hidden" name="_method" value="DELETE">

                                <!--CSRF-->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="submit" value="X">

                            </form>

                        </td>
                    </tr>

                @endforeach

            @endif

        </table>

        <a class="button" href="/projects/create">Add New Project</a>

    </div>

</div>

@endsection