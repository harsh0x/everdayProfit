@include('admin.header')

<body>
    <div class="container-fluid pt-5 mt-5">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information mx-auto">
            <form action="" method="POST">
                @csrf
                <h3 class="text-center"> Personal Information</h3>


                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif


                <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mx-auto">
                        <div class="form-group">
                            <label class="profile_details_text"> Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required
                                style="border :2px solid red">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mx-auto">
                        <div class="form-group">
                            <label class="profile_details_text">User Name: </label>
                            <input type="text" name="username" class="form-control" value="{{ $admin->username }}"
                                required style="border :2px solid red">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mx-auto">
                        <div class="form-group">
                            <label class="profile_details_text">Email Address:</label>
                            <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required
                                style="border :2px solid red">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mx-auto    ">
                        <div class="form-group">
                            <label class="profile_details_text">Mobile Number:</label>
                            <input type="tel" name="mobile" class="form-control" value="{{ $admin->mobile }}" required
                                pattern=[0-9]{10} style="border :2px solid red">

                        </div>
                    </div>
                </div>
                <div class="row mx-auto ">
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit mx-auto d-flex justify-center mt-5">
                        <div class="form-group mx-auto">
                            <input type="submit" class="btn btn-danger" value="Submit">
                        </div>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
</body>

</html>
@include('admin.footer')