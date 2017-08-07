!-- app/views/nerds/show.blade.php -->

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
        <li><a href="{{ URL::to('nerds') }}">View All Items</a></li>
        <li><a href="{{ URL::to('nerds/create') }}">Create a Item</a>
    </ul>
</nav>

<h1>Showing {{ $item->title }}</h1>

    <div class="jumbotron text-center">
      
        <p>
            <strong>Title:</strong> {{ $item->title }}<br>
        </p>
    </div>

</div>
</body>
</html>