@extends('Layout.app')


@section('content')

    <div id="mainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">


                <button id="addbtn" class="btn btn-sm btn-danger my-3">Add New</button>

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

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <!-- Modal Delete -->


    <!-- Modal update -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <!-- Modal update -->


    <!-- Modal add new -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body p-5 text-center">
                    <h5 class="mb-4">ADD New Service</h5>

                    <div id="serviceAddForm" class="w-100">

                        <input type="text" id="servicenameadd" class="form-control mb-4" placeholder="Service Name">
                        <input type="text" id="servicedesadd" class="form-control mb-4" placeholder="Service Description">
                        <input type="text" id="serviceimgadd" class="form-control mb-4" placeholder="Image Link">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="addServiceBtn" type="button" class="btn btn-sm btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add new -->


@endsection


@section('script')

    <script type="text/javascript">
        getservicesdata(); //when page will load this method also will run

        // for servcie table

        function getservicesdata() {


            axios.get('/getservicesdata')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDiv').removeClass('d-none');
                        $('#loadDiv').addClass('d-none');

                        $('#service_table').empty();


                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(

                                "<td><img class='table-img' src=" + dataJSON[i].service_img + "> </td>" +
                                "<td>" + dataJSON[i].service_name + " </td>" +
                                "<td>" + dataJSON[i].service_des + " </td>" +
                                "<td><a class='editData' data-id=" + dataJSON[i].id +
                                "><i class='fas fa-edit'></i></a> </td>" +
                                "<td><a class='delData' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#service_table');
                        });


                        
                        //service table delete icon click
                        $(".delData").click(function() {
                            var id = $(this).data('id');

                            $('#serviceDeleteId').html(id);
                            // $('#confirmDelete').attr('data-id', id);
                            $('#deleteModal').modal('show');

                        })







                        //edit data using modal

                        $(".editData").click(function() {

                            var id = $(this).data('id');
                            serviceUpdateDetails(id);
                            $('#serviceEditId').html(id);
                            $('#editModal').modal('show');

                        })


                    } else {
                        $('#wrongDiv').removeClass('d-none');
                        $('#loadDiv').addClass('d-none');

                    }


                }).catch(function(error) {

                    $('#wrongDiv').removeClass('d-none');
                    $('#loadDiv').addClass('d-none');

                });


        }



        //service delete modal yes button

        $('#confirmDelete').click(function() {
            var id = $('#serviceDeleteId').html();
            // var id = $(this).data('id');
            DeleteData(id);

        })


        //delete data function

        function DeleteData(id) {
            $('#confirmDelete').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/servicedel', {
                    id: id
                })
                .then(function(response) {
                    $('#confirmDelete').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModal').modal('hide');
                            toastr.success('Delete Success.');
                            getservicesdata();
                        } else {
                            $('#deleteModal').modal('hide');
                            toastr.error('Delete Failed');
                            getservicesdata();
                        }

                    } else {
                        $('#deleteModal').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModal').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }




        //each service  Details data axios

        function serviceUpdateDetails(detaisData) {


            axios.post('/servicedetails', {
                    id: detaisData
                })
                .then(function(response) {

                    if (response.status == 200) {


                        $('#serviceLoader').addClass('d-none');
                        $('#serviceEditForm').removeClass('d-none');



                        var jsonData = response.data;
                        $('#servicename').val(jsonData[0].service_name);
                        $('#servicedes').val(jsonData[0].service_des);
                        $('#serviceimg').val(jsonData[0].service_img);
                    } else {

                        $('#serviceLoader').addClass('d-none');
                        $('#wrongLoader').removeClass('d-none');
                    }

                }).catch(function(error) {

                    $('#serviceLoader').addClass('d-none');
                    $('#wrongLoader').removeClass('d-none');

                });

        }



        //service update modal save button

        $('#confirmUpdate').click(function() {


            var id = $('#serviceEditId').html();
            var name = $('#servicename').val();
            var des = $('#servicedes').val();
            var img = $('#serviceimg').val();


            serviceUpdate(id, name, des, img);

        })





        //update service data axios

        function serviceUpdate(updateid, updatename, updatedes, updateimg) {



            if (updatename.length == 0) {

                toastr.error('service name is empty!');

            } else if (updatedes == 0) {

                toastr.error('service description is empty!');

            } else if (updateimg == 0) {

                toastr.error('service image is empty!');

            } else {
                $('#confirmUpdate').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/serviceupdate', {
                        id: updateid,
                        name: updatename,
                        des: updatedes,
                        img: updateimg

                    })
                    .then(function(response) {

                        $('#confirmUpdate').html("Update");

                        if (response.status = 200) {
                            if (response.data == 1) {
                                $('#editModal').modal('hide');
                                toastr.success('Update Success.');
                                getservicesdata();
                            } else {
                                $('#editModal').modal('hide');
                                toastr.error('Update Failed');
                                getservicesdata();
                            }
                        } else {
                            $('#editModal').modal('hide');
                            toastr.error('Something Went Wrong');
                        }


                    }).catch(function(error) {

                        $('#editModal').modal('hide');
                        toastr.error('Something Went Wrong');

                    });

            }


        }





        //Add New Service all are here
        //Service add new button click


        $('#addbtn').click(function() {

            $('#addModal').modal('show');
        })


        //service update modal save button

        $('#addServiceBtn').click(function() {



            var name = $('#servicenameadd').val();
            var des = $('#servicedesadd').val();
            var img = $('#serviceimgadd').val();


            serviceadd(name, des, img);

        })






        //Service Add Method


        function serviceadd(name, des, img) {



            if (name.length == 0) {

                toastr.error('service name is empty!');

            } else if (des == 0) {

                toastr.error('service description is empty!');

            } else if (img == 0) {

                toastr.error('service image is empty!');

            } else {
                $('#addServiceBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addservice', {
                        name: name,
                        des: des,
                        img: img

                    })
                    .then(function(response) {

                        $('#addServiceBtn').html("Save");

                        if (response.status = 200) {
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add New Success .');
                                getservicesdata();
                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add New Failed');
                                getservicesdata();
                            }
                        } else {
                            $('#addModal').modal('hide');
                            toastr.error('Something Went Wrong');
                        }


                    }).catch(function(error) {

                        $('#addModal').modal('hide');
                        toastr.error('Something Went Wrong');

                    });

            }

        }

    </script>

@endsection
