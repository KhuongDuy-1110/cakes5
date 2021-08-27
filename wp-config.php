<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cakes5' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`!E;.,RnJNXC,/;%t2<iXz|J!{ra-wxA#c|<Ez.2MPwmaXg,ZA;[/TMzN*z6j6$S' );
define( 'SECURE_AUTH_KEY',  'Q{IwoA9 z|a&l*pABx($GB<a?Yd}UJ/n)uIL5B~D~K!vqC.N%JoGJv%TNB=)#5Q4' );
define( 'LOGGED_IN_KEY',    'h9jLaRHkF+,=ZD?gaICgN:|^q{_<Pv%U#`U4nS1D{j.%B|0oXZ~o6mTfs7I1BAXt' );
define( 'NONCE_KEY',        'pzNOt!X%74%^({`R#gp@6NU%X%in7w)h?g:x,n>%caDO]ocTgl=8)K1hD=Fij<,3' );
define( 'AUTH_SALT',        '}:s8Osw`r*zN^Z=RZVfyYw`[of2FqRceFy~Wc6*H($?PItT&+dkShp%K3{Muv~+K' );
define( 'SECURE_AUTH_SALT', ']qS(AvoF|>zdUBcKMiYOCbyGITzX3_?|=zPMlgnokSXxATd=i4h],SQ#4%:=k f;' );
define( 'LOGGED_IN_SALT',   '[!fW.kBIzz@e+`&sEqYpW.I+j,/s#&,?/.~Dd9``!|K@kUFJ;I-V<%Fnt|us.RuW' );
define( 'NONCE_SALT',       'JxKox_(5a1}Fh$n^ 32`HopHw-1|RA*G`j--|M5MjN6;eopALOPjhOM&vlLXU~Lu' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'n5_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
