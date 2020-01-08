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
                                    <button type="button" class="btn btn-block btn btn-info" onclick="appendThing()">Add Suit Coloumns </button>
                                </div>
                                <div class="row field-box">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" >Coloumn Name 1</label>
                                            <input type="text" class="form-control Cname" id="Cname[0]" placeholder="Coloumn Name" name="Cname[0]">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" >Coloumn Description 1</label>
                                            <input type="text" class="form-control Cdesc" id="Cdesc[0]" placeholder="Coloumn Description" name="Cdesc[0]">
                                        </div>
                                    </div>
                                </div>
                                <div  id="sortable">
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
