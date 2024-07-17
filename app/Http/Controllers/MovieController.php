<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $infoItems = [
            ['icon' => 'path/to/icon1.png', 'alt' => 'Icon 1', 'text' => 'Info 1'],
            ['icon' => 'path/to/icon2.png', 'alt' => 'Icon 2', 'text' => 'Info 2'],
            // solo un test con alcuni elementi
        ];

        $footerSections = [
            [
                'title' => 'Section 1',
                'items' => ['Item 1', 'Item 2', 'Item 3']
            ],
            [
                'title' => 'Section 2',
                'items' => ['Item A', 'Item B', 'Item C']
            ],
            // test con alcune sezioni del footer
        ];


        //! Verifica di debug per controllare se le variabili sono passate correttamente
        //! dd($infoItems, $footerSections);

        return view('pages.home', compact('infoItems', 'footerSections'));
    }
}
