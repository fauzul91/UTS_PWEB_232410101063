<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Auth Logic
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function logout(Request $request)
    {
        return redirect()->route('home');
    }
    // Home View
    public function showHomepage()
    {
        return view('home');
    }  
    // Dashboard View
    public function showDashboard()
    {  
        $topEvents = [
            [
                'thumbnail' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/party-music-beach-sunset-youtube-thumbnail-design-template-2ee3ca06baa1189a6c1d4bbb596c68b5_screen.jpg?ts=1600839157', // bisa juga pakai asset('images/event1.jpg')
                'title' => 'Acoustic Vibes',
                'location' => 'Kedai Kopi Gacor',
                'participant' => '500',                
            ],
            [
                'thumbnail' => 'https://codingstudio.id/wp-content/uploads/2023/01/Paket-Kursus-Web-Dev-3.jpg',
                'title' => 'Workshop Web Development',
                'location' => 'Gedung Aula Stanford University',
                'participant' => '350',                
            ],
            [
                'thumbnail' => 'https://static-cse.canva.com/blob/1412644/1.BluePinkCreativeBusinessPitchDeckPresentation.jpg',
                'title' => 'Pitch Deck Day',
                'location' => 'Co-Working Space XYZ',  
                'participant' => '200',               
            ],
        ];

        $transactions = [
            [
                'name' => 'Fauzul Akbar',
                'time' => '20 menit lalu',
                'amount' => '+$25.00',
                'image' => 'https://randomuser.me/api/portraits/men/88.jpg'
            ],
            [
                'name' => 'Dr. Tirta',
                'time' => '33 menit lalu',
                'amount' => '+$40.00',
                'image' => 'https://randomuser.me/api/portraits/men/32.jpg'
            ],
            [
                'name' => 'Alya H.',
                'time' => '35 menit lalu',
                'amount' => '+$40.00',
                'image' => 'https://randomuser.me/api/portraits/women/52.jpg'
            ],
            [
                'name' => 'Basuki Hendi',
                'time' => '38 menit lalu',
                'amount' => '+$40.00',
                'image' => 'https://randomuser.me/api/portraits/men/49.jpg'
            ],
            [
                'name' => 'Windah GG',
                'time' => '45 menit lalu',
                'amount' => '+$120.00',
                'image' => 'https://randomuser.me/api/portraits/men/68.jpg'
            ],
        ];

        return view('dashboard', ['topEvents' => $topEvents, 'transactions' => $transactions]);
    }
    // Pengelolaan Logic
    public function showEvent(Request $request)
    {
        $username = $request->query('username');

        $events = [
            [
                'thumbnail' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/party-music-beach-sunset-youtube-thumbnail-design-template-2ee3ca06baa1189a6c1d4bbb596c68b5_screen.jpg?ts=1600839157',
                'title' => 'Acoustic Vibes',
                'category' => 'Musik',
                'location' => 'Kedai Kopi Gacor',
                'date' => '2025-05-30',
                'time' => '19:00 - 22:00',
                'description' => 'Malam santai dengan pertunjukan musik akustik dan open mic.',
            ],
            [
                'thumbnail' => 'https://codingstudio.id/wp-content/uploads/2023/01/Paket-Kursus-Web-Dev-3.jpg',
                'title' => 'Workshop Web Development',
                'category' => 'Workshop',
                'location' => 'Gedung Aula Stanford University',
                'date' => '2025-05-10',
                'time' => '09:00 - 12:00',
                'description' => 'Pelatihan membuat aplikasi web menggunakan Laravel dan Tailwind CSS.',
            ],
            [
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTACPQn3Nh_rRhkSvD97_0CFO37QyEcKUUqw&s',
                'title' => 'Bootcamp Full Stack Bareng Sal Priadi',
                'category' => 'Bootcamp',
                'location' => 'Gedung Soerachman',
                'date' => '2025-05-15',
                'time' => '13:00 - 15:00',
                'description' => 'Bootcamp Full Stack bersama Sal Priadi.',
            ],
            [
                'thumbnail' => 'https://i.scdn.co/image/ab6765630000ba8ae8689a04d087d447352289b1',
                'title' => 'Ngopi & Musik Santai',
                'category' => 'Musik',
                'location' => 'Fore Coffee',
                'date' => '2025-06-05',
                'time' => '17:00 - 20:00',
                'description' => 'Kolaborasi musik santai dan sesi sharing inspiratif bersama musisi lokal.',
            ],
            [
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm314ecACBkCjsozhkje7vJ-w83qm4uIxARFxVSOzDVjeLKlYlKxx2S_o&s=10',
                'title' => 'Event Ngopi Bareng',
                'category' => 'Meetup',
                'location' => 'Warkop Jaya, India',
                'date' => '2025-05-18',
                'time' => '19:00 - 22:00',
                'description' => 'Meetup santai komunitas pecinta kopi se-India.',
            ],                   
        ];

        return view('pengelolaan', ['events' => $events, 'username' => $username]);
    }
    // Category Logic
    public function showCategory(Request $request)
    {
        $username = $request->query('username');

        $categories = [
            ['name' => 'Musik'],           
            ['name' => 'Workshop'],           
            ['name' => 'Pelatihan Online'],           
            ['name' => 'Bootcamp'],           
            ['name' => 'Meetup'],           
            ['name' => 'Pameran'],           
        ];

        return view('category', ['categories' => $categories, 'username' => $username]);
    }
    // Profile View
    public function showProfile(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('profile', ['username' => $username]);
    }
}
