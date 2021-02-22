<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public static function updateSettings($settingsKey,$value)
    {
        Settings::where('key',$settingsKey)->update([
           'value' => $value,
        ]);

        return 'success';
    }

    public static function getSettings($settingsKey)
    {
        $settingDetails = Settings::where('key',$settingsKey)->first();
        return $settingDetails->value;
    }
}
