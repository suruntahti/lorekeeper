<?php

namespace App\Models\Character;

use App\Models\Model;

class CharacterBookmark extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'character_id', 'notify_on_trade_status', 'notify_on_gift_art_status', 'notify_on_transfer', 'notify_on_image', 'comment'
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character_bookmarks';
    
    /**
     * Validation rules for creation.
     *
     * @var array
     */
    public static $createRules = [
        'character_id' => 'required',
        'comment' => 'string|nullable|max:500'
    ];
    
    /**
     * Validation rules for updating.
     *
     * @var array
     */
    public static $updateRules = [
        'comment' => 'string|nullable|max:500'
    ];

    /**********************************************************************************************
    
        SCOPES

    **********************************************************************************************/

    /**
     * Scope a query to only include visible characters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible($query)
    {
        return $query->whereHas('character', function($query) {
            $query->where('is_visible', 1);
        });
    }

    /**********************************************************************************************
    
        RELATIONS

    **********************************************************************************************/

    /**
     * Get the character the record belongs to.
     */
    public function character() 
    {
        return $this->belongsTo('App\Models\Character\Character');
    }
    
    /**
     * Get the user the record belongs to.
     */
    public function user() 
    {
        return $this->belongsTo('App\Models\User\User');
    }
}
