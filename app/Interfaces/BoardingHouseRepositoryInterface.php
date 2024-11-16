<?php

namespace App\Interfaces;

interface BoardingHouseRepositoryInterface
{
    public function getAllBoardingHouses($search = null, $city = null, $category = null);

    public function getPopularBoardingHouses($limit = 5);

    public function getBoardingHousesByCitySlug($slug);

    public function getBoardingHousesByCategorySlug($slug);

    public function getBoardingHousesBySlug($slug);

    public function getBoardingHousesRoomById($id);

}