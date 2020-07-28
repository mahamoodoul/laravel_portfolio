//visitor page table

$(document).ready(function () {
  $('#VisitorDt').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

// for servcie table

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
            "<td><a class='editData' data-id=" + dataJSON[i].id + "><i class='fas fa-edit'></i></a> </td>" +
            "<td><a class='delData' data-id=" + dataJSON[i].id + " ><i class='fas fa-trash-alt'></i></a> </td>"
          ).appendTo('#service_table');
        });

        //service table delete icon click
        $(".delData").click(function () {
          var id = $(this).data('id');

          $('#serviceDeleteId').html(id);
          // $('#confirmDelete').attr('data-id', id);
          $('#deleteModal').modal('show');

        })

        //service delete modal yes button

        $('#confirmDelete').click(function () {
          var id = $('#serviceDeleteId').html();
          // var id = $(this).data('id');
          DeleteData(id);

        })



        //service update modal save button

        $('#confirmUpdate').click(function () {


          var id = $('#serviceEditId').html();
          var name = $('#servicename').val();
          var des = $('#servicedes').val();
          var img = $('#serviceimg').val();


          serviceUpdate(id, name, des, img);

        })


        //edit data using modal

        $(".editData").click(function () {

          var id = $(this).data('id');
          serviceUpdateDetails(id);
          $('#serviceEditId').html(id);
          $('#editModal').modal('show');

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



//delete data function

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


//each service  Details data axios

function serviceUpdateDetails(detaisData) {


  axios.post('/servicedetails', { id: detaisData })
    .then(function (response) {

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

    }).catch(function (error) {

      $('#serviceLoader').addClass('d-none');
      $('#wrongLoader').removeClass('d-none');

    });

}



//update service data axios

function serviceUpdate(updateid, updatename, updatedes, updateimg) {


  axios.post('/serviceupdate', {
    id: updateid,
    name: updatename,
    des: updatedes,
    img: updateimg

  })
    .then(function (response) {

      if (response.status == 200) {


      } else {


      }

    }).catch(function (error) {



    });
}