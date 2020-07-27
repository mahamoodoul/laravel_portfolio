@extends('Layout.app')


@section('content')

    <div id="mainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
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






@endsection


@section('script')

    <script type="text/javascript">
        getservicesdata();

    </script>

@endsection
