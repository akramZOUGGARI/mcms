<!-- app/views/Items/create.blade.php -->

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
        <li><a href="{{ URL::to('items') }}">View All Items</a></li>
        <li><a href="{{ URL::to('items/create') }}">Create a Item</a>
    </ul>
</nav>

<h1>Create a Item</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::open(array('url' => 'items')) }}
<table class="table table-striped table-bordered">
   
        <tr>
            <td>{{ Form::label('title', 'title') }}</td>
            <td>{{ Form::input('text', 'title') }}</td>
        </tr>
         <tr>
            <td>{{ Form::label('content', 'content') }}</td>
            <td>{{ Form::input('textarea', 'content') }}</td>
        </tr>
         <tr>
            <td>{{ Form::label('video_code', 'video_code') }}</td>
            <td>   {{ Form::input('text', 'video_code') }}</td>
        </tr>
         <tr>
            <td>{{ Form::label('category', 'category') }}</td>
            <td> {{ Form::select('category', [
               '1' => 'info',
               '2' => 'sport',
               '3' => 'diver']
            ) }}
            </td>
        </tr>
         <tr>
            <td>{{ Form::label('source', 'source') }}</td>
            <td>   {{ Form::select('source', [
               'youtube' => 'youtube']
            ) }}
            </td>
        </tr>
</table>
{{ Form::submit('Create the Item!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>
</body>
</html>