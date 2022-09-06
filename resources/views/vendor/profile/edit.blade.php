@extends('vendor.layout.app')
@section('content')
    <section class="pb-5 login_content_wraper" style="background-image:url(public/assets/images/gradiantbg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-9 mx-auto">
                    <div class="cuatomer_signup_form_wraper mt-5">
                        <div class="main_content_wraper">
                            <h4 class="sec_main_heading text-center mb-0">{{ __('msg.edit') }}</h4>
                            <p class="sec_main_para text-center mb-0">{{ __('msg.Edit your profile details') }}</p>
                        </div>
                        <form action="{{ route('vendor.profile.update', $profile->id) }}" method="post"
                            enctype="multipart/form-data" class="pt-5">
                            @csrf
                            @method('put')
                            <div class="col-12 mb-3  signup_input_wraper">
                                {{-- <div class="input-images-5"> --}}
                                {{-- </div> --}}
                                <div id="profileImage">
                                </div>
                            </div>

                            <div class="col-12 mb-3  signup_input_wraper">
                                {{-- <div class="input-images-6"> --}}
                                {{-- </div> --}}
                                <!-- <label class="img_wraper_label">
                                                  <div class="file_icon_wraper">
                                                    <img src="assets/images/fileuploadicon.svg">
                                                  </div>
                                                  <p class="mb-0">Upload Your ID</p>
                                                  <input type="file" size="60" >
                                                </label>  -->
                            </div>
                            <div class="col-12 mb-3 signup_vendor signup_input_wraper">
                                <h5 class="mb-0 heading-color">{{ __('msg.Business Info') }}</h5>
                            </div>

                            <div class="col-12 mb-3  signup_input_wraper">
                                <input type="text" name="name" value="{{ $profile->name }}" class="form-control"
                                    id="inputName" placeholder="Owner Name">
                                @error('name')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="col-12 mb-3 signup_input_wraper"> --}}
                            {{-- <input type="text"  name="garage_name"class="form-control" id="inputgarageName" placeholder="Garage Legal Name"> --}}
                            {{-- </div> --}}
                            {{-- <div class="col-12 mb-3 signup_input_wraper"> --}}
                            {{-- <select class="form-select" name="typeofservice" aria-label="Type of Service"> --}}
                            {{-- <option selected>Business Category</option> --}}
                            {{-- <option value="1">2019</option> --}}
                            {{-- <option value="2">2020</option> --}}
                            {{-- <option value="3">2021</option> --}}
                            {{-- </select> --}}
                            {{-- </div> --}}
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="email" name="email" value="{{ $profile->email }}"class="form-control"
                                    id="inputEmail" placeholder="Email">
                                @error('email')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="text" name="country" value="{{ $profile->country }}" class="form-control"
                                    id="inpuCountry" placeholder="{{ __('msg.Country') }}" readonly>
                                @error('country')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <select class="form-select form-control" name="city" aria-label="City">
                                    <option value="Dubai" @if ($profile->city == 'Dubai') selected @endif>
                                        {{ __('msg.Dubai') }}</option>
                                    <option value="Abu Dhabi" @if ($profile->city == 'Abu Dhabi') selected @endif>
                                        {{ __('msg.Abu Dhabi') }}</option>
                                    <option value="Sharjah" @if ($profile->city == 'Sharjah') selected @endif>
                                        {{ __('msg.Sharjah') }}</option>
                                    <option value="Ras Al Khaimah" @if ($profile->city == 'Ras Al Khaimah') selected @endif>
                                        {{ __('msg.Ras Al Khaimah') }}</option>
                                    <option value="Ajman" @if ($profile->city == 'Ajman') selected @endif>
                                        {{ __('msg.Ajman') }}</option>
                                </select>
                                @error('city')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <select class="form-select form-control insurance-company" name="company[]"
                                    aria-label="company" value="" multiple="multiple">
                                    @foreach ($company as $data)
                                        <option value="{{ $data->id }}"
                                            @if (isset($profile->company[0])) @foreach ($profile->company as $company)
                                            @if ($company->name == $data->name)
                                            selected @endif
                                            @endforeach
                                    @endif>

                                    {{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('garage_catagary')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="number" name="postbox" value="{{ $profile->post_box }}" class="form-control"
                                    id="inputNumber" placeholder="{{ __('msg.P/O Box') }}">
                                @error('postbox')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="number" name="phone" value="{{ $profile->phone }}" class="form-control"
                                    id="inputNumber" placeholder="{{ __('msg.Telephone No.') }}">
                                @error('phone')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="text" value="{{ $profile->address }}" name="address" class="form-control"
                                    placeholder="{{ __('msg.Address') }}">
                                @error('address')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="col-12 mb-3 signup_vendor signup_input_wraper">
                                <h5 class="mb-0 heading-color">Password</h5>
                            </div> --}}
                            {{-- <div class="col-12 mb-3 signup_input_wraper">
                                <input type="password" name="password" class="form-control" value="" id="inputNumber"
                                    placeholder="Password">
                                @error('password')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 signup_input_wraper">
                                <input type="password" name="conform_password" class="form-control" id="inputNumber"
                                    value="" placeholder="Confirm Password">
                                @error('conform_password')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div> --}}
                            <div class="col-12 mb-3 signup_input_wraper">
                                <div class="d-grid gap-2 mt-3 mb-4">
                                    <button class="btn btn-secondary block get_appointment"
                                        type="submit">{{ __('msg.update_your_business_profile') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(function() {
            let preloaded = [{
                id: 1,
                src: '{{ asset($profile->image) }}'
            }, ];
            $('#profileImage').imageUploader({
                preloaded: preloaded,
                maxFiles: 1,
            });
        });
    </script>
@endsection
