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
                <h1 class="text-center display-4"><strong>Project Schedule Report</strong></h1>
                <h1 class="text-center">{{$project->strProjectName}}</h1>
                <h4 class="text-center">{{date('F d, Y')}}</h4>
            </div>
            
            <div class="my-5">
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">#</th>
                                <th scope="col">Task Name</th>
                                <th scope="col">Phase</th>
                                <th scope="col">Progress</th>
                                <th scope="col">Estimated Start Date</th>
                                <th scope="col">Estimated End Date</th>
                                <th scope="col">Actual Start Date</th>
                                <th scope="col">Actual End Date</th>
                                <th scope="col">Delay</th>
                                <th scope="col">Overdue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allProjectSchedulesWithPhases as $scheduleKey => $schedule)
                            <tr>
                                <th scope="row">{{$scheduleKey + 1}}</th>
                                <td><strong>{{$schedule->scheduleDetails->strWorkSubCategoryDesc}}</strong></td>
                                <td></td>
                                <td>{{$schedule->scheduleDetails->overAllProgress}}%</td>
                                <td>{{$schedule->scheduleDetails->dtmEstimatedStart}}</td>
                                <td>{{$schedule->scheduleDetails->dtmEstimatedEnd}}</td>
                                <td>{{$schedule->scheduleDetails->dtmActualStart}}</td>
                                <td>{{$schedule->scheduleDetails->dtmActualEnd}}</td>
                                <td>{{$schedule->scheduleDetails->delayDays}} Day/s</td>
                                <td>{{$schedule->scheduleDetails->overdueDays}} Day/s</td>
                            </tr>

                                @foreach($schedule->schedulePhases as $phase)
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>{{$phase->strName}}</td>
                                    <td>{{$phase->intProgress}}%</td>
                                    <td>{{$phase->dtmEstimatedStart}}</td>
                                    <td>{{$phase->dtmEstimatedEnd}}</td>
                                    <td>{{$phase->dtmActualStart}}</td>
                                    <td>{{$phase->dtmActualEnd}}</td>
                                    <td>{{$phase->delayDays}} Day/s</td>
                                    <td>{{$phase->overdueDays}} Day/s</td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>

</html>