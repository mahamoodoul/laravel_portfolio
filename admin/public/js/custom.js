





// for Courses table

function getCoursesdata() {


    axios.get('/getcoursesdata')
        .then(function (response) {

            if (response.status = 200) {

                $('#mainDivCourse').removeClass('d-none');
                $('#loadDivCourse').addClass('d-none');
                $('#courses_table').empty();
                var dataJSON = response.data;
                $.each(dataJSON, function (i, item) {
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

                $(".courseDeleteIcon").click(function () {

                    var id = $(this).data('id');
                    $('#courseDeleteId').html(id);
                    $('#deleteModalCourse').modal('show');

                })


                //courses edit icon click

                $(".courseEdit").click(function () {

                    var id = $(this).data('id');
                    $('#courseEditId').html(id);

                    $('#updateCourseModal').modal('show');
                    courseeUpdateDetails(id);

                })


            } else {
                $('#wrongDivCourse').removeClass('d-none');
                $('#loadDivCourse').addClass('d-none');

            }
        }).catch(function (error) {

            $('#wrongDivCourse').removeClass('d-none');
            $('#loadDivCourse').addClass('d-none');
        });


}


$('#addbtnCourses').click(function () {

    $('#addCourseModal').modal('show');
});



//Courses update modal save button

$('#CourseAddConfirmBtn').click(function () {



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

    }


    else {

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
            .then(function (response) {

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


            }).catch(function (error) {

                $('#addCourseModal').modal('hide');
                toastr.error('Something Went Wrong');

            });

    }

}



//courses delete modal yes button
$('#confirmDeletecourse').click(function () {
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
        .then(function (response) {
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

        }).catch(function (error) {

            $('#deleteModalCourse').modal('hide');
            toastr.error('Something Went Wrong');

        });

}

//each courses  Details data show for edit

function courseeUpdateDetails(id) {


    axios.post('/coursesdetails', {
        id: id
    })
        .then(function (response) {

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

        }).catch(function (error) {

            $('#coursesLoader').addClass('d-none');
            $('#courseswrongLoader').removeClass('d-none');

        });

}







//courses update modal save button

$('#CourseupdateConfirmBtn').click(function () {


    var idUpdate = $('#courseEditId').html();
    var nameUpdate = $('#CourseNameIdUpdate').val();
    var desUpdate = $('#CourseDesIdUpdate').val();
    var feeUpdate = $('#CourseFeeIdUpdate').val();
    var enrollUpdate = $('#CourseEnrollIdUpdate').val();
    var total_classUpdate = $('#CourseClassIdUpdate').val();
    var linkUpdate = $('#CourseLinkIdUpdate').val();
    var imgUpdate = $('#CourseImgIdUpdate').val();

    courseUpdate(idUpdate, nameUpdate, desUpdate, feeUpdate, enrollUpdate, total_classUpdate, linkUpdate, imgUpdate);

})





//update service data axios

function courseUpdate(idUpdate, nameUpdate, desUpdate, feeUpdate, enrollUpdate, total_classUpdate, linkUpdate, imgUpdate) {



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
            .then(function (response) {

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


            }).catch(function (error) {

                $('#updateCourseModal').modal('hide');
                toastr.error('Something Went Wrong');

            });

    }


}