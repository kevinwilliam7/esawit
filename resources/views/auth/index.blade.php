<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login E-Sawit</title>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <style>
        
        img{
            width: 100%;
        }
        .login {
            height: 1000px;
            width: 100%;
            background: radial-gradient(#dae1dd, #fafffc);
            position: relative;
        }
        .login_box {
            width: 1050px;
            height: 600px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #fff;
            border-radius: 10px;
            box-shadow: 1px 4px 22px -8px #0004;
            display: flex;
            overflow: hidden;
        }
        .login_box .left{
            width: 41%;
            height: 100%;
            padding: 25px 25px;
        
        }
        .login_box .right{
            width: 59%;
            height: 100%  
        }
        .left .top_link a {
                color: #452A5A;
                font-weight: 400;
        }
        .left .top_link{
            height: 20px
        }
        .left .contact{
                display: flex;
                align-items: center;
                justify-content: center;
                align-self: center;
                height: 100%;
                width: 73%;
                margin: auto;
        }
        .left h3{
        text-align: center;
        margin-bottom: 40px;
        }
        .left{
            /* background: linear-gradient(-45deg, #dcd7e0, #fff); */
        }
        .right {
            background: linear-gradient(212.38deg, rgba(39, 188, 56, 0.7) 0%, rgba(10, 114, 8, 0.71) 100%),url('{{ asset('assets/images/sawit-login.jpg')}}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: #fff;
            position: relative;
        }

        .right .right-text{
        height: 100%;
        position: relative;
        transform: translate(0%, 45%);
        }
        .right-text h2{
        display: block;
        width: 100%;
        text-align: center;
        font-size: 50px;
        font-weight: 500;
        }
        .right-text h5{
        display: block;
        width: 100%;
        text-align: center;
        font-size: 19px;
        font-weight: 400;
        }

        .right .right-inductor{
        position: absolute;
        width: 70px;
        height: 7px;
        background: #fff0;
        left: 50%;
        bottom: 70px;
        transform: translate(-50%, 0%);
        }
        .top_link img {
            width: 28px;
            padding-right: 7px;
            margin-top: -3px;
        }
    </style>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="contact">
                    <form action="/authenticate" method="POST">
                        @csrf
                        <a class="logo me-auto" href="/"><img style="" src="{{asset('assets/images/E-Sawit-Small.png')}}" alt="E-Sawit" class="img-fluid"></a>
                        
                        <div class="pt-4">
                            @if (session()->has('loginError'))
                            <div class="alert alert-danger row" role="alert">
                                {{ session('loginError') }}
                            </div>
                            @endif
                        </div>
                        
                        <div class="form-group pt-2 row">
                            <input name="email" type="email" class="form-control border rounded input-group input-group-lg p-3" id="exampleInputEmail" placeholder="Masukan Email">
                        </div>
                        <div class="form-group pt-4 row">
                            <input name="password" type="password" class="form-control border rounded input-group input-group-lg p-3" id="exampleInputPassword" placeholder="Masukan Password">
                        </div>
                        <div class="row pt-4">
                            <button type="submit" class="btn btn-outline-success rounded-2 btn-lg">Login E-Sawit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2><img style="width: 260px" src="{{ asset('assets/images/E-Sawit-Large-White.png') }}"></h2>
                </div>
                <div class="right-inductor"></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>