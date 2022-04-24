<?php


namespace App\Services\Section;


use App\Models\Section;

class SectionService
{
    public function getItems() {
        return Section::all();
    }
}
