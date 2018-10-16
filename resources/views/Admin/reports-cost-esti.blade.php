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
            <h2 class="text-center my-5">Cost Estimation for {{$project->strProjectName}}</h2>
            <h6>Print Date: {{date('Y-m-d')}}</h6>
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Description</th>
                    <th class="text-center" style="background-color: coral;  color: black !important">Qty</th>
                    <th class=" text-center" style="background-color: coral;  color: black !important">Unit</th>
                    <th style="background-color: coral;  color: black !important">Estimated Cost</th>
                    </tr>
                </thead>
                <tbody>
                <!-- FOR PROJECT REQUIREMENTS -->
                    @foreach ($projectRequirementsWorkCategories as $workCategory)
                        <tr style="background-color: #1e242d">
                            <td>
                                <h5 style="color: white;padding-left: 10px;">
                                    <b>{{$workCategory->strWorkCategoryDesc}}</b>
                                </h5>
                            </td>
                        </tr>
                        @foreach ($projectRequirementsWorkSubCategories as $workSubCategory)

                        <!-- For SubCategory -->
                            @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                            <tr class="table-active">
                                <td>
                                    <b style="padding-left: 30px;"> >&nbsp;{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                </td>
                            </tr>
                                @foreach ($allProjectRequirements as $keyProjectRequirement=>$projectRequirement)
                                        @if (
                                            ($projectRequirement->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId) &&
                                            ($projectRequirement->intWorkCategoryId == $workCategory->intWorkCategoryId)
                                        )
                                            <tr>
                                                <td>
                                                    @if($projectRequirement->decActualPrice > $projectRequirement->decEstimatedPrice)
                                                        <h1><i class="icon icon-flag text-danger m-20"></i></h1>
                                                    @endif
                                                </td>

                                                <td>{{$projectRequirement->strDesc}}</td>
                                                <td class="text-center " style="background-color: coral;  color: black !important">-</td>
                                                <th class="text-center" style="background-color: coral;   !important">-</th>
                                                <td style="background-color: coral;  color: black !important">{{number_format($projectRequirement->decEstimatedPrice,2)}}</td>
                                        @endif

                                @endforeach

                            @endif 
                        @endforeach
                    @endforeach
                    




                    <!-- DYNAMIC DATA -->
                    <!-- FOR MATERIALS --> 
                    <!-- For Category -->
                    @foreach ($projectWorkCategories as $workCategory)
                        <tr style="background-color: #1e242d">
                            <td>
                                <h5 style="color: white;padding-left: 10px;">
                                    <b>{{$workCategory->strWorkCategoryDesc}}</b>
                                </h5>
                            </td>
                        </tr>
                        @foreach ($projectWorkSubCategories as $workSubCategory)

                        <!-- For SubCategory -->
                            @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                            <tr class="table-active">
                                <td>
                                    <b style="padding-left: 30px;"> >&nbsp;{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                </td>
                            </tr>
                                @foreach ($projectCostSummary as $keyCostSummary=>$costSummary)

                                    @if (
                                        ($costSummary->actual == null) &&
                                        ($costSummary->estimate->intWorkCategoryId == $workCategory->intWorkCategoryId) &&
                                        ($costSummary->estimate->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId)
                                    )
                                        <tr>

                                            <td></td>

                                            <td>{{$costSummary->estimate->strMaterialName}}</td>
                                            <td class="text-center " style="background-color: coral;  color: black !important">{{number_format($costSummary->estimate->decQty,2)}}</td>
                                            <th class="text-center" style="background-color: coral;   !important">{{$costSummary->estimate->strUnit}}</th>
                                            <td style="background-color: coral;  color: black !important">{{number_format($costSummary->estimate->decCost,2)}}</td>
                                        </tr>
                                    @elseif (
                                        ($costSummary->estimate != null) &&
                                        ($costSummary->actual != null) &&
                                        ($costSummary->estimate->intWorkCategoryId == $workCategory->intWorkCategoryId) &&
                                        ($costSummary->estimate->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId)
                                    )
                                    <tr>

                                        <td>
                                            @if( $costSummary->actual->materialActualsTotals->totalCost > $costSummary->estimate->decCost )
                                                <h1><i class="icon icon-flag text-danger m-20"></i></h1>
                                            @endif
                                        </td>

                                        <td>{{$costSummary->estimate->strMaterialName}}</td>
                                        <td class="text-center " style="background-color: coral;  color: black !important">{{number_format($costSummary->estimate->decQty,2)}}</td>
                                        <th class="text-center" style="background-color: coral;   !important">{{$costSummary->estimate->strUnit}}</th>
                                        <td style="background-color: coral;  color: black !important">{{number_format($costSummary->estimate->decCost,2)}}</td>
                                    </tr>
                                    @endif
                                    

                                @endforeach

                            @endif 
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            
            <div class="d-flex justify-content-end px-5 my-5" style="font-size: 1.5em;">
                <strong>Total:&nbsp;</strong><span>{{number_format($totalEstimatedCost,2)}}</span>
            </div>
        </div>
    </div>
</body>
</html>