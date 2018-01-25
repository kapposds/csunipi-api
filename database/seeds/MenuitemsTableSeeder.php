<?php

use Illuminate\Database\Seeder;

class MenuitemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('menuitems')->delete();
        
        \DB::table('menuitems')->insert(array (
            0 => 
            array (
                'id' => 11,
                'alias' => 'home',
                'title' => 'Κεντρική',
                'icon' => 'fa fa-home',
                'external_url' => '',
                'order' => 1,
                'created_at' => '2016-11-30 11:21:02',
                'updated_at' => '2018-01-21 11:25:08',
            ),
            1 => 
            array (
                'id' => 12,
                'alias' => 'department',
                'title' => 'Τμήμα',
                'icon' => 'fa fa-university',
                'external_url' => '',
                'order' => 2,
                'created_at' => '2016-11-30 11:21:02',
                'updated_at' => '2017-01-11 17:28:17',
            ),
            2 => 
            array (
                'id' => 13,
                'alias' => 'news',
                'title' => 'Ανακοινώσεις',
                'icon' => 'fa fa-newspaper-o',
                'external_url' => '',
                'order' => 3,
                'created_at' => '2016-11-30 11:21:40',
                'updated_at' => '2017-01-11 17:28:20',
            ),
            3 => 
            array (
                'id' => 14,
                'alias' => 'studies',
                'title' => 'Σπουδές',
                'icon' => 'ion-university',
                'external_url' => '',
                'order' => 4,
                'created_at' => '2016-11-30 11:21:40',
                'updated_at' => '2017-01-11 17:28:22',
            ),
            4 => 
            array (
                'id' => 15,
                'alias' => 'people',
                'title' => 'Μέλη',
                'icon' => 'ion-ios-people',
                'external_url' => '',
                'order' => 5,
                'created_at' => '2016-11-30 11:22:26',
                'updated_at' => '2017-01-11 17:28:25',
            ),
            5 => 
            array (
                'id' => 16,
                'alias' => 'research',
                'title' => 'Έρευνα',
                'icon' => 'fa fa-file-text-o',
                'external_url' => '',
                'order' => 6,
                'created_at' => '2016-11-30 11:22:26',
                'updated_at' => '2017-01-11 17:28:27',
            ),
            6 => 
            array (
                'id' => 17,
                'alias' => 'events',
                'title' => 'Δραστηριότητες',
                'icon' => 'fa fa-calendar',
                'external_url' => '',
                'order' => 7,
                'created_at' => '2016-11-30 11:22:54',
                'updated_at' => '2017-01-11 17:28:30',
            ),
            7 => 
            array (
                'id' => 18,
                'alias' => 'services',
                'title' => 'Υπηρεσίες',
                'icon' => 'fa fa-globe',
                'external_url' => '',
                'order' => 8,
                'created_at' => '2016-11-30 11:22:54',
                'updated_at' => '2017-01-11 17:28:37',
            ),
            8 => 
            array (
                'id' => 19,
                'alias' => 'contact',
                'title' => 'Επικοινωνία',
                'icon' => 'fa fa-phone',
                'external_url' => '',
                'order' => 9,
                'created_at' => '2016-11-30 11:23:11',
                'updated_at' => '2017-01-11 17:28:44',
            ),
            9 => 
            array (
                'id' => 20,
                'alias' => 'about',
                'title' => 'Σχετικά με',
                'icon' => 'fa fa-info-circle',
                'external_url' => '',
                'order' => 10,
                'created_at' => '2017-01-11 17:28:11',
                'updated_at' => '2017-01-11 17:29:22',
            ),
            10 => 
            array (
                'id' => 21,
                'alias' => 'fullwebsite',
                'title' => 'Πλήρες Site',
                'icon' => 'ion-ios-world',
                'external_url' => 'http://www.cs.unipi.gr',
                'order' => 11,
                'created_at' => '2017-01-11 17:30:03',
                'updated_at' => '2017-01-11 17:36:18',
            ),
            11 => 
            array (
                'id' => 22,
                'alias' => 'facebook',
                'title' => 'Facebook',
                'icon' => 'fa fa-facebook-official',
                'external_url' => 'https://www.facebook.com/cs.unipi',
                'order' => 12,
                'created_at' => '2017-01-11 17:30:21',
                'updated_at' => '2017-01-14 15:56:54',
            ),
        ));
        
        
    }
}
