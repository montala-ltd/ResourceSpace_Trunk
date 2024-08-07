<?php


$lang["youtube_publish_title"]='यूट्यूब प्रकाशन';
$lang["youtube_publish_linktext"]='यूट्यूब पर प्रकाशित करें';
$lang["youtube_publish_configuration"]='YouTube पर प्रकाशित करें - सेटअप';
$lang["youtube_publish_notconfigured"]='YouTube अपलोड प्लगइन कॉन्फ़िगर नहीं किया गया है। कृपया अपने व्यवस्थापक से प्लगइन को कॉन्फ़िगर करने के लिए कहें';
$lang["youtube_publish_legal_warning"]='\'OK\' पर क्लिक करके आप प्रमाणित करते हैं कि आपके पास सामग्री के सभी अधिकार हैं या आप सामग्री को YouTube पर सार्वजनिक रूप से उपलब्ध कराने के लिए स्वामी द्वारा अधिकृत हैं, और यह अन्यथा YouTube सेवा की शर्तों का पालन करता है जो http://www.youtube.com/t/terms पर स्थित हैं।';
$lang["youtube_publish_resource_types_to_include"]='मान्य YouTube संसाधन प्रकार चुनें';
$lang["youtube_publish_mappings_title"]='ResourceSpace - YouTube फ़ील्ड मैपिंग्स';
$lang["youtube_publish_title_field"]='शीर्षक फ़ील्ड';
$lang["youtube_publish_descriptionfields"]='विवरण फ़ील्ड्स';
$lang["youtube_publish_keywords_fields"]='टैग फ़ील्ड्स';
$lang["youtube_publish_url_field"]='यूट्यूब यूआरएल संग्रहीत करने के लिए मेटाडेटा फ़ील्ड';
$lang["youtube_publish_allow_multiple"]='क्या एक ही संसाधन के कई अपलोड की अनुमति दें?';
$lang["youtube_publish_log_share"]='यूट्यूब पर साझा किया गया';
$lang["youtube_publish_unpublished"]='अप्रकाशित';
$lang["youtube_publishloggedinas"]='आप YouTube खाते पर प्रकाशित करेंगे : %youtube_username%';
$lang["youtube_publish_change_login"]='अलग YouTube खाता उपयोग करें';
$lang["youtube_publish_accessdenied"]='आपको इस संसाधन को प्रकाशित करने की अनुमति नहीं है';
$lang["youtube_publish_alreadypublished"]='यह संसाधन पहले ही YouTube पर प्रकाशित किया जा चुका है।';
$lang["youtube_access_failed"]='YouTube अपलोड सेवा इंटरफ़ेस तक पहुँचने में विफल। कृपया अपने व्यवस्थापक से संपर्क करें या अपनी कॉन्फ़िगरेशन की जाँच करें।';
$lang["youtube_publish_video_title"]='वीडियो शीर्षक';
$lang["youtube_publish_video_description"]='वीडियो विवरण';
$lang["youtube_publish_video_tags"]='वीडियो टैग्स';
$lang["youtube_publish_access"]='प्रवेश सेट करें';
$lang["youtube_public"]='सार्वजनिक';
$lang["youtube_private"]='निजी';
$lang["youtube_publish_public"]='सार्वजनिक';
$lang["youtube_publish_private"]='निजी';
$lang["youtube_publish_unlisted"]='असूचीबद्ध';
$lang["youtube_publish_button_text"]='प्रकाशित करें';
$lang["youtube_publish_authentication"]='प्रमाणीकरण';
$lang["youtube_publish_use_oauth2"]='OAuth 2.0 का उपयोग करें?';
$lang["youtube_publish_oauth2_advice"]='YouTube OAuth 2.0 निर्देश';
$lang["youtube_publish_oauth2_advice_desc"]='<p>इस प्लगइन को सेटअप करने के लिए आपको OAuth 2.0 सेटअप करना होगा क्योंकि सभी अन्य प्रमाणीकरण विधियाँ आधिकारिक रूप से अप्रचलित हो चुकी हैं। इसके लिए आपको अपने ResourceSpace साइट को Google के साथ एक प्रोजेक्ट के रूप में पंजीकृत करना होगा और एक OAuth क्लाइंट आईडी और सीक्रेट प्राप्त करना होगा। इसमें कोई लागत शामिल नहीं है।</p><ul><li>Google पर लॉग इन करें और अपने डैशबोर्ड पर जाएं: <a href="https://console.developers.google.com" target="_blank">https://console.developers.google.com</a>.</li><li>एक नया प्रोजेक्ट बनाएं (नाम और आईडी मायने नहीं रखते, वे आपके संदर्भ के लिए हैं)।</li><li>\'ENABLE API\'S AND SERVICES\' पर क्लिक करें और \'YouTube Data API\' विकल्प तक स्क्रॉल करें।</li><li>\'Enable\' पर क्लिक करें।</li><li>बाईं ओर \'Credentials\' चुनें।</li><li>फिर \'CREATE CREDENTIALS\' पर क्लिक करें और ड्रॉप डाउन मेनू में \'Oauth client ID\' चुनें।</li><li>आपको \'Create OAuth client ID\' पेज दिखाया जाएगा।</li><li>जारी रखने के लिए हमें पहले नीले बटन \'Configure consent screen\' पर क्लिक करना होगा।</li><li>संबंधित जानकारी भरें और सहेजें।</li><li>आपको फिर से \'Create OAuth client ID\' पेज पर पुनः निर्देशित किया जाएगा।</li><li>\'Application type\' के तहत \'Web application\' चुनें और \'Authorized Javascript origins\' में अपने सिस्टम का बेस URL और रीडायरेक्ट URL में इस पेज के शीर्ष पर निर्दिष्ट callback URL भरें और \'Create\' पर क्लिक करें।</li><li>आपको फिर से एक स्क्रीन दिखाई जाएगी जिसमें आपकी नई बनाई गई \'client ID\' और \'client secret\' दिखाए जाएंगे।</li><li>क्लाइंट आईडी और सीक्रेट नोट करें और नीचे इन विवरणों को दर्ज करें।</li></ul>';
$lang["youtube_publish_developer_key"]='डेवलपर कुंजी';
$lang["youtube_publish_oauth2_clientid"]='क्लाइंट आईडी';
$lang["youtube_publish_oauth2_clientsecret"]='क्लाइंट सीक्रेट';
$lang["youtube_publish_base"]='मूल URL';
$lang["youtube_publish_callback_url"]='कॉलबैक यूआरएल';
$lang["youtube_publish_username"]='यूट्यूब उपयोगकर्ता नाम';
$lang["youtube_publish_password"]='यूट्यूब पासवर्ड';
$lang["youtube_publish_existingurl"]='मौजूदा YouTube URL :-';
$lang["youtube_publish_notuploaded"]='अपलोड नहीं हुआ';
$lang["youtube_publish_failedupload_error"]='अपलोड त्रुटि';
$lang["youtube_publish_success"]='वीडियो सफलतापूर्वक प्रकाशित हुआ!';
$lang["youtube_publish_renewing_token"]='एक्सेस टोकन नवीनीकरण';
$lang["youtube_publish_category"]='श्रेणी';
$lang["youtube_publish_category_error"]='यूट्यूब श्रेणियाँ प्राप्त करने में त्रुटि: -';
$lang["youtube_chunk_size"]='यूट्यूब पर अपलोड करते समय उपयोग करने के लिए चंक आकार (MB)';
$lang["youtube_publish_add_anchor"]='क्या YouTube URL मेटाडेटा फ़ील्ड में सहेजते समय URL में एंकर टैग जोड़ें?';
$lang["plugin-youtube_publish-title"]='यूट्यूब प्रकाशित करें';
$lang["plugin-youtube_publish-desc"]='कॉन्फ़िगर किए गए YouTube खाते पर वीडियो संसाधन प्रकाशित करता है।';