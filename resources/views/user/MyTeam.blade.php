@include('user.header')
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
    background-color: #28a745;
    /* Darker green for the table */
    border: 1px solid #198754;
    /* Green border */
    color: #fff;
    /* White text color */
}
</style>
<div class="accordion mt-5" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                Level #1
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <table class="table">

                    <body>

                        <div class="custom-table-container">
                            <table class="table table-bordered custom-table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Txn_ID</th>
                                        <th scope="col">Currency</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Crypto Amount</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Txn Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add your data rows here -->
                                    <tr>
                                        <td>1</td>
                                        <td>TX123456</td>
                                        <td>USD</td>
                                        <td>100</td>
                                        <td>0.005 BTC</td>
                                        <td>1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa</td>
                                        <td>Buy</td>
                                        <td>Completed</td>
                                        <td>2024-02-24 12:30:45</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </body>
                </table>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                Level #2
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <table class="table">

                    <body>

                        <div class="custom-table-container">
                            <table class="table table-bordered custom-table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Txn_ID</th>
                                        <th scope="col">Currency</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Crypto Amount</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Txn Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add your data rows here -->
                                    <tr>
                                        <td>1</td>
                                        <td>TX123456</td>
                                        <td>USD</td>
                                        <td>100</td>
                                        <td>0.005 BTC</td>
                                        <td>1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa</td>
                                        <td>Buy</td>
                                        <td>Completed</td>
                                        <td>2024-02-24 12:30:45</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </body>
                </table>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Level #3
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <table class="table">

                        <body>

                            <div class="custom-table-container">
                                <table class="table table-bordered custom-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Txn_ID</th>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Crypto Amount</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Txn Type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date/Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add your data rows here -->
                                        <tr>
                                            <td>1</td>
                                            <td>TX123456</td>
                                            <td>USD</td>
                                            <td>100</td>
                                            <td>0.005 BTC</td>
                                            <td>1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa</td>
                                            <td>Buy</td>
                                            <td>Completed</td>
                                            <td>2024-02-24 12:30:45</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('user.footer')