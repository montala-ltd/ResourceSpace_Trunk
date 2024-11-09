<?php


$lang["simpleldap_ldaptype"]='ڈائریکٹری فراہم کنندہ';
$lang["ldapserver"]='LDAP سرور/یو آر ایل مثلاً ldaps://hostname:port';
$lang["ldap_encoding"]='LDAP سرور سے موصولہ ڈیٹا انکوڈنگ (اگر UTF-8 نہیں ہے اور ڈیٹا صحیح طور پر ظاہر نہیں ہو رہا ہے تو سیٹ کریں - مثلاً ڈسپلے نام)';
$lang["domain"]='AD ڈومین، اگر متعدد ہیں تو انہیں سیمی کولن سے الگ کریں';
$lang["emailsuffix"]='ای میل لاحقہ - استعمال کیا جاتا ہے اگر کوئی ای میل وصف کا ڈیٹا نہ ملے';
$lang["port"]='پورٹ۔ صرف اس صورت میں استعمال ہوتا ہے جب اوپر دیا گیا سرور مکمل LDAP یو آر ایل نہ ہو۔';
$lang["basedn"]='بیس ڈی این۔ اگر صارفین متعدد ڈی اینز میں ہیں، تو انہیں سیمی کولن سے الگ کریں۔';
$lang["loginfield"]='لاگ ان فیلڈ';
$lang["usersuffix"]='صارف لاحقہ (لاحقہ کے سامنے ایک نقطہ شامل کیا جائے گا)';
$lang["groupfield"]='گروپ فیلڈ';
$lang["createusers"]='صارفین بنائیں';
$lang["fallbackusergroup"]='بیک اپ صارف گروپ';
$lang["ldaprsgroupmapping"]='LDAP-ResourceSpace گروپ میپنگ';
$lang["ldapvalue"]='LDAP ویلیو';
$lang["rsgroup"]='ResourceSpace گروپ';
$lang["addrow"]='قطار شامل کریں';
$lang["email_attribute"]='ای میل ایڈریس کے لیے استعمال کرنے کی خصوصیت';
$lang["phone_attribute"]='ٹیلیفون نمبر کے لیے استعمال کرنے کی خصوصیت';
$lang["simpleldap_telephone"]='ٹیلیفون';
$lang["simpleldap_unknown"]='نامعلوم';
$lang["simpleldap_update_group"]='ہر لاگ ان پر صارف گروپ کو اپ ڈیٹ کریں۔ اگر رسائی کا تعین کرنے کے لیے AD گروپس استعمال نہیں کر رہے ہیں، تو اسے غلط پر سیٹ کریں تاکہ صارفین کو دستی طور پر ترقی دی جا سکے۔';
$lang["simpleldappriority"]='ترجیح (زیادہ نمبر کو فوقیت دی جائے گی)';
$lang["simpleldap_create_new_match_email"]='ای میل-میچ: چیک کریں کہ آیا LDAP ای میل موجودہ RS اکاؤنٹ ای میل سے میل کھاتی ہے اور اس اکاؤنٹ کو اپنائیں۔ یہ اس وقت بھی کام کرے گا جب \'صارفین بنائیں\' غیر فعال ہو۔';
$lang["simpleldap_allow_duplicate_email"]='کیا نئے اکاؤنٹس بنانے کی اجازت دی جائے اگر موجودہ اکاؤنٹس میں وہی ای میل پتہ ہو؟ (یہ اوپر ای میل-میچ سیٹ ہونے پر اور ایک میچ ملنے پر اووررائیڈ ہو جاتا ہے)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - متصادم ای میل لاگ ان کوشش';
$lang["simpleldap_multiple_email_match_text"]='ایک نیا LDAP صارف لاگ ان ہوا ہے لیکن پہلے سے ہی ایک سے زیادہ اکاؤنٹس اسی ای میل ایڈریس کے ساتھ موجود ہیں:';
$lang["simpleldap_notification_email"]='اطلاع کا پتہ مثلاً اگر ڈپلیکیٹ ای میل پتوں کو رجسٹر کیا گیا ہو۔ اگر خالی ہو تو کوئی نہیں بھیجا جائے گا۔';
$lang["simpleldap_duplicate_email_error"]='اسی ای میل ایڈریس کے ساتھ ایک موجودہ اکاؤنٹ موجود ہے۔ براہ کرم اپنے منتظم سے رابطہ کریں۔';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - نیا صارف بغیر گروپ میپنگ کے';
$lang["simpleldap_no_group_match"]='ایک نیا صارف لاگ ان ہوا ہے لیکن کوئی ResourceSpace گروپ کسی ڈائریکٹری گروپ سے منسلک نہیں ہے جس سے وہ تعلق رکھتے ہیں۔';
$lang["simpleldap_usermemberof"]='صارف درج ذیل ڈائریکٹری گروپس کا رکن ہے: -';
$lang["simpleldap_test"]='LDAP ترتیب کی جانچ کریں';
$lang["simpleldap_testing"]='LDAP ترتیب کی جانچ پڑتال';
$lang["simpleldap_connection"]='LDAP سرور سے کنکشن';
$lang["simpleldap_bind"]='LDAP سرور سے منسلک کریں';
$lang["simpleldap_username"]='صارف نام/صارف DN';
$lang["simpleldap_password"]='پاس ورڈ';
$lang["simpleldap_test_auth"]='تصدیق کی جانچ کریں';
$lang["simpleldap_domain"]='ڈومین';
$lang["simpleldap_displayname"]='ظاہر کرنے کا نام';
$lang["simpleldap_memberof"]='کا رکن';
$lang["simpleldap_test_title"]='آزمائش';
$lang["simpleldap_result"]='نتیجہ';
$lang["simpleldap_retrieve_user"]='صارف کی تفصیلات حاصل کریں';
$lang["simpleldap_externsion_required"]='اس پلگ ان کے کام کرنے کے لیے PHP LDAP ماڈیول کو فعال ہونا ضروری ہے۔';
$lang["simpleldap_usercomment"]='SimpleLDAP پلگ ان کے ذریعے تخلیق کیا گیا۔';
$lang["simpleldap_usermatchcomment"]='SimpleLDAP کے ذریعے LDAP صارف کو اپ ڈیٹ کیا گیا۔';
$lang["origin_simpleldap"]='SimpleLDAP پلگ ان';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='سرور کے FQDN کو سرٹیفکیٹ کے CN کے خلاف چیک نہ کریں۔';