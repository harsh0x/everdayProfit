@include('user.header')
@include('user.p2ptransfertabs')
<style>
    body {
        background-color: #198754; /* Light green background */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: black; /* Set text color to black */
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
    }

    .card,
    .form-container {
        flex: 1 0 45%;
        margin-bottom: 20px;
        margin: 10px;
        color: black; /* Set text color to black */
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
        <!-- Right side with form -->
        <div class="form-container">
            <div class="form">
                <h3>Add Fund</h3>
                <form>
                    <label for="amount">Amount:</label>
                    <input type="text" id="amount" name="amount" required>

                    <label for="coin">Password:</label>
                    <input type="text" id="coin" name="coin" required>

                    <button type="submit">Self Transfer</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
@include('user.footer')