<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pesan Dari {{$data['name']}} </div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <h3>{{$data['email']}}</h3>
                        </div>
                        <h3>{{$data['message']}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
