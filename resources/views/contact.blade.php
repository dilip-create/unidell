@extends('layout.main')
@push('title')
ContactUs Unidell LifeScience
@endpush
@section('main-section')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ url('') }}/public/assets/users/img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Contact Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('') }}/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ url('') }}/public/assets/users/img/icons/10.png" alt="Icon Image">
                        </div>
                        <h3>Email Address</h3>
                        <p>info@unidelllifesciences.com<br>
                            unidelllifesciences@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ url('') }}/public/assets/users/img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+0123-456789">+91 7347899703</a><br>
                            <a href="tel:+0123-456789">+91 9129329411</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ url('') }}/public/assets/users/img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3>Office Address</h3>
                        <p>Gala no 13, J.M.T road, subash nagar asalpha, ghatkopar (west), Mumbai 400084</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->
    
    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h3 class="title-2">You can contact us by simply filling the form below:</h3>
                        <form action="{{ url('contact65857vjh34fxbc098n435dfgfjhUs') }}" method="post" onsubmit="return checkTicketForm();">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" onkeyup="Validatename(this);" name="name" id="fullname" placeholder="Enter your name">
                                        <span id="namewarning" class="warning_message">Plaese enter valid name</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Enter email address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-subject ltn__custom-icon">
                                        <input type="text" onkeyup="ValidateSubject(this);" name="subject" id="subject" placeholder="Enter the subject">
                                        <span id="subjectwarning" class="warning_message">Plaese enter valid subject</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" onkeyup="Validatemobile(this.value);" maxlength="10" name="phone" id="phone" placeholder="Enter phone number">
                                        <span id="mobilewarning" class="warning_message">Plaese enter valid phone number</span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" id="issue" onkeyup="Validateissue(this.value);" placeholder="Enter message"></textarea>
                                <span id="issuewarning" class="warning_message">Please type any message here</span>
                            </div>
                             @if($errors->has('subject'))
                             <div class="alert alert-danger alert-height">
                                <p class="text-danger">{{$errors->first('subject')}}</p>
                             </div>
                            @endif
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase contactbtn" type="submit">Submit</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="google-map" height="300px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7540.383811221294!2d72.8936912!3d19.0992353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c877f1322119%3A0x5309fb4e29a41a52!2sSubhash%20Nagar%2C%20Mohili%2C%20Asalpha%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1675458256403!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       <br/>
        <!-- <iframe src="https://goo.gl/maps/MNU5A9MuAXgiFzKF9" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
    </div>
    <!-- GOOGLE MAP AREA END -->

@endsection