<?php

namespace -NAMESPACE-\-PACKAGE-\Seeds;

use Illuminate\Database\Seeder;

class -PACKAGE-PackageSeed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(-PACKAGE--TABLENAME-Seed::class);

    }
}