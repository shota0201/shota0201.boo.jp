<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0799708-n4kg6o');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0799708');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'AFRI0ZPS');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql117.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'qSz00fRPY7F-*;fle4=?`3G=OLJgrePx=v+g$l|>ns$BS!bA-eP?vE(#U5wa{&w4');
define('SECURE_AUTH_KEY', ')p)N|TfWzF9tr=oyEIi12,&Pr<T7Fr58(W^ss4`Tv%r`0n(Y]2b+bOlzG1#9~(YZ');
define('LOGGED_IN_KEY', '=zT_QP!J>rCxB$O9ri9M^S[j`K^fKfKbf^ruPu6ct5x@I~lC9^Q/FT[[nhuLe3C+');
define('NONCE_KEY', '2B6[r`!3qs8dQ?9Q(y2[qC6,_*X:TC8DNEse=fUX~H_rNuAGT<W|7x+SXR.lmP?)');
define('AUTH_SALT', 'HO:3)JG{X&XE7N(hn1i_$B`);|Ei*w.7O=G/m87txz*#st22=H0L$BzP*[/=:`Vd');
define('SECURE_AUTH_SALT', 'Hw!%0/i.NW-/](Ul=S<jK%u&=>}J|TPUp.keK`sK[|<4dQ7Wp}Ul>6$jv+/XM6Y;');
define('LOGGED_IN_SALT', 'atJok,!7F$$K?A@s1i-kebUtK*Ayy!#3[4dRVf/sS!k+SW?7pOeNnXuXB_wt?^L[');
define('NONCE_SALT', 'YUT+VBDjElV/$SGv$}?AuJV(]rBD]Nh=:kOM+imA6sV2BO$=;bcLa?%fe|[Y|3tS');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp5_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
