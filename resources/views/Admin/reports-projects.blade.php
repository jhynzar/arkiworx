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

            <div class="m-5">
                    <h6 class="text text-default"> <u>Highest Paying Projects</u> </h6>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Client</th>
                                <th scope="col">Engineer (in charge)</th>
                                <th scope="col">Location</th>
                                <th scope="col">Paid Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($highestPayingProjects as $projectKey=>$project)
                            <tr>
                                <th scope="row">{{$projectKey + 1}}</th>
                                <td>{{$project->projectDetails->strProjectName}}</td>
                                <td>{{$project->projectDetails->strClientName}}</td>
                                <td>{{$project->projectDetails->strEmployeeFName}}&nbsp;{{$project->projectDetails->strEmployeeMName}}&nbsp;{{$project->projectDetails->strEmployeeLName}}</td>
                                <td>{{$project->projectDetails->strProjectLocation}}</td>
                                <td>{{number_format($project->projectTotalCost,2)}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>




            <div class="m-5">
                    <h6 class="text text-default"> <u>Pending Projects</u> </h6>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Client</th>
                                <th scope="col">Engineer (in charge)</th>
                                <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendingProjects as $projectKey=>$project)
                            <tr>
                                <th scope="row">{{$projectKey + 1}}</th>
                                <td>{{$project->strProjectName}}</td>
                                <td>{{ucwords($project->strProjectStatus)}}</td>
                                <td>{{$project->strClientName}}</td>
                                <td>{{$project->strEmployeeFName}}&nbsp;{{$project->strEmployeeMName}}&nbsp;{{$project->strEmployeeLName}}</td>
                                <td>{{$project->strProjectLocation}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>


            <div class="m-5">
                    <h6 class="text text-default"> <u>On-going Projects</u> </h6>
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
                            @foreach($ongoingProjects as $projectKey=>$project)
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

            <div class="m-5">
                    <h6 class="text text-default"> <u>Finished Projects - Year</u> </h6>
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
                            @foreach($finishedProjectsYear as $projectKey=>$project)
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


            <div class="m-5">
                    <h6 class="text text-default"> <u>Finished Projects - Month</u> </h6>
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
                            @foreach($finishedProjectsMonth as $projectKey=>$project)
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


            <div class="m-5">
                    <h6 class="text text-default"> <u>Finished Projects - Week</u> </h6>
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
                            @foreach($finishedProjectsWeek as $projectKey=>$project)
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





           <div class="m-5">
                    <h6 class="text text-default"> <u>Recent Finished Projects Comparison (3)</u> </h6>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Date Finished</th>
                                <th scope="col">Client</th>
                                <th scope="col">Engineer (in charge)</th>
                                <th scope="col">Location</th>
                                <th scope="col">Estimated Cost</th>
                                <th scope="col">Actual Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($finishedProjectsComparison as $projectKey=>$project)
                            <tr>
                                <th scope="row">{{$projectKey + 1}}</th>
                                <td>{{$project->projectDetails->strProjectName}}</td>
                                <td>{{$project->projectDetails->dtmDateFinished}}</td>
                                <td>{{$project->projectDetails->strClientName}}</td>
                                <td>{{$project->projectDetails->strEmployeeFName}}&nbsp;{{$project->projectDetails->strEmployeeMName}}&nbsp;{{$project->projectDetails->strEmployeeLName}}</td>
                                <td>{{$project->projectDetails->strProjectLocation}}</td>
                                <td>{{number_format($project->projectEstimatedTotalCost,2)}}</td>
                                <td>{{number_format($project->projectActualTotalCost,2)}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>

        </div>
    </div>
</body>

</html>