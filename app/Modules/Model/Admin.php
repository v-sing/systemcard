<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

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
class Admin extends Model
{
    //
}
