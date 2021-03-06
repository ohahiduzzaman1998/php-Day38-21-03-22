@extends('master.front.master')


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Enroll Form</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-sm-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-sm-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-sm-3">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Confirm Enroll"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

