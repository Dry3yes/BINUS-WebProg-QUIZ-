<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class EduFunController extends Controller
{
    public function home()
    {
        $courses = Course::latest()->take(2)->get();
        return view('home', compact('courses'));
    }

    public function category($category)
    {
        $courses = Course::where('category', $category)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($courses->isEmpty()) {
            return redirect()->route('home')->with('message', 'No courses found for this category.');
        }

        return view('category', compact('courses', 'category'));
    }

    public function detail($id)
    {
        $course = Course::findOrFail($id);
        return view('detail', compact('course'));
    }

    public function writers()
    {
        $writers = [
            [
                'name' => 'Raka Putra Wicaksono',
                'specialty' => 'Spesialis Interactive Multimedia',
                'image' => 'images/Orang1.png',
            ],
            [
                'name' => 'Bia Mecca Annisa',
                'specialty' => 'Spesialis Data Science',
                'image' => 'images/Orang2.png',
            ],
            [
                'name' => 'Abi Firmansyah',
                'specialty' => 'Spesialis Network Security',
                'image' => 'images/Orang3.png',
            ],
        ];

        return view('writers', compact('writers'));
    }

    public function writerDetail($name)
    {
        $courses = Course::where('writer', $name)
            ->orderBy('created_at', 'desc')
            ->get();

        $writer = match ($name) {
            'Raka Putra Wicaksono' => [
                'name' => 'Raka Putra Wicaksono',
                'specialty' => 'Spesialis Interactive Multimedia',
                'image' => 'images/Orang1.png',
            ],
            'Bia Mecca Annisa' => [
                'name' => 'Bia Mecca Annisa',
                'specialty' => 'Spesialis Data Science',
                'image' => 'images/Orang2.png',
            ],
            'Abi Firmansyah' => [
                'name' => 'Abi Firmansyah',
                'specialty' => 'Spesialis Network Security',
                'image' => 'images/Orang3.png',
            ],
            default => [
                'name' => $name,
                'specialty' => 'Tech Enthusiast',
                'image' => 'images/Orang1.png',
            ],
        };

        if ($courses->isEmpty()) {
            return redirect()->route('writers')->with('message', 'No articles found for this writer.');
        }

        return view('writer_detail', compact('courses', 'writer'));
    }

    public function about()
    {
        return view('about');
    }

    public function popular()
    {
        $popularCourses = Course::orderBy('created_at', 'desc')->paginate(3);
        return view('popular', compact('popularCourses'));
    }
}
