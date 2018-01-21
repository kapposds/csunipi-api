<?php

use Illuminate\Database\Seeder;

class SubmenuitemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('submenuitems')->delete();
        
        \DB::table('submenuitems')->insert(array (
            0 => 
            array (
                'id' => 6,
                'title' => 'Μήνυμα Προέδρου',
                'alias' => 'president-message',
                'order' => 1,
                'category' => 'department',
                'created_at' => '2016-11-30 12:26:05',
                'updated_at' => '2018-01-21 11:24:04',
            ),
            1 => 
            array (
                'id' => 7,
                'title' => 'Διακρίσεις',
                'alias' => 'distinctions',
                'order' => 2,
                'category' => 'department',
                'created_at' => '2016-11-30 12:26:05',
                'updated_at' => '2016-12-06 17:42:37',
            ),
            2 => 
            array (
                'id' => 8,
                'title' => 'Νέα Τμήματος',
                'alias' => 'department-news',
                'order' => 1,
                'category' => 'news',
                'created_at' => '2016-11-30 12:26:38',
                'updated_at' => '2017-01-13 11:18:44',
            ),
            3 => 
            array (
                'id' => 9,
                'title' => 'Διοικητικές Πράξεις',
                'alias' => 'administrative-acts',
                'order' => 2,
                'category' => 'news',
                'created_at' => '2016-11-30 12:27:02',
                'updated_at' => '2016-11-30 12:27:02',
            ),
            4 => 
            array (
                'id' => 10,
                'title' => 'Προπτυχιακό',
                'alias' => 'undergraduate',
                'order' => 1,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:51:15',
                'updated_at' => '2016-12-19 13:51:15',
            ),
            5 => 
            array (
                'id' => 11,
                'title' => 'Συνοπτική Παρουσίαση',
                'alias' => 'undergraduate-overview',
                'order' => 2,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:51:15',
                'updated_at' => '2016-12-19 13:51:15',
            ),
            6 => 
            array (
                'id' => 12,
                'title' => 'Δομή Προγράμματος',
                'alias' => 'undergraduate-course-structure',
                'order' => 3,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:55:47',
                'updated_at' => '2016-12-19 13:55:47',
            ),
            7 => 
            array (
                'id' => 13,
                'title' => 'Πρόγραμμα Μαθημάτων',
                'alias' => 'undergraduate-module-list',
                'order' => 4,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:55:47',
                'updated_at' => '2016-12-19 13:55:47',
            ),
            8 => 
            array (
                'id' => 14,
                'title' => 'Μεταπτυχιακά',
                'alias' => 'postgraduate',
                'order' => 5,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:55:47',
                'updated_at' => '2016-12-19 13:55:47',
            ),
            9 => 
            array (
                'id' => 15,
                'title' => 'Γενικές Πληροφορίες',
                'alias' => 'postgraduate-general-info',
                'order' => 6,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:55:47',
                'updated_at' => '2016-12-19 13:55:47',
            ),
            10 => 
            array (
                'id' => 16,
                'title' => 'ΠΜΣ Προηγμένα Συστήματα Πληροφορικής',
                'alias' => 'msc-advanced-information-systems',
                'order' => 7,
                'category' => 'studies',
                'created_at' => '2016-12-19 13:55:47',
                'updated_at' => '2016-12-19 13:55:47',
            ),
            11 => 
            array (
                'id' => 17,
                'title' => 'ΠΜΣ Πληροφορική',
                'alias' => 'msc-informatics',
                'order' => 8,
                'category' => 'studies',
                'created_at' => '2016-12-19 14:00:37',
                'updated_at' => '2016-12-19 14:00:37',
            ),
            12 => 
            array (
                'id' => 18,
                'title' => 'Διδακτορικό',
                'alias' => 'doctoral',
                'order' => 9,
                'category' => 'studies',
                'created_at' => '2016-12-19 14:00:37',
                'updated_at' => '2016-12-19 14:00:37',
            ),
            13 => 
            array (
                'id' => 19,
                'title' => 'Διδακτορικές Σπουδές',
                'alias' => 'doctoral-studies',
                'order' => 10,
                'category' => 'studies',
                'created_at' => '2016-12-19 14:00:37',
                'updated_at' => '2016-12-19 14:00:37',
            ),
            14 => 
            array (
                'id' => 20,
                'title' => 'eLearning',
                'alias' => 'elearning',
                'order' => 12,
                'category' => 'studies',
                'created_at' => '2016-12-19 14:00:37',
                'updated_at' => '2016-12-19 14:00:37',
            ),
            15 => 
            array (
                'id' => 21,
                'title' => 'Οδηγός Σπουδών',
                'alias' => 'student-guide',
                'order' => 13,
                'category' => 'studies',
                'created_at' => '2016-12-19 14:00:37',
                'updated_at' => '2016-12-19 14:00:37',
            ),
            16 => 
            array (
                'id' => 22,
                'title' => 'Άλλα',
                'alias' => 'studies-other',
                'order' => 11,
                'category' => 'studies',
                'created_at' => '2016-12-19 14:01:06',
                'updated_at' => '2016-12-19 14:01:06',
            ),
            17 => 
            array (
                'id' => 23,
                'title' => 'Διδάσκοντες',
                'alias' => 'professors',
                'order' => 1,
                'category' => 'people',
                'created_at' => '2016-12-27 13:34:05',
                'updated_at' => '2016-12-27 13:34:05',
            ),
            18 => 
            array (
                'id' => 24,
                'title' => 'Επίτιμοι Διδάκτορες',
                'alias' => 'doctors-honoris-causa',
                'order' => 2,
                'category' => 'people',
                'created_at' => '2016-12-27 13:34:05',
                'updated_at' => '2016-12-27 13:35:36',
            ),
            19 => 
            array (
                'id' => 25,
                'title' => 'Μεταδιδακτορικοί Ερευνητές',
                'alias' => 'postdoctoral-researchers',
                'order' => 3,
                'category' => 'people',
                'created_at' => '2016-12-27 13:35:03',
                'updated_at' => '2016-12-29 14:45:51',
            ),
            20 => 
            array (
                'id' => 26,
                'title' => 'Υποψήφιοι Διδάκτορες',
                'alias' => 'phd-candidates',
                'order' => 4,
                'category' => 'people',
                'created_at' => '2016-12-27 13:35:03',
                'updated_at' => '2016-12-27 13:35:03',
            ),
            21 => 
            array (
                'id' => 27,
                'title' => 'Γραμματεία',
                'alias' => 'secretariat',
                'order' => 5,
                'category' => 'people',
                'created_at' => '2016-12-27 13:35:25',
                'updated_at' => '2016-12-27 13:35:25',
            ),
            22 => 
            array (
                'id' => 28,
                'title' => 'Τομείς Έρευνας',
                'alias' => 'research-areas',
                'order' => 1,
                'category' => 'research',
                'created_at' => '2016-12-30 14:25:16',
                'updated_at' => '2016-12-30 14:25:16',
            ),
            23 => 
            array (
                'id' => 29,
                'title' => 'Επιλεγμένες Δημοσιεύσεις',
                'alias' => 'selected-publications',
                'order' => 2,
                'category' => 'research',
                'created_at' => '2016-12-30 14:25:16',
                'updated_at' => '2016-12-30 14:25:16',
            ),
            24 => 
            array (
                'id' => 30,
                'title' => 'Ερευνητκά Έργα',
                'alias' => 'research-projects',
                'order' => 3,
                'category' => 'research',
                'created_at' => '2016-12-30 14:25:16',
                'updated_at' => '2017-01-13 11:18:35',
            ),
            25 => 
            array (
                'id' => 31,
                'title' => 'Ερευνητικά Εργαστήρια',
                'alias' => 'research-labs',
                'order' => 4,
                'category' => 'research',
                'created_at' => '2016-12-30 14:25:16',
                'updated_at' => '2016-12-30 14:25:16',
            ),
            26 => 
            array (
                'id' => 32,
                'title' => 'Επιστημονικά Συνέδρεια',
                'alias' => 'scientific-conferences',
                'order' => 1,
                'category' => 'events',
                'created_at' => '2016-12-31 14:54:14',
                'updated_at' => '2016-12-31 14:54:14',
            ),
            27 => 
            array (
                'id' => 33,
                'title' => 'Ομιλίες, Διαλέξεις',
                'alias' => 'talks',
                'order' => 2,
                'category' => 'events',
                'created_at' => '2016-12-31 14:54:14',
                'updated_at' => '2016-12-31 14:54:14',
            ),
            28 => 
            array (
                'id' => 34,
                'title' => 'Άλλες εκδηλώσεις',
                'alias' => 'other-events',
                'order' => 3,
                'category' => 'events',
                'created_at' => '2016-12-31 14:54:36',
                'updated_at' => '2016-12-31 14:54:36',
            ),
            29 => 
            array (
                'id' => 35,
                'title' => 'Υπηρεσίες Τμήματος και Πανεπιστημίου',
                'alias' => 'department-university-services',
                'order' => 1,
                'category' => 'services',
                'created_at' => '2017-01-04 17:10:30',
                'updated_at' => '2017-01-04 17:10:30',
            ),
            30 => 
            array (
                'id' => 36,
                'title' => 'Συνεργαζόμενες Εταιρίες',
                'alias' => 'coorporate-companies',
                'order' => 2,
                'category' => 'services',
                'created_at' => '2017-01-04 17:10:30',
                'updated_at' => '2017-01-04 17:10:30',
            ),
            31 => 
            array (
                'id' => 37,
                'title' => 'Επικοινωνία',
                'alias' => 'contact',
                'order' => 1,
                'category' => 'contact',
                'created_at' => '2017-01-04 18:29:18',
                'updated_at' => '2017-01-04 18:29:18',
            ),
            32 => 
            array (
                'id' => 39,
                'title' => 'Σχετικά με το CS Unipi',
                'alias' => 'csunipi',
                'order' => 2,
                'category' => 'about',
                'created_at' => '2017-01-12 15:21:29',
                'updated_at' => '2017-01-12 15:21:29',
            ),
            33 => 
            array (
                'id' => 40,
                'title' => 'Σχετικά με αυτή την εφαρμογή',
                'alias' => 'this-app',
                'order' => 1,
                'category' => 'about',
                'created_at' => '2017-01-12 15:21:29',
                'updated_at' => '2017-01-12 15:21:29',
            ),
        ));
        
        
    }
}
