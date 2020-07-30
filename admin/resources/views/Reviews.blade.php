@extends('Layout.app')


@section('content')
<div id="mainDivReview" class="container-fluid d-none ">
    <div class="row">
        <div class="col-md-12 p-5">


            <button id="addbtnReview" class="btn btn-sm btn-danger my-3">Add New</button>

            <table id="revieweDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Image</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="review_table">


                </tbody>
            </table>

        </div>
    </div>
</div>

<div id="loadDivReview" class="container">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

        </div>
    </div>
</div>
<div id="wrongDivReview" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <h3>Something Went Wrong!</h3>
        </div>
    </div>
</div>

 <!-- Modal add new Review -->
 <div class="modal fade" id="addModalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">

         <div class="modal-body p-5 text-center">
             <h5 class="mb-4">ADD New Review</h5>

             <div id="ReviewAddForm" class="w-100">

                 <input type="text" id="reviewnameadd" class="form-control mb-4" placeholder="Review Name">
                 <input type="text" id="reviewdesadd" class="form-control mb-4" placeholder="Review Description">
                 <input type="text" id="reviewimgadd" class="form-control mb-4" placeholder="Review Link">
             </div>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
             <button id="addReviewBtn" type="button" class="btn btn-sm btn-danger">Save</button>
         </div>
     </div>
 </div>
</div>

<!-- Modal add new -->

 <!-- Modal Delete -->
 <div class="modal fade" id="deleteModalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">

         <div class="modal-body p-3 text-center">
             <h5 class="mt-4">Do you want to Delete</h5>
             <h5 id="reviewDeleteId" class="mt-4 "></h5>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
             <button data-id="" id="confirmDeleteReview" type="button" class="btn btn-sm btn-danger">Yes</button>
         </div>
     </div>
 </div>
</div>
<!-- Modal Delete -->


 <!--Review Modal update -->
 <div class="modal fade" id="editModalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">

         <div class="modal-body p-5 text-center">
             <h5>Edit your Review Details</h5>

             <div id="reviewEditForm" class="d-none w-100">
                 <h5 id="reviewEditId" class="mt-4 "></h5>
                 <input type="text" id="reviewname" class="form-control mb-4" placeholder="Review Name">
                 <textarea id="reviewdes" class="form-control mb-4" rows="4" cols="50">
                 </textarea>
                 {{-- <input type="text" id="reviewdes" class="form-control mb-4" placeholder="Review Description"> --}}
                 <input type="text" id="reviewimg" class="form-control mb-4" placeholder="Review Image Link">
             </div>

             <img id="reviewLoader" class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">


             <h3 id="wrongLoaderreview" class="d-none">Something Went Wrong!</h3>

         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
             <button id="confirmUpdateReview" type="button" class="btn btn-sm btn-danger">Update</button>
         </div>
     </div>
 </div>
</div>
<!--Review Modal update -->


@endsection


@section('script')

    <script type="text/javascript">

        getReviewdata(); //when page will load this method also will run

    </script>
@endsection
