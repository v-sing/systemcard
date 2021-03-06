<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_name' => '权限管理',
                'crux_sort' => 17,
                'url' => '',
                'icon' => '&#xe601;',
                'remark' => '',
                'pid' => 0,
                'is_show' => 1,
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 13:49:32',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_name' => '角色管理',
                'crux_sort' => 1,
                'url' => '/admin/role/list',
                'icon' => '&#xe69e;',
                'remark' => '',
                'pid' => 1,
                'is_show' => 1,
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 15:55:01',
            ),
            2 => 
            array (
                'id' => 3,
                'menu_name' => '菜单管理',
                'crux_sort' => 2,
                'url' => '/admin/menu/list',
                'icon' => '&#xe604;',
                'remark' => '',
                'pid' => 1,
                'is_show' => 1,
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 15:55:11',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_name' => '账号列表',
                'crux_sort' => 3,
                'url' => '/admin/admin/list',
                'icon' => '&#xe6da;',
                'remark' => '',
                'pid' => 1,
                'is_show' => 1,
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 15:55:36',
            ),
            4 => 
            array (
                'id' => 12,
                'menu_name' => '添加编辑角色',
                'crux_sort' => 18,
                'url' => '/admin/role/add',
                'icon' => '',
                'remark' => '',
                'pid' => 2,
                'is_show' => 0,
                'created_at' => '2020-05-15 15:41:58',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            5 => 
            array (
                'id' => 13,
                'menu_name' => '删除角色',
                'crux_sort' => 19,
                'url' => '/admin/role/del',
                'icon' => '',
                'remark' => '',
                'pid' => 2,
                'is_show' => 0,
                'created_at' => '2020-05-15 15:43:01',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            6 => 
            array (
                'id' => 14,
                'menu_name' => '授权',
                'crux_sort' => 20,
                'url' => '/admin/role/setMenu',
                'icon' => '',
                'remark' => '',
                'pid' => 2,
                'is_show' => 0,
                'created_at' => '2020-05-15 15:43:30',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            7 => 
            array (
                'id' => 15,
                'menu_name' => '添加编辑菜单',
                'crux_sort' => 21,
                'url' => '/admin/menu/edit',
                'icon' => '',
                'remark' => '',
                'pid' => 3,
                'is_show' => 0,
                'created_at' => '2020-05-15 15:44:06',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            8 => 
            array (
                'id' => 16,
                'menu_name' => '拖动排序',
                'crux_sort' => 22,
                'url' => '/admin/menu/editcrux_sort',
                'icon' => '',
                'remark' => '',
                'pid' => 3,
                'is_show' => 0,
                'created_at' => '2020-05-15 15:44:36',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            9 => 
            array (
                'id' => 17,
                'menu_name' => '菜单删除',
                'crux_sort' => 23,
                'url' => '/admin/menu/del',
                'icon' => '',
                'remark' => '',
                'pid' => 3,
                'is_show' => 0,
                'created_at' => '2020-05-15 15:57:55',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            10 => 
            array (
                'id' => 18,
                'menu_name' => '公共节点',
                'crux_sort' => 24,
                'url' => '/',
                'icon' => '',
                'remark' => '',
                'pid' => 0,
                'is_show' => 0,
                'created_at' => '2020-05-15 16:02:38',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            11 => 
            array (
                'id' => 19,
                'menu_name' => '添加编辑账号',
                'crux_sort' => 25,
                'url' => '/admin/admin/add',
                'icon' => '',
                'remark' => '',
                'pid' => 4,
                'is_show' => 0,
                'created_at' => '2020-05-15 16:03:13',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            12 => 
            array (
                'id' => 20,
                'menu_name' => '修改个人密码',
                'crux_sort' => 26,
                'url' => '/admin/admin/password',
                'icon' => '',
                'remark' => '',
                'pid' => 18,
                'is_show' => 0,
                'created_at' => '2020-05-15 16:04:05',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            13 => 
            array (
                'id' => 21,
                'menu_name' => '账号停用启用',
                'crux_sort' => 27,
                'url' => '/admin/admin/stop',
                'icon' => '',
                'remark' => '',
                'pid' => 4,
                'is_show' => 0,
                'created_at' => '2020-05-15 16:04:38',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            14 => 
            array (
                'id' => 22,
                'menu_name' => '帐号删除',
                'crux_sort' => 28,
                'url' => '/admin/admin/del',
                'icon' => '',
                'remark' => '',
                'pid' => 4,
                'is_show' => 0,
                'created_at' => '2020-05-15 16:05:55',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            15 => 
            array (
                'id' => 30,
                'menu_name' => '操作日志',
                'crux_sort' => 36,
                'url' => '/admin/log/list',
                'icon' => '&#xe795;',
                'remark' => '',
                'pid' => 1,
                'is_show' => 1,
                'created_at' => '2020-05-16 16:22:02',
                'updated_at' => '2020-05-28 15:55:23',
            ),
            16 => 
            array (
                'id' => 31,
                'menu_name' => '概况',
                'crux_sort' => 11,
                'url' => '',
                'icon' => '&#xe6b6;',
                'remark' => '',
                'pid' => 0,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:47:37',
                'updated_at' => '2020-05-28 15:41:30',
            ),
            17 => 
            array (
                'id' => 32,
                'menu_name' => '用户管理',
                'crux_sort' => 12,
                'url' => '',
                'icon' => '&#xe632;',
                'remark' => '',
                'pid' => 0,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:47:58',
                'updated_at' => '2020-05-28 15:41:47',
            ),
            18 => 
            array (
                'id' => 34,
                'menu_name' => '应用中心',
                'crux_sort' => 14,
                'url' => '',
                'icon' => '&#xe634;',
                'remark' => '',
                'pid' => 0,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:48:36',
                'updated_at' => '2020-05-28 15:42:21',
            ),
            19 => 
            array (
                'id' => 35,
                'menu_name' => '账务管理',
                'crux_sort' => 15,
                'url' => '',
                'icon' => '&#xe605;',
                'remark' => '',
                'pid' => 0,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:48:51',
                'updated_at' => '2020-05-28 15:43:12',
            ),
            20 => 
            array (
                'id' => 36,
                'menu_name' => '数据分析',
                'crux_sort' => 16,
                'url' => '',
                'icon' => '&#xe8ab;',
                'remark' => '',
                'pid' => 0,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:49:16',
                'updated_at' => '2020-05-28 15:43:48',
            ),
            21 => 
            array (
                'id' => 37,
                'menu_name' => '用户列表',
                'crux_sort' => 37,
                'url' => '/admin/kuser/list',
                'icon' => '&#xe616;',
                'remark' => '',
                'pid' => 32,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:49:47',
                'updated_at' => '2020-05-28 15:42:06',
            ),
            22 => 
            array (
                'id' => 38,
                'menu_name' => '优惠券',
                'crux_sort' => 38,
                'url' => '',
                'icon' => '&#xe670;',
                'remark' => '',
                'pid' => 34,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:51:01',
                'updated_at' => '2020-05-28 15:42:38',
            ),
            23 => 
            array (
                'id' => 39,
                'menu_name' => '互动活动',
                'crux_sort' => 39,
                'url' => '',
                'icon' => '&#xe603;',
                'remark' => '',
                'pid' => 34,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:51:14',
                'updated_at' => '2020-05-28 15:42:50',
            ),
            24 => 
            array (
                'id' => 40,
                'menu_name' => '新建优惠券',
                'crux_sort' => 40,
                'url' => '/admin/coupon/add',
                'icon' => '',
                'remark' => '',
                'pid' => 38,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:51:43',
                'updated_at' => '2020-05-28 13:51:43',
            ),
            25 => 
            array (
                'id' => 41,
                'menu_name' => '优惠券列表',
                'crux_sort' => 41,
                'url' => '/admin/coupon/list',
                'icon' => '',
                'remark' => '',
                'pid' => 38,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:52:03',
                'updated_at' => '2020-05-29 10:34:01',
            ),
            26 => 
            array (
                'id' => 42,
                'menu_name' => '券码核销',
                'crux_sort' => 43,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 38,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:52:28',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            27 => 
            array (
                'id' => 43,
                'menu_name' => '奖品管理',
                'crux_sort' => 44,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 39,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:53:00',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            28 => 
            array (
                'id' => 44,
                'menu_name' => '新建奖品',
                'crux_sort' => 45,
                'url' => '/admin/award/add',
                'icon' => '',
                'remark' => '',
                'pid' => 43,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:54:14',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            29 => 
            array (
                'id' => 45,
                'menu_name' => '奖品列表',
                'crux_sort' => 46,
                'url' => '/admin/award/list',
                'icon' => '',
                'remark' => '',
                'pid' => 43,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:54:32',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            30 => 
            array (
                'id' => 46,
                'menu_name' => '兑奖中心',
                'crux_sort' => 47,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 43,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:54:58',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            31 => 
            array (
                'id' => 47,
                'menu_name' => '活动管理',
                'crux_sort' => 48,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 39,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:55:15',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            32 => 
            array (
                'id' => 48,
                'menu_name' => '新建活动',
                'crux_sort' => 50,
                'url' => '/admin/activity/add',
                'icon' => '',
                'remark' => '',
                'pid' => 47,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:55:32',
                'updated_at' => '2020-06-08 14:52:54',
            ),
            33 => 
            array (
                'id' => 49,
                'menu_name' => '活动列表',
                'crux_sort' => 51,
                'url' => '/admin/activity/list',
                'icon' => '',
                'remark' => '',
                'pid' => 47,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:55:43',
                'updated_at' => '2020-06-08 14:53:59',
            ),
            34 => 
            array (
                'id' => 50,
                'menu_name' => '触发活动',
                'crux_sort' => 49,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 39,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:56:06',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            35 => 
            array (
                'id' => 51,
                'menu_name' => '行为管理',
                'crux_sort' => 52,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 50,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:56:36',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            36 => 
            array (
                'id' => 52,
                'menu_name' => '新建触发',
                'crux_sort' => 53,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 50,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:56:56',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            37 => 
            array (
                'id' => 53,
                'menu_name' => '触发列表',
                'crux_sort' => 54,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 50,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:57:27',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            38 => 
            array (
                'id' => 54,
                'menu_name' => '资金账户管理',
                'crux_sort' => 55,
                'url' => '',
                'icon' => '&#xe656;',
                'remark' => '',
                'pid' => 35,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:58:54',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            39 => 
            array (
                'id' => 55,
                'menu_name' => '资金账户',
                'crux_sort' => 56,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 54,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:59:08',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            40 => 
            array (
                'id' => 56,
                'menu_name' => '财务统计',
                'crux_sort' => 57,
                'url' => '',
                'icon' => '&#xe64e;',
                'remark' => '',
                'pid' => 35,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:59:24',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            41 => 
            array (
                'id' => 57,
                'menu_name' => '平台奖品核销对账列表',
                'crux_sort' => 58,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 56,
                'is_show' => 1,
                'created_at' => '2020-05-28 13:59:59',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            42 => 
            array (
                'id' => 58,
                'menu_name' => '优惠券核销对账列表',
                'crux_sort' => 59,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 56,
                'is_show' => 1,
                'created_at' => '2020-05-28 14:00:20',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            43 => 
            array (
                'id' => 59,
                'menu_name' => '活动分析',
                'crux_sort' => 60,
                'url' => '',
                'icon' => '&#xe687;',
                'remark' => '',
                'pid' => 36,
                'is_show' => 1,
                'created_at' => '2020-05-28 14:00:44',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            44 => 
            array (
                'id' => 60,
                'menu_name' => '优惠券停用/启用',
                'crux_sort' => 61,
                'url' => '/admin/coupon/stop',
                'icon' => '',
                'remark' => '',
                'pid' => 41,
                'is_show' => 0,
                'created_at' => '2020-05-29 15:32:09',
                'updated_at' => '2020-05-29 16:45:04',
            ),
            45 => 
            array (
                'id' => 61,
                'menu_name' => '券码对账',
                'crux_sort' => 42,
                'url' => '/admin/user_coupon/list',
                'icon' => '',
                'remark' => '',
                'pid' => 38,
                'is_show' => 1,
                'created_at' => '2020-05-29 16:44:38',
                'updated_at' => '2020-06-09 13:56:47',
            ),
            46 => 
            array (
                'id' => 62,
                'menu_name' => 'tp商城接口',
                'crux_sort' => 62,
                'url' => '',
                'icon' => '',
                'remark' => '',
                'pid' => 18,
                'is_show' => 0,
                'created_at' => '2020-05-29 17:34:15',
                'updated_at' => '2020-05-29 17:34:15',
            ),
            47 => 
            array (
                'id' => 63,
                'menu_name' => '获取商圈信息接口',
                'crux_sort' => 63,
                'url' => '/admin/api/getBusinessInfo',
                'icon' => '',
                'remark' => '',
                'pid' => 62,
                'is_show' => 0,
                'created_at' => '2020-05-29 17:34:40',
                'updated_at' => '2020-05-29 17:34:40',
            ),
            48 => 
            array (
                'id' => 64,
                'menu_name' => '商户、分类信息接口',
                'crux_sort' => 64,
                'url' => '/admin/api/getInfoById',
                'icon' => '',
                'remark' => '',
                'pid' => 62,
                'is_show' => 0,
                'created_at' => '2020-05-29 18:19:16',
                'updated_at' => '2020-05-29 18:19:16',
            ),
            49 => 
            array (
                'id' => 65,
                'menu_name' => '获取商品信息接口',
                'crux_sort' => 65,
                'url' => '/admin/api/getGoodsInfo',
                'icon' => '',
                'remark' => '',
                'pid' => 62,
                'is_show' => 0,
                'created_at' => '2020-05-29 18:19:52',
                'updated_at' => '2020-05-29 18:19:52',
            ),
            50 => 
            array (
                'id' => 66,
                'menu_name' => '文件上传',
                'crux_sort' => 66,
                'url' => '/admin/api/upload',
                'icon' => '',
                'remark' => '',
                'pid' => 18,
                'is_show' => 0,
                'created_at' => '2020-05-30 11:55:46',
                'updated_at' => '2020-05-30 11:55:46',
            ),
            51 => 
            array (
                'id' => 67,
                'menu_name' => '作废',
                'crux_sort' => 67,
                'url' => '/admin/coupon/cancel',
                'icon' => '',
                'remark' => '',
                'pid' => 41,
                'is_show' => 0,
                'created_at' => '2020-05-30 15:26:41',
                'updated_at' => '2020-05-30 15:26:41',
            ),
            52 => 
            array (
                'id' => 69,
                'menu_name' => '编辑优惠券',
                'crux_sort' => 69,
                'url' => '/admin/coupon/edit',
                'icon' => '&#xe63c;',
                'remark' => '',
                'pid' => 38,
                'is_show' => 0,
                'created_at' => '2020-06-02 14:16:05',
                'updated_at' => '2020-06-02 14:20:47',
            ),
            53 => 
            array (
                'id' => 71,
                'menu_name' => '获取商圈信息',
                'crux_sort' => 71,
                'url' => '/admin/coupon/getTrade',
                'icon' => '',
                'remark' => '',
                'pid' => 40,
                'is_show' => 0,
                'created_at' => '2020-06-03 10:19:07',
                'updated_at' => '2020-06-03 10:19:07',
            ),
            54 => 
            array (
                'id' => 72,
                'menu_name' => '获取品品类的信息',
                'crux_sort' => 72,
                'url' => '/admin/coupon/getCategory',
                'icon' => '&#xe63c;',
                'remark' => '',
                'pid' => 40,
                'is_show' => 0,
                'created_at' => '2020-06-04 10:08:29',
                'updated_at' => '2020-06-04 10:08:29',
            ),
            55 => 
            array (
                'id' => 73,
                'menu_name' => '获取商铺信息',
                'crux_sort' => 73,
                'url' => '/admin/coupon/getStore',
                'icon' => '&#xe63c;',
                'remark' => '',
                'pid' => 40,
                'is_show' => 0,
                'created_at' => '2020-06-04 11:14:39',
                'updated_at' => '2020-06-04 11:14:39',
            ),
            56 => 
            array (
                'id' => 74,
                'menu_name' => '获取商品信息',
                'crux_sort' => 74,
                'url' => '/admin/coupon/getGoods',
                'icon' => '&#xe63c;',
                'remark' => '',
                'pid' => 40,
                'is_show' => 0,
                'created_at' => '2020-06-04 11:56:42',
                'updated_at' => '2020-06-04 11:56:42',
            ),
            57 => 
            array (
                'id' => 75,
                'menu_name' => '上传图片',
                'crux_sort' => 75,
                'url' => '/admin/coupon/uploadImg',
                'icon' => '&#xe63c;',
                'remark' => '',
                'pid' => 40,
                'is_show' => 0,
                'created_at' => '2020-06-05 14:06:47',
                'updated_at' => '2020-06-05 14:06:47',
            ),
            58 => 
            array (
                'id' => 76,
                'menu_name' => '修改页面',
                'crux_sort' => 76,
                'url' => '/admin/coupon/update',
                'icon' => '&#xe63c;',
                'remark' => '',
                'pid' => 41,
                'is_show' => 0,
                'created_at' => '2020-06-06 14:21:35',
                'updated_at' => '2020-06-06 14:21:35',
            ),
            59 => 
            array (
                'id' => 77,
                'menu_name' => '用户编辑',
                'crux_sort' => 77,
                'url' => '/admin/kuser/edit',
                'icon' => '',
                'remark' => '',
                'pid' => 32,
                'is_show' => 0,
                'created_at' => '2020-06-08 17:12:51',
                'updated_at' => '2020-06-08 17:12:51',
            ),
            60 => 
            array (
                'id' => 78,
                'menu_name' => '用户测试',
                'crux_sort' => 78,
                'url' => '/admin/kuser/test',
                'icon' => '',
                'remark' => '',
                'pid' => 32,
                'is_show' => 0,
                'created_at' => '2020-06-08 17:24:22',
                'updated_at' => '2020-06-08 17:24:22',
            ),
            61 => 
            array (
                'id' => 79,
                'menu_name' => '推广',
                'crux_sort' => 79,
                'url' => '/admin/coupon/spread',
                'icon' => '',
                'remark' => '',
                'pid' => 41,
                'is_show' => 0,
                'created_at' => '2020-06-09 13:47:31',
                'updated_at' => '2020-06-09 13:47:31',
            ),
            62 => 
            array (
                'id' => 80,
                'menu_name' => '平台管理',
                'crux_sort' => 80,
                'url' => '/admin/platform/index',
                'icon' => '',
                'remark' => '',
                'pid' => 34,
                'is_show' => 1,
                'created_at' => '2020-06-11 10:04:06',
                'updated_at' => '2020-06-11 10:04:06',
            ),
            63 => 
            array (
                'id' => 81,
                'menu_name' => '平台添加',
                'crux_sort' => 81,
                'url' => '/admin/platform/add',
                'icon' => '',
                'remark' => '',
                'pid' => 80,
                'is_show' => 0,
                'created_at' => '2020-06-11 10:04:33',
                'updated_at' => '2020-06-11 10:04:33',
            ),
            64 => 
            array (
                'id' => 82,
                'menu_name' => '平台编辑',
                'crux_sort' => 82,
                'url' => '/admin/platform/edit',
                'icon' => '',
                'remark' => '',
                'pid' => 80,
                'is_show' => 0,
                'created_at' => '2020-06-11 10:05:00',
                'updated_at' => '2020-06-11 10:05:00',
            ),
            65 => 
            array (
                'id' => 83,
                'menu_name' => '平台删除',
                'crux_sort' => 83,
                'url' => '/admin/platform/del',
                'icon' => '',
                'remark' => '',
                'pid' => 80,
                'is_show' => 0,
                'created_at' => '2020-06-12 11:43:40',
                'updated_at' => '2020-06-12 11:43:40',
            ),
        ));
        
        
    }
}