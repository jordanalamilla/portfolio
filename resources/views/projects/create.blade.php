@extends( 'layouts/app' )

@section( 'content' )

<div class="light container-small">

    <div id="create">

        <form method="POST"
              action="/projects"
              enctype="multipart/form-data">

            <!--CSRF-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!--TITLE-->
            <input type="text" name="title" placeholder="Title">

            <!--DESCRIPTION-->
            <textarea id="editor" name="description" placeholder="description"></textarea>

            <!--TECH-->
            <input type="text" name="tech" placeholder="Tech">

            <!--LINK_LIVE-->
            <input type="text" name="link_live" placeholder="Link to Live Project">

            <!--LINK_GITHUB-->
            <input type="text" name="link_github" placeholder="Link to Project on Github">

            <!--IMAGE-->
            <label for="image">Project Image</label>
            <input type="file" name="image">

            <!--GIF-->
            <label for="gif">Site Walkthrough Gif</label>
            <input type="file" name="gif">

            <input type="submit" value="Create">

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