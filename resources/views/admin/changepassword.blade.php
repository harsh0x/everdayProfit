@include('admin.header')
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid red; background-color: black;">
                <div class="card-header" style="background-color: black; color: white;">Change Password</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <!-- Add your form fields here (e.g., current password, new password, confirm password) -->
                        <div class="mb-3">
                            <label for="current_password" class="form-label" style="color: white;">Current
                                Password</label>
                            <input type="password" class="form-control" id="current_password" name="current_password"
                                style="border: 1px solid red;" required>
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label" style="color: white;">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password"
                                style="border: 1px solid red;" required>
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label" style="color: white;">Confirm
                                Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                style="border: 1px solid red;" required>
                        </div>

                        <button type="submit" class="btn btn-danger">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')