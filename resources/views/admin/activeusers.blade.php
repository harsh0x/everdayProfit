@include('admin.header')
<!-- content start -->

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.table-responsive {
    margin: 30px 0;
}

.table-wrapper {
    min-width: 1000px;
    background: #000;
    /* Black background */
    padding: 20px 25px;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.table-title {
    color: #fff;
    background: #eb1616;
    /* Red background */
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

.search-box {
    position: relative;
    float: right;
}

.search-box .input-group {
    min-width: 300px;
    position: absolute;
    right: 0;
}

.search-box .input-group-addon,
.search-box input {
    border-color: #ddd;
    border-radius: 0;
}

.search-box input {
    height: 34px;
    padding-right: 35px;
    background: #f4fcfd;
    border: none;
    border-radius: 2px !important;
}

.search-box input:focus {
    background: #fff;
}

.search-box input::placeholder {
    font-style: italic;
}

.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 6px 0;
}

.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 2px;
}

table.table {
    table-layout: fixed;
    margin-top: 15px;
}

table.table tr th,
table.table tr td {
    /* border-color: #e9e9e9; */
}



table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}

table.table th:first-child {
    width: 60px;
}

table.table th:last-child {
    width: 60px;
}

table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}

table.table td a.view {
    color: #FFC107;
    /* Yellow color for view links */
}

table.table td a.edit {
    color: #03A9F4;
    /* Blue color for edit links */
}

table.table td a.delete {
    color: #fff;
    /* White color for delete links */
}

table.table td i {
    font-size: 19px;
}

.status-btn {
    display: inline-block;
    cursor: pointer;
    padding: 5px 3px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}

.active {
    color: #fff;
    background-color: #5cb85c;
    /* Green */
}

.inactive {
    color: #fff;
    background-color: #d9534f;
    /* Red */
}
</style>

</head>

<body>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Active Users</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="text" id="search" class="form-control" placeholder="Search by Name">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>mobile</th>
                            <th>Sponser Id</th>
                            <th>Fund Balance</th>
                            <th>Wallet Balance</th>
                            <th>Self Invested</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($activeUsers as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->referral_id }}</td>
                            <td>{{ $user->fund_wallet }}</td>
                            <td>{{ $user->wallet_balance }}</td>
                            <td>{{ $user->self_invested }}</td>
                            <td>{{ $user->created_at }}</td>

                            <td>
                                <span class="status-btn {{ $user->status == 1 ? 'active' : 'inactive' }}">
                                    {{ $user->status == 1 ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    <!-- Your existing HTML and styles -->

                </table>
            </div>
        </div>
    </div>
    <!-- Content End -->

    @include('admin.footer')