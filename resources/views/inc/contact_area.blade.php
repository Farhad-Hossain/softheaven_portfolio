<!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info">
                    <h2>Let's talk</h2>
                    
                    <p>
                    Engage with the Heart of Our Brand: Connecting with People, Crafting
                    Experiences
                    </p>

                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                {{$gs ? $gs->address : ''}}
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p>
                                <a href="tel:{{ $gs ? $gs->contact_no_1 : '' }} ">{{ $gs ? $gs->contact_no_1 : '' }} </a> 
                                <br> 
                                <a href="tel:{{ $gs ? $gs->contact_no_1 : '' }} ">{{ $gs ? $gs->contact_no_2 : '' }}</a> 
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 contact-form-box">
                    <div class="alert alert-success d-none" id="success-message">
                        <span>Your message is reached to us. We will contactwith you soon.</span>
                    </div>
                    <div class="form-box">
                        <form action="{{route('save_contact')}}" method="POST" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" maxlength="20" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->