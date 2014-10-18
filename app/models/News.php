<?php

class News extends Eloquent
{

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc')->limit(4);
    }

}