<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions Générales | Software Makers Limited Company</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container" style="padding: 0 1.25rem;">
            <a class="navbar-brand" href="index-fr.html#home" style="display: flex; align-items: center; text-decoration: none; direction: ltr; margin-right: 1rem;">
                <div class="logo-container" style="position: relative; margin-right: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="SMLC Company Logo" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: ltr;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Software Makers Limited Company</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer le menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.05rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#home" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-home me-1"></i>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#about" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-info-circle me-1"></i>
                            À propos
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index-fr.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-briefcase me-1"></i>
                            Nos Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs me-2"></i>
                                Services Techniques
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb me-2 text-warning"></i>
                                Conseil Technique
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code me-2 text-info"></i>
                                Développement de Systèmes
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link me-2 text-success"></i>
                                Intégration de Systèmes
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                Gestion de Projets Techniques
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot me-2 text-danger"></i>
                                Optimisation et Automatisation des Processus
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette me-2" style="color: #e91e63;"></i>
                                Conception UI/UX
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools me-2 text-secondary"></i>
                                Support Technique et Maintenance
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line me-2"></i>
                                Services Commerciaux
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services-fr') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn me-2 text-warning"></i>
                                Services Marketing
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-fr.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube me-2 text-info"></i>
                                Services Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index-fr.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain me-2" style="color: #9c27b0;"></i>
                                Système de Support IA
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#presence" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-globe me-1"></i>
                            Notre Présence
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers-fr') }}" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-user-tie me-1"></i>
                            Carrières
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative active" href="{{ route('terms-fr') }}" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-file-alt me-1"></i>
                            Conditions Générales
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index-fr.html#contact" style="padding: 0.35rem 0.45rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.85rem;">
                            <i class="fas fa-envelope me-1"></i>
                            Contactez-nous
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1 flex-wrap ms-lg-auto" style="flex-shrink: 0%;">
                    <a href="{{ route('terms') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="Arabe">
                        <img src="https://flagcdn.com/w20/sa.png" alt="Drapeau de l'Arabie saoudite" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('terms-en') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="Drapeau du Royaume-Uni" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('terms-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.35rem 0.55rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.85rem; background: rgba(0,0,0,0.2);" title="Français">
                        <img src="https://flagcdn.com/w20/fr.png" alt="Drapeau de la France" width="20" height="15" style="border-radius: 3px;">
                        <span>FR</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="py-5 bg-dark text-white" style="margin-top: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="mb-3">Conditions Générales</h1>
                    <p class="mb-0">Conditions d’utilisation du site de Software Makers Limited Company</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white-50" href="{{ route('index-fr') }}">Accueil</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Conditions Générales</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Terms Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="terms-content">

                        <h2 class="mb-4">1. Introduction</h2>
                        <p>Bienvenue sur le site de Software Makers Limited Company (SMLC). Les présentes Conditions Générales régissent votre utilisation de notre site web et de nos services numériques. En accédant à ce site ou en l’utilisant, vous acceptez d’être lié par ces Conditions Générales. Si vous n’acceptez pas une quelconque partie de ces conditions, veuillez ne pas utiliser le site.</p>
                        
                        <p>Nous nous engageons à protéger votre vie privée et vos données personnelles conformément aux normes internationales les plus strictes et aux lois du Royaume d’Arabie saoudite, y compris la Loi sur la protection des données personnelles publiée par le décret royal n° (M/19) en date du 09/02/1443 H.</p>

                        <h2 class="mb-4">2. Informations sur l’entreprise</h2>
                        <p>Software Makers Limited Company est une société saoudienne spécialisée dans le développement de logiciels et les solutions technologiques avancées. Nous fournissons des services de conseil technique, de développement de systèmes et des solutions basées sur Odoo en tant que partenaire officiel certifié.</p>

                        <h2 class="mb-4">3. Utilisation du site</h2>
                        <h3>3.1 Utilisation autorisée</h3>
                        <ul>
                            <li>Vous ne pouvez utiliser ce site qu’à des fins licites.</li>
                            <li>Vous devez utiliser le site d’une manière qui ne porte pas atteinte aux droits d’autrui.</li>
                            <li>Il est interdit d’utiliser le site à des fins illégales, nuisibles ou malveillantes.</li>
                        </ul>

                        <h3>3.2 Utilisation interdite</h3>
                        <ul>
                            <li>Publier ou diffuser tout contenu illégal, offensant ou diffamatoire.</li>
                            <li>Porter atteinte aux droits de propriété intellectuelle de tiers.</li>
                            <li>Tenter de pirater, perturber ou endommager le site ou ses systèmes.</li>
                            <li>Utiliser le site pour diffuser des virus, des logiciels malveillants ou tout code nuisible.</li>
                        </ul>

                        <h2 class="mb-4">4. Propriété intellectuelle</h2>
                        <p>Tout le contenu de ce site, y compris les textes, images, logos, conceptions et logiciels, est protégé par les lois sur le droit d’auteur et les marques. Il est interdit d’utiliser ce contenu sans l’autorisation écrite préalable de Software Makers Limited Company.</p>

                        <h2 class="mb-4">5. Services fournis</h2>
                        <h3>5.1 Services techniques</h3>
                        <p>Nous fournissons des services de conseil technique, de développement de systèmes, d’intégration de systèmes, de gestion de projets techniques, d’automatisation des processus et de conception UI/UX.</p>

                        <h3>5.2 Services Odoo</h3>
                        <p>Nous sommes un partenaire Odoo officiel et certifié, fournissant des services complets de mise en œuvre et de personnalisation ERP.</p>

                        <h3>5.3 Support technique</h3>
                        <p>Nous mettons à disposition notre plateforme intelligente de support ResolvePro AI pour assister nos clients 24h/24 et 7j/7.</p>

                        <h2 class="mb-4">6. Confidentialité et protection des données personnelles</h2>
                        <p>Nous nous engageons à protéger votre vie privée et vos données personnelles conformément aux normes internationales les plus strictes et aux lois du Royaume d’Arabie saoudite, y compris la Loi sur la protection des données personnelles.</p>

                        <h3>6.1 Données personnelles collectées</h3>
                        <p>Nous collectons les catégories de données personnelles suivantes :</p>
                        <ul>
                            <li><strong>Données de base :</strong> nom, adresse e-mail, numéro de téléphone.</li>
                            <li><strong>Données professionnelles :</strong> nom de l’entreprise, poste, secteur d’activité.</li>
                            <li><strong>Données techniques :</strong> adresse IP, type de navigateur, système d’exploitation.</li>
                            <li><strong>Données d’utilisation :</strong> pages visitées, durée de la visite, sources de référencement.</li>
                        </ul>

                        <h3>6.2 Finalités du traitement des données</h3>
                        <p>Nous utilisons les données personnelles pour les finalités suivantes :</p>
                        <ul>
                            <li>Fournir nos services techniques et de conseil.</li>
                            <li>Améliorer l’expérience utilisateur sur notre site.</li>
                            <li>Répondre à vos demandes et à vos questions.</li>
                            <li>Envoyer des mises à jour et des communications marketing (avec votre consentement).</li>
                            <li>Analyser l’utilisation du site afin d’améliorer ses performances.</li>
                            <li>Respecter les obligations légales et réglementaires.</li>
                        </ul>

                        <h3>6.3 Base juridique du traitement</h3>
                        <p>Nous traitons vos données personnelles sur les bases juridiques suivantes :</p>
                        <ul>
                            <li><strong>Consentement :</strong> votre consentement explicite au traitement des données.</li>
                            <li><strong>Exécution d’un contrat :</strong> fournir les services convenus avec vous.</li>
                            <li><strong>Intérêt légitime :</strong> améliorer nos services et protéger nos intérêts.</li>
                            <li><strong>Obligation légale :</strong> respecter les lois et règlements applicables.</li>
                        </ul>

                        <h3>6.4 Partage des données personnelles</h3>
                        <p>Nous ne vendons ni ne louons vos données personnelles à des tiers. Nous pouvons partager vos données avec :</p>
                        <ul>
                            <li>Des prestataires de services techniques de confiance (par exemple Odoo).</li>
                            <li>Les autorités gouvernementales compétentes lorsque la loi l’exige.</li>
                            <li>Des partenaires commerciaux avec votre consentement explicite.</li>
                        </ul>

                        <h3>6.5 Protection des données personnelles</h3>
                        <p>Nous appliquons des mesures de sécurité strictes pour protéger vos données :</p>
                        <ul>
                            <li><strong>Chiffrement :</strong> chiffrement des données en transit et au repos.</li>
                            <li><strong>Contrôle d’accès :</strong> accès limité uniquement aux personnes autorisées.</li>
                            <li><strong>Surveillance continue :</strong> surveillance des systèmes de sécurité 24h/24.</li>
                            <li><strong>Sauvegardes :</strong> sauvegardes sécurisées et chiffrées.</li>
                            <li><strong>Formation :</strong> formation des employés aux bonnes pratiques de protection des données.</li>
                        </ul>

                        <h3>6.6 Vos droits relatifs aux données personnelles</h3>
                        <p>Vous disposez des droits suivants concernant vos données personnelles :</p>
                        <ul>
                            <li><strong>Droit d’accès :</strong> savoir quelles données nous détenons à votre sujet.</li>
                            <li><strong>Droit de rectification :</strong> corriger les données inexactes.</li>
                            <li><strong>Droit à l’effacement :</strong> demander la suppression de vos données dans certains cas.</li>
                            <li><strong>Droit à la limitation :</strong> demander la limitation du traitement.</li>
                            <li><strong>Droit à la portabilité :</strong> obtenir une copie de vos données dans un format structuré.</li>
                            <li><strong>Droit d’opposition :</strong> vous opposer à certains traitements.</li>
                            <li><strong>Droit de retirer votre consentement :</strong> retirer votre consentement à tout moment.</li>
                        </ul>

                        <h3>6.7 Cookies</h3>
                        <p>Nous utilisons différents types de cookies, notamment :</p>
                        <ul>
                            <li><strong>Cookies essentiels :</strong> nécessaires au bon fonctionnement du site.</li>
                            <li><strong>Cookies de performance :</strong> utilisés pour analyser l’utilisation du site.</li>
                            <li><strong>Cookies fonctionnels :</strong> utilisés pour améliorer l’expérience utilisateur.</li>
                            <li><strong>Cookies marketing :</strong> utilisés pour afficher des publicités pertinentes.</li>
                        </ul>
                        <p>Vous pouvez gérer vos préférences en matière de cookies via les paramètres de votre navigateur ou via la bannière de cookies en bas de page.</p>

                        <h3>6.8 Durée de conservation des données</h3>
                        <p>Nous conservons vos données personnelles uniquement pendant la durée nécessaire pour atteindre les finalités décrites ci-dessus ou conformément aux exigences légales. En règle générale, nous conservons les données pendant une durée maximale de trois ans à compter de votre dernière interaction avec nous.</p>

                        <h3>6.9 Transferts transfrontaliers de données</h3>
                        <p>Nous pouvons transférer vos données personnelles vers d’autres pays pour les besoins du traitement ou de la fourniture de services. Dans ce cas, nous veillons à ce que des garanties appropriées soient mises en place pour protéger vos données conformément aux normes internationales.</p>

                        <h3>6.10 Protection des données des enfants</h3>
                        <p>Nous ne collectons pas sciemment de données personnelles concernant des enfants de moins de 18 ans sans le consentement de leurs parents ou de leur tuteur légal. Si nous apprenons que nous avons collecté des données personnelles concernant un enfant sans consentement approprié, nous supprimerons immédiatement ces données.</p>

                        <h3>6.11 Incidents de sécurité</h3>
                        <p>En cas de violation de la sécurité susceptible d’affecter vos données personnelles, nous vous informerons, ainsi que les autorités compétentes, dans un délai de 72 heures à compter de la découverte de l’incident, conformément aux exigences légales.</p>

                        <h3>6.12 Mise à jour de la politique de confidentialité</h3>
                        <p>Nous pouvons mettre à jour la présente politique de confidentialité de temps à autre. Nous vous informerons de toute modification importante par un avis visible sur notre site ou par e-mail.</p>

                        <h2 class="mb-4">7. Comptes et mots de passe</h2>
                        <p>Si vous créez un compte sur notre site, vous êtes responsable :</p>
                        <ul>
                            <li>De la confidentialité de vos informations de connexion et de votre mot de passe.</li>
                            <li>De nous informer immédiatement de toute utilisation non autorisée de votre compte.</li>
                            <li>De mettre à jour vos informations personnelles si nécessaire.</li>
                        </ul>

                        <h2 class="mb-4">8. Limitation de responsabilité</h2>
                        <h3>8.1 Absence de garantie</h3>
                        <p>Ce site est fourni « tel quel » sans aucune garantie d’aucune sorte, expresse ou implicite.</p>

                        <h3>8.2 Limitation de responsabilité</h3>
                        <p>Nous ne saurions être tenus responsables de tout dommage direct, indirect, accessoire, consécutif ou spécial résultant de ou lié à votre utilisation du site ou de nos services.</p>

                        <h2 class="mb-4">9. Modifications des Conditions Générales</h2>
                        <p>Nous nous réservons le droit de modifier les présentes Conditions Générales à tout moment. Toute modification sera publiée sur cette page, et votre utilisation continue du site après la publication des modifications vaudra acceptation des nouvelles conditions.</p>

                        <h2 class="mb-4">10. Résiliation du service</h2>
                        <p>Nous nous réservons le droit de suspendre ou de résilier votre accès au site ou à nos services à tout moment, sans préavis et pour quelque raison que ce soit.</p>

                        <h2 class="mb-4">11. Conformité aux lois et réglementations saoudiennes</h2>
                        <h3>11.1 Loi sur la protection des données personnelles</h3>
                        <p>Nous respectons pleinement la Loi sur la protection des données personnelles publiée par le décret royal n° (M/19) en date du 09/02/1443 H, qui vise à protéger la vie privée des données personnelles et à assurer leur traitement légal et sécurisé.</p>

                        <h3>11.2 Vision 2030 du Royaume d’Arabie saoudite</h3>
                        <p>Nous soutenons la Vision 2030 du Royaume d’Arabie saoudite en matière de transformation numérique et de développement de l’économie numérique, en fournissant des solutions technologiques innovantes contribuant à la construction d’une société numérique avancée.</p>

                        <h3>11.3 Normes de cybersécurité</h3>
                        <p>Nous appliquons les normes de cybersécurité émises par l’Autorité nationale de cybersécurité, notamment :</p>
                        <ul>
                            <li>Normes de protection des données personnelles.</li>
                            <li>Normes de sécurité des réseaux.</li>
                            <li>Normes de gestion des risques cybernétiques.</li>
                            <li>Normes de réponse aux incidents de cybersécurité.</li>
                        </ul>

                        <h3>11.4 Règlements d’application</h3>
                        <p>Nous respectons les règlements d’application suivants, le cas échéant :</p>
                        <ul>
                            <li>Règlement d’application de la Loi sur la protection des données personnelles.</li>
                            <li>Règlements d’application en matière de cybersécurité.</li>
                            <li>Règlements d’application relatifs au commerce électronique.</li>
                            <li>Règlements d’application relatifs aux services cloud.</li>
                        </ul>

                        <h2 class="mb-4">12. Droit applicable</h2>
                        <p>Les présentes Conditions Générales sont régies et interprétées conformément aux lois du Royaume d’Arabie saoudite. Tout litige découlant de ou lié à ces conditions sera soumis aux tribunaux compétents du Royaume d’Arabie saoudite.</p>

                        <h2 class="mb-4">13. Nous contacter</h2>
                        <p>Si vous avez des questions concernant les présentes Conditions Générales, vous pouvez nous contacter via :</p>
                        <ul>
                            <li><strong>E-mail :</strong> info@smlc.com</li>
                            <li><strong>Téléphone :</strong> +966555883492</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-dark py-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="Logo de Software Makers Limited Company - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">Software Makers Limited Company</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 Tous droits réservés</p>
                        <div class="mt-3 d-inline-flex align-items-center gap-2">
                            <a href="{{ route('terms') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('terms-en') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" style="display:block;">
                            </a>
                            <a href="{{ route('terms-fr') }}" class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; border: 1px solid rgba(0,0,0,0.15); overflow: hidden; background: rgba(0,0,0,0.02);">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR" width="20" height="15" style="display:block;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Script de Protection contre la Copie -->
    <script>
        document.addEventListener('selectstart', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('copy', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('cut', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('paste', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                return true;
            }
            e.preventDefault();
            return false;
        });

        document.addEventListener('keydown', function(e) {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.isContentEditable) {
                if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a')) {
                    return true;
                }
            }

            if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x' || e.key === 'a' || e.key === 's' || e.key === 'u')) {
                e.preventDefault();
                return false;
            }

            if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
                e.preventDefault();
                return false;
            }
        });

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });

        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
    </script>

</body>
</html>




