<?php

$lang["action_dates_configuration"] = 'उन फ़ील्ड्स का चयन करें जिनका उपयोग स्वचालित रूप से निर्दिष्ट कार्यों को करने के लिए किया जाएगा।';
$lang["action_dates_deletesettings"] = 'स्वचालित संसाधन प्राथमिक क्रिया सेटिंग्स - सावधानी से उपयोग करें';
$lang["action_dates_delete"] = 'जब इस फ़ील्ड में दी गई तिथि पहुँच जाती है, तो स्वचालित रूप से संसाधनों को हटा दें या उनकी स्थिति बदल दें';
$lang["action_dates_eligible_states"] = 'प्राथमिक स्वचालित क्रिया के लिए पात्र राज्य। यदि कोई राज्य चयनित नहीं है तो सभी राज्य पात्र हैं।';
$lang["action_dates_restrict"] = 'इस फ़ील्ड में दी गई तारीख़ पर पहुँचने पर स्वचालित रूप से संसाधनों की पहुँच को प्रतिबंधित करें। यह केवल उन संसाधनों पर लागू होता है जिनकी पहुँच वर्तमान में खुली है।';
$lang["action_dates_delete_logtext"] = '- action_dates प्लगइन द्वारा स्वचालित रूप से क्रियान्वित';
$lang["action_dates_restrict_logtext"] = '- action_dates प्लगइन द्वारा स्वचालित रूप से प्रतिबंधित';
$lang["action_dates_reallydelete"] = 'जब क्रिया की तिथि बीत जाए तो संसाधन को पूरी तरह से हटा दें? यदि false पर सेट किया गया है, तो संसाधनों को कॉन्फ़िगर किए गए resource_deletion_state में स्थानांतरित कर दिया जाएगा और इस प्रकार पुनः प्राप्त किया जा सकेगा';
$lang["action_dates_email_admin_days"] = 'इस तिथि के पहुँचने से पहले एक निर्धारित संख्या में दिनों के लिए सिस्टम प्रशासकों को सूचित करें। कोई सूचना न भेजने के लिए इस विकल्प को खाली छोड़ दें।';
$lang["action_dates_email_text_restrict"] = 'निम्नलिखित संसाधनों को [days] दिनों में प्रतिबंधित किया जाएगा।';
$lang["action_dates_email_text_state"] = 'निम्नलिखित संसाधन [days] दिनों में स्थिति बदलने वाले हैं।';
$lang["action_dates_email_text"] = 'निम्नलिखित संसाधनों को [days] दिनों में प्रतिबंधित किया जाएगा और/या उनकी स्थिति बदली जाएगी।';
$lang["action_dates_email_range_restrict"] = 'निम्नलिखित संसाधनों को [days_min] से [days_max] दिनों के भीतर प्रतिबंधित किया जाना है।';
$lang["action_dates_email_range_state"] = 'निम्नलिखित संसाधन [days_min] से [days_max] दिनों के भीतर स्थिति बदलने वाले हैं।';
$lang["action_dates_email_range"] = 'निम्नलिखित संसाधनों को [days_min] से [days_max] दिनों के भीतर प्रतिबंधित और/या स्थिति बदलने के लिए निर्धारित किया गया है।';
$lang["action_dates_email_subject_restrict"] = 'संसाधनों के प्रतिबंधित होने की सूचना';
$lang["action_dates_email_subject_state"] = 'संसाधनों की स्थिति बदलने की सूचना';
$lang["action_dates_email_subject"] = 'संसाधनों के प्रतिबंधित होने और/या स्थिति बदलने की सूचना';
$lang["action_dates_new_state"] = 'नया स्थिति जिसमें स्थानांतरित करना है (यदि ऊपर का विकल्प संसाधनों को पूरी तरह से हटाने के लिए सेट है तो इसे अनदेखा किया जाएगा)';
$lang["action_dates_notification_subject"] = 'कार्रवाई तिथियों प्लगइन से सूचना';
$lang["action_dates_additional_settings"] = 'अतिरिक्त क्रियाएँ';
$lang["action_dates_additional_settings_info"] = 'निर्दिष्ट फ़ील्ड तक पहुँचने पर संसाधनों को चयनित स्थिति में भी स्थानांतरित करें';
$lang["action_dates_additional_settings_date"] = 'जब यह तिथि पहुँच जाती है';
$lang["action_dates_additional_settings_status"] = 'संसाधनों को इस संग्रह स्थिति में स्थानांतरित करें';
$lang["action_dates_remove_from_collection"] = 'क्या स्थिति बदलने पर सभी संबंधित संग्रहों से संसाधन हटाए जाएं?';
$lang["action_dates_email_for_state"] = 'संसाधनों की स्थिति बदलने पर सूचना भेजें। इसके लिए ऊपर दिए गए स्थिति परिवर्तन फ़ील्ड को कॉन्फ़िगर करना आवश्यक है।';
$lang["action_dates_email_for_restrict"] = 'संसाधनों को प्रतिबंधित करने के लिए सूचना भेजें। इसके लिए ऊपर दिए गए प्रतिबंधित संसाधन फ़ील्ड को कॉन्फ़िगर करना आवश्यक है।';
$lang["action_dates_workflow_actions"] = 'यदि उन्नत वर्कफ़्लो प्लगइन सक्षम है, तो क्या इस प्लगइन द्वारा आरंभ की गई स्थिति परिवर्तनों पर इसकी सूचनाएँ लागू की जानी चाहिए?';
$lang["action_dates_weekdays"] = 'उन सप्ताह के दिनों का चयन करें जब क्रियाएं संसाधित की जाएंगी।';
$lang["weekday-0"] = 'रविवार';
$lang["weekday-1"] = 'सोमवार';
$lang["weekday-2"] = 'मंगलवार';
$lang["weekday-3"] = 'बुधवार';
$lang["weekday-4"] = 'गुरुवार';
$lang["weekday-5"] = 'शुक्रवार';
$lang["weekday-6"] = 'शनिवार';
$lang["plugin-action_dates-title"] = 'क्रिया तिथियाँ';
$lang["plugin-action_dates-desc"] = 'तिथि क्षेत्रों के आधार पर संसाधनों के अनुसूचित विलोपन या प्रतिबंध को सक्षम बनाता है';
