@extends('layouts.app')

@section('title', 'Marketing Services | Software Makers Limited Company')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 120px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-handshake me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Marketing Services</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Relationship-driven go-to-market: connect with the right customers, partners, and decision makers—locally and internationally.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#services" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                Explore our services
                            </a>
                            <a href="index-en.html#contact" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-envelope me-2"></i>
                                Contact us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <h2 class="section-title text-center">How we accelerate your go‑to‑market</h2>
                    <p class="section-subtitle text-center">
                        In modern markets, access to the right people is as critical as the quality of your product.
                        We combine <strong>relationship marketing</strong>, sector expertise and data-driven targeting
                        to connect you with customers, investors and strategic partners that truly move the needle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Sector-focused <span class="text-gradient">marketing plays</span></h2>
                    <p class="section-subtitle">Tailored strategies designed for the realities of each industry.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="sector-card">
                        <div class="sector-icon health"><i class="fas fa-heartbeat"></i></div>
                        <h4>Healthcare & Life Sciences</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Positioning hospitals and specialty clinics</li>
                            <li><i class="fas fa-check text-success me-2"></i> Launching medical devices and health platforms</li>
                            <li><i class="fas fa-check text-success me-2"></i> Building international medical tourism funnels</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="sector-card">
                        <div class="sector-icon tech"><i class="fas fa-microchip"></i></div>
                        <h4>Technology & SaaS</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Go‑to‑market for B2B platforms and SaaS</li>
                            <li><i class="fas fa-check text-success me-2"></i> Product launch events and roadshows</li>
                            <li><i class="fas fa-check text-success me-2"></i> Strategic alliances with hyperscalers and resellers</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon real-estate"><i class="fas fa-city"></i></div>
                        <h4>Real Estate & Development</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Marketing residential and mixed‑use projects</li>
                            <li><i class="fas fa-check text-success me-2"></i> Investor roadshows for local & foreign capital</li>
                            <li><i class="fas fa-check text-success me-2"></i> Industry events & investment forums</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="sector-card">
                        <div class="sector-icon tourism"><i class="fas fa-plane-departure"></i></div>
                        <h4>Tourism & Hospitality</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Campaigns for destinations, hotels and resorts</li>
                            <li><i class="fas fa-check text-success me-2"></i> Partnerships with global travel operators</li>
                            <li><i class="fas fa-check text-success me-2"></i> Integrated tourism & experience programs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="sector-card">
                        <div class="sector-icon consumer"><i class="fas fa-shopping-bag"></i></div>
                        <h4>Consumer & Luxury</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> GTM for F&amp;B brands and retail chains</li>
                            <li><i class="fas fa-check text-success me-2"></i> Launching fragrances, fashion and lifestyle lines</li>
                            <li><i class="fas fa-check text-success me-2"></i> Expanding distribution into GCC and global markets</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon energy"><i class="fas fa-bolt"></i></div>
                        <h4>Energy & Sustainability</h4>
                        <ul class="mt-3 mb-0">
                            <li><i class="fas fa-check text-success me-2"></i> Positioning clean‑energy and ESG initiatives</li>
                            <li><i class="fas fa-check text-success me-2"></i> Connecting with global investors & operators</li>
                            <li><i class="fas fa-check text-success me-2"></i> Storytelling around impact and national vision</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Marketing Services -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Our core <span class="text-gradient">marketing services</span></h2>
                    <p class="section-subtitle">From strategy to execution, we own the full relationship cycle.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-feature">
                        <i class="fas fa-network-wired text-primary mb-3" style="font-size:2.7rem;"></i>
                        <h4>Relationship mapping</h4>
                        <p>Identify high‑value decision makers and ecosystem partners across government, enterprise and investor networks.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-feature">
                        <i class="fas fa-bullseye text-danger mb-3" style="font-size:2.7rem;"></i>
                        <h4>Campaign orchestration</h4>
                        <p>Design and manage multi‑channel campaigns (events, digital, field marketing) aligned to clear revenue targets.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-feature">
                        <i class="fas fa-handshake-angle text-success mb-3" style="font-size:2.7rem;"></i>
                        <h4>Partnership development</h4>
                        <p>Convert conversations into structured MoUs, joint ventures, distribution agreements and strategic alliances.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-feature">
                        <i class="fas fa-chart-line text-info mb-3" style="font-size:2.7rem;"></i>
                        <h4>Performance & analytics</h4>
                        <p>Track KPIs in real time, measure ROI by sector and continuously optimise your marketing investments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KPIs -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Key performance <span class="text-gradient">indicators</span></h2>
                    <p class="section-subtitle">We measure success with concrete numbers – not vanity metrics.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="kpi-card">
                        <div class="kpi-number">30+</div>
                        <div class="kpi-label">New qualified relationships per month</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                    <div class="kpi-card">
                        <div class="kpi-number">45%</div>
                        <div class="kpi-label">Average revenue uplift after 12 months</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="kpi-card">
                        <div class="kpi-number">20+</div>
                        <div class="kpi-label">Markets accessed via our partner network</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="kpi-card">
                        <div class="kpi-number">95%</div>
                        <div class="kpi-label">Client satisfaction across sectors</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Selected <span class="text-gradient">success stories</span></h2>
                    <p class="section-subtitle">Real outcomes from real engagements in the region.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="success-story">
                        <h5><i class="fas fa-hospital me-2"></i>Healthcare network</h5>
                        <p>Helped a private hospital group build international referral channels and increase
                           occupancy by <strong>40%</strong> in six months through targeted relationship marketing
                           across the GCC and North Africa.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="success-story">
                        <h5><i class="fas fa-building me-2"></i>Real estate developer</h5>
                        <p>Designed investor roadshows and joint events that enabled a mixed‑use project to
                           secure foreign investment and lift sales by <strong>60%</strong> in the first quarter.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="success-story">
                        <h5><i class="fas fa-laptop-code me-2"></i>Technology vendor</h5>
                        <p>Launched a new SaaS platform via strategic alliances, achieving presence in
                           <strong>15 countries</strong> and multi‑million SAR pipeline within the first year.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="success-story">
                        <h5><i class="fas fa-utensils me-2"></i>Food & beverage brand</h5>
                        <p>Expanded distribution into <strong>8 new markets</strong> and increased revenues by
                           <strong>80%</strong> by connecting the brand with regional distributors and retail partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Why choose a <span class="text-gradient">relationship-first</span> model?</h2>
                    <p class="section-subtitle">Understand the difference between transactional marketing and what we offer.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="comparison-table">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Dimension</th>
                                    <th>Traditional campaigns</th>
                                    <th>Relationship-based marketing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Focus</td>
                                    <td>Short‑term impressions and clicks</td>
                                    <td>Long‑term revenue and strategic partnerships</td>
                                </tr>
                                <tr>
                                    <td>Targeting</td>
                                    <td>Broad audience, generic messaging</td>
                                    <td>Hand‑picked decision makers and influencers</td>
                                </tr>
                                <tr>
                                    <td>Channels</td>
                                    <td>Paid media only</td>
                                    <td>Mix of events, networks, alliances and digital campaigns</td>
                                </tr>
                                <tr>
                                    <td>Measurement</td>
                                    <td>Basic metrics (views, traffic)</td>
                                    <td>Deals closed, partnerships signed, markets opened</td>
                                </tr>
                                <tr>
                                    <td>Value creation</td>
                                    <td>Single campaign outcomes</td>
                                    <td>Compounding value across sectors and geographies</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2>Ready to unlock your next wave of growth?</h2>
                    <p class="lead">
                        Let’s design a relationship‑driven marketing plan for your sector and connect you with
                        the partners, investors and customers that matter most.
                    </p>
                    <a href="index-en.html#contact" class="btn-marketing">
                        <i class="fas fa-phone me-2"></i>
                        Talk to our team
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (same as index-en) -->
    <!-- Scripts -->
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
    <!-- Copy Protection Script -->
@endsection
