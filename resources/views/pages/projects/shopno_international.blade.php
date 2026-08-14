<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopno International — Bangladesh · China Trade &amp; Sourcing</title>
<meta name="description" content="Shopno International — door to door sourcing, logistics and trade facilitation between Bangladesh and China.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#0d1b2a;
    --ink-2:#132a3e;
    --paper:#f4f6f1;
    --paper-2:#eceee4;
    --green:#046a38;
    --green-l:#0c8a4a;
    --red:#c8102e;
    --gold:#ffcd00;
    --line: rgba(244,246,241,0.14);
    --line-dark: rgba(13,27,42,0.12);
    --maxw: 1180px;
    --display: 'Space Grotesk', sans-serif;
    --body: 'IBM Plex Sans', sans-serif;
    --mono: 'IBM Plex Mono', monospace;
  }
  *{box-sizing:border-box; margin:0; padding:0;}
  html{scroll-behavior:smooth;}
  body{
    font-family:var(--body);
    background:var(--paper);
    color:var(--ink);
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }
  a{color:inherit; text-decoration:none;}
  img{max-width:100%; display:block;}
  .wrap{max-width:var(--maxw); margin:0 auto; padding:0 32px;}
  ::selection{background:var(--gold); color:var(--ink);}

  @media (prefers-reduced-motion: reduce){
    *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important; scroll-behavior:auto !important;}
  }

  /* ---------- reveal ---------- */
  .reveal{opacity:0; transform:translateY(28px); transition:opacity .8s cubic-bezier(.2,.7,.2,1), transform .8s cubic-bezier(.2,.7,.2,1);}
  .reveal.in{opacity:1; transform:translateY(0);}
  .reveal-stagger > *{opacity:0; transform:translateY(22px); transition:opacity .7s cubic-bezier(.2,.7,.2,1), transform .7s cubic-bezier(.2,.7,.2,1);}
  .reveal-stagger.in > *{opacity:1; transform:translateY(0);}
  .reveal-stagger.in > *:nth-child(1){transition-delay:.02s}
  .reveal-stagger.in > *:nth-child(2){transition-delay:.09s}
  .reveal-stagger.in > *:nth-child(3){transition-delay:.16s}
  .reveal-stagger.in > *:nth-child(4){transition-delay:.23s}
  .reveal-stagger.in > *:nth-child(5){transition-delay:.30s}
  .reveal-stagger.in > *:nth-child(6){transition-delay:.37s}
  .reveal-stagger.in > *:nth-child(7){transition-delay:.44s}
  .reveal-stagger.in > *:nth-child(8){transition-delay:.51s}
  .reveal-stagger.in > *:nth-child(9){transition-delay:.58s}
  .reveal-stagger.in > *:nth-child(10){transition-delay:.65s}

  /* ---------- nav ---------- */
  header.nav{
    position:fixed; top:0; left:0; right:0; z-index:100;
    padding:18px 0;
    transition:background .4s ease, padding .4s ease, box-shadow .4s ease;
  }
  header.nav.solid{
    background:rgba(244,246,241,0.92);
    backdrop-filter:blur(10px);
    padding:12px 0;
    box-shadow:0 1px 0 var(--line-dark);
  }
  .nav-inner{display:flex; align-items:center; justify-content:space-between;}
  .brand{display:flex; align-items:center; gap:10px; font-family:var(--display); font-weight:700; font-size:1.05rem; letter-spacing:.01em;}
  .brand svg{width:34px; height:34px; flex-shrink:0;}
  .brand-name{color:var(--paper);}
  header.nav.solid .brand-name{color:var(--ink);}
  .brand-sub{display:block; font-family:var(--mono); font-weight:400; font-size:.6rem; letter-spacing:.14em; text-transform:uppercase; color:var(--gold); margin-top:1px;}

  header.nav.solid .brand-sub{font-weight: bold; color:var(--ink);}

  nav.links{display:flex; gap:28px; font-size:.86rem; font-weight:500;}
  nav.links a{color:rgba(244,246,241,0.78); position:relative; padding:4px 0;}
  header.nav.solid nav.links a{color:rgba(13,27,42,0.72);}
  nav.links a::after{content:'';position:absolute; left:0; bottom:0; height:2px; width:0; background:var(--gold); transition:width .3s ease;}
  nav.links a:hover::after{width:100%;}
  .nav-cta{
    font-family:var(--mono); font-size:.78rem; font-weight:500;
    background:var(--green); color:#fff; padding:9px 18px; border-radius:2px;
    border:1px solid var(--green); transition:background .25s ease, color .25s ease;
  }
  .nav-cta:hover{background:transparent; color:var(--paper);}
  header.nav.solid .nav-cta:hover{color:var(--green);}

  /* hamburger toggle */
  .nav-toggle{
    display:none; flex-direction:column; justify-content:center; align-items:center;
    width:38px; height:38px; background:transparent; border:none; cursor:pointer; padding:0;
    flex-shrink:0; -webkit-tap-highlight-color:transparent;
  }
  .nav-toggle span{
    display:block; width:22px; height:2px; background:var(--paper); margin:3.5px 0;
    transition:transform .32s cubic-bezier(.2,.7,.2,1), opacity .25s ease, background .3s ease;
  }
  header.nav.solid .nav-toggle span{background:var(--ink);}
  .nav-toggle.open span:nth-child(1){transform:translateY(9px) rotate(45deg);}
  .nav-toggle.open span:nth-child(2){opacity:0;}
  .nav-toggle.open span:nth-child(3){transform:translateY(-9px) rotate(-45deg);}

  /* mobile menu drawer */
  .mobile-menu{
    position:fixed; top:0; left:0; right:0; bottom:0; width:100%; height:100%; z-index:99;
    background:var(--ink);
    display:flex; flex-direction:column;
    padding:104px 32px 40px;
    transform:translateX(100%);
    transition:transform .45s cubic-bezier(.2,.7,.2,1);
    overflow-y:auto;
    visibility:hidden;
  }
  .mobile-menu.open{transform:translateX(0); visibility:visible;}
  .mobile-menu nav{display:flex; flex-direction:column;}
  .mobile-menu nav a{
    font-family:var(--display); font-weight:600; font-size:1.5rem; color:var(--paper);
    padding:16px 0; border-bottom:1px solid rgba(244,246,241,0.12);
  }
  .mobile-menu .btn-primary{margin-top:28px; justify-content:center; width:100%;}
  .mobile-menu-foot{
    margin-top:auto; padding-top:34px; display:flex; flex-direction:column; gap:6px;
    font-family:var(--mono); font-size:.8rem; color:rgba(244,246,241,0.55);
  }
  .mobile-menu-foot a{color:rgba(244,246,241,0.8);}
  body.menu-open{overflow:hidden;}

  /* ---------- hero ---------- */
  .hero{
    position:relative;
    min-height:100vh;
    background:radial-gradient(120% 90% at 78% 8%, #16324a 0%, var(--ink) 55%, #08131d 100%);
    color:var(--paper);
    display:flex; align-items:center;
    padding-top:120px; padding-bottom:80px;
    overflow:hidden;
  }
  .hero::before{
    content:'';position:absolute; top:0; left:0; right:0; bottom:0;
    background-image:
      linear-gradient(rgba(244,246,241,0.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(244,246,241,0.05) 1px, transparent 1px);
    background-size:64px 64px;
    mask-image:radial-gradient(80% 60% at 70% 30%, black, transparent);
    pointer-events:none;
  }
  .hero-grid{
    display:grid; grid-template-columns:1.05fr .95fr; gap:40px; align-items:center;
    position:relative; z-index:2; width:100%;
  }
  .eyebrow{
    font-family:var(--mono); font-size:.76rem; letter-spacing:.18em; text-transform:uppercase;
    color:var(--gold); display:flex; align-items:center; gap:10px; margin-bottom:22px;
  }
  .eyebrow::before{content:''; width:24px; height:1px; background:var(--gold);}
  .hero h1{
    font-family:var(--display); font-weight:700; line-height:1.03;
    font-size:clamp(2.4rem, 5vw, 4.1rem); letter-spacing:-0.01em;
    max-width:640px;
  }
  .hero h1 .accent{color:var(--gold); font-style:normal;}
  .hero p.lede{
    margin-top:22px; max-width:480px; font-size:1.06rem; line-height:1.65; color:rgba(244,246,241,0.78);
  }
  .hero-cta{display:flex; gap:14px; margin-top:36px; flex-wrap:wrap;}
  .btn{
    font-family:var(--mono); font-size:.82rem; font-weight:500;
    padding:14px 26px; border-radius:2px; display:inline-flex; align-items:center; gap:8px;
    transition:transform .25s ease, background .25s ease, color .25s ease, border-color .25s ease;
  }
  .btn-primary{background:var(--green-l); color:#fff; border:1px solid var(--green-l);}
  .btn-primary:hover{transform:translateY(-2px); background:#0a9c55;}
  .btn-ghost{border:1px solid rgba(244,246,241,0.3); color:var(--paper);}
  .btn-ghost:hover{border-color:var(--gold); color:var(--gold); transform:translateY(-2px);}

  .hero-stats{display:flex; gap:30px; margin-top:52px; flex-wrap:wrap;}
  .hero-stats div{border-left:2px solid rgba(255,205,0,0.4); padding-left:14px;}
  .hero-stats b{display:block; font-family:var(--display); font-size:1.6rem; color:var(--paper);}
  .hero-stats span{font-family:var(--mono); font-size:.7rem; letter-spacing:.06em; color:rgba(244,246,241,0.55); text-transform:uppercase;}

  /* route map */
  .route-box{position:relative; height:460px;}
  .route-svg{width:100%; height:100%;}
  .route-dot{fill:var(--gold);}
  .route-path{fill:none; stroke:rgba(255,205,0,0.55); stroke-width:1.4; stroke-dasharray:6 7;}
  .route-plane{}
  .route-node-label{font-family:var(--mono); font-size:11px; fill:rgba(244,246,241,0.75); letter-spacing:.05em;}
  .route-node-city{font-family:var(--display); font-size:15px; font-weight:600; fill:var(--paper);}
  @keyframes flyRoute{
    0%{ offset-distance:0%; opacity:0;}
    6%{opacity:1;}
    94%{opacity:1;}
    100%{ offset-distance:100%; opacity:0;}
  }
  .plane-a{ offset-path:path("M74,330 C160,230 230,120 356,86"); animation:flyRoute 5.5s ease-in-out infinite; }
  .plane-b{ offset-path:path("M356,86 C450,120 500,230 380,330"); animation:flyRoute 5.5s ease-in-out infinite; animation-delay:2.75s;}

  /* ---------- section shell ---------- */
  section{padding:120px 0;}
  .section-dark{background:var(--ink); color:var(--paper);}
  .section-head{max-width:640px; margin-bottom:64px;}
  .eyebrow-dark{color:var(--red);}
  .section-head h2{
    font-family:var(--display); font-weight:700; font-size:clamp(1.9rem, 3.4vw, 2.7rem); letter-spacing:-0.01em; line-height:1.12;
  }
  .section-dark .section-head h2{color:var(--paper);}
  .section-head p{margin-top:18px; font-size:1.02rem; line-height:1.7; color:#4a5a52;}
  .section-dark .section-head p{color:rgba(244,246,241,0.72);}

  /* ---------- why we are ---------- */
  .why-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:2px; background:var(--line-dark);}
  .why-card{background:var(--paper); padding:38px 32px;}
  .why-card .num{font-family:var(--mono); font-size:.75rem; color:var(--green); letter-spacing:.1em;}
  .why-card h3{font-family:var(--display); font-size:1.25rem; margin-top:14px; margin-bottom:12px;}
  .why-card p{font-size:.92rem; line-height:1.6; color:#4a5a52;}

  /* ---------- services / manifest ---------- */
  .manifest{border-top:1px solid var(--line);}
  .manifest-row{
    display:grid; grid-template-columns:70px 1.3fr 1.7fr; gap:24px; align-items:center; grid-template-areas:"num name desc";
    padding:26px 0; border-bottom:1px solid var(--line);
    transition:background .3s ease;
  }
  .manifest-row:hover{background:rgba(255,205,0,0.03);}
  .manifest-num{font-family:var(--mono); font-size:.85rem; color:var(--gold); grid-area:num;}
  .manifest-name{font-family:var(--display); font-weight:600; font-size:1.15rem; grid-area:name;}
  .manifest-desc{font-size:.92rem; line-height:1.6; color:rgba(244,246,241,0.65); grid-area:desc;}
  .manifest-tag{
    font-family:var(--mono); font-size:.66rem; letter-spacing:.08em; text-transform:uppercase;
    color:var(--gold); border:1px solid rgba(255,205,0,0.35); padding:3px 8px; border-radius:2px;
    display:inline-block; margin-top:8px;
  }

  /* ---------- projects ---------- */
  .cat-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:var(--line-dark); margin-top:8px;}
  .cat-card{
    background:var(--paper); padding:34px 26px; min-height:220px;
    display:flex; flex-direction:column; justify-content:space-between;
    position:relative; overflow:hidden;
  }
  .cat-card::before{
    content:''; position:absolute; left:0; right:0; bottom:0; height:3px; background:var(--green);
    transform:scaleX(0); transform-origin:left; transition:transform .4s ease;
  }
  .cat-card:hover::before{transform:scaleX(1);}
  .cat-card svg{width:34px; height:34px; color:var(--green);}
  .cat-card h4{font-family:var(--display); font-size:1.05rem; margin-top:20px;}
  .cat-card span{font-family:var(--mono); font-size:.72rem; color:#6b7a72; margin-top:8px; display:block;}

  /* ---------- trusted / industries ---------- */
  .industry-strip{
    display:flex; flex-wrap:wrap; border-top:1px solid var(--line-dark); border-bottom:1px solid var(--line-dark);
    margin-top:10px;
  }
  .industry-item{
    flex:1 1 200px; padding:30px 20px; border-right:1px solid var(--line-dark);
    display:flex; align-items:center; gap:12px;
  }
  .industry-item svg{width:26px; height:26px; color:var(--red); flex-shrink:0;}
  .industry-item span{font-family:var(--display); font-weight:600; font-size:.98rem;}

  .flag-note{
    margin-top:56px; display:flex; gap:26px; align-items:flex-start; flex-wrap:wrap;
    background:var(--paper-2); padding:32px; border-left:3px solid var(--green);
  }
  .flag-note svg{width:46px; flex-shrink:0;}
  .flag-note p{font-size:.95rem; line-height:1.7; color:#3a473f; max-width:640px;}
  .flag-note b{color:var(--ink);}

  /* ---------- team ---------- */
  .team-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:28px; margin-top:8px;}
  .team-card{text-align:left;}
  .avatar{
    width:100%; aspect-ratio:1/1; border-radius:2px; background:var(--ink-2);
    display:flex; align-items:center; justify-content:center; position:relative; overflow:hidden;
    margin-bottom:16px;
  }
  .avatar svg{width:44%; height:44%; color:var(--gold); opacity:.85;}
  .avatar::after{content:''; position:absolute; top:0; left:0; right:0; bottom:0; border:1px solid rgba(255,205,0,0.25);}
  .team-card h4{font-family:var(--display); font-weight:600; font-size:1.05rem;}
  .team-card .role{font-family:var(--mono); font-size:.72rem; color:var(--green-l); letter-spacing:.05em; margin-top:4px; text-transform:uppercase;}
  .team-card p{font-size:.87rem; color:rgba(244,246,241,0.6); margin-top:10px; line-height:1.55;}

  /* ---------- contact ---------- */
  .contact-grid{display:grid; grid-template-columns:1fr 1fr; gap:64px; margin-top:8px;}
  .contact-list{display:flex; flex-direction:column; gap:0;}
  .contact-item{
    display:flex; align-items:center; gap:18px; padding:22px 0; border-bottom:1px solid var(--line-dark);
  }
  .contact-item svg{width:22px; height:22px; color:var(--green); flex-shrink:0;}
  .contact-item .label{font-family:var(--mono); font-size:.68rem; letter-spacing:.1em; text-transform:uppercase; color:#7c8a81;}
  .contact-item .val{font-family:var(--display); font-weight:600; font-size:1.02rem; margin-top:2px;}

  form.cform{display:flex; flex-direction:column; gap:16px;}
  form.cform input, form.cform textarea{
    background:transparent; border:none; border-bottom:1px solid var(--line-dark);
    padding:14px 2px; font-family:var(--body); font-size:.95rem; color:var(--ink);
    outline:none; transition:border-color .25s ease;
  }
  form.cform input::placeholder, form.cform textarea::placeholder{color:#8a978f;}
  form.cform input:focus, form.cform textarea:focus{border-color:var(--green);}
  form.cform button{
    align-self:flex-start; margin-top:10px; font-family:var(--mono); font-size:.84rem;
    background:var(--ink); color:var(--paper); padding:14px 30px; border:none; border-radius:2px; cursor:pointer;
    transition:background .25s ease;
  }
  form.cform button:hover{background:var(--green);}
  .form-note{font-size:.78rem; color:#8a978f; margin-top:4px;}

  /* ---------- policy ---------- */
  .policy-list{border-top:1px solid var(--line-dark); margin-top:8px;}
  .policy-item{border-bottom:1px solid var(--line-dark); padding:6px 0;}
  .policy-item summary{
    font-family:var(--display); font-weight:600; font-size:1.1rem;
    padding:20px 4px; cursor:pointer; list-style:none;
    display:flex; align-items:center; justify-content:space-between; gap:16px;
  }
  .policy-item summary::-webkit-details-marker{display:none;}
  .policy-item summary .plus{
    font-family:var(--mono); font-size:1.2rem; color:var(--green); flex-shrink:0;
    transition:transform .3s ease;
  }
  .policy-item[open] summary .plus{transform:rotate(45deg);}
  .policy-item .policy-body{padding:0 4px 24px; font-size:.93rem; line-height:1.7; color:#4a5a52; max-width:720px;}
  .policy-item .policy-body ul{margin:10px 0 0 20px;}
  .policy-item .policy-body li{margin-bottom:6px;}
  .policy-disclaimer{
    margin-top:36px; padding:24px 28px; background:var(--paper-2); border-left:3px solid var(--red);
    font-size:.86rem; line-height:1.65; color:#4a5a52; max-width:760px;
  }

  /* ---------- footer ---------- */
  footer{background:var(--ink); color:rgba(244,246,241,0.55); padding:44px 0;}
  .footer-inner{display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px; font-size:.8rem;}
  .footer-inner .brand-name{color:var(--paper); font-size:.92rem;}

  /* focus visibility */
  a:focus-visible, button:focus-visible, input:focus-visible, textarea:focus-visible{
    outline:2px solid var(--gold); outline-offset:2px;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 980px){
    .hero-grid{grid-template-columns:1fr;}
    .route-box{height:320px; order:-1;}
    .why-grid{grid-template-columns:1fr;}
    .cat-grid{grid-template-columns:repeat(2,1fr);}
    .team-grid{grid-template-columns:repeat(2,1fr);}
    .contact-grid{grid-template-columns:1fr; gap:40px;}
    nav.links{display:none;}
    .nav-cta{display:none;}
    .nav-toggle{display:flex;}
    .manifest-row{grid-template-columns:44px 1fr; grid-template-areas:"num name" "desc desc";}
    .manifest-desc{grid-area:desc; margin-top:6px;}
  }
  @media (max-width: 600px){
    .wrap{padding:0 20px;}
    section{padding:72px 0;}
    .cat-grid{grid-template-columns:1fr;}
    .team-grid{grid-template-columns:1fr 1fr;}
    .industry-item{flex:1 1 100%; border-right:none; border-bottom:1px solid var(--line-dark);}
    .hero{min-height:auto; padding-top:96px; padding-bottom:56px;}
    .hero-cta{flex-direction:column; align-items:stretch;}
    .hero-cta .btn{justify-content:center;}
    .hero-stats{gap:22px;}
    .hero-stats div{padding-left:12px;}
    .route-box{height:260px;}
    .mobile-menu{padding:92px 24px 32px;}
    .mobile-menu nav a{font-size:1.28rem; padding:14px 0;}
    .policy-item summary{font-size:1rem;}
  }
  @media (max-width: 420px){
    .team-grid{grid-template-columns:1fr;}
    .brand-sub{color:var(--gold);}
  }
  /* prevent iOS zoom-on-focus for form fields */
  form.cform input, form.cform textarea{font-size:16px;}
</style>
</head>
<body>

<!-- ============ NAV ============ -->
<header class="nav" id="siteNav">
  <div class="wrap nav-inner">
    <a href="#top" class="brand">
      <img src="{{asset('f')}}/img/logo_shopno_international.jpg" alt="Shopno International" width="34" height="34" loading="lazy" style="border-radius: 4px;">
      <span>
        <span class="brand-name">Shopno International
          <br />
          <span class="brand-sub">Dhaka · Guangzhou</span>
        </span>
        
      </span>
    </a>
    <nav class="links">
      <a href="#why">Why Us</a>
      <a href="#services">Services</a>
      <a href="#projects">What We Move</a>
      <a href="#trusted">Trusted By</a>
      <a href="#team">Team</a>
      <a href="#policy">Policies</a>
    </nav>
    <a href="#contact" class="nav-cta">Get In Touch</a>
    <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- ============ MOBILE MENU ============ -->
<div class="mobile-menu" id="mobileMenu">
  <nav>
    <a href="#why">Why Us</a>
    <a href="#services">Services</a>
    <a href="#projects">What We Move</a>
    <a href="#trusted">Trusted By</a>
    <a href="#team">Team</a>
    <a href="#policy">Policies</a>
  </nav>
  <a href="#contact" class="btn btn-primary">Get In Touch</a>
  <div class="mobile-menu-foot">
    <span>+880 1319 885758</span>
    <a href="mailto:shopnointernationalinfo@gmail.com">shopnointernationalinfo@gmail.com</a>
  </div>
</div>

<!-- ============ HERO ============ -->
<section class="hero" id="top">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow">Bangladesh · China Trade Facilitation</div>
      <h1>Turning your sourcing <span class="accent">shopno</span><br> into a delivered shipment.</h1>
      <p class="lede">Shopno International is your on-the-ground partner in China — sourcing, negotiating, packing and shipping your goods door to door, by air or by sea, from factory floor to your warehouse in Bangladesh.</p>
      <div class="hero-cta">
        <a class="btn btn-primary" href="https://wa.me/8801319885758" target="_blank" rel="noopener">Chat on WhatsApp</a>
        <a class="btn btn-ghost" href="#services">See Our Services</a>
      </div>
      <div class="hero-stats">
        <div><b>Air + Sea</b><span>Door to door</span></div>
        <div><b>FCL / LCL</b><span>Container loading</span></div>
        <div><b>LC Ready</b><span>Payment facility</span></div>
      </div>
    </div>

    <div class="route-box" aria-hidden="true">
      <svg class="route-svg" viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
        <path class="route-path" d="M74,330 C160,230 230,120 356,86" />
        <path class="route-path" d="M356,86 C450,120 500,230 380,330" />
        <circle class="route-dot" cx="74" cy="330" r="4.5"/>
        <circle class="route-dot" cx="356" cy="86" r="4.5"/>
        <circle class="route-dot" cx="380" cy="330" r="4.5"/>
        <text class="route-node-city" x="46" y="356">Dhaka</text>
        <text class="route-node-label" x="46" y="372">ORIGIN OF ORDER</text>
        <text class="route-node-city" x="330" y="70">Guangzhou</text>
        <text class="route-node-label" x="330" y="54">SOURCING &amp; WAREHOUSE</text>
        <text class="route-node-city" x="352" y="356">Chattogram</text>
        <text class="route-node-label" x="352" y="372">PORT OF ENTRY</text>
        <g class="route-plane plane-a">
          <path d="M-6,-5 L8,0 L-6,5 L-2,0 Z" fill="#ffcd00"/>
        </g>
        <g class="route-plane plane-b">
          <path d="M-6,-5 L8,0 L-6,5 L-2,0 Z" fill="#ffcd00"/>
        </g>
      </svg>
    </div>
  </div>
</section>

<!-- ============ WHY WE ARE ============ -->
<section id="why">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow eyebrow-dark">Why We Are</div>
      <h2>A local hand in a foreign market.</h2>
      <p>Importing from China is easy to promise and hard to execute — language gaps, unverified factories and shipping surprises sink most first attempts. We remove each of those, one step at a time.</p>
    </div>
    <div class="why-grid reveal-stagger">
      <div class="why-card">
        <div class="num">01</div>
        <h3>Boots on the ground</h3>
        <p>A real China agent facility means someone visits the factory, checks the goods, and speaks the language — before your money moves.</p>
      </div>
      <div class="why-card">
        <div class="num">02</div>
        <h3>One partner, full route</h3>
        <p>Sourcing, payment, warehousing, loading and delivery run through a single point of contact instead of five different vendors.</p>
      </div>
      <div class="why-card">
        <div class="num">03</div>
        <h3>Built for LC trade</h3>
        <p>Letter of credit receiving, foreign currency handling and documentation are structured for how Bangladeshi importers actually pay.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICES (manifest) ============ -->
<section class="section-dark" id="services">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Our Services</div>
      <h2>The route from order to doorstep.</h2>
      <p>Ten services, laid out in the order your shipment actually moves through them.</p>
    </div>

    <div class="manifest reveal-stagger">
      <div class="manifest-row">
        <div class="manifest-num">01</div>
        <div class="manifest-name">Sourcing</div>
        <div class="manifest-desc">Finding and vetting the right product and factory in China at the lowest honest cost.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">02</div>
        <div class="manifest-name">Price Negotiation</div>
        <div class="manifest-desc">We negotiate supplier pricing on your behalf, using local market knowledge as leverage.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">03</div>
        <div class="manifest-name">China Agent Facility</div>
        <div class="manifest-desc">A dedicated on-ground representative to inspect goods and manage the supplier relationship.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">04</div>
        <div class="manifest-name">Translation</div>
        <div class="manifest-desc">Mandarin ↔ Bengali/English translation across calls, contracts and factory visits.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">05</div>
        <div class="manifest-name">Payment &amp; LC Receiving</div>
        <div class="manifest-desc">Secure payment facility with letter of credit receiving support for larger orders.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">06</div>
        <div class="manifest-name">China Warehouse Facility</div>
        <div class="manifest-desc">Consolidate goods from multiple suppliers under one roof before they ship out.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">07</div>
        <div class="manifest-name">FCL / LCL / Mixed Loading</div>
        <div class="manifest-desc">Full, partial or mixed-container loading, planned to fit your order size and budget.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">08</div>
        <div class="manifest-name">Door to Door (Air &amp; Sea)</div>
        <div class="manifest-desc">From the Chinese factory to your address in Bangladesh, by the fastest sensible route.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">09</div>
        <div class="manifest-name">Invitation Letter &amp; Visa Support</div>
        <div class="manifest-desc">Documentation support if you'd rather see the factory floor yourself.</div>
      </div>
      <div class="manifest-row">
        <div class="manifest-num">10</div>
        <div class="manifest-name">Foreign Currency Investment</div>
        <div class="manifest-desc">Guidance on structuring foreign currency for cross-border trade.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROJECTS / WHAT WE MOVE ============ -->
<section id="projects">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow eyebrow-dark">Our Projects</div>
      <h2>What we move for our clients.</h2>
      <p>Every shipment is different, but they tend to fall into a few categories. Here's where we spend most of our time.</p>
    </div>
    <div class="cat-grid reveal-stagger">
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="7" width="18" height="13" rx="1"/><path d="M8 7V5a4 4 0 0 1 8 0v2"/></svg>
        <h4>Garments &amp; Accessories</h4>
        <span>Fabric, trims, packaging</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/></svg>
        <h4>Electronics &amp; Gadgets</h4>
        <span>Consumer &amp; industrial units</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 21V9l8-6 8 6v12"/><path d="M9 21v-6h6v6"/></svg>
        <h4>Home &amp; Furniture</h4>
        <span>Fittings, decor, furnishing</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="3"/><path d="M4 12a8 8 0 0 1 8-8m8 8a8 8 0 0 1-8 8"/></svg>
        <h4>Machinery &amp; Parts</h4>
        <span>Industrial &amp; spare components</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 9l9-6 9 6-9 6-9-6Z"/><path d="M3 15l9 6 9-6"/></svg>
        <h4>FMCG &amp; Consumer Goods</h4>
        <span>Retail-ready product lines</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2 3 7v10l9 5 9-5V7z"/></svg>
        <h4>Packaging Materials</h4>
        <span>Boxes, labels, custom print</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 3h14l-1 13H6L5 3Z"/><path d="M9 16v3a3 3 0 0 0 6 0v-3"/></svg>
        <h4>Toys &amp; Sporting Goods</h4>
        <span>Seasonal &amp; bulk orders</span>
      </div>
      <div class="cat-card">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="14" rx="1"/><path d="M3 9h18"/></svg>
        <h4>Custom Sourcing</h4>
        <span>Anything not listed above</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ TRUSTED CLIENTS / INDUSTRIES ============ -->
<section class="section-dark" id="trusted">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Trusted Across Industries</div>
      <h2>Built for importers, not just orders.</h2>
      <p>We work with small businesses placing their first shipment and established importers running recurring container loads.</p>
    </div>
    <div class="industry-strip reveal-stagger">
      <div class="industry-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2 3 7v10l9 5 9-5V7z"/></svg><span>Wholesale Traders</span></div>
      <div class="industry-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="7" width="18" height="13" rx="1"/><path d="M8 7V5a4 4 0 0 1 8 0v2"/></svg><span>Garment &amp; Textile</span></div>
      <div class="industry-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/></svg><span>Electronics Retail</span></div>
      <div class="industry-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg><span>E-commerce Sellers</span></div>
    </div>
  </div>
</section>

<!-- ============ TEAM ============ -->
<section class="section-dark" id="team" style="background:var(--ink-2);">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Our Team</div>
      <h2>The people on both ends of the shipment.</h2>
      <p>Placeholder roles below — swap in real names, photos and a line about each person once you're ready.</p>
    </div>
    <div class="team-grid reveal-stagger">
      <div class="team-card">
        <div class="avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
        <h4>Founder &amp; CEO</h4>
        <div class="role">Dhaka Office</div>
        <p>Oversees client relationships and overall trade strategy.</p>
      </div>
      <div class="team-card">
        <div class="avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
        <h4>Sourcing Manager</h4>
        <div class="role">Guangzhou Office</div>
        <p>Vets factories, negotiates pricing and manages quality checks.</p>
      </div>
      <div class="team-card">
        <div class="avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
        <h4>Logistics Head</h4>
        <div class="role">Chattogram Port</div>
        <p>Plans container loading, shipping routes and customs clearance.</p>
      </div>
      <div class="team-card">
        <div class="avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
        <h4>China Liaison Officer</h4>
        <div class="role">Guangzhou Office</div>
        <p>Handles translation, warehouse coordination and factory visits.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ POLICIES ============ -->
<section id="policy">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow eyebrow-dark">Policies</div>
      <h2>How we handle orders, payment and your data.</h2>
      <p>The short version of how we operate. Ask us directly for the full terms before placing a large order.</p>
    </div>

    <div class="policy-list reveal">
      <details class="policy-item">
        <summary>Shipping &amp; Delivery <span class="plus">+</span></summary>
        <div class="policy-body">
          <p>Goods move by air or sea depending on your order's size, budget and urgency. Air freight is faster and suits smaller or time-sensitive orders; sea freight suits larger volumes at a lower cost per unit. Exact timelines depend on the supplier, port schedules and customs clearance, so we confirm a delivery window with you before your order ships — not after.</p>
          <ul>
            <li>Door to door delivery from the China supplier to your address in Bangladesh</li>
            <li>FCL, LCL and mixed-container loading available depending on order volume</li>
            <li>You'll get tracking updates at each major stage: loading, departure, port arrival, customs</li>
          </ul>
        </div>
      </details>
      <details class="policy-item">
        <summary>Payment &amp; LC Terms <span class="plus">+</span></summary>
        <div class="policy-body">
          <p>Most orders require a partial advance payment to confirm production, with the balance due before or on shipment — the exact split depends on the supplier and order size. We support letter of credit (LC) receiving for larger or first-time orders, and can advise on structuring foreign currency payments in line with standard trade practice.</p>
          <ul>
            <li>Advance + balance payment structure, agreed per order</li>
            <li>LC receiving facility available on request</li>
            <li>All payment terms confirmed in writing before production begins</li>
          </ul>
        </div>
      </details>
      <details class="policy-item">
        <summary>Quality &amp; Claims <span class="plus">+</span></summary>
        <div class="policy-body">
          <p>Our China agent inspects goods before they leave the warehouse. If something arrives damaged or doesn't match the agreed sample, tell us as soon as you receive the shipment — the sooner we hear from you, the more we can do with the supplier on your behalf.</p>
          <ul>
            <li>Pre-shipment inspection by our on-ground agent</li>
            <li>Report discrepancies with photos within a few days of delivery</li>
            <li>We mediate directly with the supplier on valid claims</li>
          </ul>
        </div>
      </details>
      <details class="policy-item">
        <summary>Privacy <span class="plus">+</span></summary>
        <div class="policy-body">
          <p>We only use the details you share — name, phone, order specifics — to process your inquiry and manage your shipment. We don't sell or hand off your information to marketers. It's shared only with the parties needed to move your goods, such as the supplier, shipping line and customs agents.</p>
          <ul>
            <li>Your data is used for order fulfilment only</li>
            <li>Shared only with logistics and customs parties involved in your shipment</li>
            <li>Email us anytime to ask what we hold on you or to have it removed</li>
          </ul>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section id="contact">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow eyebrow-dark">Contact</div>
      <h2>Tell us what you're importing.</h2>
      <p>Reach out on WhatsApp for the fastest reply, or send a message below and we'll follow up by email.</p>
    </div>

    <div class="contact-grid">
      <div class="reveal">
        <div class="contact-list">
          <div class="contact-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.68 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.32 1.85.55 2.81.68A2 2 0 0 1 22 16.92Z"/></svg>
            <div><div class="label">Phone</div><div class="val">+880 1319 885758</div></div>
          </div>
          <div class="contact-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5Z"/></svg>
            <div><div class="label">WeChat &amp; WhatsApp</div><div class="val">+86 187 5724 6812</div></div>
          </div>
          <div class="contact-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
            <div><div class="label">Email</div><div class="val">shopnointernationalinfo@gmail.com</div></div>
          </div>
          <div class="contact-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            <div><div class="label">Offices</div><div class="val">Dhaka, Bangladesh &amp; Guangzhou, China</div></div>
          </div>
        </div>
      </div>

      <div class="reveal">
        <form class="cform" action="mailto:shopnointernationalinfo@gmail.com" method="post" enctype="text/plain">
          <input type="text" name="Name" placeholder="Your name" required>
          <input type="text" name="Phone" placeholder="Phone or WhatsApp number" required>
          <textarea name="Message" rows="4" placeholder="What would you like to import?" required></textarea>
          <button type="submit">Send Message</button>
          <div class="form-note">Opens your email app — or just message us directly on WhatsApp above.</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer>
  <div class="wrap footer-inner">
    <div class="brand-name">Shopno International</div>
    <div>Dhaka, Bangladesh · Guangzhou, China</div>
    <div><a href="#policy">Policies</a> · &copy; 2026 Shopno International. All rights reserved.</div>
  </div>
</footer>

<script>
  // solid nav on scroll
  const nav = document.getElementById('siteNav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('solid', window.scrollY > 40);
  });

  // mobile menu toggle
  const navToggle = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  function closeMenu(){
    mobileMenu.classList.remove('open');
    navToggle.classList.remove('open');
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.setAttribute('aria-label', 'Open menu');
    document.body.classList.remove('menu-open');
  }
  function openMenu(){
    mobileMenu.classList.add('open');
    navToggle.classList.add('open');
    navToggle.setAttribute('aria-expanded', 'true');
    navToggle.setAttribute('aria-label', 'Close menu');
    document.body.classList.add('menu-open');
  }
  navToggle.addEventListener('click', () => {
    mobileMenu.classList.contains('open') ? closeMenu() : openMenu();
  });
  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
  window.addEventListener('keydown', (e) => {
    if(e.key === 'Escape') closeMenu();
  });
  window.addEventListener('resize', () => {
    if(window.innerWidth > 980) closeMenu();
  });

  // scroll reveal
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if(e.isIntersecting){
        e.target.classList.add('in');
        io.unobserve(e.target);
      }
    });
  }, {threshold:0.15, rootMargin:"0px 0px -60px 0px"});
  document.querySelectorAll('.reveal, .reveal-stagger').forEach(el => io.observe(el));
</script>
</body>
</html>
