**modify Log**

1. repair header undefined
repair header.php 109, 110 lines 
$skin_hover = '#D52D1A';
$skin_nom = '#E74C3C';
skin_hover and skin_nom undefined
for php7

2. repair the widget construct notice
use the follow construct()
<pre>
public function __construct()
    {
        parent::__construct(
            'git_tongji',
            '网站统计',
            array('classname' => 'git_tongji', 'description' => '显示网站的统计信息'));
    }
</pre>
 
3.repair undefined variable in functions.php 177
add if isset to check

4.repair use of undefined constant in function.php on lines 2351, 2302, 1137
add double ""

5.repair undefined index: page in theme-option on lines 1487, 1499, 1515, 1516, 1595
and isset to check

6.repair the parameter 'call_get_posts' in index.php on line 21 and other file
to use 'ignore_sticky_posts'

7.repair the notice in comments.php on lines 7,17

8.replace get_currentuserinfo with wp_get_current_user()