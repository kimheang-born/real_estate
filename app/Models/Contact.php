<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Contact extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'contacts';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    public $fillable = [
        'account_id',
        'type',
        'user_id',
        'is_vip',
        'email',
        'phone',
        'phone_2',
        'phone_3',
        'phone_4',
        'identity_card',
        'identity_card_photos',
        'street_no',
        'house_no',
        'address',
        'zip_postalcode',
        'latitude',
        'longitude',
        'relationships',
        'working_field',
        'profile',
        'occupation',
        'salutation',
        'first_name',
        'last_name',
        'date_of_birth',
        'remark',
        'is_vip',
        'owner',
        'assistant_name',
        'clean_status',
        'jigsaw',
        'department',
        'description',
        'do_not_call',
        'has_opted_out_of_email',
        'fax',
        'has_opted_out_of_fax',
        'individual',
        'last_cu_request_Date',
        'last_cu_update_Date',
        'lead_source',
        'mailing_address',
        'other_address',
        'reports_to',
        'title',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'id' => 'integer',
        'account_id' => 'integer',
        'type' => 'string',
        'user_id' => 'integer',
        'is_vip' => 'boolean',
        'email' => 'string',
        'phone' => 'string',
        'phone_2' => 'string',
        'phone_3' => 'string',
        'phone_4' => 'string',
        'identity_card' => 'string',
        'identity_card_photos' => 'array',
        'street_no' => 'string',
        'house_no' => 'string',
        'address' => 'string',
        'zip_postalcode' => 'integer',
        'latitude' => 'string',
        'longitude' => 'string',
        'relationships' => 'string',
        'working_field' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'profile' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => 'datetime',
        'remark' => 'string',
        'is_vip' => 'boolean',
        'owner' => 'integer',
        'assistant_name' => 'string',
        'clean_status' => 'string',
        'jigsaw' => 'string',
        'department' => 'string',
        'description' => 'string',
        'do_not_call'=> 'boolean',
        'has_opted_out_of_email'=> 'boolean',
        'fax' => 'string',
        'has_opted_out_of_fax'=> 'boolean',
        'individual' => 'integer',
        'last_cu_request_Date' => 'datetime',
        'last_cu_update_Date' => 'datetime',
        'lead_source' => 'string',
        'mailing_address'=>'string',
        'other_address' =>'string',
        'reports_to '=> 'integer' ,
        'title' =>'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static $rulesContact = [
        // 'account_id'     => 'sometimes|nullable|integer|exists:accounts,id',
        'user_id'        => 'sometimes|nullable|integer|exists:users,id',
        'is_vip'         => 'sometimes|nullable|boolean',
        'type'           => 'required|max:255',
        'salutation'     => 'required|string',
        'first_name'     => 'required|string|max:255',
        'last_name'      => 'required|string|max:255',
        'phone'          => 'required|min:8|max:20',
        'phone_2'        => 'sometimes|nullable|min:8|max:20',
        'phone_3'        => 'sometimes|nullable|min:8|max:20',
        'phone_4'        => 'sometimes|nullable|min:8|max:20',
        'email'          => 'sometimes|nullable|email|max:255|unique:contacts,email',
        'identity_card'  => 'sometimes|nullable|string|max:255',
        'identity_card_photo'=> 'sometimes|nullable|array',
        'street_no'      => 'sometimes|nullable|string|max:255',
        'house_no'       => 'sometimes|nullable|string|max:255',
        // 'address'        => 'required|string|digits_between:4,8',
        'zip_postalcode' => 'sometimes|nullable|integer|digits_between:1,11',
        'profile'        => 'sometimes|nullable|string',
        // 'ContactOwner'          => 'required|integer|exists:contacts,id',
        'assistant_name' => 'sometimes|nullable|string|max:255',
        'clean_status'   => 'sometimes|nullable|string|max:255',
        'jigsaw'         => 'sometimes|nullable|string|max:255',
        'department'     => 'sometimes|nullable|string|max:255',
        'description'    => 'sometimes|nullable|string',
        'do_not_call'    => 'sometimes|nullable|boolean',
        'has_opted_out_of_email' => 'sometimes|nullable|boolean',
        'fax'            => 'sometimes|nullable|string',
        'has_opted_out_of_fax' => 'sometimes|nullable|boolean',
        'individual'     => 'sometimes|nullable|integer|exists:contacts,id',
        'last_cu_request_Date' => 'sometimes|nullable|date',
        'last_cu_update_Date'  => 'sometimes|nullable|date',
        'lead_source'    => 'sometimes|nullable|string|max:255',
        'mailing_address'=> 'sometimes|nullable|string|max:255',
        'other_address'  => 'sometimes|nullable|string|max:255',
        'reports_to'     => 'sometimes|nullable|integer|exists:contacts,id',
        'title'          => 'sometimes|nullable|string',
        'created_by'     => 'sometimes|nullable|integer|exists:contacts,id',
        'updated_by'     => 'sometimes|nullable|integer|exists:contacts,id'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function khAddress()
    {
        return $this->belongsTo('\App\Models\Address', 'address', '_code');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getFullNameAttribute()
    {
        $implode = [];

        if ($this->salutation) {
            $implode[] = ucwords($this->salutation);
        }

        if ($this->first_name) {
            $implode[] = $this->first_name;
        }

        if ($this->last_name) {
            $implode[] = $this->last_name;
        }

        return implode(' ', $implode);
    }
    public function getContactPhoneAttribute()
    {
        $phone = [];
        if ($this->phone) {
            $phone[] = $this->phone;
        }
        if ($this->phone_2) {
            $phone[] = $this->phone_2;
        }
        if ($this->phone_3) {
            $phone[] = $this->phone_3;
        }
        if ($this->phone_4) {
            $phone[] = $this->phone_4;
        }
        return implode(', ', $phone);
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setIdentityCardPhotosAttribute($values)
    {
        $disk = 'uploads';
        $attribute_name = "identity_card_photos";
        $destination_path = "uploads/images/" . date('Ym');

        $this->myCrudUploads($values, $attribute_name, $destination_path);
    }
}