@if( session( 'success' ) )

    <div class="light container-small">

        <div class="alert alert-success">
            {{ session( 'success' ) }}
        </div>

    </div>

@elseif( session( 'error' ) )

    <div class="light container-small">

        <div class="alert alert-danger">
            {{ session( 'error' ) }}
        </div>
        
    </div>

@endif

@if ( $errors->any() )

    <div class="light container-small">

        <div class="alert alert-danger">

            <ul>

                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    </div>

@endif