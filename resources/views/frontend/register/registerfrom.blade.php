@extends('layouts.master')
@section('title') {{'Register From'}} @endsection
@section('main-container')
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5 text-center ">
                <h2 class="sub-heading-medium2 m-15px-b">Online Form Request</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-12 p-5">
            <form action="{{url('add-online-data')}}" method="POST">
                @csrf
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="formname">First Name <span class="textdanger">*</span></label>
                            <input type="text" class="form-input" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label  class="formname"> Father's Name<span class="textdanger">*</span></label>
                            <input type="text" class="form-input" name="fname" placeholder="Father's Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label  class="formname"> Email<span class="textdanger">*</span></label>
                            <input type="email" class="form-input" name="email" placeholder="Email ID" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label  class="formname"> Mobile Number<span class="textdanger">*</span></label>
                            <input type="text" class="form-input" name="phone" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label  class="formname"> Address<span class="textdanger">*</span></label>
                            <input type="text" class="form-input" name="address" placeholder="Full Address" required>
                        </div>
                 </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label  class="formname"> City <span class="textdanger">*</span></label>
                            <input type="text" class="form-input" name="city" placeholder="City Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label  class="formname"> State<span class="textdanger">*</span></label>
                            <select name="State" class="form-input" required>
                                <option selected> Choose...</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram </option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim </option>
                                <option>Tamil Nadu</option>
                                <option>Telangana </option>
                                <option>Tripura </option>
                                <option>Uttar Pradesh</option>
                                <option>Uttarakhand</option>
                                <option>West Bengal</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="formname"> Zip<span class="textdanger">*</span></label>
                            <input type="text" class="form-input" name="zip" placeholder="573100" required>
                        </div>
                            <div class="form-group col-md-6">
                                <label  class="formname"> Block Name<span class="textdanger">*</span></label>
                                <input type="text" class="form-input" name="bname" placeholder="Block Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label  class="formname"> GP Name <span class="textdanger">*</span></label>
                                <input type="text" class="form-input" name="gname" placeholder="GP Name" required>
                            </div>

                                <div class="form-group">
                                    <label  class="formname"> Sex :<span class="textdanger">*</span></label>
                                </div>
                            <div class="col-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio" value="option1">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio" value="option2">
                                    <label class="form-check-label">Female</label>
                                </div>
                                </div>
                                    <div class="form-group col-md-6">
                                        <label class="formname"> Document Upload(pdf)-Only-2mb <span class="textdanger">*</span></label>
                                        <input type="file" class="form-control-file" name="filemanager" required>
                                    </div>

                                <div class="form-group col-md-12">
                                    <div class="form-check float-right">
                                    <input class="form-check-input" type="checkbox" name="gridCheck">
                                    <label class="form-check-label formname">
                                        I agree to the <span class="textdanger">*</span>
                                        <a href="#" target="_blank">Terms and Conditions of Use</a></label>
                                    </div>
                                </div>
                        </div>
                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
            </form>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection
