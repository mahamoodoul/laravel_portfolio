@extends('Layout.app')

@section('content')

    <div id="mainDivProjects" class="container-fluid d-none">
        <div class="row">
            <div class="col-md-12 p-2">
                <button id="addbtnProject" class="btn btn-sm btn-danger my-3">Add New</button>
                <table id="projectsDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Image</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Description</th>
                            <th class="th-sm">Link</th>
                            <th class="th-sm">Edit</th>
                            <th class="th-sm">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="projects_table">


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="loadDivProjects" class="container">
        <div class="row">
            <div class="col-md-12 p-5 text-center">
                <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

            </div>
        </div>
    </div>
    <div id="wrongDivProjects" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5 text-center">
                <h3>Something Went Wrong!</h3>
            </div>
        </div>
    </div>



    <!-- Project add -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5">Add New Projects</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  text-center">
                    <div class="container">
                        <div class="row">

                            <input id="projectName" type="text" id="" class="form-control mb-3" placeholder="Project Name">
                            <input id="projectDes" type="text" id="" class="form-control mb-3" placeholder="Project Description">
                            <input id="projectLink" type="text" id="" class="form-control mb-3" placeholder="Project link">
                            <input id="projectImg" type="text" id="" class="form-control mb-3" placeholder="Image Link">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="projectAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Project add -->


     <!-- Modal project Delete -->
     <div class="modal fade" id="deleteModalProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">

             <div class="modal-body p-3 text-center">
                 <h5 class="mt-4">Do you want to Delete</h5>
                 <h5 id="projectDeleteId" class="mt-4 d-none "></h5>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                 <button data-id="" id="confirmDeleteProject" type="button" class="btn btn-sm btn-danger">Yes</button>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal project Delete -->




    <!-- Project update -->
    <div class="modal fade" id="updateProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <div id="projectEditForm" class="container d-none ">
                        <h5 id="projectEditId" class="mt-4 d-none"></h5>
                        <div class="row">
                            <div class="col-md-6">
                                <input id="projectNameIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Project Name">
                                <input id="projectDesIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Project Description">

                            </div>
                            <div class="col-md-6">
                                <input id="projectLinkIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Project Link">
                                <input id="projectImgIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Project Image">
                            </div>
                        </div>
                    </div>
                    <img id="projectLoader" class="loding-icon m-5 d-none" src="{{ asset('loader.svg') }}" alt="">
                    <h3 id="projectwrongLoader" class="d-none">Something Went Wrong!</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="projctupdateConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Project update -->



@endsection
@section('script')
    <script type="text/javascript">
        getProjectsdata();

    </script>

@endsection
