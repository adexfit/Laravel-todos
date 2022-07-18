<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>Todos</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('css/app.css')}} ">
</head>
<body>
    <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href=" /">Todos App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/todos">Todos <span class="sr-only">(current)</span></a>
                        </li> 

                        <li class="nav-item active">
                            <a class="nav-link" href="/new-todos">Create todos <span class="sr-only">(current)</span></a>
                        </li>
                    
                    </ul>
                    
                </div> 
                
                </nav>

        @yield('content')
    </div>
</body>
</html>