<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'mainTitle' => 'kraska',
            'titleOne' => 'Color Documentation',
            'txtOne' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem distinctio iusto? Vel nulla deserunt labore, dolorum amet possimus aliquid.',
            'titleTwo' => 'Colorcast',
            'txtTwo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam perspiciatis eveniet? Repellat saepe pariatur labore provident ducimus magnam consequuntur.',
            'titleThree' => 'Color news',
            'txtThree' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nulla! Maxime ipsam dolores iure accusantium praesentium incidunt deserunt dolore natus?',
            'titleFour' => 'Color ecosystem',
            'txtFour'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, temporibus ipsa quod odit nostrum doloremque doloribus eius quasi laudantium exercitationem!',
            'shop' => 'Shop',
            'sponsor' => 'Sponsor',
            'build' => 'Build v8.83.25',
            'img' => 'kraska.png'
        ]);
    }
}
