@include('user.header')
@include('user.fundtabs')
<style>
        body {
            background-color: #198754; /* Light green background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
    
        }

        .card,
        .form-container {
            flex:1 0 45%;
            margin-bottom: 20px;
            margin:10px
        }

        .card,
        .form {
            width: 100%;
            background-color: #198754; /* Light green background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #99ff99; /* Light green border */
            border-radius: 5px;
        }

        .form button {
            background-color: black; /* Dark green button background */
            color: #fff; /* White text color */
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .card {
                width: calc(50% - 10px);
                margin-right: 10px;
            }

            .form,
            .form-container {
                width: calc(50% - 10px);
            }

            .form input {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Left side with two cards -->
        <div class="card">
            <h3>Fund Balance:</h3>
            <!-- Add content for Fund Balance card here -->
        </div>

        <div class="card">
            <h3>Wallet Balance:</h3>
            <!-- Add content for Wallet Balance card here -->
        </div>
        

        <!-- Right side with form -->
        <div class="form-container">
            <div class="form">
                <h3>Add Fund</h3>
                <form>
                    <label for="amount">Enter Amount:</label>
                    <input type="text" id="amount" name="amount" required>

                    <label for="enter address">Enter Address:</label>
                    <input type="text" id="coin" name="coin" required>

                    <label for="enter password">Enter Password:</label>
                    <input type="text" id="coin" name="coin" required>

                    <button type="submit">Proceed</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
@include('user.footer')