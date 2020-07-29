@extends('Layout.app')


@section('content')
<div id="mainDivCourse" class="container-fluid d-none">
    <div class="row">
        <div class="col-md-12 p-3">
            <button id="addbtnCourses" class="btn btn-sm btn-danger my-3">Add New</button>
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Image</th>
                        <th class="th-sm">Fee</th>
                        <th class="th-sm">Class</th>
                        <th class="th-sm">Enroll</th>
                        <th class="th-sm">Details</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="courses_table">

                    <tr>
                        <th class="th-sm">Laravel</th>
                        <th class="th-sm">50000</th>
                        <th class="th-sm">56</th>
                        <th class="th-sm">200</th>
                        <th class="th-sm"><a href=""><i class="fas fa-eye"></i></a></th>
                        <th class="th-sm"><a href=""><i class="fas fa-edit"></i></a></th>
                        <th class="th-sm"><a href=""><i class="fas fa-trash-alt"></i></a></th>
                    </tr>

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
<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input id="CourseNameId" type="text" id="" class="form-control mb-3" placeholder="Course Name">
                            <input id="CourseDesId" type="text" id="" class="form-control mb-3" placeholder="Course Description">
                            <input id="CourseFeeId" type="text" id="" class="form-control mb-3" placeholder="Course Fee">
                            <input id="CourseEnrollId" type="text" id="" class="form-control mb-3" placeholder="Total Enroll">
                        </div>
                        <div class="col-md-6">
                            <input id="CourseClassId" type="text" id="" class="form-control mb-3" placeholder="Total Class">
                            <input id="CourseLinkId" type="text" id="" class="form-control mb-3" placeholder="Course Link">
                            <input id="CourseImgId" type="text" id="" class="form-control mb-3" placeholder="Course Image">
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
<div class="modal fade" id="deleteModalCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body p-3 text-center">
                <h5 class="mt-4">Do you want to Delete</h5>
                <h5 id="courseDeleteId" class="mt-4"></h5>
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
<div class="modal fade" id="updateCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h5 id="courseEditId" class="mt-4"></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <input id="CourseNameIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Course Name">
                            <input id="CourseDesIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Course Description">
                            <input id="CourseFeeIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Course Fee">
                            <input id="CourseEnrollIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Total Enroll">
                        </div>
                        <div class="col-md-6">
                            <input id="CourseClassIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Total Class">
                            <input id="CourseLinkIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Course Link">
                            <input id="CourseImgIdUpdate" type="text" id="" class="form-control mb-3" placeholder="Course Image">
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
</script>

@endsection