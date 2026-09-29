@extends('layouts.base')

@section('content')

{{-- ===================== HERO SLIDER ===================== --}}
<div class="hero-slider-area">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-12">
                    @include('inc.slider')
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===================== SERVICES HIGHLIGHT BAR ===================== --}}
<section class="portfolio-services-bar">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6 col-12">
                <div class="psb-card">
                    <div class="psb-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="psb-body">
                        <h4>Full-Stack Development</h4>
                        <p>End-to-end web applications built with modern frameworks — clean, scalable, and maintainable.</p>
                        <a href="#services">Explore <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="psb-card featured">
                    <div class="psb-icon">
                        <i class="fa fa-server"></i>
                    </div>
                    <div class="psb-body">
                        <h4>ERP &amp; System Design</h4>
                        <p>Architecting enterprise-grade ERP solutions that streamline operations and boost efficiency.</p>
                        <a href="#services">Explore <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="psb-card">
                    <div class="psb-icon">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="psb-body">
                        <h4>Cloud &amp; API Integration</h4>
                        <p>Deploying cloud-native services and RESTful APIs that connect your ecosystem seamlessly.</p>
                        <a href="#services">Explore <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================== HOW I WORK (Process) ===================== --}}
<section class="how-i-work section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-clean">
                    <span class="label-tag">My Process</span>
                    <h2>How I Deliver Results</h2>
                    <p>A structured, transparent approach from idea to deployment — every time.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="hiw-step">
                    <div class="hiw-step-num">01</div>
                    <div class="hiw-icon"><i class="icofont icofont-presentation"></i></div>
                    <h3>Understand</h3>
                    <p>Deep-dive into your requirements, goals, and constraints before writing a single line of code.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="hiw-step">
                    <div class="hiw-step-num">02</div>
                    <div class="hiw-icon"><i class="icofont icofont-architecture-alt"></i></div>
                    <h3>Build &amp; Iterate</h3>
                    <p>Agile sprints, clean code, and regular check-ins to keep your project on time and on spec.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="hiw-step">
                    <div class="hiw-step-num">03</div>
                    <div class="hiw-icon"><i class="icofont-handshake-deal"></i></div>
                    <h3>Deliver &amp; Support</h3>
                    <p>Ship polished, tested software and stay available for post-launch support and enhancements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== FUN FACTS / STATS ===================== --}}
<div id="fun-facts" class="fun-facts section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-fun">
                    <i class="icofont icofont-briefcase"></i>
                    <div class="content">
                        <span class="counter">13</span>
                        <p>Projects Delivered</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">{{ count($teamMembers) }}</span>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">{{ $gs?->trusted_clients_count }}</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-fun">
                    <i class="icofont icofont-code-alt"></i>
                    <div class="content">
                        <span class="counter">{{ $gs->year_of_experience ?? 1 }}</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===================== ABOUT ME ===================== --}}
<section class="about-me section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 col-12">
                <div class="about-me-content">
                    <span class="label-tag">About Me</span>
                    <h2>Turning Complex Problems<br>Into Elegant Solutions</h2>
                    <p>
                        I'm a passionate software engineer with a strong foundation in full-stack development,
                        system architecture, and cloud engineering. I pride myself on writing clean, maintainable
                        code and delivering projects that truly move the needle for my clients.
                    </p>
                    <div class="skills-grid">
                        <div class="skill-pill"><i class="fa fa-check-circle"></i> Agile Methodologies</div>
                        <div class="skill-pill"><i class="fa fa-check-circle"></i> Full-Stack Development</div>
                        <div class="skill-pill"><i class="fa fa-check-circle"></i> Cloud &amp; DevOps</div>
                        <div class="skill-pill"><i class="fa fa-check-circle"></i> Quality Assurance</div>
                        <div class="skill-pill"><i class="fa fa-check-circle"></i> Data Analytics</div>
                        <div class="skill-pill"><i class="fa fa-check-circle"></i> API Architecture</div>
                    </div>
                    <a href="#portfolio" class="btn-primary-clean">View My Work <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-me-visual">
                    <div class="tech-orbit">
                        <div class="orbit-center">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="orbit-ring ring-1">
                            <div class="orbit-dot" style="--angle:0deg"><span>PHP</span></div>
                            <div class="orbit-dot" style="--angle:72deg"><span>Laravel</span></div>
                            <div class="orbit-dot" style="--angle:144deg"><span>Vue.js</span></div>
                            <div class="orbit-dot" style="--angle:216deg"><span>MySQL</span></div>
                            <div class="orbit-dot" style="--angle:288deg"><span>Docker</span></div>
                        </div>
                        <div class="orbit-ring ring-2">
                            <div class="orbit-dot" style="--angle:36deg"><span>JS</span></div>
                            <div class="orbit-dot" style="--angle:108deg"><span>AWS</span></div>
                            <div class="orbit-dot" style="--angle:180deg"><span>Git</span></div>
                            <div class="orbit-dot" style="--angle:252deg"><span>REST</span></div>
                            <div class="orbit-dot" style="--angle:324deg"><span>Linux</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== PORTFOLIO ===================== --}}
@include('inc.portfolios')

{{-- ===================== SERVICES ===================== --}}
@include('inc.services')

{{-- ===================== BLOG AREA ===================== --}}
@include('inc.blog_area')

{{-- ===================== CONTACT ===================== --}}
@include('inc.contact')

{{-- ===================== NEWSLETTER ===================== --}}
<section class="newsletter-clean section">
    <div class="container">
        <div class="newsletter-clean-inner">
            <div class="newsletter-clean-text">
                <i class="fa fa-envelope-open-text"></i>
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Get occasional updates on new projects, articles, and availability.</p>
                </div>
            </div>
            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-clean-form">
                <input
                    name="EMAIL"
                    type="email"
                    placeholder="your@email.com"
                    required
                    class="newsletter-input"
                >
                <button type="submit" class="btn-primary-clean newsletter-btn">Subscribe</button>
            </form>
        </div>
    </div>
</section>

@endsection
