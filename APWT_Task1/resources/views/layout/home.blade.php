<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Task1</title>
</head>
<style>
    .footer{
    width: 100%;
    background-color: rgb(0, 0, 0);
    display: grid;
    grid-template-columns: auto auto auto auto;
}
.footer .footer-header{
    display: flex;
    justify-content: left;
    align-items: center;
    padding: 80px;
}

.footer .footer-header .header-link{
    color: rgb(255, 255, 255);
    font-size: 15px;
    margin-bottom: 20px;
}

.footer .footer-header ol{
    list-style: none;
    display: block;
}
.footer .footer-header ol li{
    color: white;
    font-size: 20px;
    margin-bottom: 5px;
}
.footer .footer-header .footer-info{
    color: white;
    font-size: 20px;
}

.footer .footer-header img{

    margin-left: 5px;
}
@media(max-width: 600px){
    .footer{
        grid-template-columns: auto;
        grid-row-gap: 20px;


    }
    .footer .footer-header{
       padding: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
        align-items: center;

    }
    .footer .footer-header .header-link{
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .footer .footer-header .footer-info ,.footer .footer-header ol li {
        display: flex;
        justify-content: center;
        align-items: center;
    }
}
</style>
<body>

@include('navbar.navbar')
@yield('content')
</body>
</html>
