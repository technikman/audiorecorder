<?php

namespace App\Record;

use Illuminate\Database\Eloquent\Model;

\Carbon\Carbon::setToStringFormat('d.m.Y H:i:s');


/**
 * App\Record\Timer
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $Name
 * @property string $start
 * @property string $end
 * @property string $from
 * @property string $to
 * @property int $weekday
 * @property string $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Record\Timer whereWeekday($value)
 * @property string $name
 */
class Timer extends Model
{
    //
    protected $dates = ['start'];
}
