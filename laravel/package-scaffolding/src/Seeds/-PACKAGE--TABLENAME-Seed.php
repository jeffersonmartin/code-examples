<?php

namespace -NAMESPACE-\-PACKAGE-\Seeds;

use Illuminate\Database\Seeder;
use -NAMESPACE-\-PACKAGE-\Repositories\-PACKAGE--TABLENAME-;

class -PACKAGE--TABLENAME-Seed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Initialize repositories
        $-package--TABLENAME- = new -PACKAGE--TABLENAME-();

        // Create nested array with records to create
        $-pluralobjects- = [
            ['-singularobject-_name' => 'Alpha'],
            ['-singularobject-_name' => 'Beta'],
            ['-singularobject-_name' => 'Charlie']
        ];

        // Loop through records array and get nested array
        foreach($-pluralobjects- as $-singularobject-) {
            // Create new record using repository method with array
            $new_-singularobject- = $-package--TABLENAME-->store($-singularobject-);
        }

    }
}
