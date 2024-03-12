@include('user.header')
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
        font-size:1vw;
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
        font-size:1vw;
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
            <a href="/user/p2ptransferr"><div class="tab1">P2P Transferr</div></a>
            <a href="/user/transferhistory"><div class="tab2">Transfer History</div></a>
            <a href="/user/incometofundwallet"><div class="tab2">Income to Fund Wallet</div></a>
            <a href="/user/incometofundhistory"><div class="tab2">Income to Fund History</div></a>
        </div>

      
    </div>

</body>
</html>
@include('user.footer')