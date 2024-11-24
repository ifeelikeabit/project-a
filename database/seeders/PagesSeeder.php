<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\View;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $content = View::make('admin.page.info')->render();
    
        Page::create([
            'id' => 'info',
            'title' => 'How can i ? ',
            'content' => $content
        ]);
    }
}
