<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'Το πεδίο :attribute πρέπει να περιέχει μόνο γράμματα.',
    'alpha_dash'           => 'Το πεδίο :attribute πρέπει να περιέχει μόνο γράμματα, αριθμούς και κάτω πάυλες.',
    'alpha_num'            => 'Το πεδίο :attribute πρέπει να περιέχει μόνο γράμματα και αριθμούς.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max.',
        'file'    => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
        'string'  => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρων.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'Το πεδίο :attribute πρέπει να είναι έγκυρη διεύθυνση e-mail.',
    'empty_with'           => 'To :attribute πρέπει να είναι άδειο όταν Το πεδίο :other είναι παρόν.', //custom validation rule message
    'exists'               => 'Το πεδίο :attribute που επιλέξατε δεν είναι έγκυρο.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'Το πεδίο :attribute πρέπει να είναι εικόνα.',
    'in'                   => 'Το πεδίο :attribute που επιλέξατε δεν είναι έγκυρο.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'Το πεδίο :attribute πρέπει να είναι ακέραιος αριθμός.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max.',
        'file'    => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
        'string'  => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρων.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max.',
        'file'    => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
        'string'  => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρων.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'Το πεδίο :attribute είναι υποχρεωτικό.',
    'required_if'          => 'Το πεδίο :attribute  είναι υποχρεωτικό όταν το πεδίο :other είναι :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Το πεδίο :attribute  είναι υποχρεωτικό όταν το πεδίο :values είναι παρόν.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'Το πεδίο :attribute  είναι υποχρεωτικό όταν το πεδίο :values δεν είναι παρόν.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'Το πεδίο :attribute και :other πρέπει να είναι ίδια.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'Το πεδίο :attribute πρέπει να είναι αλφαριθμητικό.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'Το πεδίο :attribute υπάρχει ήδη.',
    'url'                  => 'Το πεδίο :attribute δεν είναι έγκυρο url.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        //articles , pages
        'title' => 'Τίτλος',
        'alias' => 'Alias',
        'category_with_articles' => 'Κατηγορία χωρίς άρθρα',
        'category_without_articles' => 'Κατηγορία με άρθρα',
        'thumbnail' => 'Εικονίδιο',
        'attachement' => 'Συνημμένο',
        'attachement_url' => 'URL Συνημμένου',
        //people
        'fullname' => 'Ονοματεπώνυμο',
        'category' => 'Κατηγορία',
        'rank' => 'Βαθμίδα',
        'tags' => 'Ετικέτες',
        'avatar' => 'Εικονίδιο',
        'location' => 'Γραφείο',
        'office_hours' => 'Ώρες Γραφείου',
        'phone_number' => 'Τηλέφωνο',
        'email' => 'E-mail',
        'website' => 'Διεύθυνση Ιστοσελίδας',
        //pictures
        'file' => 'Αρχείο',
        'filename' => 'Όνομα Αρχείου',
        //users
        'name' => 'Όνομα Χρήστη',
        'password' => 'Κωδικός',
        'password_confirmation' => 'Επαλήθευση Κωδικού',
    ],

];
