<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Notes to Self</title>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">
    <div class="col-md-offset-2 col-xs-8">
        <div class="row">
            <h3> Notes to Self </h3>
        </div>
        {{-- Success Alert --}}
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success:</strong> {{ Session::get('success') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {{-- If the page has any errors passed to it --}}
        @if(count($errors) > 0)

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Errors:</strong>

                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach
                </ul>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

        <div class="row">
            <form action="{{ route('notes.update', [$notesUnderEdit->id]) }}" method='POST'>
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>

                <div class="form-group">
                    <input type="text" name='updatedNoteName' class='form-control input-lg' value='{{ $notesUnderEdit->name }}'>
                </div>

                <div class="form-group">
                    <input type="submit" value='Update Note' class='btn btn-success btn-lg'>
                    <a href="{{ route('notes.index')}}" class='btn btn-danger btn-lg pull-right'>Go Back</a>
                </div>
            </form>
        </div>


    </div>
</div>
</body>
</html>


