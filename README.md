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

4.repair use of undefined constant in function.php 2351
add double ""

5.repair use of undefined constant target in function.php 2302
add double ""

6.repair undefined index:page in theme-option on line 1487
and isset to check

7.repair undefined index:action in theme-option on line 1488 1499
and isset to check

8.repair undefined index:reset and update in theme-option on line 1515 and 1516
and isset to check