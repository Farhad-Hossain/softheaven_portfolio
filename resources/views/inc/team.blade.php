<!-- Start Team 
    ============================================= -->
    <div id="team" class="team-area bg-gray default-padding bottom-less">
        <!-- Shape -->
        <div class="fixed-shape" style="background-image: url({{asset('f')}}/img/shape/5.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row">
                    @foreach($teamMembers as $member)
                    <x-team_member :member="$member" :index="$loop->index"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->