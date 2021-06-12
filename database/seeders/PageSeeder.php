<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageData;
use Illuminate\Database\Seeder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = LaravelLocalization::getSupportedLocales();
        $this->seedPage('terms-of-use', $langs);
        $this->seedPage('privacy-policy', $langs);
        $this->seedPage('about-us', $langs);
    }

    /**
     * @param $slug
     * @param $langs
     */
    public function seedPage($slug, $langs)
    {
        $page = Page::updateOrCreate(['slug' => $slug], []);
        foreach ($langs as $localeCode => $properties) {
            PageData::updateOrCreate(['lang' => $localeCode, 'page_id' => $page->id], []);
        }
    }

}
