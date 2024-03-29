@extends('admin.Layouts.main')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped Table</h4>
                            <p class="card-description">
                                Add class <code>.table-striped</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Slug
                                        </th>
                                        <th>
                                            Edit
                                        </th>
                                        <th>
                                            Delete
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($article as $articles )
                                        <td class="py-1">
                                            <img src="../../images/faces/{{$articles->imageUrl}}" alt="image"/>
                                        </td>
                                        <td>
                                           {{$articles->title}}
                                        </td>
                                        <td>
                                            {{$articles->slug}}
                                        </td>
                                        <td>
                                            <form >
                                                <button class="btn btn-info" >Edit</button>
                                            </form>
                                        </td>
                                        <td>
                                          <button class="btn btn-danger">Delete</button>


                                        </td>





                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>



@endsection
