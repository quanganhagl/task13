https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png
https://drive.google.com/drive/folders/1uF_fykYW0LPvnMUVE9NmxC6Thjrtx6zi?usp=sharing
https://gist.github.com/thachpham92/d57b18cf02e3550acdb5
http://aglstaff.allgrow-labo.jp/hosyhuy/task13/topics/
http://aglstaff.allgrow-labo.jp/nguyenthanhquy/shimohira/#
http://localhost/shimodaira/
http://localhost/shimodaira/wp-admin/profile.php

[Training bồi dưỡng kỹ năng nghiệp vụ](./_training_term_for_practical_standard-vn.md) > Chapter 02

# Chapter 02

Convert task `shimohira-kaikei(Task13)` thành Wordpress site.

**Link tài nguyên**

https://drive.google.com/drive/folders/1uF_fykYW0LPvnMUVE9NmxC6Thjrtx6zi?usp=sharing

**Yêu cầu khi thao tác**

1. Kiểm tra file HTML và phát triển Wordpress site trên môi trường local.
2. Sau khi phát triển xong trên local thì up lên test server.
3. Phân chia các file như `header.php`, `footer.php`, `sidebar.php` vào template chính xác.
4. Các trang không tồn tại HTML thì cho hiển thị trang 404 một cách chính xác.
5. Sử dụng plug-in `Advanced custom filed` để thiết lập custom field.

**Đề bài và lưu ý**

- Khi convert từ HTML sang Wprdpress, Wordpress sẽ gắn bổ sung thêm 1 vài tag nhất định vào trong HTML. Hãy sử dụng developer tool của Chrome để xác định được tag nào đã được thêm vào và tiến hành thao tác.
- Hãy để ý tới phần xử lý bên trong `wp-config.php` rồi hẵng tiến hành thao tác install Wordpress.
- Hãy để ý tới việc `.htaccess`, 1 trong những file cấu hình của apache, đang hoạt động như thế nào trên nền tảng Wordpress rồi hẵng thao tác.
- Hãy hiểu rõ cấu trúc file template của Wordpress hoặc thứ tự ưu tiên thật chính xác rồi hẵng tiến hành thao tác.
- Hãy hiểu rõ cách thức hiển thị của title hoặc description của từng page riêng lẻ rồi hẵng thao tác.
