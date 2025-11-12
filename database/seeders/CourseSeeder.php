<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $categories = ['Software Engineering', 'Data Science'];

        $writers = [
            'Raka Putra Wicaksono',
            'Bia Mecca Annisa',
            'Abi Firmansyah',
        ];

        $techTopics = [
            'Machine Learning',
            'Artificial Intelligence',
            'Natural Language Processing',
            'Deep Learning',
            'Web Development',
            'Software Architecture',
            'API Integration',
            'Version Control Systems',
            'Agile Methodology',
            'Database Management'
        ];

        Course::create([
            'title' => 'Machine Learning',
            'writer' => 'Bia Mecca Annisa',
            'category' => 'Data Science',
            'image' => 'images/MachineLearning.png',
            'content' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan (AI), machine learning menjadi salah satu bidang yang paling berpengaruh dalam pengolahan data modern...',
            'published_at' => now()
        ]);

        Course::create([
            'title' => 'Human and Computer Interaction',
            'writer' => 'Raka Putra Wicaksono',
            'category' => 'Software Engineering',
            'image' => 'images/HCI.jpg',
            'content' => 'Human-Computer Interaction (HCI) membahas bagaimana pengguna berinteraksi dengan sistem digital, serta bagaimana desain antarmuka dapat meningkatkan pengalaman pengguna...',
            'published_at' => now()
        ]);

        Course::create([
            'title' => 'Natural Language Processing',
            'writer' => 'Bia Mecca Annisa',
            'category' => 'Data Science',
            'image' => 'images/NLP.jpg',
            'content' => 'Natural Language Processing (NLP) adalah teknologi AI yang memungkinkan komputer memahami bahasa manusia melalui analisis teks dan suara...',
            'published_at' => now()
        ]);

        Course::create([
            'title' => 'Deep Learning',
            'writer' => 'Abi Firmansyah',
            'category' => 'Data Science',
            'image' => 'images/DeepLearning.jpg',
            'content' => 'Deep Learning menggunakan jaringan saraf tiruan (neural networks) dengan banyak lapisan untuk menganalisis data kompleks seperti gambar, suara, dan teks...',
            'published_at' => now()
        ]);

        for ($i = 0; $i < 8; $i++) {
            $category = $faker->randomElement($categories);
            $topic = $faker->randomElement($techTopics);
            $writer = $faker->randomElement($writers);

            $title = $faker->randomElement([
                "The Future of $topic",
                "Exploring the Power of $topic",
                "Understanding $topic in Modern Applications",
                "How $topic is Revolutionizing the Tech World",
                "Building Scalable Systems with $topic",
                "$topic for Beginners: A Practical Guide",
                "Innovation and Efficiency Through $topic",
                "Key Concepts Behind $topic in $category"
            ]);

            $intro = "Teknologi $topic kini menjadi komponen penting dalam dunia $category. ".
                     "Banyak perusahaan memanfaatkannya untuk mempercepat inovasi dan meningkatkan efisiensi kerja. ";

            $body = "Penerapan $topic memungkinkan sistem untuk mempelajari data secara mandiri serta membuat keputusan yang lebih akurat. ".
                    "Dalam konteks $category, kemampuan ini membuka peluang besar bagi pengembang untuk menciptakan solusi cerdas dan otomatis. ";

            $closing = "Dengan berkembangnya teknologi, $topic akan terus memainkan peran penting dalam membangun masa depan industri digital. ".
                       "Pemahaman yang baik tentang $topic menjadi keterampilan bernilai tinggi di era modern.";

            $content = $intro . $body . $closing;

            $image = 'https://picsum.photos/seed/' . $faker->unique()->word . '/400/250';

            Course::create([
                'title' => $title,
                'writer' => $writer,
                'category' => $category,
                'image' => $image,
                'content' => $content,
                'published_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);
        }
    }
}
