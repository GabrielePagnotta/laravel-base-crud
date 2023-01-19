<?php

use Illuminate\Database\Seeder;
use App\Models\comix;

class ComixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table=config('datas');

        foreach ($table as $key) {
            $newcomix=new comix();
            $newcomix->title=$key["title"];
            $newcomix->description=$key["description"];
            $newcomix->price=$key["price"];
            $newcomix->date=$key["sale_date"];
            $newcomix->type=$key["type"];
            $newcomix->save();
        }
    }
}
