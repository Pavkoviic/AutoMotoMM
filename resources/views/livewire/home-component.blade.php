<main>
    <body>
        <div class="col-sm-12">
            <div id="carouselExampleIndicators"  class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/Slike/Mercedes.jpg') }}" class="d-block w-100 " alt="Mercedes" id="carouselimages" >
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/Slike/Audi.jpg') }}" class="d-block w-100 " alt="Audi" id="carouselimages">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/Slike/Bmw.jpg') }}" class="d-block w-100 " alt="Bmw" id="carouselimages">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <hr class="featurret devider">

        <div class="container">
        <div class="col-sm-12 pb-5">
            <div class="row text-center" >
                <div class="col-lg-4 mx-auto p-2" id="tuning">
                    <img class="MERCEDES" src="{{ asset('assets/Slike/mercedes.png') }}" width="170px" height="150px">
                </div>
                <div class="col-lg-4 mx-auto p-2" id="tuning">
                    <img class="AUDI" src="{{ asset('assets/Slike/audi.png') }}" width="190px" height="150px">
                </div>
                <div class="col-lg-4 mx-auto p-2" id="tuning">
                    <img class="BMW" src="{{ asset('assets/Slike/bmw.png') }}" width="160px" height="150px">
                </div>
            </div>
        </div>
        <div class="row pb-5 text-center">
            <div class="col-lg-6 p-2" id="tuning">
                <img src="{{ asset('assets/Slike/Auspuh.png') }}" class="auspuh" width="150px" height="150px">
            </div>
            <div class="col-lg-6 p-2" id="tuning">
                <img src="{{ asset('assets/Slike/felge.png') }}" class="felga" width="150px" height="150px">
            </div>
        </div>
        </div>

        <hr class="featurret devider">

        <div class="p-3 mb-2 bg-dark bg-gradient-info text-light">  
        <h1 class=" d-flex justify-content-center mb-2">Tehnologije koje smo koristili</h1>
        <div class="row text-center">
            <div class="col-lg-4 mx-auto" id="tehnologije">
                <a href="https://html.com/"><img width="120"  height="95" src="{{ asset('assets/Slike/html.png') }}"  style="margin-top: 2rem;" ></a>
            </div>
            <div class="col-lg-4 mx-auto" id="tehnologije">
                <a href="https://www.w3schools.com/css/"><img width="120" height="95" src="{{ asset('assets/Slike/css.png') }}" style="margin-top: 2rem;"></a>
            </div>
            <div class="col-lg-4 mx-auto" id="tehnologije">
                <a href="https://getbootstrap.com/"><img width="120" height="95" src="{{ asset('assets/Slike/bootstrap.png') }}" style="margin-top: 2rem;"></a> 
            </div>  
            <div class="col-lg-4 mx-auto" id="tehnologije">
                <a href="https://laravel.com/"><img width="120" height="95" src="{{ asset('assets/Slike/laravelslika.png') }}" style="margin-top: 2rem;"></a> 
            </div> 
            <div class="col-lg-4 mx-auto" id="tehnologije">
                <a href="https://www.mysql.com/"><img width="120" height="95" src="{{ asset('assets/Slike/mysqlslika.png') }}" style="margin-top: 2rem;"></a> 
            </div> 
        </div>
        </div>

        
    </body>
</main>