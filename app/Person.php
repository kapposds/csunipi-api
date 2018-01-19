<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'alias', 'category', 'rank', 'tags', 'avatar',
        'location','office_hours', 'phone_number','email','website',
    ];

    public function page()
    {

        return $this->belongsTo('App\Page', 'category', 'alias');//relationship page(1 <--- N)people
        //category: people column, alias: people column. category is foreign key to alias
        //if we hadnt define these, the relationship is with the id by default
    }

    public static function getPossibleRanks()
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM people WHERE Field = 'rank'") )[0]->Type; //query
        preg_match('/^enum\((.*)\)$/', $type, $matches); //regular expression
        $enum = array();
        foreach( explode(',', $matches[1]) as $value ) //for each value (separated by comma)
        {
            //trim different enum values
            $k = trim( $value, "'" );

            $v = self::getRankName($k); //self facade. without it context errors

            //add to array with key and value
            $enum = array_add($enum, $k, $v);
        }
        return $enum;
    }

    public static function getRankName($rank)
    {
        //normalize rank names
        switch ($rank) {
            case "president":
                $rank_name='Πρόεδρος Τμήματος';
                break;
            case "professors":
                $rank_name='Καθηγητής';
                break;
            case "associate-professors":
                $rank_name='Αναπληρωτής Καθηγητής';
                break;
            case "assistant-professors":
                $rank_name='Επίκουρος Καθηγητής';
                break;
            case "lecturers":
                $rank_name='Λέκτορας';
                break;
            case "professors-emeriti":
                $rank_name='Ομότιμος Καθηγητής';
                break;
            case "secretariat":
                $rank_name='Γραμματεία';
                break;
            default:
                $rank_name = $rank;
        }
        return $rank_name;
    }

}
