<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

body{
    height: 100vh;
    display:block;
}

header{

    display: flex;
    flex-direction: column;
    text-align: center;
}

header h1{
    background-color: bisque;
    padding: 5px;
}

header div{
    padding: 10px;
    height: 40vh;
    background-color: rgb(58, 54, 54);
}
.profil{
    background-image: url('https://storage.googleapis.com/web-profile1/profile.JPG');
    width: 200px;
    height: 200px;
    margin: 0 auto;
    background-size: cover;
    background-position: 50%;
    border-radius: 50%;
}

main{
    display: flex;
    justify-content: space-evenly;
    height: 300px;
}

footer{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

    </style>
</head>
<body>
    <header>
        <h1>My Personal Profile</h1>
        <div style="display:flex;flex-direction: column;justify-content:space-around;">
            <div class="profil"></div>
            <h2>Revanza Raditya Putra Yanni</h2>
        </div>
    </header>
    <main>
        <div>
            <h2 style="text-align:center ;padding: 10px;">About Me</h2>
            <p>Nama saya Revanza Raditya Putra Yanni saya Adalah Mahasiswa gunadarma angkatan 2020<br>
                saat ini saya lagi membuat web profile sederhana untuk menyelesaikan submission<br>
                Dicoding
            </p>
        </div>
        <div>
            <h2 style="text-align:center ;padding: 10px;">Biodata</h2>
            <p>Nama : Revanza Raditya Putra Yanni</p>
            <p>Email : revanza.py@gmail.com</p>
            <p>No. Hp : 081289031375</p>
        </div>
    </main>
    <footer>
        <div style="text-align:center ;">
            <h2>Contact Me</h2>
        </div>
        <div style="display:flex ;justify-content: space-evenly;font-size: x-large;">
            <a href="https://www.facebook.com/revanza.raditya/">Facebook</a>        
            <a href="https://www.linkedin.com/in/revanza-raditya-py-b4042b261/">linkedin</a>  
            <a href="https://www.instagram.com/revanzarpy/?hl=id">instagram</a>  
        </div>
    </footer>
</body>
</html>