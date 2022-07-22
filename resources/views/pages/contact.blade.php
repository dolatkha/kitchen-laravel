@extends('mainpage')
@section('content')
<div class="container-fluid bgcontact py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 mt-5 text-center">
                <h1 class="fa-4x txtorang fw-bolder">
                    Say hello to us<br>
                    <span class="text-white">love to hear you</span>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="fa-3x text-secondary fw-bolder">
                    Let's
                    <span class="txtorang">begin</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <form action="" method="post" class="form-control border-0 m-3">
                    <div class="form-floating">
                        <input type="text" name="fname" placeholder="Full Name" class="form-control mb-3">
                        <label class="form-label text-secondary">
                            Full Name
                        </label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" placeholder="Email Adress" class="form-control mb-3">
                        <label class="form-label text-secondary">
                            Email Adress
                        </label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="subject" placeholder="subject" class="form-control mb-3">
                        <label class="form-label text-secondary">
                            Subject
                        </label>
                    </div>
                    <div class="form-floating">
                        <textarea name="massege" placeholder="Tell us about the project" class="form-control mb-3"></textarea>
                        <label class="form-label text-secondary">
                            Tell us about the project
                        </label>
                    </div>
                    <input type="submit" name="sub" class="btn btnslider text-white w-25 p-3" value="SEND">
                </form>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-md-6 p-5 border-bottom border-end border-1">
                        <h4>New Business</h4>
                        <h6 class="text-secondary">HELLO@COMPANY.COM</h6>
                    </div>
                    <div class="col-md-6 p-5 border-bottom border-1">
                        <h4>Main Studio</h4>
                        <h6 class="text-secondary">STUDIO@COMPANY.COM</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-5 border-end border-1">
                        <h4>Our Office</h4>
                        <h6 class="text-secondary">Akershusstranda 20, 0150 Oslo, Norway</h6>
                    </div>
                    <div class="col-md-6 p-5">
                        <h4>Our Socials</h4>
                        <a href=""class="text-decoration-none me-3"> <i class="fab fa-youtube text-secondary"></i></a>
                        <a href=""class="text-decoration-none me-3"><i class="fab fa-whatsapp text-secondary"></i></a>
                        <a href=""class="text-decoration-none me-3"><i class="fab fa-instagram-square text-secondary"></i></a>
                        <a href=""class="text-decoration-none me-3"><i class="fab fa-skype text-secondary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
