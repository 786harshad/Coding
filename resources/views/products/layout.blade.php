<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    
<div class="container">
    <h4><a href="/dashboard" class="dashboard-header">Dashboard</a></h4>
    @yield('content')
</div>
    
</body>
</html>