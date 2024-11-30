@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Lembur Patikang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        min-height: 100%;
        display: flex;
        flex-direction: column;
        background-image: url('assets/images/background-contact.jpg');
    }

    body,
    html {
        margin: 0;
        padding: 0;
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    /* Header */
    .main-header {
        width: 100%;
        top: 0;
        background-color: #fcfce6;
        border-bottom: 1px solid #ddd;
    }

    .custom-navbar {
        padding: 10px 0;
    }

    .logo {
        height: 60px;
    }

    .navbar-nav .nav-link {
        font-size: 1rem;
        font-weight: 600;
        color: #000;
        margin: 0 15px;
        text-transform: uppercase;
    }

    .navbar-nav .nav-link:hover {
        color: #333;
        text-decoration: none;
    }

    .location-contact-section {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .element {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: #FFF;
        border-radius: 10px;
        margin: 1%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .element h {
        text-transform: none;
        color: #5F6F52;
        font-size: 50px;
        font-weight: bold;
    }

    .capsule {
        min-height: auto;
        width: 80%;
        padding: 2%;
        background-color: #fff;
        border-radius: 50px;
        border: 1px solid #a9a9a9;
        margin: 10px;
        display: flex;
        align-items: center;
        justify-self: center;
    }

    .capsule p {
        font-size: 16px;
        font-weight: 400;
        text-transform: none;
    }

    .btn-whatsapp {
        background-color: #f4a261;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1rem;
    }

    .btn-whatsapp:hover {
        background-color: #e76f51;
    }

    .capsule p1 {
        color: turquoise;
        margin: 0 10px 0 10px;
    }
</style>

<body>
    <section class="location-contact-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Location & Contact -->
                <div class="col-lg-6">
                    <div class="element">
                        <h>Location & <br>Our Contact</h>
                        <div class="capsule">
                            <i class="fa fa-home" style="font-size: 30px; color:#5F6F52;"></i>
                            <p1>==</p1>
                            <p>Kp Patikang, Desa Citereup, <br>Panimbang, Pandeglang - Banten <br>Indonesia</p>
                        </div>
                        <div class="capsule">
                            <i class="fa fa-envelope" style="font-size:30px;color:#5F6F52"></i>
                            <p1>==</p1>
                            <p>Deden <br>+62 817-849-463<br>Mon – Fri, 8:00-22:00</p>
                        </div>
                        <a href="https://wa.me/62817849463" class="btn btn-whatsapp" target="_blank">
                            <i class="fa fa-whatsapp" style="font-size:30px;color:chocolate"></i> Click Here to Chat Us
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="element">
                        <h>Our Google <br>Maps</h>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126315.20659509597!2d106.03367431949907!3d-6.431017295315212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4202b9dc91e187%3A0x18f89808f2e4cf06!2sPandeglang%20Regency%2C%20Banten!5e0!3m2!1sen!2sid!4v1677447108163!5m2!1sen!2sid"
                            width="100%" height="297" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
@endsection
