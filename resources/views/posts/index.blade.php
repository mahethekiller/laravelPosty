@extends("layouts.app")

@section("content")
<!--  Start Contentbar -->
<div class="contentbar">

    <div class="row">

        <div class="card m-b-30">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h5 class="card-title mb-0">Revenue Statistics</h5>
                    </div>
                    <div class="col-3">
                        <div class="dropdown">
                            <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                <a class="dropdown-item font-13" href="#">Refresh</a>
                                <a class="dropdown-item font-13" href="#">Export</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-0">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">
    Launch
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>



</div>
</div>
<!-- End Contentbar -->
@endsection
