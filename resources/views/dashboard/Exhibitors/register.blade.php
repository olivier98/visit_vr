@extends('index')

@section('content')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-10 mx-auto">

                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{route('store.exhibitor')}}" method="post" role="form" enctype="multipart/form-data">

                        @csrf

                        <h2 class="text-center mb-4">Get started here</h2>

                        <div class="ticket-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}"
                                        class="form-control" placeholder="Full name" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        class="form-control" placeholder="Email address"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="password" name="password" id="password" value="{{ old('password') }}"
                                    class="form-control" placeholder="Password" required>
                            </div>

                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                    placeholder="Ph 085-456-7890" required="">
                            </div>

                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="text" name="compagny_name" id="compagny_name" value="{{ old('compagny_name') }}"
                                    class="form-control" placeholder="Compagny name" required>
                            </div>

                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="text" name="web_site" id="web_site" value="{{ old('web_site') }}"
                                    class="form-control" placeholder="Web site" required>
                            </div>
                            <h6>Choose stand Type</h6>

                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <select onchange="ChangestandList()" class="form-select form-control" name="type_stand" value="{{ old('type_stand') }}" id="type_stand" aria-label="Default select example" required>
                                        <option selected>Select type of stand</option>
                                        <option value="classic stand">Stand Classic</option>
                                        <option value="moderne stand">Stand moderne</option>
                                        <option value="prestige stand">Stand prestige</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <select class="form-select form-control" name="stand_number" value="{{ old('stand_number') }}" id="stand_number" aria-label="Default select example" required>
                                        <option value="">Choose a stand</option>
                                      </select>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                Please provide a category.
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <select class="form-select form-control" name ="price" id="price" value="{{ old('price') }}" aria-label="Default select example">
                                        <option selected>Select price</option>
                                        <option value="120">120€</option>
                                        <option value="240">240€</option>
                                        <option value="360">360€</option>
                                      </select>
                                </div>
                            </div>

                            <input type="number" name="number_cell" id="number_cell" value="{{ old('number_cell') }}"
                                class="form-control" placeholder="Number of cell" required>

                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="file" name="images1" id="images" value="{{ old('images1') }}"
                                    class="form-control" placeholder="customization images" required>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="file" name="images2" id="images" value="{{ old('images2') }}"
                                    class="form-control" placeholder="customization images" required>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="file" name="images3" id="images" value="{{ old('images3') }}"
                                    class="form-control" placeholder="customization images" required>
                            </div>

                            <textarea name="additionnal_request" rows="3" class="form-control" value="{{ old('additionnal_request') }}"
                                id="additionnal_request" placeholder="Additional Request"></textarea>
                                

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Purchase</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <script>
        var stands = {};
            stands['classic stand'] = ['C-1', 'C-2', 'C-3', 'C-4', 'C-5', 'C-6'];
            stands['moderne stand'] = ['M-1', 'M-2'];
            stands['prestige stand'] = ['P-1', 'P-2'];

        function ChangestandList() {
            var standList = document.getElementById("type_stand");
            var actList = document.getElementById("stand_number");
            var selCat = standList.options[standList.selectedIndex].value;
            while (actList.options.length) {
                actList.remove(0);
            }
            var cats = stands[selCat];
            if (cats) {
                var i;
                for (i = 0; i < cats.length; i++) {
                    var cat = new Option(cats[i], i);
                    actList.options.add(cat);
                }
            }
        } 
    </script>
@endsection