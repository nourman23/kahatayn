<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert(
        //     [
        //         [
        //             'name' => 'Nourman',
        //             'email' => 'Nourman@gmail.com',
        //             'phone' => '0784423241',
        //             'password' => Hash::make('123456'),
        //         ],
        //         [
        //             'name' => 'Laith',
        //             'email' => 'Laith@gmail.com',
        //             'phone' => '0784663241',
        //             'password' => Hash::make('123456'),

        //         ],
        //         [
        //             'name' => 'Manar',
        //             'email' => 'Manar@gmail.com',
        //             'phone' => '0783423241',
        //             'password' => Hash::make('123456'),
        //         ],
        //         [
        //             'name' => 'Ahmad Al',
        //             'email' => 'AhmadAl@gmail.com',
        //             'phone' => '0783343241',
        //             'password' => Hash::make('123456'),
        //         ],
        //         [
        //             'name' => 'Ahmad ZA',
        //             'email' => 'AhmadZa@gmail.com',
        //             'phone' => '0783343241',
        //             'password' => Hash::make('123456'),
        //         ],
        //         [
        //             'name' => 'Mohammad',
        //             'email' => 'Mohammad@gmail.com',
        //             'phone' => '0784456741',
        //             'password' => Hash::make('123456'),
        //         ]
        //     ]
        // );

        // DB::table('donations')->insert(
        //     [
        //         [
        //             'name' => 'AhmadAl',
        //             'card' => '12353676392635',
        //             'date' => '2022-10-14',
        //             'amount' => '600'
        //         ],
        //         [
        //             'name' => 'Manar',
        //             'card' => '12353644492635',
        //             'date' => '2022-10-17',
        //             'amount' => '300'
        //         ],
        //         [
        //             'name' => 'AhmadZa',
        //             'card' => '12355556392635',
        //             'date' => '2022-10-10',
        //             'amount' => '100'
        //         ],
        //         [
        //             'name' => 'Laith',
        //             'card' => '12353676365635',
        //             'date' => '2022-10-22',
        //             'amount' => '50'
        //         ],
        //         [
        //             'name' => 'Nourman',
        //             'card' => '1235432892635',
        //             'date' => '2022-10-23',
        //             'amount' => '200'
        //         ],

        //     ]
        // );

        DB::table('events')->insert(
            [
                [
                    'name' => 'افطار',
                    'date' => '2022-10-26',
                    'location' => 'عمان',
                    'description' =>
                    '
                    تتدافع أيادي الخير خلال شهر رمضان المبارك، لتقديم كل ما من شأنه أن يرسم الابتسامة على وجوه الاطفال.
                     ويحاول الكثير من الأشخاص أن يكون هذا الخير لفئة بحاجة الى أكبر قدر ممكن من الاهتمام والمودة، لذلك تكون أغلب المساعدات موجهة نحو الأطفال الأيتام
                    ساهموا برسم البسمة على وجوه الأيتام أو قضاء وقت ممتع معهم، كما سيحظى الأيتام بوقت مسلي وأجواء تفاعلية، حيث ستتيح لهم فرصة للتعرف على بعضهم البعض ومشاركة بعضهم الأحاديث والأفكار، وبعد وجبة الإفطار سيقوم مجموعة من المتطوعين بتوزيع هدايا تذكارية لهم.
                    ',
                ],
                [
                    'name' => 'بنك ملابس',
                    'date' => '2022-10-28',
                    'location' => 'عمان',
                    'description' =>
                    '
                    تهدف كهاتين إلى توزيع ثياب العيد والشتاء على ما يزيد عن ثمانية آلاف يتيم
                    . عبر التبرعات التي تصل لمكتبها بواسطة نظام العائلات الكافلة للأيتام،
                    '
                ],
                [
                    'name' => 'حكواتي',
                    'date' => '2022-10-30',
                    'location' => 'الزرقاء',
                    'description' =>
                    '
                    بالتعاون مع جمعية كتابي  لثقافة الطفل سيتم عمل جلسة ثقافية للأطفال سيتم فيها سرد القصص والحكايا 
                    والمشاركة والتفاعل بين الحاضرين جميعا مع المزيد من الفعاليات الشيقة للاطفال .
                    '
                ],
                [
                    'name' => ' لنرسم البسمة',
                    'date' => '2022-11-14',
                    'location' => 'اربد',
                    'description' =>
                    'والرسم مفيد للصحة العقليّة للأطفال، إذ يمثّل هذا النشاط طريقة مثالية لتطوير مهاراتهم الحركية والعقلية، وتعزيز نموهم الاستكشافي والنفسي والعاطفي. وعلى عكس البالغين، لا يقلق الأطفال بشأن آراء الآخرين، وليسوا متحيزين ضد رسوماتهم، وليس لديهم حواجز عاطفية أو عقلية تحد من قدراتهم.'
                ],
                [
                    'name' => 'زراعة الحديقة ',
                    'date' => '2022-11-18',
                    'location' => 'اربد',
                    'description' =>
                    '
                    وفقا للخبراء تعتبر البستنة واحدة من الأماكن التي اعتاد الناس أن يمتعوا كل الحواس الخمس من خلال العمل فيها، وبالتالي تعتبر واحدة من أكثر الأنشطة المفيدة للأطفال الذي يمدهم بأسس من العلوم والفنون حيث من خلال التجربة يكتسب الأطفال قدرًا كبيرًا من المعرفة حول نمو النبات وما يتعلق بالعناية به بطريقة عملية لا نظرية بالإضافة إلى ذلك هو أن يشعر هؤلاء الأطفال بمزيد من المسؤولية والنضج لأنهم سيكونون أكثر تقدمًا من أقرانهم.
                    '
                ],

            ]
        );
    }
}
