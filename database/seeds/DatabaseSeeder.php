<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT into items (name,img,description,price,Appraisal) VALUES (?,?,?,?,?)",[
            "ルビー",
            "/images/52568f52.jpg",
            "7月の誕生石。石言葉は「熱情・情熱・純愛・仁愛・勇気・仁徳」など。語源はラテン語で「赤」を意味する「ルベウス」に由来する.",
            "200000",
            "鑑定書なし"
        ]);
        DB::insert("INSERT into items (name,img,description,price,Appraisal) VALUES (?,?,?,?,?)",[
            "黒曜石",
            "/images/pbsidian.jpg",
            "黒曜石（黒耀石）は、火山岩の一種、及びそれを加工した宝石。岩石名としては黒曜岩という。 英語名の「オブシディアン」",
            "15000",
            "鑑定書なし"

        ]);
        DB::insert("INSERT into items (name,img,description,price,Appraisal) VALUES (?,?,?,?,?)",[
            "レッドベリル",
            "/images/00306_1.jpg",
            "レッドベリル 赤色を呈する稀産の緑柱石 アメリカのユタ州とその周辺でしか採れない。石言葉：｢インサイト(洞察力)｣ ",
            "1380000",
            "鑑定書有り"
        ]);

    }//publidc function end.
}
