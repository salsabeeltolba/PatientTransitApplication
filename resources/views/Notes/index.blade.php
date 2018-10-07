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
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" style="background: #013E86; color: white;">
                            My Reminders Calendar
                        </div>
                        <br>

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


            <div class="row justify-content-lg-around">
                <form class="form-inline" action="{{ route('notes.store') }}" method="post">
                    {{csrf_field()}}
                    <div class="col">
                        <input class="form-control" type="text" name="newNoteName" placeholder="Enter a new note">
                    </div>

                    <div class="col">
                        <input class="btn btn-success btn-block" margin-top="30px" type="submit" value="Add Note">
                    </div>
                </form>
            </div>
            <br>

            @if (count($storedNotes) > 0)
                <div class="table-responsive-sm">
                <table class="table table-sm table-striped">
                    <thead>
                    <th> Name</th>
                    <th> Edit</th>
                    <th> Delete</th>
                    </thead>

                    <tbody>
                    @foreach ($storedNotes as $storedNotes)
                        <tr>
                            <td>{{ $storedNotes->name }}</td>
                            <td><a href="{{ route('notes.edit', ['notes'=>$storedNotes->id]) }}" class='btn btn-warning'>Edit</a></td>
                            <td>
                                <form action="{{ route('notes.destroy', ['notes'=>$storedNotes->id]) }}" method='post'>
                                    {{ csrf_field() }}
                                    <input type="hidden" name='_method' value='Delete'>

                                    <input type="submit" class='btn btn-danger' value='Delete'>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
                </div>
        </div>

        </div>
    </div>
</body>
</html>