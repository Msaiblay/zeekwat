<x-frontend>
    <div class="container bg-purple-400">
        <div class="row">
            <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">

                        <!-- form card login -->
                        <div class="card rounded shadow shadow-sm">
                            <div class="card-header">
                                <h3 class="mb-0">Teacher Register Form</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="{{route('teacherregister')}}" method="POST">
                                    @csrf
                                    {{--                                    @method('get')--}}
                                    <div class="form-group">
                                        <label for="uname1">Name</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="name" id="uname1" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control form-control-lg rounded-0" name="email" id="email" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <!--                                    <div class="form-group">
                                                                            <label for="phone">Phone</label>
                                                                            <input type="email" class="form-control form-control-lg rounded-0" name="phone" id="phone" required="">
                                                                            <div class="invalid-feedback">Oops, you missed this one.</div>
                                                                        </div>-->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmpassword">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="confirmpassword" id="confirmpassword" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-lg float-right" id="btnLogin">Register</button>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->

                    </div>


                </div>
                <!--/row-->

            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->
    <script>
    </script>
</x-frontend>
