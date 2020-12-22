<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'mazen_db' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R4:hbUY5UU^l|9t/Wf/+KO<;|K[@8?uAIvrcBhjS14oYX^hmRhY,6t7v%.K)Ch[s' );
define( 'SECURE_AUTH_KEY',  'Y`b ]m!,0Y,MG(e/uGKM!O%:bIrUKr+((/W?(8#6!)xh:e]c_mfI/L] v<gB(jKV' );
define( 'LOGGED_IN_KEY',    '^vR=nzV&pQ@iUjTQ_~S!-AX`f8^tY]$ ]1`Dey).GewYVMlxa~b5eb&3o*n,nFgo' );
define( 'NONCE_KEY',        'M;76>S&VI8F2EI^DG$pi_.erMnHdJqU!.51g+gQunc w NK(#IV]*OwaTKO-|mBv' );
define( 'AUTH_SALT',        '{(iy]Ai*jmx4Hw^m8n!;xIw,e.!4.[f.:=[Xr+P,=&WWt3TqSNhC2DgB/ rZb-V.' );
define( 'SECURE_AUTH_SALT', 'L/N-=UP`Qg|D :,3)=UJ/2_M*!}D_f;h;;0&:kRVc69bqIz^BdDY&-+-XMiBN147' );
define( 'LOGGED_IN_SALT',   'bko4eYc=<Za>jW4xdU67]]/gRTWDL&{0da`)o%aA?( MF#7@:fsQR@i]$]*kbw{B' );
define( 'NONCE_SALT',       '1O~6Jb$et:uqmY/-V/&4#!OleD~e7(1HTCL<*-Gm[=-8fT<Nl1q=%~IULgh):UwH' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
