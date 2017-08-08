<!-- app/views/items/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('items') }}">Item Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('items') }}">View All items</a></li>
        <li><a href="{{ URL::to('items/create') }}">Create a Item</a>
    </ul>
</nav>

<h1>All the items</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
            <td>Category</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $value)
        <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->content }}</td>
            <td>{{ $value->id_category }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                 {{ Form::open(array('url' => 'items/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Item', array('class' => 'btn btn-warning')) }}
                 {{ Form::close() }}

                <!-- delete the Item (uses the destroy method DESTROY /items/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the Item (uses the show method found at GET /items/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('items/' . $value->id) }}">Show this Item</a>

                <!-- edit this Item (uses the edit method found at GET /items/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('items/' . $value->id . '/edit') }}">Edit this Item</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>