<?php

namespace App\Models;


class Listing
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'title' => "Listing One",
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ad aspernatur autem distinctio obcaecati provident optio, perspiciatis quia placeat expedita!'
            ],
            [
                'id' => 2,
                'title' => "Listing Two",
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ad aspernatur autem distinctio obcaecati provident optio, perspiciatis quia placeat expedita!'
            ],
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
        return null;
    }
};
