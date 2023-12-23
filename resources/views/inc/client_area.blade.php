<!-- Star Clients Area
    ============================================= -->
    <div class="clients-area default-padding-top">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 left-info">
                    <ul class="achivement">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="{{ $gs ? $gs->trusted_clients_count : 0 }}" data-speed="5000">{{ $gs ? $gs->trusted_clients_count : 0 }}</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Trusted Users</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="{{ $gs ? $gs->rating : 0 }}" data-speed="5000">{{ $gs ? $gs->rating : '' }}</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 right-info">
                    <h2>Trusted client by over <br>{{ $gs ? $gs->trusted_clients_count : 0 }}+ of the world’s</h2>
                </div>
                <div class="col-lg-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        @foreach($clients as $client)
                        <img src="{{asset('storage').'/'.$client->logo_link}}" alt="{{$client->name}}" style="height: 80px;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->