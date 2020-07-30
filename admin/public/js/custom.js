// for project table

function getProjectsdata() {


    axios.get('/getprojectdata')
        .then(function (response) {

            if (response.status = 200) {

                $('#mainDivProjects').removeClass('d-none');
                $('#loadDivProjects').addClass('d-none');

                $('#projectsDataTable').DataTable().destroy();
                $('#projects_table').empty();

                var dataJSON = response.data;
                $.each(dataJSON, function (i, item) {
                    $('<tr>').html(
                        "<td><img width='200px' height='80' class='table-img' src=" + dataJSON[i].project_img + "> </td>" +
                        "<td>" + dataJSON[i].project_name + " </td>" +
                        "<td>" + dataJSON[i].project_des + " </td>" +
                        "<td>" + dataJSON[i].project_link + " </td>" +
                        "<td><a class='projectEditIcon' data-id=" + dataJSON[i].id + "><i class='fas fa-edit'></i></a> </td>" +
                        "<td><a class='projectDeleteIcon' data-id=" + dataJSON[i].id + " ><i class='fas fa-trash-alt'></i></a> </td>"
                    ).appendTo('#projects_table');
                });


                 //Projects click on delete icon

                 $(".projectDeleteIcon").click(function() {

                    var id = $(this).data('id');
                    $('#projectDeleteId').html(id);
                    $('#deleteModalProject').modal('show');

                })



                //Project edit icon click

                $(".projectEditIcon").click(function() {

                    var id = $(this).data('id');
                    $('#projectEditId').html(id);

                    $('#updateProjectModal').modal('show');
                    projectUpdateDetails(id);

                })




                $('#projectsDataTable').DataTable({ "order": false });
                $('.dataTables_length').addClass('bs-select');

            } else {
                $('#wrongDivProjects').removeClass('d-none');
                $('#loadDivProjects').addClass('d-none');

            }
        }).catch(function (error) {

            $('#wrongDivProjects').removeClass('d-none');
            $('#loadDivProjects').addClass('d-none');
        });


}

//add button modal show for add new entity

$('#addbtnProject').click(function () {
    $('#addProjectModal').modal('show');
});


//Courses Add modal save button

$('#projectAddConfirmBtn').click(function () {


    var name = $('#projectName').val();
    var des = $('#projectDes').val();
    var link = $('#projectLink').val();
    var img = $('#projectImg').val();



    projectAdd(name, des, link, img);

})

//Courses Add Method


function projectAdd(name, des, link, img) {



    if (name.length == 0) {

        toastr.error('Project name is empty!');

    } else if (des == 0) {

        toastr.error('Project description is empty!');

    } else if (link == 0) {

        toastr.error('Project link is empty!');

    } else if (img == 0) {

        toastr.error('Project tImage is empty!');

    } else {

        $('#projectAddConfirmBtn').html("<div class='spinner-border spinner-border-sm text-primary' role='status'></div>");  //animation


        axios.post('/addproject', {
            project_name: name,
            project_des: des,
            project_link: link,
            project_img: img,

        })
            .then(function (response) {

                $('#projectAddConfirmBtn').html("Save");

                if (response.status = 200) {
                    if (response.data == 1) {
                        $('#addProjectModal').modal('hide');
                        toastr.success('Add New Success .');
                        getProjectsdata();
                    } else {
                        $('#addProjectModal').modal('hide');
                        toastr.error('Add New Failed');
                        getProjectsdata();
                    }
                } else {
                    $('#addProjectModal').modal('hide');
                    toastr.error('Something Went Wrong');
                }


            }).catch(function (error) {

                $('#addProjectModal').modal('hide');
                toastr.error('Something Went Wrong');

            });

    }

}



//  Projects delete modal yes button

  $('#confirmDeleteProject').click(function() {
    var id = $('#projectDeleteId').html();
    // var id = $(this).data('id');
    DeleteDataPrject(id);

})


//delete courses function

function DeleteDataPrject(id) {
    $('#confirmDeleteProject').html(
        "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

    axios.post('/projectdelete', {
            id: id
        })
        .then(function(response) {
            $('#confirmDeleteProject').html("Yes");

            if (response.status == 200) {


                if (response.data == 1) {
                    $('#deleteModalProject').modal('hide');
                    toastr.error('Delete Success.');
                    getProjectsdata();
                } else {
                    $('#deleteModalProject').modal('hide');
                    toastr.error('Delete Failed');
                    getProjectsdata();
                }

            } else {
                $('#deleteModalProject').modal('hide');
                toastr.error('Something Went Wrong');
            }

        }).catch(function(error) {

            $('#deleteModalProject').modal('hide');
            toastr.error('Something Went Wrong');

        });

}


//each courses  Details data show for edit

function  projectUpdateDetails(id) {


    axios.post('/projectdetails', {
            id: id
        })
        .then(function(response) {

            if (response.status == 200) {


                $('#projectLoader').addClass('d-none');
                $('#projectEditForm').removeClass('d-none');

                var jsonData = response.data;
                $('#projectNameIdUpdate').val(jsonData[0].project_name);
                $('#projectDesIdUpdate').val(jsonData[0].project_des);
                $('#projectLinkIdUpdate').val(jsonData[0].project_link);
                $('#projectImgIdUpdate').val(jsonData[0].project_img);
            } else {

                $('#projectLoader').addClass('d-none');
                $('#projectwrongLoader').removeClass('d-none');
            }

        }).catch(function(error) {

            $('#projectLoader').addClass('d-none');
            $('#projectwrongLoader').removeClass('d-none');

        });

}







//courses update modal save button

$('#projctupdateConfirmBtn').click(function() {


    var idUpdate = $('#projectEditId').html();
    var nameUpdate = $('#projectNameIdUpdate').val();
    var desUpdate = $('#projectDesIdUpdate').val();
    var linkUpdate = $('#projectLinkIdUpdate').val();
    var imgUpdate = $('#projectImgIdUpdate').val();

    projectUpdate(idUpdate, nameUpdate, desUpdate,linkUpdate,imgUpdate);

})





//update project data using modal

function projectUpdate(idUpdate, nameUpdate, desUpdate,linkUpdate,imgUpdate) {



    if (nameUpdate.length == 0) {

        toastr.error('Proejct name is empty!');

    } else if (desUpdate == 0) {

        toastr.error('Proejct description is empty!');

    }else if (linkUpdate == 0) {

        toastr.error('Proejct link is empty!');

    } else if (imgUpdate == 0) {

        toastr.error('Proejct image is empty!');

    } else {
        $('#projctupdateConfirmBtn').html(
            "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

        axios.post('/projectupdate', {

                id: idUpdate,
                project_name: nameUpdate,
                project_des: desUpdate,
                project_link: linkUpdate,
                project_img: imgUpdate,

            })
            .then(function(response) {

                $('#projctupdateConfirmBtn').html("Update");

                if (response.status = 200) {
                    if (response.data == 1) {
                        $('#updateProjectModal').modal('hide');
                        toastr.success('Update Success.');
                        getProjectsdata();

                    } else {
                        $('#updateProjectModal').modal('hide');
                        toastr.error('Update Failed');
                        getProjectsdata();

                    }
                } else {
                    $('#updateProjectModal').modal('hide');
                    toastr.error('Something Went Wrong');
                }


            }).catch(function(error) {

                $('#updateProjectModal').modal('hide');
                toastr.error('Something Went Wrong');

            });

    }


}



