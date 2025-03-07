<?php


$lang["simpleldap_ldaptype"] = 'Nhà cung cấp thư mục';
$lang["ldapserver"] = 'Máy chủ/URL LDAP ví dụ ldaps://hostname:port';
$lang["ldap_encoding"] = 'Mã hóa dữ liệu nhận được từ máy chủ LDAP (đặt nếu không phải UTF-8 và dữ liệu không được hiển thị đúng - ví dụ tên hiển thị)';
$lang["domain"] = 'Miền AD, nếu có nhiều thì tách biệt bằng dấu chấm phẩy';
$lang["emailsuffix"] = 'Hậu tố email - được sử dụng nếu không tìm thấy dữ liệu thuộc tính email';
$lang["port"] = 'Cổng. Chỉ sử dụng nếu máy chủ ở trên không phải là URL LDAP đầy đủ';
$lang["basedn"] = 'Cơ sở DN. Nếu người dùng nằm trong nhiều DN, hãy phân tách bằng dấu chấm phẩy';
$lang["loginfield"] = 'Trường đăng nhập';
$lang["usersuffix"] = 'Hậu tố người dùng (một dấu chấm sẽ được thêm vào trước hậu tố)';
$lang["groupfield"] = 'Trường Nhóm';
$lang["createusers"] = 'Tạo người dùng';
$lang["fallbackusergroup"] = 'Nhóm người dùng dự phòng';
$lang["ldaprsgroupmapping"] = 'Bản đồ Nhóm ResourceSpace LDAP';
$lang["ldapvalue"] = 'Giá trị LDAP';
$lang["rsgroup"] = 'Nhóm ResourceSpace';
$lang["addrow"] = 'Thêm hàng';
$lang["email_attribute"] = 'Thuộc tính để sử dụng cho địa chỉ email';
$lang["phone_attribute"] = 'Thuộc tính để sử dụng cho số điện thoại';
$lang["simpleldap_telephone"] = 'Điện thoại';
$lang["simpleldap_unknown"] = 'không xác định';
$lang["simpleldap_update_group"] = 'Cập nhật nhóm người dùng mỗi khi đăng nhập. Nếu không sử dụng nhóm AD để xác định quyền truy cập, hãy đặt điều này thành false để người dùng có thể được thăng chức thủ công';
$lang["simpleldappriority"] = 'Ưu tiên (số cao hơn sẽ được ưu tiên)';
$lang["simpleldap_create_new_match_email"] = 'Kiểm tra email: Kiểm tra xem email LDAP có khớp với email tài khoản RS hiện có hay không và áp dụng tài khoản đó. Sẽ hoạt động ngay cả khi \'Tạo người dùng\' bị vô hiệu hóa';
$lang["simpleldap_allow_duplicate_email"] = 'Cho phép tạo tài khoản mới nếu có tài khoản hiện có với cùng địa chỉ email? (điều này sẽ bị ghi đè nếu email-match được thiết lập ở trên và một kết quả trùng khớp được tìm thấy)';
$lang["simpleldap_multiple_email_match_subject"] = 'ResourceSpace - cố gắng đăng nhập email xung đột';
$lang["simpleldap_multiple_email_match_text"] = 'Một người dùng LDAP mới đã đăng nhập nhưng đã có hơn một tài khoản với cùng một địa chỉ email:';
$lang["simpleldap_notification_email"] = 'Địa chỉ thông báo ví dụ: nếu có địa chỉ email trùng lặp được đăng ký. Nếu để trống, sẽ không có thông báo nào được gửi.';
$lang["simpleldap_duplicate_email_error"] = 'Đã có một tài khoản tồn tại với địa chỉ email giống nhau. Vui lòng liên hệ với quản trị viên của bạn.';
$lang["simpleldap_no_group_match_subject"] = 'ResourceSpace - người dùng mới không có ánh xạ nhóm';
$lang["simpleldap_no_group_match"] = 'Một người dùng mới đã đăng nhập nhưng không có nhóm ResourceSpace nào được ánh xạ đến bất kỳ nhóm thư mục nào mà họ thuộc về.';
$lang["simpleldap_usermemberof"] = 'Người dùng là thành viên của các nhóm thư mục sau: -';
$lang["simpleldap_test"] = 'Kiểm tra cấu hình LDAP';
$lang["simpleldap_testing"] = 'Kiểm tra cấu hình LDAP';
$lang["simpleldap_connection"] = 'Kết nối đến máy chủ LDAP';
$lang["simpleldap_bind"] = 'Liên kết với máy chủ LDAP';
$lang["simpleldap_username"] = 'Tên người dùng/User DN';
$lang["simpleldap_password"] = 'Mật khẩu';
$lang["simpleldap_test_auth"] = 'Kiểm tra xác thực';
$lang["simpleldap_domain"] = 'Miền';
$lang["simpleldap_displayname"] = 'Tên hiển thị';
$lang["simpleldap_memberof"] = 'Thành viên của';
$lang["simpleldap_test_title"] = 'Kiểm tra';
$lang["simpleldap_result"] = 'Kết quả';
$lang["simpleldap_retrieve_user"] = 'Lấy thông tin người dùng';
$lang["simpleldap_extension_required"] = 'Mô-đun PHP LDAP phải được kích hoạt để plugin này hoạt động';
$lang["simpleldap_usercomment"] = 'Được tạo bởi plugin SimpleLDAP.';
$lang["simpleldap_usermatchcomment"] = 'Cập nhật thành người dùng LDAP bởi SimpleLDAP.';
$lang["origin_simpleldap"] = 'SimpleLDAP plugin';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"] = 'Không kiểm tra FQDN của máy chủ với CN của chứng chỉ';