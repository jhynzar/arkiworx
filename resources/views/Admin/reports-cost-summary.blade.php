<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkiworx</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <style>
    /* * {
      border: solid 1px black;
    }*/
    </style>
</head>

<body>
    <div class="container">
        <div class="card-body">


            <!-- estimate - actual(null) -->
            <div class="m-5">
                <h2 class="text text-default text-center my-5"> <u>Work Estimates - No Actuals</u> </h2>
                <table class="table table-bordered">
                    <thead style="background-color: #000000">
                        <tr class="text text-primary">
                            <th scope="col">Category</th>
                            <th scope="col">Sub-Category</th>
                            <th scope="col">Material Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projectLoneEstimatesWorkCategs as $workCategory)
                        <tr>
                            <td colspan="6" scope="row">
                                <h4>
                                    <b>{{$workCategory->strWorkCategoryDesc}}</b>
                                </h4>
                            </td>
                        </tr>
                        @foreach ($projectLoneEstimatesWorkSubCategs as $workSubCategory)

                        <!-- For SubCategory -->
                        @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                        <tr>
                            <td></td>
                            <td colspan="5" scope="row">
                                <h5>
                                    <b>{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                </h5>
                            </td>
                        </tr>

                        @foreach ($projectLoneEstimates as $keyEstimate=>$estimate)
                        @if (
                        ($estimate->intWorkCategoryId == $workCategory->intWorkCategoryId) &&
                        ($estimate->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId)
                        )
                        <tr>
                            <td></td>
                            <td></td>
                            <th scope="row">{{$estimate->strMaterialName}}</th>
                            <td>{{number_format($estimate->decQty,2)}}</td>
                            <td>{{$estimate->strUnit}}</td>
                            <td>{{number_format($estimate->decCost,2)}}</td>
                        </tr>
                        @endif
                        @endforeach


                        @endif
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- estimate(null) - actuals -->
            <div class="m-5">
                    <h2 class="text text-default text-center my-5"> <u>No Estimates - Work Actuals</u> </h2>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">

                                <th scope="col">Category</th>
                                <th scope="col">Sub-Category</th>
                                <th scope="col">Material Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectLoneActualsWorkCategs as $workCategory)
                            <tr>
                                <td colspan="6" scope="row">
                                    <h4>
                                        <b>{{$workCategory->strWorkCategoryDesc}}</b>
                                    </h4>
                                </td>
                            </tr>
                            @foreach ($projectLoneActualsWorkSubCategs as $workSubCategory)

                            <!-- For SubCategory -->
                            @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                            <tr>
                                <td></td>
                                <td colspan="5" scope="row">
                                    <h5>
                                        <b>{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                    </h5>
                                </td>
                            </tr>


                            @foreach ($projectLoneActuals as $keyActual=>$actual)
                            @if (
                            ($actual->materialActualsDetails->intWorkCategoryId == $workCategory->intWorkCategoryId) &&
                            ($actual->materialActualsDetails->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId)
                            )
                            <tr>
                                <td></td>
                                <td>
                                </td>
                                <td>{{$actual->materialActualsDetails->strMaterialName}}</td>
                                <td>{{number_format($actual->materialActualsTotals->totalQty,2)}}</td>
                                <td>{{$actual->materialActualsDetails->strUnit}}</td>
                                <td>{{number_format($actual->materialActualsTotals->totalCost,2)}}</td>
                            </tr>
                            @endif
                            @endforeach


                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
            </div>

            <!-- estimate - actuals -->
            <div class="m-5">
                    <h2 class="text text-default text-center my-5"> <u>Work Estimates - Work Actuals</u> </h2>
                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">

                                <th scope="col">Category</th>
                                <th scope="col">Sub-Category</th>
                                <th>Description</th>
                                <th>Estimated Qty</th>
                                <th>Estimated Unit</th>
                                <th>Estimated Cost</th>
                                <th>Actual Qty</th>
                                <th>Actual Unit</th>
                                <th>Actual Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectCostSummaryWorkCategs as $workCategory)
                            <tr>
                                <td colspan="9" scope="row">
                                    <h4>
                                        <b>{{$workCategory->strWorkCategoryDesc}}</b>
                                    </h4>
                                </td>
                            </tr>
                            @foreach ($projectCostSummaryWorkSubCategs as $workSubCategory)

                            <!-- For SubCategory -->
                            @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                            <tr>
                                <td></td>
                                <td colspan="8" scope="row">
                                    <h5>
                                        <b>{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                    </h5>
                                </td>
                            </tr>

                            @foreach ($projectCostSummary as $keyCostSummary=>$costSummary)
                            @if (
                            ($costSummary->estimate->intWorkCategoryId == $workCategory->intWorkCategoryId) &&
                            ($costSummary->estimate->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId)
                            )
                            <tr>
                                <td></td>
                                <td></td>
                                <th scope="row">{{$costSummary->estimate->strMaterialName}}</th>
                                <td>{{number_format($costSummary->estimate->decQty,2)}}</td>
                                <td>{{$costSummary->estimate->strUnit}}</td>
                                <td>{{number_format($costSummary->estimate->decCost,2)}}</td>
                                <td>{{number_format($costSummary->actual->materialActualsTotals->totalQty,2)}}</td>
                                <td>{{$costSummary->actual->materialActualsDetails->strUnit}}</td>
                                <td>{{number_format($costSummary->actual->materialActualsTotals->totalCost,2)}}</td>
                            </tr>
                            @endif
                            @endforeach


                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
            </div>

            <!-- totals -->
            <div class="m-5">
                    <h2 class="text text-default text-center my-5"> <u>Total Costs</u> </h2>

                    <table class="table table-bordered">
                        <thead style="background-color: #000000">
                            <tr class="text text-primary">
                                <th scope="col">Estimated Total Cost</th>
                                <th scope="col">Actual Total Cost</th>
                                <th scope="col">Profitable Cost</th>
                                <th scope="col">Discrepancies</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{number_format($totalEstimatedCost,2)}}</th>
                                <td>{{number_format($totalActualsCost,2)}}</td>
                                @if( ($totalEstimatedCost - $totalActualsCost) > 0 )
                                <td>{{number_format(($totalEstimatedCost - $totalActualsCost),2)}}</td>
                                <td>0.00</td>
                                @elseif( ($totalEstimatedCost - $totalActualsCost) < 0 )
                                <td>0.00</td>
                                <td>{{number_format(($totalActualsCost - $totalEstimatedCost),2)}}</td>
                                @else
                                <td>0.00</td>
                                <td>0.00</td>
                                @endif
                            </tr>

                        </tbody>
                    </table>
            </div>


        </div>

    </div>

</body>

</html>
