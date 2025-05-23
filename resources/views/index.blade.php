@extends('layouts.app')

@section('title', 'DRRD Home')


@section('content')

<!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Department of Rural Road Development</h4>
                        <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">DRRD</h1>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">since the 2017</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Department of Rural Road Development</h5>
                        <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">DRRD</h1>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">since the 2017</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
    
<!-- About Start -->
<div class="container py-5">
    <h2 class="text-center mb-4">အကြောင်းအရာ</h2>

    <!-- Tabs Header -->
    <ul class="nav nav-tabs justify-content-center mb-4" id="aboutTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab"><i class="fas fa-history me-2"></i>သမိုင်းကြောင်း</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab"><i class="fas fa-eye me-2"></i>မျှော်မှန်းချက်</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab"><i class="fas fa-tasks me-2"></i>လုပ်ငန်းတာဝန်များ</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="goal-tab" data-bs-toggle="tab" data-bs-target="#goal" type="button" role="tab"><i class="fas fa-bullseye me-2"></i>ရည်မှန်းချက်</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="policy-tab" data-bs-toggle="tab" data-bs-target="#policy" type="button" role="tab"><i class="fas fa-gavel me-2"></i>မူဝါဒများ</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="process-tab" data-bs-toggle="tab" data-bs-target="#process" type="button" role="tab"><i class="fas fa-cogs me-2"></i>လုပ်ငန်းစဉ်များ</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="structure-tab" data-bs-toggle="tab" data-bs-target="#structure" type="button" role="tab"><i class="fas fa-sitemap me-2"></i>ဖွဲ့စည်းပုံ</button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content p-4 border rounded bg-light" id="aboutTabContent ">

        @include('tabs.history')
        @include('tabs.vision')
        @include('tabs.mission')
        @include('tabs.goal')
        @include('tabs.policy')
        @include('tabs.process')



        <!-- Structure Tab Content -->
        <div class="tab-pane fade" id="structure" role="tabpanel" aria-labelledby="structure-tab">
            <h4>ဖွဲ့စည်းပုံ</h4>
            <div class="row mt-4">
                <!-- Left Column Tabs -->
                <div class="col-md-4">
                    <ul class="nav flex-column nav-pills" id="structureSubTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-center" id="subtab1-tab" data-bs-toggle="pill" data-bs-target="#subtab1" type="button" role="tab">ပြည်ထောင်စုအဆင့်ကျေးလက်လမ်းဖွံ့ဖြိုးရေးဦးစီးဌာန</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-center" id="subtab2-tab" data-bs-toggle="pill" data-bs-target="#subtab2" type="button" role="tab">ကျေးလက်လမ်းဖွံ့ဖြိုးရေးဦးစီးဌာန(ရုံးချုပ်)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-center" id="subtab3-tab" data-bs-toggle="pill" data-bs-target="#subtab3" type="button" role="tab">တိုင်းဒေသကြီး/ပြည်နယ်အဆင့်</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-center" id="subtab4-tab" data-bs-toggle="pill" data-bs-target="#subtab4" type="button" role="tab">ခရိုင်အဆင့်</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-center" id="subtab5-tab" data-bs-toggle="pill" data-bs-target="#subtab5" type="button" role="tab">ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-center" id="subtab6-tab" data-bs-toggle="pill" data-bs-target="#subtab6" type="button" role="tab">မြို့နယ်အဆင့်</button>
                        </li>
                    </ul>
                </div>

                <!-- Right Column Images -->
                <div class="col-md-8">
                    <div class="tab-content border p-1 bg-white rounded" id="structureSubTabContent">
                        <div class="tab-pane fade show active" id="subtab1" role="tabpanel" aria-labelledby="subtab1-tab">
                            <img src="{{ asset('img/s1.jpg') }}" class="img-fluid rounded" alt="ဌာန (၁)">
                        </div>
                        <div class="tab-pane fade" id="subtab2" role="tabpanel" aria-labelledby="subtab2-tab">
                            <img src="{{ asset('img/s2.jpg') }}" class="img-fluid rounded" alt="ဌာန (၂)">
                        </div>
                        <div class="tab-pane fade" id="subtab3" role="tabpanel" aria-labelledby="subtab3-tab">
                            <img src="{{ asset('img/s3.jpg') }}" class="img-fluid rounded" alt="ဌာန (၃)">
                        </div>
                        <div class="tab-pane fade" id="subtab4" role="tabpanel" aria-labelledby="subtab4-tab">
                            <img src="{{ asset('img/s4.jpg') }}" class="img-fluid rounded" alt="ဌာန (၄)">
                        </div>
                        <div class="tab-pane fade" id="subtab5" role="tabpanel" aria-labelledby="subtab5-tab">
                            <img src="{{ asset('img/s5.jpg') }}" class="img-fluid rounded" alt="ဌာန (၅)">
                        </div>
                        <div class="tab-pane fade" id="subtab6" role="tabpanel" aria-labelledby="subtab6-tab">
                            <img src="{{ asset('img/s6.jpg') }}" class="img-fluid rounded" alt="ဌာန (၆)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Structure Tab Content End -->
    </div>
</div>
<!-- About End -->


              <!-- Counter Facts Start -->
        <div class="container-fluid counter-facts py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="counter-content">
                                <h3>ရုံးစုစုပေါင်း</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">150</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="counter-content">
                                <h3>အရာထမ်း</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">350</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="counter-content">
                                <h3>အမှုထမ်း</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">940</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="counter-content">
                                <h3>နေ့စားဝန်ထမ်း</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">171</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Facts End -->


        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h3 class="sub-title text-primary px-3">
                            <img src="img/brand-logo.png" alt="Logo" style="height: 50px; margin-right: 8px;">
                            နောက်ဆုံးရသတင်းများ
                        </h3>

                    </div>
            
                   <div class="marquee-wrapper">
                        <p class="marquee-text">
                            သမဝါယမနှင့်ကျေးလက်ဖွံ့ဖြိုးရေးဝန်ကြီးဌာန ၊ ကျေးလက်လမ်းဖွံ့ဖြိုးရေးဦးစီးဌာန၏ နောက်ဆုံးရသတင်းများကို ဖတ်ရှုပါ။
                        </p>
                    </div>


                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="hover-date">၁၇-မေ-၂၀၂၅</div>
                            </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#"><span class="text-white fs-6">မန္တလေးတိုင်းဒေသကြီး</span></a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h6 class="text-white mb-4 py-3">မိတ္ထီလာမြို့နယ်</h6></a>
                                        <div class="px-4">
                                            <p class="mb-4"> မန္တလေးတိုင်းဒေသကြီး၊ မိတ္ထီလာမြို့နယ်တွင် ၂၀၂၄-၂ဝ၂၅ ဘဏ္ဍာရေးနှစ်နှင့် ၂ဝ၂၅-၂၀၂၆ ဘဏ္ဍာရေးနှစ် ပြည်ထောင်စု ပြင်ဆင်ထိန်းသိမ်းခြင်းရန်ပုံငွေဖြင့် မိတ္ထီလာ-သာစည်လမ်းမှ စက်ပစ် တောင် ကျေးရွာသွားလမ်းပေါ်ရှိ စက်ပစ်တောင်တံတား ပြန်လည်ပြုပြင်တည်ဆောက်လုပ်ငန်း ရာနှုန်းပြည့်ပြီးစီးပြီဖြစ်ကြောင်း မြို့နယ်ကျေးလက်လမ်းဖွံ့ဖြိုးရေးဦးစီးဌာနမှ သိရသည်။</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="hover-date">၁၆-မေ-၂၀၂၅</div>
                            </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#"><span class="text-white fs-6">နေပြည်တော်</span></a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h6 class="text-white mb-4 py-3">ဇဗ္ဗူသီရိမြို့နယ်</h6></a>
                                        <div class="px-4">
                                            <p class="mb-4"> ပြည်ထောင်စုဝန်ကြီး ဦးလှမိုး လယ်ဝေးမြို့နယ် ပေါင်းလောင်း-ကြို့ပင်သာ စစ်တောင်းမြစ်ကူးတံတား ကြည့်ရှုစစ်ဆေး</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                <img src="img/n1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="hover-date">၁၂-ဧပြီ -၂၀၂၅</div>
                            </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#"><span class="text-white fs-6">နေပြည်တော်</span></a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h6 class="text-white mb-4 py-3">ပျဉ်းမနားမြို့နယ်</h6></a>
                                        <div class="px-4">
                                            <p class="mb-4"> သမဝါယမနှင့် ကျေးလက်ဖွံ့ဖြိုးရေးဝန်ကြီးဌာန၊ ဒုတိယဝန်ကြီး ဦးမြင့်စိုးသည် တာဝန်ရှိသူ များလိုက်ပါလျက် ယနေ့နံနက်ပိုင်းက နေပြည်တော်ကောင်စီနယ်မြေ၊ ပျဉ်းမနားမြို့နယ်၊ ကျွန်းဦး စံပြကျေးရွာ (Smart Village) သို့ သွားရောက်၍ ကျေးလက်ဒေသဖွံ့ဖြိုးတိုးတက်ရေးဦးစီးဌာနက ရွေ့လျားရေသန့်စင်ကားဖြင့် အထိုင်ချကာ သောက်သုံးရေဖြန့်ဝေပေးနေမှုကို ကြည့်ရှုအားပေးခဲ့သည်။</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                <img src="img/n2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="hover-date">၂၃-မတ်-၂၀၂၅</div>
                            </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#"><span class="text-white fs-6">ဧရာဝတီတိုင်းဒေသကြီး၊</span></a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h6 class="text-white mb-4 py-3">လေးမျက်နှာမြို့နယ်</h6></a>
                                        <div class="px-4">
                                            <p class="mb-4"> ဒုတိယဝန်ကြီး ဦးမြင့်စိုး လေးမျက်နှာမြို့နယ်၊ ခတ္တူ-ခုံကြီး-ခြောက်ဆယ်-ရိုးကြီး သံကူကွန်ကရစ်တံတား တည်ဆောက်ပြီးစီးမှု ကြည့်ရှုစစ်ဆေး</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                <img src="img/n3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="hover-date">၃၀-ဇန်နဝါရီ-၂၀၂၅</div>
                            </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#"><span class="text-white fs-6">နေပြည်တော်</span></a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h6 class="text-white mb-4 py-3">မိတ္ထီလာမြို့နယ်</h6></a>
                                        <div class="px-4">
                                            <p class="mb-4">  (၇၈) နှစ်မြောက် ပြည်ထောင်စုနေ့ကို ကြိုဆိုဂုဏ်ပြုသောအားဖြင့် သမဝါယမနှင့် ကျေးလက် ဖွံ့ဖြိုးရေးဝန်ကြီးဌာန၊ ကျေးလက်လမ်းဖွံ့ဖြိုးရေးဦးစီးဌာန၏ ၂၀၂၄-၂၀၂၅ ဘဏ္ဍာနှစ် ပြည်ထောင်စု ခွင့်ပြုရန်ပုံငွေဖြင့် တည်ဆောက်ခဲ့သော ရွာသစ်ကျေးရွာနှင့် အောင်မြင်ကုန်းကျေးရွာချင်းဆက် ပေ (၁၅၀) သံကူကွန်ကရစ်တံတား ဖွင့်ပွဲအခမ်းအနား</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                <img src="img/n4.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="hover-date">၁၅-ဇန်နဝါရီ-၂၀၂၅</div>
                            </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#"><span class="text-white fs-6">ကယားပြည်နယ်</span></a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h6 class="text-white mb-4 py-3">လွိုင်ကော်မြို့နယ်</h6></a>
                                        <div class="px-4">
                                            <p class="mb-4"> ဒုတိယဝန်ကြီး ဦးမြင့်စိုး လွိုင်ကော်မြို့ရှိ ဝန်ထမ်းများနှင့်တွေ့ဆုံ ၊ ဖွံ့ဖြိုးရေးလုပ်ငန်းများ ကြည့်ရှုစစ်ဆေး</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">ဆက်လက်ဖတ်ရှုရန်</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- ဆောင်းပါးများ -->
        <div class="container-fluid features overflow-hidden py-5">
            <div class="container">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h3 class="sub-title text-primary px-3">ဆောင်းပါးများ</h3>
                    </div>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <img src="img/brand-logo.png" alt="Feature Icon" class="img-fluid" style="width: 75px; height: 75px;">
                            </div>

                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">ဦးမြင့်စိုး</h5>
                                <p class="mb-3">ပြည်ထောင်စုအဆင့် MSME ထုတ်ကုန်ပြပွဲနှင့် ပြိုင်ပွဲမှသည် နိုင်ငံတော်ဖွံ့ဖြိုးတိုးတက်ရေးဆီသို့ (၇)</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <img src="img/brand-logo.png" alt="Feature Icon" class="img-fluid" style="width: 75px; height: 75px;">
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Visa Assistance</h5>
                                <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <img src="img/brand-logo.png" alt="Feature Icon" class="img-fluid" style="width: 75px; height: 75px;">
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Faster Processing</h5>
                                <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <img src="img/brand-logo.png" alt="Feature Icon" class="img-fluid" style="width: 75px; height: 75px;">
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Direct Interviews</h5>
                                <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ဆောင်းပါးများ End -->



        <!-- ရုပ်သံသတင်းများ Start -->
<div class="container-fluid country overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <div class="sub-style">
                <h3 class="sub-title text-primary px-3">ရုပ်သံသတင်းများ</h3>
            </div>
        </div>

        <!-- Video Grid with 3 videos per row -->
        <div class="row g-5 text-center">
            <!-- First Row -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                       <video class="img-fluid w-100 rounded" controls preload="none" poster="{{ asset('img/tumbnail.jpeg') }}">
  <source src="{{ asset('videos/MRTV.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>


                    </div>
                    <div class="country-flag">
                        <img src="img/brand-logo.png" class="img-fluid rounded-circle" alt="Image" style="border: none;">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">နေပြည်တော်</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                     <video class="img-fluid w-100 rounded" controls preload="none" poster="{{ asset('img/tumbnail.jpeg') }}">
  <source src="{{ asset('videos/MRTV.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

                    </div>
                    <div class="country-flag">
                        <img src="img/brand-logo.png" class="img-fluid rounded-circle" alt="Image" style="border: none;">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">ရန်ကုန်</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                     <video class="img-fluid w-100 rounded" controls preload="none" poster="{{ asset('img/tumbnail.jpeg') }}">
  <source src="{{ asset('videos/MRTV.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

                    </div>
                    <div class="country-flag">
                        <img src="img/brand-logo.png" class="img-fluid rounded-circle" alt="Image" style="border: none;">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">တနင်္သာရီ</a>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                     <video class="img-fluid w-100 rounded" controls preload="none" poster="{{ asset('img/tumbnail.jpeg') }}">
  <source src="{{ asset('videos/MRTV.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

                    </div>
                    <div class="country-flag">
                        <img src="img/brand-logo.png" class="img-fluid rounded-circle" alt="Image" style="border: none;">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">ပဲခူးတိုင်း</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                     <video class="img-fluid w-100 rounded" controls preload="none" poster="{{ asset('img/tumbnail.jpeg') }}">
  <source src="{{ asset('videos/MRTV.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

                    </div>
                    <div class="country-flag">
                        <img src="img/brand-logo.png" class="img-fluid rounded-circle" alt="Image" style="border: none;">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">မန္တလေး</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                     <video class="img-fluid w-100 rounded" controls preload="none" poster="{{ asset('img/tumbnail.jpeg') }}">
  <source src="{{ asset('videos/MRTV.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

                    </div>
                    <div class="country-flag">
                        <img src="img/brand-logo.png" class="img-fluid rounded-circle" alt="Image" style="border: none;">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">မကွေး</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center mt-4">
            <a class="btn btn-warning border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Videos</a>
        </div>
    </div>
</div>
<!-- ရုပ်သံသတင်းများ End -->


        <!-- သင်တန်းများ Start -->
        <div class="container-fluid testimonial overflow-hidden pb-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h3 class="sub-title text-primary px-3">သင်တန်းများ </h3>
                    </div>
                    
                </div>
                <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-5 mb-0">GIS Advanced Training.၂၀၂၅-၂၀၂၆ ဘဏ္ဍာနှစ် တွင်သင်တန်းသား အယောက်(၂၇)ဦးအားသင်ကြားပေးခြင်း
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>ဦးရာဇာထွန်း</h5>
                                <p class="mb-0">ဦးစီးအရာရှိ</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- သင်တန်းများ End -->



        <!-- တင်ဒါများ Start -->
<div class="container-fluid training overflow-hidden bg-light py-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h3 class="sub-title text-primary px-3">တင်ဒါများ</h3>
            </div>
        </div>

        <!-- Single Row with 5 PDFs Centered -->
        <div class="row g-4 justify-content-center text-center">
            <!-- PDF 1 -->
            <div class="col-lg-2 col-md-4 d-flex flex-column align-items-center text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-item position-relative " style="border: 1px solid black; border-radius: 10px; padding: 10px; background-color:lightgrey">
                    <p style="background-color: #f9d10f; color: blue; padding: 5px 10px; border-radius: 5px; font-size: 10px;">
                        မန္တလေးတိုင်းဒေသကြီးအတွင်း လမ်း/တံတားလုပ်ငန်းများအတွက် အိတ်ဖွင့်တင်ဒါခေါ်ယူခြင်း
                    </p>
                    <embed src="{{ asset('pdfs/1.pdf') }}" type="application/pdf" width="100%" height="300px" style="display: block; margin: auto;">
                    <div class="training-content rounded-bottom p-3" style="background-color: #f9d10f; color: blue;">
                        <p style="color: blue;">မန္တလေးတိုင်းဒေသကြီး</p>
                        <a href="{{ asset('pdfs/1.pdf') }}" download class="btn btn-primary rounded-pill text-white">
                            Download <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PDF 2 -->
            <div class="col-lg-2 col-md-4 d-flex flex-column align-items-center text-center wow fadeInUp" data-wow-delay="0.3s" >
                <div class="training-item position-relative " style="border: 1px solid black; border-radius: 10px; padding: 10px; background-color:lightgrey">
                    <p style="background-color: #f9d10f; color: blue; padding: 5px 10px; border-radius: 5px; font-size: 10px;">
                        မကွေးတိုင်းဒေသကြီးအတွင်း လမ်း/တံတားလုပ်ငန်းများအတွက် အိတ်ဖွင့်တင်ဒါခေါ်ယူခြင်း
                    </p>
                    <embed src="{{ asset('pdfs/2.pdf') }}" type="application/pdf" width="100%" height="300px" style="display: block; margin: auto;">
                    <div class="training-content rounded-bottom p-3" style="background-color: #f9d10f; color: blue;">
                        <p style="color: blue;">မကွေးတိုင်းဒေသကြီး</p>
                        <a href="{{ asset('pdfs/2.pdf') }}" download class="btn btn-primary rounded-pill text-white">
                            Download <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PDF 3 -->
            <div class="col-lg-2 col-md-4 d-flex flex-column align-items-center text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="training-item position-relative " style="border: 1px solid black; border-radius: 10px; padding: 10px; background-color:lightgrey">
                    <p style="background-color: #f9d10f; color: blue; padding: 5px 10px; border-radius: 5px; font-size: 10px;">
                        ပဲခူးတိုင်းဒေသကြီးအတွင်း လမ်း/တံတားလုပ်ငန်းများအတွက် အိတ်ဖွင့်တင်ဒါခေါ်ယူခြင်း
                    </p>
                    <embed src="{{ asset('pdfs/3.pdf') }}" type="application/pdf" width="100%" height="300px" style="display: block; margin: auto;">
                    <div class="training-content rounded-bottom p-3" style="background-color: #f9d10f; color: blue;">
                        <p style="color: blue;">ပဲခူးတိုင်းဒေသကြီး</p>
                        <a href="{{ asset('pdfs/3.pdf') }}" download class="btn btn-primary rounded-pill text-white">
                            Download <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PDF 4 -->
            <div class="col-lg-2 col-md-4 d-flex flex-column align-items-center text-center wow fadeInUp" data-wow-delay="0.7s">
                <div class="training-item position-relative " style="border: 1px solid black; border-radius: 10px; padding: 10px; background-color:lightgrey">
                    <p style="background-color: #f9d10f; color: blue; padding: 5px 10px; border-radius: 5px; font-size: 10px;">
                        တနင်္သာရီတိုင်းဒေသကြီးအတွင်း လမ်း/တံတားလုပ်ငန်းများအတွက် အိတ်ဖွင့်တင်ဒါခေါ်ယူခြင်း
                    </p>
                    <embed src="{{ asset('pdfs/4.pdf') }}" type="application/pdf" width="100%" height="300px" style="display: block; margin: auto;">
                    <div class="training-content rounded-bottom p-3" style="background-color: #f9d10f; color: blue;">
                        <p style="color: blue;">တနင်္သာရီတိုင်းဒေသကြီး</p>
                        <a href="{{ asset('pdfs/4.pdf') }}" download class="btn btn-primary rounded-pill text-white">
                            Download <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PDF 5 -->
            <div class="col-lg-2 col-md-4 d-flex flex-column align-items-center text-center wow fadeInUp" data-wow-delay="0.9s">
                <div class="training-item position-relative " style="border: 1px solid black; border-radius: 10px; padding: 10px; background-color:lightgrey">
                    <p style="background-color: #f9d10f; color: blue; padding: 5px 10px; border-radius: 5px; font-size: 10px;">
                        ရန်ကုန်တိုင်းဒေသကြီးအတွင်း လမ်း/တံတားလုပ်ငန်းများအတွက် အိတ်ဖွင့်တင်ဒါခေါ်ယူခြင်း
                    </p>
                    <embed src="{{ asset('pdfs/5.pdf') }}" type="application/pdf" width="100%" height="300px" style="display: block; margin: auto;">
                    <div class="training-content rounded-bottom p-3" style="background-color: #f9d10f; color: blue;">
                        <p style="color: blue;">ရန်ကုန်တိုင်းဒေသကြီး</p>
                        <a href="{{ asset('pdfs/5.pdf') }}" download class="btn btn-primary rounded-pill text-white">
                            Download <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center mt-4">
            <a class="btn btn-warning border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">View More</a>
        </div>
    </div>
</div>
<!-- တင်ဒါများ End -->


        <!-- Contact Start -->
        
<!-- Section -->
 <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h3 class="sub-title text-primary px-3">အစိုးရဝန်ကြီးဌာန Websites
                    </div>
                     </div>


  <div class="row" id="ministryContainer"></div>
  <div class="text-center mt-3">
    <button class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#allMinistriesModal">
      See More
    </button>
  </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="allMinistriesModal" tabindex="-1" aria-labelledby="allMinistriesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" 
    style="width: 80%; height: 400px; display: flex; align-items: center; justify-content: center; 
    margin: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
       <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="allMinistriesModalLabel">ဝန်ကြီးဌာနများ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ပိတ်ရန်"></button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center text-center" id="modalMinistryContainer"></div>

      </div>
    </div>
  </div>
</div>

<!-- Script -->
<script>
  const ministries = [
    { name: "မြန်မာ့အသံနှင့်ရုပ်မြင်သံကြား", url: "https://mrtv.gov.mm" },
    { name: "Myawady Web Portal", url: "http://www.myawady.net.mm" },
    { name: "ကာကွယ်ရေးဝန်ကြီးဌာန", url: "https://www.mod.gov.mm/?d=1" },
    { name: "ပြည်ထဲရေးဝန်ကြီးဌာန", url: "https://www.moha.gov.mm/index.php?lang=en" },
    { name: "မြန်မာနိုင်ငံရဲတပ်ဖွဲ့", url: "https://www.policeforce.gov.mm/?d=1" },
    { name: "မီးသတ်ဦးစီးဌာန", url: "https://www.fsd.gov.mm/home" },
    { name: "ပို့ဆောင်ရေးနှင့်ဆက်သွယ်ရေး ဝန်ကြီးဌာန", url: "http://www.motc.gov.mm" },
    { name: "စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန", url: "http://www.mopf.gov.mm" },
    { name: "နိုင်ငံခြားရေးဝန်ကြီးဌာန", url: "http://www.mofa.gov.mm" },
    { name: "ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံးဝန်ကြီးဌာန", url: "https://www.yangon.gov.mm/office-of-the-union-government-ministry/" },
    { name: "နယ်စပ်ရေးရာဝန်ကြီးဌာန", url: "http://www.moba.gov.mm" },
    { name: "ပြန်ကြားရေးဝန်ကြီးဌာန", url: "http://www.moi.gov.mm" },
    { name: "သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန", url: "https://www.moculture.gov.mm/relig" },
    { name: "သမဝါယမနှင့်ကျေးလက် ဖွံ့ဖြိုးရေးဝန်ကြီးဌာန", url: "https://mcrd.gov.mm/" },
    { name: "လျှပ်စစ်စွမ်းအားဝန်ကြီးဌာန", url: "https://www.moep.gov.mm/" },
    { name: "စွမ်းအင်ဝန်ကြီးဌာန", url: "https://energy.gov.mm/" },
    { name: "စက်မှုဝန်ကြီးဌာန", url: "http://www.industry.gov.mm" },
    { name: "လူဝင်မှုကြီးကြပ်ရေးနှင့် ပြည်သူ့အင်အားဝန်ကြီးဌာန", url: "http://www.mip.gov.mm/" },
    { name: "အလုပ်သမားဝန်ကြီးဌာန", url: "http://www.mol.gov.mm" },
    { name: "ပညာရေးဝန်ကြီးဌာန", url: "http://www.moe.gov.mm" },
    { name: "သိပ္ပံနှင့်နည်းပညာဝန်ကြီးဌာန", url: "https://www.most.gov.mm/" },
    { name: "ဆောက်လုပ်ရေးဝန်ကြီးဌာန", url: "https://www.construction.gov.mm/" },
    { name: "လူမူဝန်ထမ်း၊ ကယ်ဆယ်ရေးနှင့်ပြန်လည်နေရာချထားရေးဝန်ကြီးဌာန", url: "http://www.moswrr.gov.mm" },
    { name: "ဟိုတယ်နှင့်ခရီးသွားလာရေး ဝန်ကြီးဌာန", url: "https://tourisminmyanmar.com.mm/mm" },
    { name: "တိုင်းရင်းသားလူမျိုးများရေးရာ ဝန်ကြီးဌာန", url: "http://portal.moea.gov.mm" },
    { name: "ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး", url: "http://www.oagmac.gov.mm" },
    { name: "ပြည်ထောင်စုရာထူးဝန်အဖွဲ့", url: "https://www.ucsb.gov.mm/" },
    { name: "မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်", url: "http://www.cbm.gov.mm" }
  ];

  const previewContainer = document.getElementById("ministryContainer");
  const modalContainer = document.getElementById("modalMinistryContainer");

  function createMinistryCard(min) {
    const col = document.createElement("div");
    col.className = "col-md-6 col-lg-4 col-xl-3 mb-4";
    col.innerHTML = `
      <div class="ministry justify-content-center text-center">
        <div class="office-logo mb-3">
          <img src="https://www.google.com/s2/favicons?domain=${new URL(min.url).hostname}&sz=50" alt="Logo" width="50" height="50">
        </div>
        <p class="mb-2" style="font-size: 12px;">${min.name}</p>
        <a href="${min.url}" class="btn btn-warning btn-sm rounded-pill px-3" target="_blank">Website</a>
      </div>
    `;
    return col;
  }

  // Show first 8
  ministries.slice(0, 8).forEach(min => {
    previewContainer.appendChild(createMinistryCard(min));
  });

  // Show all in modal
  ministries.forEach(min => {
    modalContainer.appendChild(createMinistryCard(min));
  });
</script>
        <!-- Contact End -->



@endsection
