@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Automation Suit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Suit Name</label>
                                    <input type="suitname" class="form-control" id="suitname" placeholder="Suit Name">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn btn-info">Add Suit Coloumns </button>
                                </div>
                                <div  id="sortable">
                                    <div class="row field-box fieldSort">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coloumn Name</label>
                                                <input type="text" class="form-control Cname" id="Cname[0]" placeholder="Coloumn Name" name="Cname[0]">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coloumn Description</label>
                                                <input type="text" class="form-control Cdesc" id="Cdesc[0]" placeholder="Coloumn Description" name="Cdesc[0]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field-box fieldSort">
                                        <div class="col-sm-6 ">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coloumn Name</label>
                                                <input type="text" class="form-control" id="Cname[1]" placeholder="Coloumn Name" name="Cname[1]">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coloumn Description</label>
                                                <input type="text" class="form-control" id="Cdesc[1]" placeholder="Coloumn Description" name="Cdesc[1]">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection
