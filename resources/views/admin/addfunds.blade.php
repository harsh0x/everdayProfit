@include('admin.header')
<style>
.divider:after,
.divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
}

.h-custom {
    height: calc(100% - 73px);
}

.bord {
    margin: 45px;
    border: 2px solid red;
    padding: 20px;
    /* Optional: Add padding for better visual appearance */
}

#form3Example3,
#form3Example4 {
    border: 1px solid red;
    border-radius: 5px;
    /* Optional: Add border-radius for rounded corners */
    margin-bottom: 10px;
    /* Optional: Adjust margin for better spacing */
    width: 100%;
    /* Optional: Set width to 100% for full-width input fields */
    box-sizing: border-box;
    /* Optional: Include padding and border in the element's total width and height */
}


@media (max-width: 450px) {
    .h-custom {
        height: 100%;
    }
}
</style>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100 bord">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://i.ibb.co/bLqJH68/Untitled-design-removebg-preview.png"
                    alt="Untitled-design-removebg-preview" class="img-fluid" alt="Sample image">
                <!-- sdfdsf -->
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="{{route('adminaddfund')}}" method="POST">
                    
                    @csrf
                    @if(session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Add Funds</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="form-control form-control-lg"
                            placeholder="Enter User Id" name="userid" />
                        <label class="form-label" for="form3Example3">User Id</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input id="form3Example4" class="form-control form-control-lg" type="text"
                            placeholder="Enter Amount" name="amount" />
                        <label class="form-label" for="form3Example4"> Amount</label>
                    </div>



                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                        <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div>
    </div>
</section>

@include('admin.footer')