<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <div class="container">

        <div class="text-center my-5">
            {{ $todo->name }}
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-def">
                    <div class="card-header">
                        Details
                    </div>
                </div>
        
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
        </div>

    </div>

</body>
</html>