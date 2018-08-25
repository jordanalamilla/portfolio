@extends( 'layout/app' )

@section( 'content' )

<table>

    @foreach( $projects as $project )

        <tr>
            <td><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></td>
            <td><a href="/projects/{{ $project->id }}/edit">edit</a></td>
            <td>delete</td>
        </tr>

    @endforeach

</table>

<a href="/projects/create">Add New Project</a>

@endsection