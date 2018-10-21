<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkiworx</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <div class="card-body">
            <div class="my-5">
                <h1 class="text-center display-4"><strong>Materials Pricelist Report</strong></h1>
                <h4 class="text-center">{{date('F d, Y')}}</h4>
            </div>
            <h5>Price as of: {{date_format(date_create($date),'F d, Y')}}</h5>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materials as $materialKey=>$material)
                    <tr>
                    <th scope="row">{{$materialKey + 1}}</th>
                    <td>{{$material->strMaterialName}}</td>
                    <td>{{$material->strUnit}}</td>
                    <td>{{$material->decPrice}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>