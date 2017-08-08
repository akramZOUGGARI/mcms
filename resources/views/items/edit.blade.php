<!-- app/views/Items/edit.blade.php -->

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

<h1>Edit {{ $item->title }}</h1>
<!-- if there are creation errors, they will show here -->

{{ Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PUT')) }}

<div class="jumbotron text-center">
      
        <p>
            <strong>Title:</strong> {{ $item->title }}<br>
            {{ Form::text('title', null, array('class' => 'form-control')) }}
        </p>
        <p>
            <strong>Video:</strong> {{ $item->video_code}}<br>
            {{ Form::text('video_code', null, array('class' => 'form-control')) }}
        </p>
    </div>
    

    {{ Form::submit('Edit the item!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>

</body>
</html>