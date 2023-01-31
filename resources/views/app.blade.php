<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 Livewire CRUD (Create, Read, Update, Delete)</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel 9 Livewire</a>
        </div>
    </nav>
 
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Laravel 9 Livewire CRUD (Create, Read, Update, Delete)</h2>
                    </div>
                </div>
            </div>
        </div>
        <div>


            @livewire('contact-create')
            @livewire('contact-index')

        </div>
    </div>
     
    @livewireScripts
</body>
</html>