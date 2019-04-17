<?php
//WEBSC商城资源
function calculate_goods_num($cat_list, $cat_id)
{
	$goods_num = 0;

	foreach ($cat_list as $cat) {
		if (($cat['parent_id'] == $cat_id) && !empty($cat['goods_num'])) {
			$goods_num += $cat['goods_num'];
		}
	}

	return $goods_num;
}

define('IN_ECS', true);
require dirname(__FILE__) . '/includes/init.php';

if ((DEBUG_MODE & 2) != 2) {
	$smarty->caching = true;
}

require ROOT_PATH . '/includes/lib_area.php';

if (!$smarty->is_cached('catalog.dwt')) {
	$cat_list = cat_list(0, 0, false);

	foreach ($cat_list as $key => $val) {
		if ($val['is_show'] == 0) {
			unset($cat_list[$key]);
		}
	}

	assign_template();
	assign_dynamic('catalog');
	$position = assign_ur_here(0, $_LANG['catalog']);
	$smarty->assign('page_title', $position['title']);
	$smarty->assign('ur_here', $position['ur_here']);
	$smarty->assign('helps', get_shop_help());
	$smarty->assign('cat_list', $cat_list);
	$smarty->assign('brand_list', get_brands());
	$smarty->assign('promotion_info', get_promotion_info());
}

$smarty->display('catalog.dwt');

?>
