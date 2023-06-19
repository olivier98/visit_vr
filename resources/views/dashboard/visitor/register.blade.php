@extends('index')

@section('content')
    <!-- Contact 1 - Bootstrap Brain Component -->
    <section class="bg-dark py-5 py-xl-8">
        <div class="container mb-5 mb-md-6">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
            <h2 class="text-white mb-4 display-5" style="margin-top: 80px;">Get started here</h2>
            <p class="text-secondary mb-4 mb-md-5">Please enter all fields in the form.</p>
            <hr class="w-50 mx-auto mb-0 text-secondary">
            </div>
        </div>
        </div>
    
        <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <div class="col-lg-8 col-10 mx-auto">
                    
                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('store.visitor') }}" method="POST" role="form">

                        @csrf

                        <h2 class="text-center mb-4">Register</h2>

                        <div class="ticket-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control"  placeholder="First name" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last name"required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <input type="password" name="password" id="password"
                                    class="form-control" placeholder="Password" required>
                            </div>

                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Ph 085-456-7890"  value="{{ old('phone') }}" required="">

                                <div class="col-lg-12 col-md-6 col-12">
                                    <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code') }}"
                                        class="form-control" placeholder="ZIP code" required>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <input type="text" name="city" id="city" value="{{ old('city') }}"
                                        class="form-control" placeholder="City" required>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <input type="text" name="interest" id="interest" value="{{ old('interest') }}"
                                        class="form-control" placeholder="Interest" required>
                                </div>

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection