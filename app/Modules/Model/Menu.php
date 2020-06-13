<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Menu
 *
 * @property int $ID
 * @property string $MENU_NAME 菜单名
 * @property int|null $CRUX_SORT 排序
 * @property string|null $URL 链接地址
 * @property string|null $ICON 图标类名
 * @property string|null $REMARK 说明
 * @property int|null $PID 上级菜单
 * @property int|null $IS_SHOW 是否渲染链接，1渲染0不渲染
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereCRUXSORT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereICON($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereISSHOW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereMENUNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu wherePID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereUPDATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereURL($value)
 * @mixin \Eloquent
 */
class Menu extends Model
{
    //
}
