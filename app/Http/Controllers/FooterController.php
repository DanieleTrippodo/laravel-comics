<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $infoItems = [
            ['icon' => 'path/to/icon1.png', 'alt' => 'Icon 1', 'text' => 'Info 1'],
            ['icon' => 'path/to/icon2.png', 'alt' => 'Icon 2', 'text' => 'Info 2'],
            // Aggiungi altri elementi se necessario
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
            // Aggiungi altre sezioni se necessario
        ];

        return view('main-footer', compact('infoItems', 'footerSections'));
    }
}
