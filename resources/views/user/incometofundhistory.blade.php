@include('user.header')
@include('user.p2ptransfertabs')
<style>
body {
    background-color: #198754;
    /* Green background color */
    color: #fff;
    /* White text color */
}

/* Optional: Add some space around the table */
.custom-table-container {
    margin: 20px;
}

/* Style the table */
.custom-table {
    background-color: #198754;
    /* Darker green for the table */
    border: 1px solid black;
    /* Green border */
    color: #fff;
    /* White text color */
}
</style>
</head>

<body>

    <div class="custom-table-container">
        <table class="table table-bordered custom-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">fromuser</th>
                    <th scope="col">touser</th>
                    <th scope="col">amount</th>
                    <th scope="col">created_at</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your data rows here -->
                <tr>
                    <td>1</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>

</html>
@include('user.footer')