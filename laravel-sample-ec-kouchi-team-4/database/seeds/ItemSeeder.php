<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            [
                'name' => '佐川シングルオリジンミルク',
                'description' => '高知県・佐川町の牧場で絞った生乳だけを使用し、シングルオリジンミルクのアイスクリームを作りました。',
                'category_id' => '1',
                'price' => '500',
                'stock' => '10',
                'image' => '/images/1.jpg'
            ],
            [
                'name' => 'フローラルチョコレート',
                'description' => 'カカオの配合パーセントの異なるコロンビア産のチョコレート2種類をオリジナルブレンドすることにより、一口食べると華やかなアロマが鼻を抜け、生チョコレートを頬張ったかのような上品な濃厚さを感じられるのに、後味は軽やかで最後の一口までおいしくいただけるアイスクリームに仕上げました。',
                'category_id' => '1',
                'price' => '500',
                'stock' => '10',
                'image' => '/images/2.jpg'
            ],
            [
                'name' => '塩キャラメル',
                'description' => '定番かつ唯一無二の味の大人気フレーバー「塩キャラメル」。一口頬張ると甘くて少しほろ苦いオトナな焦がしキャラメルを楽しめます。アクセントにまろやかな藻塩を入れることで、キャラメルの甘みをぎゅっと引きしめています。',
                'category_id' => '1',
                'price' => '500',
                'stock' => '10',
                'image' => '/images/3.jpg'
            ],
            [
                'name' => '深蒸し十和茶',
                'description' => '高知県四万十町で「一芯三葉」と呼ばれる新芽の先から3枚までの葉を丁寧に手作業で摘み取った一番茶葉だけを使用。煎茶の深いコクをミルクに浸してしっかり抽出し、さらに細かく刻んだ茶葉を少しだけ混ぜることでさわやかな香りと甘さを持つアイスクリームに仕上げました。',
                'category_id' => '1',
                'price' => '500',
                'stock' => '10',
                'image' => '/images/4.jpg'
                ]
            ]);
    }
}
