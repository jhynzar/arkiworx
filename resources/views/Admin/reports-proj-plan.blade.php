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

            <div class="my-3">
                <h1 class="text-center display-4"><strong>Project Plan Reports</strong></h1>
                <h4 class="text-center">{{date('F d, Y')}}</h4>
            </div>
            
            <div class="m-5">
                    <h6 class="text text-default"> <u>Pending Project Plans</u> </h6>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Client</th>
                                <th scope="col">Engineer (in charge)</th>
                                <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendingProjectSchedules as $projectKey=>$project)
                            <tr>
                                <th scope="row">{{$projectKey + 1}}</th>
                                <td>{{$project->projectDetails->strProjectName}}</td>
                                <td>{{$project->projectDetails->strClientName}}</td>
                                <td>{{$project->projectDetails->strEmployeeFName}}&nbsp;{{$project->projectDetails->strEmployeeMName}}&nbsp;{{$project->projectDetails->strEmployeeLName}}</td>
                                <td>{{$project->projectDetails->strProjectLocation}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>




            <div class="m-5">
                    <h6 class="text text-default"> <u>Finished Project Plans</u> </h6>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Client</th>
                                <th scope="col">Engineer (in charge)</th>
                                <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($finishedProjectSchedules as $projectKey=>$project)
                            <tr>
                                <th scope="row">{{$projectKey + 1}}</th>
                                <td>{{$project->strProjectName}}</td>
                                <td>{{$project->strClientName}}</td>
                                <td>{{$project->strEmployeeFName}}&nbsp;{{$project->strEmployeeMName}}&nbsp;{{$project->strEmployeeLName}}</td>
                                <td>{{$project->strProjectLocation}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div> 

        </div>
    </div>
</body>

</html>