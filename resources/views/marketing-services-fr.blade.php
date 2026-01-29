@extends('layouts.app')

@section('title', 'Services de marketing relationnel | Software Makers')

@section('content')
<!-- Hero Section -->
    <section class="hero-section" style="padding-top: 100px;">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                            <i class="fas fa-handshake me-3"></i>
                            <span style="color: #00d4ff; text-shadow: 0 0 15px rgba(0, 212, 255, 0.6);">Marketing relationnel</span>
                        </h1>
                        <p class="lead mb-4" style="color: #e8f4fd; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); font-size: 1.2rem;">
                            Accélérez votre développement grâce à des relations stratégiques et des partenariats à forte valeur—au niveau local et international.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#services" class="btn btn-primary btn-lg btn-interactive">
                                <i class="fas fa-rocket me-2"></i>
                                Découvrir nos services
                            </a>
                            <a href="index-fr.html#contact" class="btn btn-outline-light btn-lg btn-interactive">
                                <i class="fas fa-envelope me-2"></i>
                                Nous contacter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 class="section-title">Pourquoi choisir notre équipe marketing&nbsp;?</h2>
                    <p class="section-subtitle">
                        Dans un environnement où la confiance et les partenariats déterminent la vitesse de croissance, nous élaborons des stratégies relationnelles qui connectent votre entreprise aux décideurs clés, structurent les messages différenciants et transforment chaque interaction en opportunité mesurable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services by Sectors Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos services par <span class="text-gradient">secteur</span></h2>
                    <p class="section-subtitle">Des dispositifs adaptés à chaque industrie stratégique</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Health Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="sector-card">
                        <div class="sector-icon health">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>Santé et dispositifs médicaux</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Positionnement des hôpitaux et cliniques privées & publiques</li>
                            <li><i class="fas fa-check text-success me-2"></i> Promotion d’équipements et consommables médicaux</li>
                            <li><i class="fas fa-check text-success me-2"></i> Programmes de tourisme médical pour les patients internationaux</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tech Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="sector-card">
                        <div class="sector-icon tech">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h4>Technologies et solutions numériques</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Go-to-market pour matériels, logiciels et IA</li>
                            <li><i class="fas fa-check text-success me-2"></i> Gestion d’événements de lancement et roadshows</li>
                            <li><i class="fas fa-check text-success me-2"></i> Construction d’alliances stratégiques avec investisseurs et grands comptes</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Real Estate Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="sector-card">
                        <div class="sector-icon real-estate">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Immobilier et construction</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Campagnes de vente pour projets résidentiels et commerciaux</li>
                            <li><i class="fas fa-check text-success me-2"></i> Roadshows investisseurs au Moyen-Orient, en Europe et en Afrique</li>
                            <li><i class="fas fa-check text-success me-2"></i> Organisation de salons immobiliers et de sessions B2B</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Tourism Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="sector-card">
                        <div class="sector-icon tourism">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h4>Tourisme & tourisme médical</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Création d’offres combinant soins spécialisés et hospitalité</li>
                            <li><i class="fas fa-check text-success me-2"></i> Coordination logistique pour patients et accompagnants</li>
                            <li><i class="fas fa-check text-success me-2"></i> Partenariats avec agences de voyages santé et assureurs</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Consumer Goods Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="sector-card">
                        <div class="sector-icon consumer">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h4>Biens de consommation & luxe</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Lancements de gammes food & beverage premium</li>
                            <li><i class="fas fa-check text-success me-2"></i> Activation retail pour mode et parfums de prestige</li>
                            <li><i class="fas fa-check text-success me-2"></i> Expansion multicanale au sein des marchés GCC, Europe et Afrique</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Manufacturing Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="sector-card">
                        <div class="sector-icon manufacturing">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>Industrie & commerce</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Promotion d’équipements industriels et matières premières</li>
                            <li><i class="fas fa-check text-success me-2"></i> Mise en relation avec distributeurs, fabricants et fonds d’investissement</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Education Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="sector-card">
                        <div class="sector-icon education">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Éducation & formation</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Promotion d’universités, d’écoles spécialisées et de bootcamps</li>
                            <li><i class="fas fa-check text-success me-2"></i> Création de partenariats académiques-entreprises</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Energy Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="sector-card">
                        <div class="sector-icon energy">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Énergie & transition verte</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Communication autour des projets d’énergie renouvelable</li>
                            <li><i class="fas fa-check text-success me-2"></i> Montage d’alliances avec porteurs de capitaux et partenaires technologiques</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Food Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="sector-card">
                        <div class="sector-icon food">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>Agroalimentaire & restauration</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Campagnes pour chaînes de restaurants, hôtels et cafés</li>
                            <li><i class="fas fa-check text-success me-2"></i> Plans de lancement pour produits alimentaires innovants</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Logistics Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="sector-card">
                        <div class="sector-icon logistics">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>Transport & logistique</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Valorisation d’opérateurs de fret et de chaînes du froid</li>
                            <li><i class="fas fa-check text-success me-2"></i> Conventions commerciales avec acteurs locaux et globaux</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Media Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1100">
                    <div class="sector-card">
                        <div class="sector-icon media">
                            <i class="fas fa-video"></i>
                        </div>
                        <h4>Médias & communication</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Activation des maisons de production et régies publicitaires</li>
                            <li><i class="fas fa-check text-success me-2"></i> Mise en contact avec des partenaires médias premium</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Sports Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1200">
                    <div class="sector-card">
                        <div class="sector-icon sports">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h4>Sport & divertissement</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Programmes pour clubs, festivals et événements live</li>
                            <li><i class="fas fa-check text-success me-2"></i> Recherche de sponsors et d’investisseurs internationaux</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Government Sector -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1300">
                    <div class="sector-card">
                        <div class="sector-icon government">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h4>Institutions publiques & conseil</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Programmes PPP et communication d’initiatives publiques</li>
                            <li><i class="fas fa-check text-success me-2"></i> Conseil en diplomatie économique et gestion des parties prenantes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Marketing Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Nos services marketing <span class="text-gradient">transverses</span></h2>
                    <p class="section-subtitle">Une offre complète qui combine stratégie, relations et exécution</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-feature">
                        <i class="fas fa-network-wired"></i>
                        <h4>Réseau d'influence étendu</h4>
                        <p>Accès direct aux investisseurs, distributeurs et organismes publics des marchés MENA, Europe et Afrique.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-feature">
                        <i class="fas fa-bullhorn"></i>
                        <h4>Pilotage de campagnes</h4>
                        <p>Création et exécution de campagnes omnicanales adaptées à chaque segment et objectif de conversion.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-feature">
                        <i class="fas fa-handshake"></i>
                        <h4>Construction de partenariats</h4>
                        <p>Animation de tables rondes, matchmaking B2B et négociation d’accords commerciaux gagnant-gagnant.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-feature">
                        <i class="fas fa-chart-line"></i>
                        <h4>Suivi et mesure de la valeur</h4>
                        <p>Tableaux de bord en temps réel, KPIs sectoriels et recommandations pour maximiser le ROI.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KPIs Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Indicateurs de performance <span class="text-gradient">par secteur</span></h2>
                    <p class="section-subtitle">Des résultats prouvés et comparables</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="kpi-card">
                        <div class="kpi-number">25+</div>
                        <div class="kpi-label">Nouveaux partenariats activés chaque mois</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="kpi-card">
                        <div class="kpi-number">150%</div>
                        <div class="kpi-label">Croissance moyenne du chiffre d’affaires</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="kpi-card">
                        <div class="kpi-number">500+</div>
                        <div class="kpi-label">Contacts qualifiés & investisseurs mobilisés</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="kpi-card">
                        <div class="kpi-number">95%</div>
                        <div class="kpi-label">Amélioration de la perception de marque</div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Histoires <span class="text-gradient">de réussite</span></h2>
                    <p class="section-subtitle">Des cas concrets, mesurés et documentés</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-hospital me-2"></i>Santé</h5>
                        <p>Augmentation de <strong>40&nbsp;%</strong> du taux d’occupation d’un hôpital spécialisé grâce à des accords conclus avec des assureurs et agences de tourisme médical.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-building me-2"></i>Immobilier</h5>
                        <p>Organisation d’un roadshow international permettant à un promoteur d’écouler <strong>60&nbsp;%</strong> de ses unités en trois mois.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="success-story">
                        <h5><i class="fas fa-laptop-code me-2"></i>Technologie</h5>
                        <p>Lancement coordonné d’une nouvelle plateforme SaaS avec relais presse et influenceurs&nbsp;: présence commerciale dans <strong>15 pays</strong> la première année.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="success-story">
                        <h5><i class="fas fa-utensils me-2"></i>Agroalimentaire</h5>
                        <p>Signature de nouveaux accords de distribution dans <strong>8 pays</strong> et +<strong>80&nbsp;%</strong> de revenus pour une marque premium de produits gourmets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Comparatif <span class="text-gradient">par secteur</span></h2>
                    <p class="section-subtitle">Une vision synthétique de nos offres et parties prenantes</p>
                </div>
            </div>
            
            <div class="comparison-table" data-aos="fade-up">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Secteur</th>
                            <th>Focus de nos interventions</th>
                            <th>Typologie de relations activées</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Santé & dispositifs médicaux</strong></td>
                            <td>Cliniques, équipements, tourisme médical</td>
                            <td>Investisseurs, distributeurs, assureurs internationaux</td>
                        </tr>
                        <tr>
                            <td><strong>Technologies</strong></td>
                            <td>Matériel, logiciels, lancement produits</td>
                            <td>Grandes entreprises, venture capital, intégrateurs</td>
                        </tr>
                        <tr>
                            <td><strong>Immobilier</strong></td>
                            <td>Projets résidentiels & commerciaux, salons</td>
                            <td>Investisseurs locaux et internationaux</td>
                        </tr>
                        <tr>
                            <td><strong>Consommation & luxe</strong></td>
                            <td>Mode, parfums, F&B premium</td>
                            <td>Retailers, marketplaces, acheteurs-clés</td>
                        </tr>
                        <tr>
                            <td><strong>Éducation & formation</strong></td>
                            <td>Universités, programmes certifiants</td>
                            <td>Institutions académiques, entreprises, organismes d’accréditation</td>
                        </tr>
                        <tr>
                            <td><strong>Énergie & environnement</strong></td>
                            <td>Projets ENR, initiatives vertes</td>
                            <td>Fonds d’investissement, industriels, ONG</td>
                        </tr>
                        <tr>
                            <td><strong>Transport & logistique</strong></td>
                            <td>Transport routier, supply chain, entrepôts</td>
                            <td>Opérateurs logistiques, distributeurs, capital-investisseurs</td>
                        </tr>
                        <tr>
                            <td><strong>Médias & publicité</strong></td>
                            <td>Studios, agences créatives, régies</td>
                            <td>Partenaires médias, influenceurs, plateformes</td>
                        </tr>
                        <tr>
                            <td><strong>Sport & divertissement</strong></td>
                            <td>Clubs, événements live, festivals</td>
                            <td>Sponsors, fonds privés, fédérations</td>
                        </tr>
                        <tr>
                            <td><strong>Institutions publiques</strong></td>
                            <td>Programmes gouvernementaux, PPP</td>
                            <td>Ministères, agences publiques, entreprises privées</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2>Lancez votre prochaine campagne</h2>
                    <p class="lead">Le succès n’est jamais le fruit du hasard&nbsp;: il dépend de la qualité de votre réseau, de la clarté de votre proposition de valeur et de la capacité à activer les bonnes audiences.</p>
                    <p class="lead">Contactez nos consultants pour bâtir un plan d’action sur mesure et accélérer votre présence sur les principaux marchés internationaux.</p>
                    <a href="index-fr.html#contact" class="btn-marketing">
                        <i class="fas fa-phone me-2"></i>
                        Discuter avec un expert
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <a href="https://wa.me/966555883492?text=Hello%20Software%20Makers" class="whatsapp-fab" aria-label="Contact via WhatsApp" target="_blank" rel="noopener">
        <svg viewBox="0 0 32 32" aria-hidden="true" class="whatsapp-icon">
            <path fill="currentColor" d="M26.1 5.9A13.9 13.9 0 1 0 4.7 26.3L3 29.8a1 1 0 0 0 1.3 1.3l3.4-1.7A13.9 13.9 0 1 0 26.1 5.9zM16 28.1c-2.3 0-4.6-.7-6.5-1.9l-.5-.3-3.9 2 2-3.9-.3-.5A12 12 0 1 1 28 16 12 12 0 0 1 16 28.1zm6.6-7.7c-.4-.2-2.3-1.1-2.7-1.3-.4-.1-.7-.2-1 .2-.3.4-1.1 1.3-1.3 1.6-.2.2-.5.3-.9.1-2.3-1.1-4-3-4.6-3.9-.2-.3 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.7.1-.2 0-.5 0-.7 0-.2-1-2.5-1.3-3.4-.3-.8-.7-.7-1-.7h-.9c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.1 0 1.8 1.3 3.6 1.5 3.9.2.3 2.6 3.9 6.3 5.5.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.6.2-1.8-.1-.2-.3-.2-.5-.3z"/>
        </svg>
    </a>
    <div id="cookiesBanner" class="cookies-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cookies-content">
                        <i class="fas fa-cookie-bite me-2"></i>
                        <span>Nous utilisons des cookies pour améliorer votre expérience sur notre site. En utilisant le site, vous acceptez notre utilisation des cookies conformément à nos <a href="{{ route('terms-fr') }}" class="terms-link">termes et conditions</a>.</span>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cookies-actions">
                        <button id="acceptCookies" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-check me-1"></i>
                            Accepter
                        </button>
                        <button id="declineCookies" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-times me-1"></i>
                            Refuser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <!-- AOS Animation -->
    <script src="i18n.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });


        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    <!-- Script de Protection contre la Copie -->
@endsection
