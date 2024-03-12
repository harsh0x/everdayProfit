@include('user.header')
@include('user.purchasetab')
<style>
        /* Center the form */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* Optional: Add some space around the form */
        .custom-form-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow:#198754;
        }
    </style>
</head>
<body>

<div class="custom-form-container">
    <form>
        <div class="form-group">
            <label for="amountInput">Enter Amount:</label>
            <br>
            <br>
            <input type="text" class="form-control" id="amountInput" placeholder="Enter amount">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>
@include('user.footer')