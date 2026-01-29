<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الشروط والأحكام | شركة صناع البرمجيات المحدودة</title>
    <link rel="icon" type="image/png" href="{{ asset('images/LOGO_UPDATE.png') }}">
    
    <!-- Bootstrap RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html#home" style="display: flex; align-items: center; text-decoration: none; direction: rtl;">
                <div class="logo-container" style="position: relative; margin-left: 15px;">
                    <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات" class="img-fluid" style="width: 64px; height: 64px; filter: brightness(1.1) contrast(1.1);">
                </div>
                <div class="brand-text" style="display: flex; flex-direction: column; align-items: flex-start; direction: rtl;">
                    <span class="fw-bold" style="font-size: 1.05rem; color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">شركة صناع البرمجيات المحدودة</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل القائمة">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto align-items-center" style="gap: 0.15rem; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#home" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-home ms-1"></i>
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#about" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-info-circle ms-1"></i>
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle position-relative" href="index.html#services" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-briefcase ms-1"></i>
                            خدماتنا
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mega shadow-lg" style="border: none; border-radius: 12px; padding: 1rem; min-width: 280px; max-width: 100%; margin-top: 0.5rem;">
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-cogs ms-2"></i>
                                الخدمات التقنية
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('consulting-services') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-lightbulb ms-2 text-warning"></i>
                                الاستشارات التقنية
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-development') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-code ms-2 text-info"></i>
                                تطوير الأنظمة
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('system-integration') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-link ms-2 text-success"></i>
                                تكامل الأنظمة
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('project-management') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-project-diagram ms-2 text-primary"></i>
                                إدارة المشاريع التقنية
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('process-automation') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-robot ms-2 text-danger"></i>
                                تحسين وأتمتة العمليات
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('ui-ux-design') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-palette ms-2" style="color: #e91e63;"></i>
                                تصميم واجهات وتجربة المستخدم
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('maintenance-support') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-tools ms-2 text-secondary"></i>
                                خدمات الدعم الفني والصيانة
                            </a></li>
                            <li><hr class="dropdown-divider my-3" style="opacity: 0.2;"></li>
                            <li class="dropdown-header px-3 py-2 mb-2" style="font-weight: 600; color: var(--brand-primary); border-bottom: 2px solid rgba(0, 212, 255, 0.2);">
                                <i class="fas fa-chart-line ms-2"></i>
                                خدمات الأعمال
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('marketing-services') }}" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-bullhorn ms-2 text-warning"></i>
                                خدمات التسويق
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index.html#odoo-services" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-cube ms-2 text-info"></i>
                                خدمات Odoo ERP
                            </a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="index.html#ai-support" style="transition: all 0.2s ease; margin-bottom: 0.25rem;">
                                <i class="fas fa-brain ms-2" style="color: #9c27b0;"></i>
                                نظام الدعم الذكي
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#presence" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-globe ms-1"></i>
                            تواجدنا
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('careers') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-user-tie ms-1"></i>
                            الوظائف
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative active" href="{{ route('terms') }}" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-file-alt ms-1"></i>
                            الشروط والأحكام
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="index.html#contact" style="padding: 0.5rem 0.6rem; border-radius: 8px; transition: all 0.3s ease; white-space: nowrap; font-size: 0.95rem;">
                            <i class="fas fa-envelope ms-1"></i>
                            اتصل بنا
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-2 gap-1 flex-wrap" style="flex-shrink: 0;">
                    <a href="{{ route('terms') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem; background: rgba(0,0,0,0.2);" title="Arabic">
                        <img src="https://flagcdn.com/w20/sa.png" alt="علم السعودية" width="20" height="15" style="border-radius: 3px;">
                        <span>AR</span>
                    </a>
                    <a href="{{ route('terms-en') }}" class="btn btn-outline-light btn-sm d-flex alignments-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="English">
                        <img src="https://flagcdn.com/w20/gb.png" alt="British Flag" width="20" height="15" style="border-radius: 3px;">
                        <span>EN</span>
                    </a>
                    <a href="{{ route('terms-fr') }}" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.8); padding: 0.45rem 0.65rem; border-radius: 10px; transition: all 0.3s ease; font-weight: 600; white-space: nowrap; font-size: 0.9rem;" title="Français">
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
                    <h1 class="mb-3">الشروط والأحكام</h1>
                    <p class="mb-0">شروط استخدام موقع صناع البرمجيات</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white-50" href="{{ route('index') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">الشروط والأحكام</li>
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

                        <h2 class="mb-4">1. المقدمة</h2>
                        <p>مرحباً بك في موقع شركة صناع البرمجيات المحدودة (SMLC). هذه الشروط والأحكام تحكم استخدامك لموقعنا الإلكتروني وخدماتنا الرقمية. باستخدامك لهذا الموقع، فإنك توافق على الالتزام بالشروط والأحكام التالية. إذا كنت لا توافق على أي جزء من هذه الشروط، يُرجى عدم استخدام الموقع.</p>
                        
                        <p>نحن ملتزمون بحماية خصوصيتك وبياناتك الشخصية وفقاً لأعلى المعايير الدولية وقوانين المملكة العربية السعودية، بما في ذلك نظام حماية البيانات الشخصية الصادر بالمرسوم الملكي رقم (م/19) وتاريخ 9/2/1443هـ.</p>

                        <h2 class="mb-4">2. معلومات عن الشركة</h2>
                        <p>شركة صناع البرمجيات المحدودة هي شركة سعودية رائدة في مجال تطوير البرمجيات والحلول التقنية المتطورة. نحن نقدم خدمات الاستشارات التقنية وتطوير الأنظمة وحلول Odoo كشريك رسمي ومعتمد.</p>

                        <h2 class="mb-4">3. استخدام الموقع</h2>
                        <h3>3.1 الاستخدام المسموح</h3>
                        <ul>
                            <li>يُسمح لك باستخدام هذا الموقع لأغراض قانونية فقط</li>
                            <li>يجب استخدام الموقع بطريقة لا تنتهك حقوق الآخرين</li>
                            <li>يُمنع استخدام الموقع لأي أغراض غير قانونية أو ضارة</li>
                        </ul>

                        <h3>3.2 الاستخدام المحظور</h3>
                        <ul>
                            <li>نشر أو توزيع أي مواد غير قانونية أو مسيئة</li>
                            <li>انتهاك حقوق الملكية الفكرية للآخرين</li>
                            <li>محاولة اختراق أو تعطيل أنظمة الموقع</li>
                            <li>استخدام الموقع لنشر الفيروسات أو البرمجيات الضارة</li>
                        </ul>

                        <h2 class="mb-4">4. الملكية الفكرية</h2>
                        <p>جميع المحتويات الموجودة على هذا الموقع، بما في ذلك النصوص والصور والشعارات والتصميمات والبرمجيات، محمية بموجب قوانين حقوق النشر والعلامات التجارية. لا يجوز استخدام أي من هذه المحتويات دون الحصول على إذن كتابي مسبق من شركة صناع البرمجيات.</p>

                        <h2 class="mb-4">5. الخدمات المقدمة</h2>
                        <h3>5.1 الخدمات التقنية</h3>
                        <p>نقدم خدمات الاستشارات التقنية وتطوير الأنظمة وتكامل الأنظمة وإدارة المشاريع التقنية وأتمتة العمليات وتصميم UI/UX.</p>

                        <h3>5.2 خدمات Odoo</h3>
                        <p>نحن شريك رسمي ومعتمد لشركة Odoo، ونقدم خدمات تنفيذ وتخصيص حلول ERP شاملة.</p>

                        <h3>5.3 الدعم الفني</h3>
                        <p>نوفر نظام الدعم الفني الذكي ResolvePro AI لخدمة عملائنا على مدار الساعة.</p>

                        <h2 class="mb-4">6. الخصوصية وحماية البيانات الشخصية</h2>
                        <p>نحن ملتزمون بحماية خصوصيتك وبياناتك الشخصية وفقاً لأعلى المعايير الدولية وقوانين المملكة العربية السعودية، بما في ذلك نظام حماية البيانات الشخصية.</p>

                        <h3>6.1 جمع البيانات الشخصية</h3>
                        <p>نقوم بجمع البيانات الشخصية التالية:</p>
                        <ul>
                            <li><strong>البيانات الأساسية:</strong> الاسم، البريد الإلكتروني، رقم الهاتف</li>
                            <li><strong>البيانات المهنية:</strong> اسم الشركة، المنصب، مجال العمل</li>
                            <li><strong>البيانات التقنية:</strong> عنوان IP، نوع المتصفح، نظام التشغيل</li>
                            <li><strong>بيانات الاستخدام:</strong> صفحات الموقع المزارة، مدة الزيارة، مصادر الإحالة</li>
                        </ul>

                        <h3>6.2 أغراض معالجة البيانات الشخصية</h3>
                        <p>نستخدم البيانات الشخصية للأغراض التالية:</p>
                        <ul>
                            <li>تقديم خدماتنا التقنية والاستشارية</li>
                            <li>تحسين تجربة المستخدم على موقعنا</li>
                            <li>الرد على استفساراتكم وطلباتكم</li>
                            <li>إرسال التحديثات والرسائل التسويقية (بموافقتكم)</li>
                            <li>تحليل استخدام الموقع لتحسين أدائه</li>
                            <li>الامتثال للالتزامات القانونية</li>
                        </ul>

                        <h3>6.3 أساس المعالجة القانوني</h3>
                        <p>نقوم بمعالجة بياناتكم الشخصية على أساس:</p>
                        <ul>
                            <li><strong>الموافقة:</strong> موافقتكم الصريحة على معالجة البيانات</li>
                            <li><strong>تنفيذ العقد:</strong> تنفيذ الخدمات المتفق عليها</li>
                            <li><strong>المصلحة المشروعة:</strong> تحسين خدماتنا وحماية مصالحنا</li>
                            <li><strong>الالتزام القانوني:</strong> الامتثال للقوانين والأنظمة المعمول بها</li>
                        </ul>

                        <h3>6.4 مشاركة البيانات الشخصية</h3>
                        <p>نحن لا نبيع أو نؤجر بياناتكم الشخصية لأطراف ثالثة. قد نشارك البيانات مع:</p>
                        <ul>
                            <li>مقدمي الخدمات التقنية الموثوقين (مثل Odoo)</li>
                            <li>الجهات الحكومية المختصة عند الحاجة القانونية</li>
                            <li>الشركاء التجاريين بموافقتكم الصريحة</li>
                        </ul>

                        <h3>6.5 حماية البيانات الشخصية</h3>
                        <p>نطبق أعلى معايير الأمان لحماية بياناتكم:</p>
                        <ul>
                            <li><strong>التشفير:</strong> تشفير البيانات أثناء النقل والتخزين</li>
                            <li><strong>التحكم في الوصول:</strong> تقييد الوصول للمخولين فقط</li>
                            <li><strong>المراقبة المستمرة:</strong> مراقبة أنظمة الأمان على مدار الساعة</li>
                            <li><strong>النسخ الاحتياطي:</strong> نسخ احتياطية آمنة ومشفرة</li>
                            <li><strong>التدريب:</strong> تدريب الموظفين على حماية البيانات</li>
                        </ul>

                        <h3>6.6 حقوقكم في البيانات الشخصية</h3>
                        <p>لديكم الحقوق التالية فيما يتعلق ببياناتكم الشخصية:</p>
                        <ul>
                            <li><strong>حق الوصول:</strong> معرفة البيانات التي نحتفظ بها عنكم</li>
                            <li><strong>حق التصحيح:</strong> تصحيح البيانات غير الصحيحة</li>
                            <li><strong>حق الحذف:</strong> حذف بياناتكم في ظروف معينة</li>
                            <li><strong>حق تقييد المعالجة:</strong> تقييد معالجة بياناتكم</li>
                            <li><strong>حق نقل البيانات:</strong> الحصول على نسخة من بياناتكم</li>
                            <li><strong>حق الاعتراض:</strong> الاعتراض على معالجة بياناتكم</li>
                            <li><strong>حق سحب الموافقة:</strong> سحب موافقتكم في أي وقت</li>
                        </ul>

                        <h3>6.7 ملفات تعريف الارتباط (Cookies)</h3>
                        <p>نستخدم أنواع مختلفة من ملفات تعريف الارتباط:</p>
                        <ul>
                            <li><strong>ملفات أساسية:</strong> ضرورية لعمل الموقع</li>
                            <li><strong>ملفات أداء:</strong> لتحليل استخدام الموقع</li>
                            <li><strong>ملفات وظيفية:</strong> لتحسين تجربة المستخدم</li>
                            <li><strong>ملفات تسويقية:</strong> لعرض الإعلانات المناسبة</li>
                        </ul>
                        <p>يمكنكم إدارة تفضيلات ملفات تعريف الارتباط من خلال إعدادات المتصفح أو من خلال شريط الإشعار في أسفل الصفحة.</p>

                        <h3>6.8 الاحتفاظ بالبيانات</h3>
                        <p>نحتفظ ببياناتكم الشخصية لمدة لا تتجاوز ما هو ضروري لتحقيق الأغراض المذكورة أعلاه، أو وفقاً للمتطلبات القانونية. عادة ما نحتفظ بالبيانات لمدة 3 سنوات من آخر تفاعل معنا.</p>

                        <h3>6.9 نقل البيانات عبر الحدود</h3>
                        <p>قد ننقل بياناتكم الشخصية إلى دول أخرى لمعالجة البيانات أو تقديم الخدمات. في هذه الحالة، نضمن وجود ضمانات كافية لحماية بياناتكم وفقاً للمعايير الدولية.</p>

                        <h3>6.10 حماية بيانات الأطفال</h3>
                        <p>نحن لا نجمع عمداً البيانات الشخصية للأطفال دون سن 18 عاماً دون موافقة الوالدين أو الوصي القانوني. إذا علمنا أننا جمعنا بيانات شخصية لطفل دون موافقة مناسبة، سنقوم بحذف هذه البيانات فوراً.</p>

                        <h3>6.11 الإشعارات الأمنية</h3>
                        <p>في حالة حدوث أي انتهاك أمني قد يؤثر على بياناتكم الشخصية، سنقوم بإشعاركم والجهات المختصة خلال 72 ساعة من اكتشاف الحادث، وفقاً للمتطلبات القانونية.</p>

                        <h3>6.12 تحديث سياسة الخصوصية</h3>
                        <p>قد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر. سنقوم بإشعاركم بأي تغييرات جوهرية من خلال إشعار بارز على موقعنا أو عبر البريد الإلكتروني.</p>

                        <h2 class="mb-4">7. الحسابات وكلمات المرور</h2>
                        <p>إذا قمت بإنشاء حساب على موقعنا، فأنت مسؤول عن:</p>
                        <ul>
                            <li>الحفاظ على سرية معلومات حسابك وكلمة المرور</li>
                            <li>إخطارنا فوراً بأي استخدام غير مصرح به لحسابك</li>
                            <li>تحديث معلوماتك الشخصية عند الحاجة</li>
                        </ul>

                        <h2 class="mb-4">8. تحديد المسؤولية</h2>
                        <h3>8.1 عدم الضمان</h3>
                        <p>يتم توفير هذا الموقع "كما هو" دون أي ضمانات من أي نوع، سواء كانت صريحة أو ضمنية.</p>

                        <h3>8.2 حدود المسؤولية</h3>
                        <p>نحن لا نتحمل المسؤولية عن أي أضرار مباشرة أو غير مباشرة قد تنشأ عن استخدامك للموقع أو خدماتنا.</p>

                        <h2 class="mb-4">9. التعديلات على الشروط والأحكام</h2>
                        <p>نحتفظ بالحق في تعديل هذه الشروط والأحكام في أي وقت. سيتم نشر أي تغييرات على هذه الصفحة، ويُعتبر استمرار استخدامك للموقع بعد نشر التعديلات موافقة منك على الشروط المعدلة.</p>

                        <h2 class="mb-4">10. إنهاء الخدمة</h2>
                        <p>نحتفظ بالحق في إنهاء أو تعليق وصولك إلى الموقع أو خدماتنا في أي وقت دون إشعار مسبق لأي سبب من الأسباب.</p>

                        <h2 class="mb-4">11. الامتثال للقوانين والأنظمة السعودية</h2>
                        <h3>11.1 نظام حماية البيانات الشخصية</h3>
                        <p>نلتزم التزاماً كاملاً بنظام حماية البيانات الشخصية الصادر بالمرسوم الملكي رقم (م/19) وتاريخ 9/2/1443هـ، والذي يهدف إلى حماية خصوصية البيانات الشخصية وضمان معالجتها بشكل آمن ومشروع.</p>

                        <h3>11.2 رؤية المملكة 2030</h3>
                        <p>نعمل على دعم رؤية المملكة العربية السعودية 2030 في مجال التحول الرقمي وتطوير الاقتصاد الرقمي، من خلال تقديم حلول تقنية مبتكرة تساهم في بناء مجتمع رقمي متقدم.</p>

                        <h3>11.3 معايير الأمن السيبراني</h3>
                        <p>نطبق معايير الأمن السيبراني الصادرة عن الهيئة الوطنية للأمن السيبراني، بما في ذلك:</p>
                        <ul>
                            <li>معايير حماية البيانات الشخصية</li>
                            <li>معايير أمان الشبكات</li>
                            <li>معايير إدارة المخاطر السيبرانية</li>
                            <li>معايير الاستجابة للحوادث السيبرانية</li>
                        </ul>

                        <h3>11.4 اللوائح التنفيذية</h3>
                        <p>نلتزم باللوائح التنفيذية التالية:</p>
                        <ul>
                            <li>اللائحة التنفيذية لنظام حماية البيانات الشخصية</li>
                            <li>اللائحة التنفيذية للأمن السيبراني</li>
                            <li>اللائحة التنفيذية للتجارة الإلكترونية</li>
                            <li>اللائحة التنفيذية للخدمات السحابية</li>
                        </ul>

                        <h2 class="mb-4">12. القانون المعمول به</h2>
                        <p>تخضع هذه الشروط والأحكام وتُفسر وفقاً لقوانين المملكة العربية السعودية. أي نزاع ينشأ عن هذه الشروط سيتم حله في المحاكم المختصة في المملكة العربية السعودية.</p>

                        <h2 class="mb-4">13. التواصل معنا</h2>
                        <p>إذا كان لديك أي أسئلة حول هذه الشروط والأحكام، يرجى التواصل معنا عبر:</p>
                        <ul>
                            <li><strong>البريد الإلكتروني:</strong> info@smlc.com</li>
                            <li><strong>الهاتف:</strong> +966555883492</li>
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
                        <img src="{{ asset('images/LOGO_UPDATE.png') }}" alt="شعار شركة صناع البرمجيات المحدودة - SMLC" class="footer-logo mb-2">
                        <span class="fw-bold">شركة صناع البرمجيات المحدودة</span>
                        <p class="mb-0 mt-2 text-muted">© 2025 جميع الحقوق محفوظة</p>
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
    
    <!-- حماية منع النسخ -->
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
