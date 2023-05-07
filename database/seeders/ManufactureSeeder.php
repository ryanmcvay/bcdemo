<?php

namespace Database\Seeders;

use App\Models\Manufacture;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Innova', 'slug'=>'Innova'],
            ['name' => 'Discraft', 'slug'=>'Discraft'],
            ['name' => 'MVP', 'slug'=>'MVP'],
            ['name' => 'Discmania', 'slug'=>'Discmania'],
            ['name' => 'Dynamic Discs', 'slug'=>'Dynamic'],
            ['name' => 'Latitude 64', 'slug'=>'Latitude'],
            ['name' => 'Westside Discs', 'slug'=>'Westside'],
            ['name' => 'Prodigy', 'slug'=>'Prodigy'],
            ['name' => 'Gateway', 'slug'=>'Gateway'],
            ['name' => 'Kastaplast', 'slug'=>'Kastaplast'],
            ['name' => 'Streamline', 'slug'=>'Streamline'],
            ['name' => 'Axiom', 'slug'=>'Axiom'],
            ['name' => 'Viking', 'slug'=>'Viking'],
            ['name' => 'Disc King', 'slug'=>'Disc'],
            ['name' => 'Discmania', 'slug'=>'Discmania'],
            ['name' => 'Discmania Active', 'slug'=>'Discmania Active'],
            ['name' => 'Discmania Evolution', 'slug'=>'Discmania Evolution'],
            ['name' => 'Discmania Originals', 'slug'=>'Discmania Originals'],
            ['name' => 'Discmania Sky Rider Series', 'slug'=>'Discmania Sky Rider Series'],
            ['name' => 'Discmania Sky God Series', 'slug'=>'Discmania Sky God Series'],
            ['name' => 'Discmania Signature Series', 'slug'=>'Discmania Signature Series'],
            ['name' => 'Discmania Special Edition', 'slug'=>'Discmania Special Edition'],
            ['name' => 'Discmania Store Specials', 'slug'=>'Discmania Store Specials'],
            ['name' => 'Discmania Test Run', 'slug'=>'Discmania Test Run'],
            ['name' => 'Discmania Tour Series', 'slug'=>'Discmania Tour Series'],
            ['name' => 'Discmania X-Series', 'slug'=>'Discmania X-Series'],
            ['name' => 'Discmania Y-Series', 'slug'=>'Discmania Y-Series'],
            ['name' => 'Discmania Z-Series', 'slug'=>'Discmania Z-Series'],
        ];
        
        foreach ($items as $item) {
            Manufacture::create($item);
        }
    }
}
