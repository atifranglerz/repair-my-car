@extends('web.layout.app')
@section('content')
    <section class="pb-5 login_content_wraper">
        <div class="container-lg container-fluid" >
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-8 mx-auto">
                    <div class="cuatomer_signup_form_wraper mt-5 mt-lg-5 ">
                        <div class="main_content_wraper">
                            <h4 class="sec_main_heading text-center mb-0">{{__('msg.WELCOME!')}}</h4>
                            <p class="sec_main_para text-center mb-0">{{__('msg.Fill Up your details to Create New Account')}}</p>
                        </div>

                        <form  method="post" action="{{route('user.companyRegister')}}" enctype="multipart/form-data" class="pt-5">
                            @csrf
                            <div class="col-12 mb-3  signup_input_wraper">
                                <div class="input-images-8"></div>
                                @error('profile_image')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3  signup_input_wraper">
                                <div class="input-images-9"></div>
                                @error('id_card')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_vendor signup_input_wraper">
                                <h5 class="mb-0 heading">{{__('msg.Business Info')}}</h5>
                            </div>

                            <div class="col-12 mb-3  signup_input_wraper">
                                <input type="text" class="form-control"  name="name" value="{{ old('name') }}" id="inputName" placeholder="{{__('msg.Owner Name')}} ({{__('msg.Required')}})">
                                @error('name')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="text" name="company_name" class="form-control" value="{{old('company_name')}}" id="inputgarageName" placeholder="{{__('msg.Company Legal Name')}} ({{__('msg.Required')}})">
                                @error('company_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_vendor signup_input_wraper">
                                <h5 class="mb-0 heading">{{__('msg.Phone')}}</h5>
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="971421108000 ({{__('msg.Required')}})" onkeypress="if(this.value.length==12) return false">
                                @error('phone')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="inputEmail" placeholder="{{__('msg.Email')}} ({{__('msg.Required')}})">
                                @error('email')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="text" class="form-control" name="country" value="United Arab Emirates" readonly>
                                @error('country')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <select class="form-select form-control" name="city" aria-label="City">
                                    <option selected disabled value="">{{__('msg.Select City')}}</option>
                                    <option value="Dubai" @if(old('city')=='Dubai') selected @endif>{{__('msg.Dubai')}}</option>
                                    <option value="Abu Dhabi" @if(old('city')=='Abu Dhabi') selected @endif>{{__('msg.Abu Dhabi')}}</option>
                                    <option value="Sharjah" @if(old('city')=='Sharjah') selected @endif>{{__('msg.Sharjah')}}</option>
                                    <option value="Ras Al Khaimah" @if(old('city')=='Ras Al Khaimah') selected @endif>{{__('msg.Ras Al Khaimah')}}</option>
                                    <option value="Ajman" @if(old('city')=='Ajman') selected @endif>{{__('msg.Ajman')}}</option>
                                </select>
                                @error('city')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="number" class="form-control"  name="post_box" value="{{ old('post_box') }}" placeholder="{{__('msg.P/O Box')}} ({{__('msg.Required')}})">
                                @error('post_box')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3  signup_input_wraper">
                                <div class="input-images-10"></div>
                                @error('image_license')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_vendor signup_input_wraper">
                                <h5 class="mb-0 heading">{{__('msg.Legal Info')}}</h5>
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="text" name="trading_license" value="{{ old('trading_license') }}" class="form-control"  placeholder="{{__('msg.Trading License No.')}} (Required)">
                                @error('trading_license')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_vendor signup_input_wraper">
                                <h5 class="mb-0 heading">{{__('msg.Billing Info')}}</h5>
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <div class="row">
                                    <div class="col-6" style="padding-right: 4px">
                                        <input type="text" name="billing_area" value="{{ old('billing_area') }}"  class="form-control" placeholder="{{__('msg.Billing Area')}} ({{__('msg.Required')}})">
                                        @error('billing_area')
                                        <div class="text-danger p-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6" style="padding-left: 4px">
                                        <input type="text"  name="billing_city" value="{{ old('billing_city') }}"  class="form-control" placeholder="{{__('msg.Billing City')}} ({{__('msg.Required')}})">
                                        @error('billing_city')
                                        <div class="text-danger p-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <div style="position: relative">
                                    <input type="text" name="billing_address" value="{{ old('billing_address') }}" class="form-control"  placeholder="{{__('msg.Address')}} ({{__('msg.Required')}})" style="padding-right: 2rem">
                                    <span class="fa fa-location" aria-hidden="true" style="position: absolute;top: 10px;right: 10px"></span>
                                </div>
                                @error('billing_address')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <div class="position-relative d-flex align-items-center">
                                    <input id="inputPass" name="password" type="password" value="{{ old('password') }}" class="form-control" placeholder="{{__('msg.password')}} ({{__('msg.Required')}})" autocomplete="off">
                                    <span toggle="#inputPass" class="fa fa-fw fa-eye preview-eye-icon toggle-password"></span>
                                </div>
                                @error('password')
                                <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <div class="position-relative d-flex align-items-center">
                                    <input id="inputConPass" name="conform_password" value="{{old('conform_password')}}" type="password" class="form-control" placeholder="{{__('msg.Confirm Password')}} ({{__('msg.Required')}})">
                                    <span toggle="#inputConPass" class="fa fa-fw fa-eye preview-eye-icon toggle-password"></span>
                                </div>
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <div class="d-grid gap-2 mt-3 mb-4">
                                    <button class="btn btn-secondary block get_appointment" type="submit">SIGN UP
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h5 class="my-4 text-center login_link_heading">Already have an account ?<a href="{{route('user.companyLogin')}}"> Login</a>
                    </h5>
                </div>
            </div>
        </div>
    </section>

@endsection

