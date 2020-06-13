<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Modules\Model{
/**
 * App\Modules\Model\Admin
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL 邮箱
 * @property int $STATUS 是否启用
 * @property int $ROLE_ID 所属角色
 * @property string $PASSWORD
 * @property string $TRUE_NAME 真实姓名
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property string|null $DELETED_AT
 * @property string|null $REMEMBER_TOKEN
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereDELETEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereROLEID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereSTATUS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereTRUENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
	class Admin extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\File
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File whereUPDATEDAT($value)
 */
	class File extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Log
 *
 * @property int $ID
 * @property int $ADMIN_ID 操作人
 * @property string $URL 操作url
 * @property string $NAME 操作
 * @property string $METHOD 请求方式
 * @property string $REQUEST 请求信息
 * @property string $IP IP地址
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereADMINID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereMETHOD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereREQUEST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereUPDATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereURL($value)
 * @mixin \Eloquent
 */
	class Log extends \Eloquent {}
}

namespace App\Modules\Model{
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
	class Menu extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Role
 *
 * @property int $ID
 * @property string $ROLE_NAME
 * @property string $REMARK
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereROLENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\RoleMenu
 *
 * @property int $ROLE_ID 角色id
 * @property int $MENU_ID 菜单id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu whereMENUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu whereROLEID($value)
 * @mixin \Eloquent
 */
	class RoleMenu extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL
 * @property string|null $EMAIL_VERIFIED_AT
 * @property string $PASSWORD
 * @property string|null $REMEMBER_TOKEN
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEMAILVERIFIEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

