@extends('Layout.app')


@section('content')
    <div id="mainDivCourse" class="container-fluid d-none">
        <div class="row">
            <div class="col-md-12 p-3">
                <button id="addbtnCourses" class="btn btn-sm btn-danger my-3">Add New</button>
                <table id="courseDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Fee</th>
                            <th class="th-sm">Class</th>
                            <th class="th-sm">Enroll</th>
                            <th class="th-sm">Details</th>
                            <th class="th-sm">Edit</th>
                            <th class="th-sm">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="courses_table">

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div id="loadDivCourse" class="container">
        <div class="row">
            <div class="col-md-12 p-5 text-center">
                <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

            </div>
        </div>
    </div>
    <div id="wrongDivCourse" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5 text-center">
                <h3>Something Went Wrong!</h3>
            </div>
        </div>
    </div>

    <!-- course add -->
    <div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="CourseNameId" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Name">
                                <input id="CourseDesId" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Description">
                                <input id="CourseFeeId" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Fee">
                                <input id="CourseEnrollId" type="text" id="" class="form-control mb-3"
                                    placeholder="Total Enroll">
                            </div>
                            <div class="col-md-6">
                                <input id="CourseClassId" type="text" id="" class="form-control mb-3"
                                    placeholder="Total Class">
                                <input id="CourseLinkId" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Link">
                                <input id="CourseImgId" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="CourseAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Course add -->




    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModalCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body p-3 text-center">
                    <h5 class="mt-4">Do you want to Delete</h5>
                    <h5 id="courseDeleteId" class="mt-4 d-none"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                    <button data-id="" id="confirmDeletecourse" type="button" class="btn btn-sm btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Delete -->



    <!-- Course update -->
    <div class="modal fade" id="updateCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  text-center">
                    <div id="coursesEditForm" class="container d-none ">
                        <h5 id="courseEditId" class="mt-4 d-none"></h5>
                        <div class="row">
                            <div class="col-md-6">
                                <input id="CourseNameIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Name">
                                <input id="CourseDesIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Description">
                                <input id="CourseFeeIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Fee">
                                <input id="CourseEnrollIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Total Enroll">
                            </div>
                            <div class="col-md-6">
                                <input id="CourseClassIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Total Class">
                                <input id="CourseLinkIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Link">
                                <input id="CourseImgIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Course Image">
                            </div>
                        </div>
                    </div>
                    <img id="coursesLoader" class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">
                    <h3 id="courseswrongLoader" class="d-none">Something Went Wrong!</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="CourseupdateConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Course update -->

@endsection

@section('script')

    <script type="text/javascript">
        getCoursesdata();


        // for Courses table

        function getCoursesdata() {


            axios.get('/getcoursesdata')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivCourse').removeClass('d-none');
                        $('#loadDivCourse').addClass('d-none');

                        $('#courseDataTable').DataTable().destroy();
                        $('#courses_table').empty();
                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(
                                "<td>" + dataJSON[i].course_name + " </td>" +
                                "<td>" + dataJSON[i].course_fee + " </td>" +
                                "<td>" + dataJSON[i].course_totalenroll + " </td>" +
                                "<td>" + dataJSON[i].course_totalclass + " </td>" +
                                "<td><a class='courseDetails' data-id=" + dataJSON[i].id +
                                "><i class='fas fa-eye'></i></a> </td>" +
                                "<td><a class='courseEdit' data-id=" + dataJSON[i].id +
                                "><i class='fas fa-edit'></i></a> </td>" +
                                "<td><a class='courseDeleteIcon' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#courses_table');
                        });

                        //courses click on delete icon

                        $(".courseDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#courseDeleteId').html(id);
                            $('#deleteModalCourse').modal('show');

                        })


                        //courses edit icon click

                        $(".courseEdit").click(function() {

                            var id = $(this).data('id');
                            $('#courseEditId').html(id);

                            $('#updateCourseModal').modal('show');
                            courseeUpdateDetails(id);

                        })

                        
                        $('#courseDataTable').DataTable({
                            "order": false
                        });
                        $('.dataTables_length').addClass('bs-select');

                    } else {
                        $('#wrongDivCourse').removeClass('d-none');
                        $('#loadDivCourse').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivCourse').removeClass('d-none');
                    $('#loadDivCourse').addClass('d-none');
                });


        }


        $('#addbtnCourses').click(function() {

            $('#addCourseModal').modal('show');
        });



        //Courses Add modal save button

        $('#CourseAddConfirmBtn').click(function() {



            var name = $('#CourseNameId').val();
            var des = $('#CourseDesId').val();
            var fee = $('#CourseFeeId').val();
            var enroll = $('#CourseEnrollId').val();
            var total_class = $('#CourseClassId').val();
            var link = $('#CourseLinkId').val();
            var img = $('#CourseImgId').val();


            courseAdd(name, des, fee, enroll, total_class, link, img);

        })

        //Courses Add Method


        function courseAdd(name, des, fee, enroll, total_class, link, img) {



            if (name.length == 0) {

                toastr.error('Course name is empty!');

            } else if (des == 0) {

                toastr.error('Course description is empty!');

            } else if (fee == 0) {

                toastr.error('Course fee is empty!');

            } else if (enroll == 0) {

                toastr.error('Course total student  is empty!');

            } else if (total_class == 0) {

                toastr.error('Course total class is empty!');

            } else if (link == 0) {

                toastr.error('Course link is empty!');

            } else if (img == 0) {

                toastr.error('Course image is empty!');

            } else {

                $('#CourseAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addcourses', {
                        course_name: name,
                        course_des: des,
                        course_fee: fee,
                        course_totalenroll: enroll,
                        course_totalclass: total_class,
                        course_link: link,
                        course_img: img
                    })
                    .then(function(response) {

                        $('#CourseAddConfirmBtn').html("Save");

                        if (response.status = 200) {
                            if (response.data == 1) {
                                $('#addCourseModal').modal('hide');
                                toastr.success('Add New Success .');
                                getCoursesdata();
                            } else {
                                $('#addCourseModal').modal('hide');
                                toastr.error('Add New Failed');
                                getCoursesdata();
                            }
                        } else {
                            $('#addCourseModal').modal('hide');
                            toastr.error('Something Went Wrong');
                        }


                    }).catch(function(error) {

                        $('#addCourseModal').modal('hide');
                        toastr.error('Something Went Wrong');

                    });

            }

        }



        //courses delete modal yes button
        $('#confirmDeletecourse').click(function() {
            var id = $('#courseDeleteId').html();
            // var id = $(this).data('id');
            DeleteDataCourse(id);

        })


        //delete courses function

        function DeleteDataCourse(id) {
            $('#confirmDeletecourse').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/coursesedelete', {
                    id: id
                })
                .then(function(response) {
                    $('#confirmDeletecourse').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalCourse').modal('hide');
                            toastr.success('Delete Success.');
                            getCoursesdata();
                        } else {
                            $('#deleteModalCourse').modal('hide');
                            toastr.error('Delete Failed');
                            getCoursesdata();
                        }

                    } else {
                        $('#deleteModalCourse').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalCourse').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }

//each courses  Details data show for edit

        function courseeUpdateDetails(id) {


            axios.post('/coursesdetails', {
                    id: id
                })
                .then(function(response) {

                    if (response.status == 200) {


                        $('#coursesLoader').addClass('d-none');
                        $('#coursesEditForm').removeClass('d-none');

                        var jsonData = response.data;
                        $('#CourseNameIdUpdate').val(jsonData[0].course_name);
                        $('#CourseDesIdUpdate').val(jsonData[0].course_des);
                        $('#CourseFeeIdUpdate').val(jsonData[0].course_fee);
                        $('#CourseEnrollIdUpdate').val(jsonData[0].course_totalenroll);
                        $('#CourseClassIdUpdate').val(jsonData[0].course_totalclass);
                        $('#CourseLinkIdUpdate').val(jsonData[0].course_link);
                        $('#CourseImgIdUpdate').val(jsonData[0].course_img);
                    } else {

                        $('#coursesLoader').addClass('d-none');
                        $('#courseswrongLoader').removeClass('d-none');
                    }

                }).catch(function(error) {

                    $('#coursesLoader').addClass('d-none');
                    $('#courseswrongLoader').removeClass('d-none');

                });

        }







        //courses update modal save button

        $('#CourseupdateConfirmBtn').click(function() {


            var idUpdate = $('#courseEditId').html();
            var nameUpdate = $('#CourseNameIdUpdate').val();
            var desUpdate = $('#CourseDesIdUpdate').val();
            var feeUpdate = $('#CourseFeeIdUpdate').val();
            var enrollUpdate = $('#CourseEnrollIdUpdate').val();
            var total_classUpdate = $('#CourseClassIdUpdate').val();
            var linkUpdate = $('#CourseLinkIdUpdate').val();
            var imgUpdate = $('#CourseImgIdUpdate').val();

            courseUpdate(idUpdate, nameUpdate, desUpdate, feeUpdate, enrollUpdate, total_classUpdate, linkUpdate,
                imgUpdate);

        })





        //update service data axios

        function courseUpdate(idUpdate, nameUpdate, desUpdate, feeUpdate, enrollUpdate, total_classUpdate, linkUpdate,
            imgUpdate) {



            if (nameUpdate.length == 0) {

                toastr.error('Course name is empty!');

            } else if (desUpdate == 0) {

                toastr.error('Course description is empty!');

            } else if (feeUpdate == 0) {

                toastr.error('Course fee is empty!');

            } else if (enrollUpdate == 0) {

                toastr.error('Course total student  is empty!');

            } else if (total_classUpdate == 0) {

                toastr.error('Course total class is empty!');

            } else if (linkUpdate == 0) {

                toastr.error('Course link is empty!');

            } else if (imgUpdate == 0) {

                toastr.error('Course image is empty!');

            } else {
                $('#CourseupdateConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/coursesupdate', {
                        id: idUpdate,
                        course_name: nameUpdate,
                        course_des: desUpdate,
                        course_fee: feeUpdate,
                        course_totalenroll: enrollUpdate,
                        course_totalclass: total_classUpdate,
                        course_link: linkUpdate,
                        course_img: imgUpdate

                    })
                    .then(function(response) {

                        $('#CourseupdateConfirmBtn').html("Update");

                        if (response.status = 200) {
                            if (response.data == 1) {
                                $('#updateCourseModal').modal('hide');
                                toastr.success('Update Success.');
                                getCoursesdata();
                            } else {
                                $('#updateCourseModal').modal('hide');
                                toastr.error('Update Failed');
                                getCoursesdata();
                            }
                        } else {
                            $('#updateCourseModal').modal('hide');
                            toastr.error('Something Went Wrong');
                        }


                    }).catch(function(error) {

                        $('#updateCourseModal').modal('hide');
                        toastr.error('Something Went Wrong');

                    });

            }


        }

    </script>

@endsection
