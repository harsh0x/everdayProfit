<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .main{
        width:100%;
        /* height:20%; */
    }
    .tab-container{
        display:flex;
        width:100%;
        
        
    }
    .tab1{
        width:100%;
        height:100%;
        /* background:red; */
        color:white;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:2vw;
        padding:20px;
    }
    .tab2{
        padding:20px;
        border-left:2px solid gray;
        width:100%;
        height:100%;
        /* background:red; */
        color:white;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:2vw;
    }

    .tab1:hover{
        border-bottom:2px solid #198754;
    }
    .tab2:hover{
        border-bottom:2px solid #198754;
    }

    a{
        text-decoration:none;
        color:white;
        height:100%;
        width:100%;
    }

</style>
<body>
    
    <div class="main">
        <div class="tab-container">
            <a href="/user/depositfunds"><div class="tab1">Deposit Funds</div></a>
            <a href="/user/withdrawfunds"><div class="tab2">Withdraw Funds</div></a>
        </div>

      
    </div>

</body>
</html>