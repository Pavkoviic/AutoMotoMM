      <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('assets/Slike/products') }}/{{$product->image}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$product->name}}</h5>
                                    <!-- Product price-->
                                    {{$product->regular_price}} BAM
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                {{--<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Naruči</a></div>--}}
                            <div class="text-center">
                            @if(Route::has('login'))
                                @auth
                                @if(Auth::user()->utype === 'ADM')
                                <button type="button" class="btn btn-outline-dark mt-auto " data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@getbootstrap">Naruči</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ispunite obrazac</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Ime:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-lname" class="col-form-label">Prezime:</label>
                                                    <input type="text" class="form-control" id="recipient-lname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-adress" class="col-form-label">Adresa:</label>
                                                    <input type="text" class="form-control" id="recipient-adress">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-number" class="col-form-label">Broj:</label>
                                                    <input type="text" class="form-control" id="recipient-number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-pnumber" class="col-form-label">Postanski broj:</label>
                                                    <input type="text" class="form-control" id="recipient-pnumber"></textarea>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                                                <button type="button" class="btn btn-primary">Naruči</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <button type="button" class="btn btn-outline-dark mt-auto " data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@getbootstrap">Naruči</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ispunite obrazac</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Ime:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-lname" class="col-form-label">Prezime:</label>
                                                    <input type="text" class="form-control" id="recipient-lname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-adress" class="col-form-label">Adresa:</label>
                                                    <input type="text" class="form-control" id="recipient-adress">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-number" class="col-form-label">Broj:</label>
                                                    <input type="text" class="form-control" id="recipient-number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-pnumber" class="col-form-label">Postanski broj:</label>
                                                    <input type="text" class="form-control" id="recipient-pnumber"></textarea>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                                                <button type="button" class="btn btn-primary">Naruči</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endif
                                    @else
                                    <a href="{{route('login')}}" class="btn btn-outline-dark mt-auto" role="button" aria-pressed="true">Naruči</a>


                        @endif
                    @endif

                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="container">
                    <div class="wrap-pagination-info">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
            
            

            {{--<ul class="container pagination">
                {{$products->links()}}
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>--}}
            
        </section>

        
