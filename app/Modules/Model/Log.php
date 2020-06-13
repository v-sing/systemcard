<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

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
class Log extends Model
{
    //
}
