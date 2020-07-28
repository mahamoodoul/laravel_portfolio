@extends('Layout.app')


@section('content')

<div id="mainDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5">
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Image</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="service_table">


                </tbody>
            </table>

        </div>
    </div>
</div>


<div id="loadDiv" class="container">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

        </div>
    </div>
</div>
<div id="wrongDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <h3>Something Went Wrong!</h3>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body p-3 text-center">
                <h5 class="mt-4">Do you want to Delete</h5>
                <h5 id="serviceDeleteId" class="mt-4"></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                <button data-id="" id="confirmDelete" type="button" class="btn btn-sm btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body p-5 text-center">
                <h5>Edit your Service Details</h5>

                <div id="serviceEditForm" class="d-none w-100">
                    <h5 id="serviceEditId" class="mt-4"></h5>
                    <input type="text" id="servicename" class="form-control mb-4" placeholder="Service Name">
                    <input type="text" id="servicedes" class="form-control mb-4" placeholder="Service Description">
                    <input type="text" id="serviceimg" class="form-control mb-4" placeholder="Image Link">
                </div>

                <img id="serviceLoader" class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">


                <h3 id="wrongLoader" class="d-none">Something Went Wrong!</h3>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                <button id="confirmUpdate" type="button" class="btn btn-sm btn-danger">Update</button>
            </div>
        </div>
    </div>
</div>




@endsection


@section('script')

<script type="text/javascript">
    getservicesdata();
</script>

@endsection