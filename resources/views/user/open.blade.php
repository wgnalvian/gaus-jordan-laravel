<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body style="padding: 0;margin: 0;">
    <img src="{{url('/images/wood.jpg')}}" style="position: absolute;height: 100vh; width: 100vw;z-index: -1;" alt="" srcset="">
    <div style="width: 100vw;height: 100vh;display: flex;align-items: center;justify-content: center;">
    
        <div class="container" style=" 
        border-radius: 5rem;
        -webkit-backdrop-filter: blur(20px);
        backdrop-filter: blur(50px); flex-direction: column;width: 80vw;height: 80vh;display: flex;justify-content: center;align-items: center;">
            <p style="font-size: 2rem;color: white;font-weight: bolder">SELAMAT DATANG DI WEBSITE PERHITUNGAN</p>
            <p style="font-size: 2rem;color: white;font-weight: bolder" >METODE GAUS JORDAN STUDI KASUS  FRL INDUSTRI</p>
            <a href="{{url('/auth/login')}}"  style="margin-top: 5rem;padding: 1rem 3rem 1rem 3rem;background-color:  yellow; text-decoration: none ; color: brown; border: none;font-size: 2rem;font-weight: bolder;border-radius: 1rem" >LANJUT</a>
        </div>
    </div>
</body>
</html>