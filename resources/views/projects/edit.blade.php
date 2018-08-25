@extends( 'layout/app' )

@section( 'content' )

<div class="light container-small">

    <div id="edit">

        <form method="POST"
              action="/projects/{{ $project->id }}"
              enctype="multipart/form-data">

            <!--PUT SPOOF-->
            <input type="hidden" name="_method" value="PUT">

            <!--CSRF-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!--TITLE-->
            <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">

            <!--DESCRIPTION-->
            <textarea id="editor" name="description" placeholder="description">{!! $project->description !!}</textarea>

            <!--TECH-->
            <input type="text" name="tech" placeholder="Tech" value="{{ $project->tech }}">

            <!--LINK_LIVE-->
            <input type="text" name="link_live" placeholder="Link to Live Project" value="{{ $project->link_live }}">

            <!--LINK_GITHUB-->
            <input type="text" name="link_github" placeholder="Link to Project on Github" value="{{ $project->link_github }}">

            <!--IMAGE-->
            <label for="image">Change Project Image</label>
            <input type="file" name="image">

            <!--GIF-->
            <label for="gif">Change Site Walkthrough Gif</label>
            <input type="file" name="gif">

            <input type="submit" value="Update">

            <!--CKEDITOR SCRIPT-->
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => { console.error( error );
                });
            </script>

        </form>

    </div>

</div>

@endsection