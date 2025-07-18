<?php

$lang["csv_upload_nav_link"] = 'تحميل CSV';
$lang["csv_upload_intro"] = 'هذه الإضافة تسمح لك بإنشاء أو تحديث الموارد عن طريق تحميل ملف CSV. تنسيق ملف CSV مهم';

$lang["csv_upload_condition2"] = 'يجب أن يحتوي ملف CSV على صف رأس';
$lang["csv_upload_condition3"] = '<li>لكي تتمكن من تحميل ملفات الموارد لاحقًا باستخدام وظيفة الاستبدال الجماعي ، يجب أن يكون هناك عمود يحمل اسم "اسم الملف الأصلي" ويجب أن يكون لكل ملف اسم مميز</li>';
$lang["csv_upload_condition4"] = '<li>يجب أن تكون جميع الحقول الإلزامية لأي مورد جديد تم إنشاؤه موجودة في ملف CSV</li>';
$lang["csv_upload_condition5"] = '<li>للأعمدة التي تحتوي على قيم تحتوي على <b>فواصل ( , )</b>، تأكد من تنسيقها كنوع <b>نص</b> حتى لا تضطر إلى إضافة علامات اقتباس (""). عند حفظ الملف كملف csv، تأكد من التحقق من خيار وضع علامات اقتباس على خلايا النص.</li>';
$lang["csv_upload_condition6"] = 'يمكنك تحميل ملف CSV مثالي عن طريق النقر على <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"] = '<li>لتحديث بيانات المصادر الموجودة، يمكنك تنزيل ملف CSV يحتوي على البيانات الوصفية الموجودة بالفعل عن طريق النقر على خيار "تصدير CSV - البيانات الوصفية" من قائمة الإجراءات في نتائج البحث أو المجموعة</li>';
$lang["csv_upload_condition8"] = 'يمكنك إعادة استخدام ملف تعيين CSV الذي تم تكوينه مسبقًا عن طريق النقر على "تحميل ملف تكوين CSV"';
$lang["csv_upload_error_no_permission"] = 'ليس لديك الأذونات الصحيحة لتحميل ملف CSV';
$lang["check_line_count"] = 'تم العثور على صفين على الأقل في ملف CSV';
$lang["csv_upload_file"] = 'حدد ملف CSV';
$lang["csv_upload_default"] = 'الافتراضي';
$lang["csv_upload_error_no_header"] = 'لم يتم العثور على صف رأس في الملف';
$lang["csv_upload_update_existing"] = 'تحديث الموارد الموجودة؟ إذا لم يتم التحقق من ذلك، سيتم إنشاء موارد جديدة بناءً على بيانات CSV';
$lang["csv_upload_update_existing_collection"] = 'هل تريد ترجمة: Only update resources in a specific collection?';
$lang["csv_upload_process"] = 'العملية';
$lang["csv_upload_add_to_collection"] = 'هل ترغب في إضافة الموارد الجديدة التي تم إنشاؤها إلى المجموعة الحالية؟';
$lang["csv_upload_step1"] = 'الخطوة 1 - اختر الملف';
$lang["csv_upload_step2"] = 'الخطوة 2 - الخيارات الافتراضية للمصادر';
$lang["csv_upload_step3"] = 'الخطوة 3 - ربط الأعمدة بحقول البيانات الوصفية';
$lang["csv_upload_step4"] = 'الخطوة 4 - التحقق من بيانات CSV';
$lang["csv_upload_step5"] = 'الخطوة 5 - معالجة ملف CSV';
$lang["csv_upload_update_existing_title"] = 'تحديث الموارد الحالية';
$lang["csv_upload_update_existing_notes"] = 'حدد الخيارات المطلوبة لتحديث الموارد الحالية';
$lang["csv_upload_create_new_title"] = 'إنشاء موارد جديدة';
$lang["csv_upload_create_new_notes"] = 'حدد الخيارات المطلوبة لإنشاء موارد جديدة';
$lang["csv_upload_map_fields_notes"] = 'مطابقة الأعمدة في ملف CSV مع حقول البيانات الوصفية المطلوبة. سيتم فحص ملف CSV دون تغيير البيانات عند النقر على "التالي"';
$lang["csv_upload_map_fields_auto_notes"] = 'تم اختيار حقول البيانات التعريفية مسبقًا بناءً على الأسماء أو العناوين ولكن يرجى التحقق من صحتها';
$lang["csv_upload_workflow_column"] = 'يرجى اختيار العمود الذي يحتوي على معرف حالة سير العمل';
$lang["csv_upload_workflow_default"] = 'الحالة الافتراضية لسير العمل إذا لم يتم تحديد عمود أو إذا لم يتم العثور على حالة صالحة في العمود';
$lang["csv_upload_access_column"] = 'يرجى اختيار العمود الذي يحتوي على مستوى الوصول (0 = مفتوح، 1 = محدود، 2 = سري)';
$lang["csv_upload_access_default"] = 'المستوى الافتراضي للوصول في حالة عدم تحديد عمود أو عدم وجود وصول صالح في العمود';
$lang["csv_upload_resource_type_column"] = 'يرجى اختيار العمود الذي يحتوي على معرف نوع المورد';
$lang["csv_upload_resource_type_default"] = 'النوع الافتراضي للمصدر إذا لم يتم تحديد أي عمود أو إذا لم يتم العثور على نوع صالح في العمود';
$lang["csv_upload_match_type"] = 'هل تطابق المورد بناءً على معرف المورد أو قيمة حقل البيانات الوصفية؟';
$lang["csv_upload_multiple_match_action"] = 'الإجراء المتخذ إذا وُجِدت مصادر متعددة متطابقة';
$lang["csv_upload_validation_notes"] = 'يرجى التحقق من رسائل التحقق أدناه قبل المتابعة. انقر على "تنفيذ" لحفظ التغييرات';
$lang["csv_upload_upload_another"] = 'رفع ملف CSV آخر';
$lang["csv_upload_mapping config"] = 'إعدادات تعيين أعمدة CSV';
$lang["csv_upload_download_config"] = 'تنزيل إعدادات تعيين CSV كملف';
$lang["csv_upload_upload_config"] = 'تحميل ملف تعيين CSV';
$lang["csv_upload_upload_config_question"] = 'هل تريد رفع ملف تعيين CSV؟ استخدم هذا الخيار إذا قمت بتحميل ملف CSV مماثل من قبل وحفظت التكوين';
$lang["csv_upload_upload_config_set"] = 'مجموعة تكوين CSV';
$lang["csv_upload_upload_config_clear"] = 'مسح تكوين تعيينات CSV';
$lang["csv_upload_mapping_ignore"] = 'لا تستخدم';
$lang["csv_upload_mapping_header"] = 'رأس العمود';
$lang["csv_upload_mapping_csv_data"] = 'بيانات عينة من ملف CSV';
$lang["csv_upload_using_config"] = 'استخدام تكوين CSV الموجود';
$lang["csv_upload_process_offline"] = 'هل تريد معالجة ملف CSV بدون اتصال؟ يجب استخدام هذا الخيار للملفات الكبيرة. سيتم إعلامك عبر رسالة من ResourceSpace بمجرد الانتهاء من المعالجة';
$lang["csv_upload_oj_created"] = 'تم إنشاء مهمة تحميل CSV برقم مرجعي للمهمة # [jobref]. <br/> ستتلقى رسالة من نظام ResourceSpace بمجرد اكتمال المهمة';
$lang["csv_upload_oj_complete"] = 'اكتملت مهمة تحميل ملف CSV. انقر على الرابط لعرض ملف السجل الكامل';
$lang["csv_upload_oj_failed"] = 'فشلت عملية تحميل ملف CSV';
$lang["csv_upload_processing_x_meta_columns"] = 'معالجة %count أعمدة البيانات الوصفية';
$lang["csv_upload_processing_complete"] = 'تم الانتهاء من المعالجة في [time] ([hours] ساعات، [minutes] دقائق، [seconds] ثواني)';
$lang["csv_upload_error_in_progress"] = 'تم إلغاء المعالجة - يتم معالجة ملف CSV هذا بالفعل';
$lang["csv_upload_error_file_missing"] = 'خطأ - ملف CSV مفقود: [file]';
$lang["csv_upload_full_messages_link"] = 'عرض أول 1000 سطر فقط، لتحميل ملف السجل الكامل يرجى النقر <a href=\'[log_url]\' target=\'_blank\'>هنا</a>';
$lang["csv_upload_ignore_errors"] = 'تجاهل الأخطاء ومعالجة الملف على أي حال';
$lang["csv_upload_process_offline_quick"] = 'تخطي التحقق ومعالجة ملف CSV دون اتصال؟ يجب استخدام هذا الخيار فقط للملفات الكبيرة عندما يتم الانتهاء من اختبار الملفات الأصغر. سيتم إعلامك عبر رسالة من ResourceSpace بمجرد الانتهاء من التحميل';
$lang["csv_upload_force_offline"] = 'قد يستغرق معالجة هذا الملف الكبير بتنسيق CSV وقتًا طويلاً، لذلك سيتم تشغيله دون اتصال. سيتم إعلامك عبر رسالة من ResourceSpace بمجرد الانتهاء من المعالجة';
$lang["csv_upload_recommend_offline"] = 'قد يستغرق معالجة هذا الملف الكبير من نوع CSV وقتًا طويلاً. يُوصَى بتمكين الوظائف غير المتصلة إذا كنت بحاجة إلى معالجة ملفات CSV كبيرة';
$lang["csv_upload_createdfromcsvupload"] = 'تم إنشاؤها باستخدام ملحق تحميل CSV';
$lang["csv_upload_resource_match_column"] = 'يرجى اختيار العمود الذي يحتوي على مُعرف المورد';
$lang["plugin-csv_upload-title"] = 'تحميل CSV';
$lang["plugin-csv_upload-desc"] = '[متقدم] تحميل البيانات الوصفية باستخدام ملف CSV.';

$lang["csv_upload_check_file_error"] = 'لا يمكن فتح أو قراءة ملف CSV';
$lang["csv_upload_check_utf_error"] = 'ملف CSV ليس UTF-8 صالحًا. حرف غير صالح في السطر';
$lang["csv_upload_condition1"] = 'تأكد من أن ملف CSV مشفر باستخدام <b>UTF-8</b>.';
$lang["csv_upload_check_removebom"] = 'ملف CSV يحتوي على BOM ولم يكن من الممكن إزالته';