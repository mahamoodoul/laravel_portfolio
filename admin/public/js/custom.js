$(document).ready(function () {
  $('#VisitorDt').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


function getservicesdata() {
  // alert("hello");


  axios.get('/getservicesdata')
    .then(function (response) {

      if (response.status = 200) {

        $('#mainDiv').removeClass('d-none');
        $('#loadDiv').addClass('d-none');

        $('#service_table').empty();


        var dataJSON = response.data;
        $.each(dataJSON, function (i, item) {
          $('<tr>').html(

            "<td><img class='table-img' src=" + dataJSON[i].service_img + "> </td>" +
            "<td>" + dataJSON[i].service_name + " </td>" +
            "<td>" + dataJSON[i].service_des + " </td>" +
            "<td><a href=''><i class='fas fa-edit'></i></a> </td>" +
            "<td><a class='delData' data-id=" + dataJSON[i].id + " ><i class='fas fa-trash-alt'></i></a> </td>"
          ).appendTo('#service_table');
        });


        $(".delData").click(function () {
          var id = $(this).data('id');

          $('#serviceDeleteId').html(id);
          // $('#confirmDelete').attr('data-id', id);
          $('#deleteModal').modal('show');

        })

        $('#confirmDelete').click(function () {
          var id = $('#serviceDeleteId').html();
          // var id = $(this).data('id');
          DeleteData(id);

        })

      } else {
        $('#wrongDiv').removeClass('d-none');
        $('#loadDiv').addClass('d-none');

      }


    }).catch(function (error) {

      $('#wrongDiv').removeClass('d-none');
      $('#loadDiv').addClass('d-none');

    });


}


function DeleteData(id) {


  axios.post('/servicedel', { id: id })
    .then(function (response) {

      if (response.data == 1) {
        $('#deleteModal').modal('hide');
        toastr.success('Delete Success.');
        getservicesdata();
      } else {
        $('#deleteModal').modal('hide');
        toastr.error('Delete Failed');
        getservicesdata();
      }

    }).catch(function (error) {



    });

}