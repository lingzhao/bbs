<?php
/**
 * 推荐发送JS代码模版
 * @createtime 2012-09-26
 */

! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );
return <<<EOT
<div style="display:none;"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cdiv id='cnzz_stat_icon_<<siteid>>'%3E%3C/div%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/z_stat.php%3Fid%3D<<siteid>>' type='text/javascript'%3E%3C/script%3E"));</script></div>
EOT;
