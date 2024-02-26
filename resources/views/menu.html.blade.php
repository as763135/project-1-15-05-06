<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>โกดังพรม
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>txengkwa@icloud.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="123 text-dark me-3"></i>PROM STORE</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>0858028222</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="123 fs-1 text-primary me-3"></i>prom store</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="/" class="nav-item nav-link active">หน้าหลัก</a>
                <a href="/about" class="nav-item nav-link">เกี่ยวกับเรา</a>
                <a href="menu.html" class="nav-item nav-link">สินค้า</a>
                <a href="ผลงานของเรา.html" class="nav-item nav-link">ผลงานของเรา</a>
                <a href="/contact" class="nav-item nav-link">ช่องทางติดต่อ</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">เข้าสู่ระบบ</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">สมัครสมาชิก</a>
            
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 bg-offer">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-4">Welcome</h1>
                    <h1 class="display-1 text-uppercase text-white mb-4">Prom store</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">เกี่ยวกับเรา</h2>
                <h1 class="display-4 text-uppercase">Welcome To prom store</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/ตัวอย่าง4.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4">ร้าน prom store</h4>
                    <p class="mb-5">ร้านของเราเป็นธุระกิจเกี่ยวกับการชื้อ-ขายพรม บริการจัดหา ผลิต และติดตั้งพรม 
                        เพื่อตอบสนองความต้องการของลูกค้า ด้วยทีมช่างพรมที่มีความชำนาญและเรามีการพัฒนาอยู่เสมอจากประสบการณ์การเปิดร้านมานานกว่า 40 ปี
                        ทำให้เราผลิตสินค้าออกมาได้เป็นที่น่าพอใจแก่ลูกค้าเสมอมา</p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">ความพอใจลูกค้า</h4>
                            <p class="mb-0">100%</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">ความชำนาญ</h4>
                            <p class="mb-0">120%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid bg-img py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Our Experience</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12123</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Prom Specialist</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Complete Project</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Happy Clients</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">สินค้า</h2>
                <h1 class="display-4 text-uppercase">type</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">พรมอัดลูกฟูก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">พรมทอ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">เพิ่มเติม</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ลูกฟูก 2.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">200 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมอัดลูกฟูก สีเบจ</h5>
                                        <span>นิยมปูทั่วไป เช่น ในพื้นที่บ้าน คอนโด ห้องนอน ห้องนั่งเล่น </span>
                                        <span>ขายเป็นม้วน มีขนาด 1.50 x 24 ม.</span>
                                        <span>และขนาด 2 x 24 ม.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ลูกฟูก 1.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">200 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมอัดลูกฟูก สีเขียว</h5>
                                        <span>นิยมใช้ปูทั่วไป เช่น ที่จัดประชุม ที่จัดงานเลี้ยง ทางเดิน</span>
                                        <span>ขายเป็นม้วน มีขนาด 1.50 x 24 ม.</span>
                                        <span>และขนาด 2 x 24 ม.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ลูกฟูก 4.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">200 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมอัดลูกฟูก สีแดงสด</h5>
                                        <span>นิยมใช้ปูทั่วไป เช่น ในวิหาร โบสถ์ ทางเดิน</span>
                                        <span>ขายเป็นม้วน มีขนาด 1.50 x 24 ม.</span>
                                        <span>และขนาด 2 x 24 ม.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ลูกฟูก.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">200 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมอัดลูกฟูก สีอื่นๆ</h5>
                                        <span>เวลาผลิตไม่เกิน 7 วัน หลังการอนุมัติ</span>
                                        <span>ขายเป็นม้วน มีขนาด 1.50 x 24 ม.</span>
                                        <span>และขนาด 2 x 24 ม.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/03.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">1500-2000 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมทอมือตามแบบ</h5>
                                        <span>เหมาะกับสถานที่ที่ต้องการความหรูหราเป็นพิเศษ ราคาขึ้นอยู่กับเส้นใยที่ใช้ผลิต เวลาผลิต 45-60 วัน หลังการอนุมัติ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ทอ 2.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">400-800 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมทอด้วยเครื่องจักร สีแดง</h5>
                                        <span>นิยมใช้ปูทั่วไปในสถานที่จัดงานสีดำ ห้องจัดเลี้ยง ทางเดิน ห้องพักในโรงแรม </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ทอ.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">400-800 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมทอด้วยเครื่องจักร สีอื่นๆ</h5>
                                        <span>เหมาะกับสถานที่ที่ต้องการความหรูหราเป็นพิเศษ ราคาขึ้นอยู่กับเส้นใยที่ใช้ผลิต เวลาผลิต 5-10 วัน หลังการอนุมัติ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ทอ 1.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">400-800 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">พรมทอด้วยเครื่องจักร สีฟ้า</h5>
                                        <span>เหมาะกับห้องจัดเลี้ยง ทางเดิน ห้องพักในโรงแรม ที่มีพื้นที่ขนาดใหญ่</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/เย็บขอบ.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">60-80 บาท/ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">เย็บตกแต่งขอบพรม</h5>
                                        <span>สำหรับพรมอัด 60 บาท/ม.</span>
                                        <span>สำหรับพรมทอ 80 บาท/ม.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ซัก 2.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">80 บาท/ตร.ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">ซักพรม</h5>
                                        <span>พรมทุกประเภทราคาเดียวกัน</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ต่อ.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">60-80 บาท/ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">เย็บต่อพรมด้วยมือ</h5>
                                        <span>สำหรับพรมอัด 60 บาท/ม.</span>
                                        <span>สำหรับพรมทอ 80 บาท/ม.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{asset('frontend/img/ตัด.jpg')}}" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">20 บาท/ม.</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">ตัดพรม</h5>
                                        <span>พรมทุกประเภทราคาเดียวกัน</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">พรมอัดลูกฟูก</h4>
                        <p>ข้อมูล พรหม</p>
                        <a class="text-uppercase text-dark" href="">สำหรับปูพื้นห้อง ราคาถูก ติดตั้งง่าย อายุการใช้งาน 2-5 ปีขึ้นอยู่กับการใช้งาน ซับเสียงได้ดี มีสีเดียวในหนึ่งผืน มีขนเป็นห่วงลอน ผลิตจากเส้นใยสังเคราะห์โพรพิลีนและโพลิเอสเตอร์</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">พรมทอด้วยเครื่องจักร</h4>
                        <p>ข้อมูล พรหม</p>
                        <a class="text-uppercase text-dark" href="">ทอด้วยเครื่องจักรแบบพิเศษ จุดเด่นอยู๋ที่รอยต่อน้อย ติดตั้งง่าย ให้ความสวยงามต่อเนื่องเป็นผืนเดียว
                            สินค้ามีให้เลือกมากมายหลายคุณภาพ จัดได้ตามงบประมาณ อายุการใช้งาน 7-10 ปีขึ้นอยู่กับการใช้งานและวัสดุที่ใช้ทอ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">พรมทอมือ</h4>
                        <p>ข้อมูล พรหม</p>
                        <a class="text-uppercase text-dark" href="">สามารถออกแบบขนาด ดีไซน์สีสันที่ต้องการ เพื่อให้ได้ผืนพรมที่ตรงกับความต้องการของลูกค้า ด้วยเส้นใยคุณภาพสูง เช่น อะคริลิค ไนลอน ขนแกะฯลฯ
                        หรือเลือกทอผสมหลายเส้นใยในพรมผืนเดียวได้ อายุการใช้งานมากกว่า 10 ปีขึ้นไป
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->

    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">บริการพิเศษ</h2>
                        <h1 class="display-4 text-uppercase text-white">ฟรี!! พรมเช็ดเท้า 3 ผืน</h1>
                    </div>
                    <p class="text-white mb-4"> สำหรับลูกค้าที่สั่งชื้อพรมกับเรา</p>
                    <p class="text-white mb-4"> ฟรี!! ค่าบริการเย็บตกแต่งขอบพรม ค่าตัดพรม ค่าเย็บต่อพรม พร้อมค่าส่ง</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div> 
    <!-- Offer End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">ผลงานของเรา</h2>
                <h1 class="display-4 text-uppercase">performance</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/ตัวอย่างงาน3.jpg')}}" style="width: 800px; height: 430px;">
                    </div>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">วัดอรัญญาวาศ</h4>
                            <p>ส่งต่างจังหวัด อำเภอวังโป้ง จังหวัดเพรชบรูณ์</p>
                            <p>20 กันยายน 2566 เป็นงานพรมลูกฟูก สีแดงสด</p>
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/ตัวอย่างงาน2.jpg')}}" style="width: 800px; height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">วัดพุฒิปรางค์ปราโมทย์</h4>
                            <p>ณ โบสถ์ตั้งพระประธานประจำวัด</p>
                            <p>21 กันยายน 2566 สินค้าเป็นงานพรมทอ สีแดงสด</p>
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/05.jpg')}}" style="width: 350px; height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">วัดเฉลิมพระเกียรติวรวิหาร</h4>
                            <p>งานมรณภาพพระพรหมวัชรจริยาจารย์ เจ้าอาวาสวัดเฉลิมพระเกียรติวรวิหาร</p>
                            <p>30 สิงหาคม 2566 สินค้าเป็นงานพรมทอ สีแดงเข้ม</p>
                            <img class="img-fluid flex-shrink-0" src="{{asset('frontend/img/ตัวอย่างงาน1.jpg')}}" style="width: 800px; height: 280px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->  
    
    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 90px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mb-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="123 fs-1 text-dark me-3"></i>prom store</h1>
                        </a>
                        <p class="mt-3">ร้านของเรา ยินดีต้อนรับลูกค้าทุกท่าน พร้อมให้คำปรึกษาและแนะนำสินค้าด้วยหัวใจรักบริการ</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">70/31 bangsrimuang Nonthaburi 11000</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">txengkwa@icloud.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">0858028222</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>หน้าหลัก</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>เกี่ยวกับเรา</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>สินค้า</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>ผลงานของเรา</a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>ช่องทางติดต่อ</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">จดหมายแจ้ง</h4>
                            <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Kodang prom store</a>. All Rights Reserved. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>