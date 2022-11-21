<?php

namespace App\Services;
use App\Models\Search_Model;

class SearchService {
    public function getAllData(){

        $songs = Search_Model::All();

        return $songs;
    }
}