<?php namespace Larabook\Statuses;


use Eloquent;

class Comment extends Eloquent {

    protected $fillable = ['status_id', 'user_id','body'];

    public static function leave($body, $statusId)
    {
        return new static([
            'body' => $body,
            'status_id' => $statusId
        ]);
    }

    public function owner() {

        return $this->belongsTo('Larabook\Users\User', 'user_id');

    }

}