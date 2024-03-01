@include('admin.header')
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
    background: #000; /* Black background */
    padding: 20px 25px;
    border-radius: 3px;
    overflow:hidden;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.table-title {
    color: #fff;
    background: #eb1616; /* Red background */
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
    color: #FFC107; /* Yellow color for view links */
}

table.table td a.edit {
    color: #03A9F4; /* Blue color for edit links */
}

table.table td a.delete {
    color: #fff; /* White color for delete links */
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
        background-color: #5cb85c; /* Green */
    }

    .inactive {
        color: #fff;
        background-color: #d9534f; /* Red */
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
                            <h2>User <b>Details</b></h2>
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
                            <th>#</th>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th style="width:250px">E-mail</th>
                            <th>Sponser Id</th>
                            <th>Total Invested</th>
                            <th>Total Income</th>
                            <th>Wallet Balance</th>
                            <th>Fund Balance</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="status-btn active" onclick="toggleStatus(this)">Active</div></td>
                            <!-- <td>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td> -->
                        </tr>
                                
                    </tbody>
                </table>
            </div>
        </div>        
    </div> 
    <script>
$(document).ready(function() {
        // Fetch users on page load
        fetchUsers();

        // Function to fetch users via Ajax
        function fetchUsers() {
            $.ajax({
                url: '/admin/getallusers',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        displayUsers(response.data);
                    } else {
                        console.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function formatDate(dateString) {
            const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
            const formattedDate = new Date(dateString).toLocaleDateString('en-GB', options);
            return formattedDate;
        }

        // Function to display users in the table
        function displayUsers(users) {
            var tableBody = $('tbody');
            tableBody.empty();
            
            

            $.each(users, function(index, user) {
                console.log(users)
                var statusClass = user.status ? 'active' : 'inactive';
                var statusText = user.status ? 'Active' : 'Inactive';
                var formattedDate = formatDate(user.created_at);
                tableBody.append(`
                    <tr>
                        <td>${index + 1}</td>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.username}</td>
                        <td>${user.email}</td>
                        <td>${user.referral_id}</td>
                        <td>${user.self_invested}</td>
                        <td>${user.total_income}</td>
                        <td>${user.wallet_balance}</td>
                        <td>${user.fund_wallet}</td>
                        <td>${formattedDate}</td>
                        <td>
                            <div class="status-btn ${statusClass}" onclick="toggleStatus(this)">
                                ${statusText}
                            </div>
                        </td>
                    </tr>
                `);
            });
        }

        // Function to toggle user status
        function toggleStatus(btn) {
            // Add logic for handling status toggle
        }
    });

function toggleStatus(btn) {
        // Toggle between active and inactive classes
        btn.classList.toggle('active');
        btn.classList.toggle('inactive');

        // Update the text inside the button
        if (btn.classList.contains('active')) {
            btn.textContent = 'Active';
            // Add logic for handling active status
        } else {
            btn.textContent = 'Inactive';
            // Add logic for handling inactive status
        }
    }
</script>    
</body>

</html>
@include('admin.footer')