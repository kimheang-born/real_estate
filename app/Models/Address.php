<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'kh_address';

    public function getFullAddressAttribute()
    {
        return implode(', ', array_reverse(explode(' / ', $this->_path_en)));
    }

    public function getFullAddressNonReverseAttribute()
    {
        return implode(', ', explode(' / ', $this->_path_en));
    }

    public function getAddressObjectAttribute()
    {
        $full = [];
        $d['city'] =
        $d['district'] =
        $d['commune'] =
        $d['village'] = null;

        $address = explode(',', $this->FullAddressNonReverse);

        if (isset($address[0])) {
            $d['city'] = $full[] = trim($address[0]);
        }

        if (isset($address[1])) {
            $d['district'] = $full[] = trim($address[1]);
        }

        $d['city_district'] = implode(', ', array_reverse($full));

        if (isset($address[2])) {
            $d['commune'] = $full[] = trim($address[2]);
        }

        if (isset($address[3])) {
            $d['village'] = $full[] = trim($address[3]);
        }

        $d['full'] = implode(', ', array_reverse($full));

        return (object)$d;
    }

    public function getCityAttribute()
    {
        list($city)  = explode('/', $this->_path_en);
        return str_replace('Province', '', $city);
    }

    public function getFullAddressKhAttribute()
    {
        return trim(implode(' ', array_reverse(explode('/', $this->_path_kh))));
    }
}
