

// for Review table

function getReviewdata() {


    axios.get('/getReviewtdata')
        .then(function (response) {

            if (response.status = 200) {

                $('#mainDivReview').removeClass('d-none');
                $('#loadDivReview').addClass('d-none');


                $('#revieweDataTable').DataTable().destroy();
                $('#review_table').empty();


                var dataJSON = response.data;
                $.each(dataJSON, function (i, item) {
                    $('<tr>').html(

                        "<td><img width='200px' height='80' class='table-img' src=" + dataJSON[i].img + "> </td>" +
                        "<td>" + dataJSON[i].name + " </td>" +
                        "<td>" + dataJSON[i].des + " </td>" +
                        "<td><a class='editDataReview' data-id=" + dataJSON[i].id +
                        "><i class='fas fa-edit'></i></a> </td>" +
                        "<td><a class='delDataReview' data-id=" + dataJSON[i].id +
                        " ><i class='fas fa-trash-alt'></i></a> </td>"
                    ).appendTo('#review_table');
                });



                //Review table delete icon click
                $(".delDataReview").click(function () {

                    var id = $(this).data('id');
                    $('#reviewDeleteId').html(id);
                    $('#deleteModalReview').modal('show');

                })



                //edit data using modal for Review

                $(".editDataReview").click(function () {

                    var id = $(this).data('id');
                    reviewUpdateDetails(id);
                    $('#reviewEditId').html(id);
                    $('#editModalReview').modal('show');

                })




                $('#revieweDataTable').DataTable({ "order": false });
                $('.dataTables_length').addClass('bs-select');


            } else {
                $('#wrongDivReview').removeClass('d-none');
                $('#loadDivReview').addClass('d-none');

            }


        }).catch(function (error) {

            $('#wrongDivReview').removeClass('d-none');
            $('#loadDivReview').addClass('d-none');

        });


}



//Add New Review all are here
//Review add new button click


$('#addbtnReview').click(function () {

    $('#addModalReview').modal('show');
})


//Review  modal save button

$('#addReviewBtn').click(function () {



    var name = $('#reviewnameadd').val();
    var des = $('#reviewdesadd').val();
    var img = $('#reviewimgadd').val();


    reviewadd(name, des, img);

})






//Review Add Method


function reviewadd(name, des, img) {



    if (name.length == 0) {

        toastr.error('Review name is empty!');

    } else if (des == 0) {

        toastr.error('Review description is empty!');

    } else if (img == 0) {

        toastr.error('Review image is empty!');

    } else {
        $('#addReviewBtn').html(
            "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation


        axios.post('/addReview', {
            name: name,
            des: des,
            img: img

        })
            .then(function (response) {

                $('#addReviewBtn').html("Save");

                if (response.status = 200) {
                    if (response.data == 1) {
                        $('#addModalReview').modal('hide');
                        toastr.success('Add New Success .');
                        getReviewdata();
                    } else {
                        $('#addModalReview').modal('hide');
                        toastr.error('Add New Failed');
                        getReviewdata();
                    }
                } else {
                    $('#addModalReview').modal('hide');
                    toastr.error('Something Went Wrong');
                }


            }).catch(function (error) {

                $('#addModalReview').modal('hide');
                toastr.error('Something Went Wrong');

            });

    }

}


//Review delete modal yes button

$('#confirmDeleteReview').click(function () {
    var id = $('#reviewDeleteId').html();
    // var id = $(this).data('id');
    DeleteDataReview(id);

})


//Review delete data function

function DeleteDataReview(id) {
    $('#confirmDeleteReview').html(
        "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

    axios.post('/Reviewtdelete', {
        id: id
    })
        .then(function (response) {
            $('#confirmDeleteReview').html("Yes");

            if (response.status == 200) {


                if (response.data == 1) {
                    $('#deleteModalReview').modal('hide');
                    toastr.success('Delete Success.');
                    getReviewdata();
                } else {
                    $('#deleteModalReview').modal('hide');
                    toastr.error('Delete Failed');
                    getReviewdata();
                }

            } else {
                $('#deleteModalReview').modal('hide');
                toastr.error('Something Went Wrong');
            }

        }).catch(function (error) {

            $('#deleteModalReview').modal('hide');
            toastr.error('Something Went Wrong');

        });

}




 //each Review  Details data axios

 function  reviewUpdateDetails(id) {


    axios.post('/Reviewtdetails', {
            id: id
        })
        .then(function(response) {

            if (response.status == 200) {


                $('#reviewLoader').addClass('d-none');
                $('#reviewEditForm').removeClass('d-none');



                var jsonData = response.data;
                $('#reviewname').val(jsonData[0].name);
                $('#reviewdes').val(jsonData[0].des);
                $('#reviewimg').val(jsonData[0].img);
            } else {

                $('#reviewLoader').addClass('d-none');
                $('#wrongLoaderreview').removeClass('d-none');
            }

        }).catch(function(error) {

            $('#reviewLoader').addClass('d-none');
            $('#wrongLoaderreview').removeClass('d-none');

        });

}




   //Revview update modal save button

   $('#confirmUpdateReview').click(function() {


    var id = $('#reviewEditId').html();
    var name = $('#reviewname').val();
    var des = $('#reviewdes').val();
    var img = $('#reviewimg').val();


   reviewUpdate(id, name, des, img);

})





//Revview service data axios

function  reviewUpdate(updateid, updatename, updatedes, updateimg) {



    if (updatename.length == 0) {

        toastr.error('service name is empty!');

    } else if (updatedes == 0) {

        toastr.error('service description is empty!');

    } else if (updateimg == 0) {

        toastr.error('service image is empty!');

    } else {
        $('#confirmUpdateReview').html(
            "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/Reviewtupdate', {
                id: updateid,
                name: updatename,
                des: updatedes,
                img: updateimg

            })
            .then(function(response) {

                $('#confirmUpdateReview').html("Update");

                if (response.status = 200) {
                    if (response.data == 1) {
                        $('#editModalReview').modal('hide');
                        toastr.success('Update Success.');
                        getReviewdata();
                    } else {
                        $('#editModalReview').modal('hide');
                        toastr.error('Update Failed');
                        getReviewdata();
                    }
                } else {
                    $('#editModalReview').modal('hide');
                    toastr.error('Something Went Wrong');
                }


            }).catch(function(error) {

                $('#editModalReview').modal('hide');
                toastr.error('Something Went Wrong');

            });

    }


}

