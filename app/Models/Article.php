<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $table = 'articles';//指定表名
    protected $primaryKey = 'id'; //指定主键
    public $timestamps = true;//管理时间戳
    protected $dateFormat = 'U';//设置时间戳格式为Unix
    
    protected $fillable = array('title','content','author'); //指定填充白名单 
    
    
    
    /**
     * 指定时间字符
     *
     * @param  \DateTime|int  $value
     * @return string
     */
    public function fromDateTime($value)
    {
        return strtotime($value);
    }
}
