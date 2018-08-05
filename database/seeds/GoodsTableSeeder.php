<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('type_of_goods')->insert([

            [

                'name' => 'Акційний товар',

            ],
            [

                'name' => 'Оптовий товар',

            ],
            [

                'name' => 'Роздрібний товар',

            ],

        ]);



        DB::table('goods')->insert([

            [
                'type' => 1,
                'name' => 'полуботинки замшевые',
                'category'=>5,
                'articul'=>'11244234',
               'user_id'=>1,
               'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,

                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'Гламурные кеды',
                'category'=>8,
                'articul'=>'11244235',
                'user_id'=>1,
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'туфли женские выходные',
                'category'=>4,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'гламурные кеды с цветочками',
                'category'=>8,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'star'=>2.5,
                'star_counts'=>10,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'гламурные кеды с цветочками',
                'category'=>8,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'

            ],
            [
                'type' => 1,
                'name' => 'распродажа ',
                'category'=>6,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ]





        ]);

        DB::table('photos')->insert([

            [
                'id_good' => 1,

                'image_medium'=>'image_mediummedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-da35d002c230c9b418cd1ff52efcf569176615632ec5b191e7beacbe29805b9a-db1c5323-f9de-4b49-8aa2-3e32b3b41e48(aacfa682895933c10445a1b11ad4ec5d).jpg'

            ],
            [
                'id_good' => 1,

                'image_medium'=>'image_mediummedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-040309b722acb49eb525d8a4ddc7a25a8321d541d49dc3ce00344829e37b52ef-9f803601-149f-4ed8-afff-3f1c8eef08d6(54285d29a4539534ce33a00b2725a1ad).jpg'

            ],
            [
                'id_good' => 1,
                'image_medium'=>'image_mediummedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-b002c481673d5e1cd55dede927549d8468f7969dcd16e0301a6a595670634c44-ab8d7916-57fe-4e8a-bf0f-c2fed6b04a40(d2d149c48dddcc799cfc7673cfb28f42).jpg'

            ],
            [
                'id_good' => 1,
                'image_medium'=>'image_mediummedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-e7b0e35664183073bbf2c2976fa2f627f3d88bab7eb61ca7197ba17563abc29d-fc115cea-9ff9-45d9-922b-06ca5a52dd70(feb70d61ec6e84e8cc0bd06836679ea5).jpg'

            ],
            [
                'id_good' => 2,
                'image_medium'=>'image_mediummedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-b9d19364f9b921d0ac7090e1690745778b7c5664c8ca8fd3a7be2f0f83291c4d-aa231d76-88e1-432e-855a-74908698612f(b0269b32a9b0ce26320bdb5dee323fef).jpg'

            ],
            [
                'id_good' => 3,
                'image_medium'=>'image_mediummedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-585cd02ff2a0580bd41dc568ecba26fd0e1493f302143a1e2a5a42e15eb7b2a8-8054c4d9-6d73-4c8f-be90-1190e11c09f7(5024b92f849552a69a69e07e2f5ca3e2).jpg'

            ],
            [
                'id_good' => 4,
                'image_medium'=>'image_mediummedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(f50bf55a3a3156668124f8a0f6fed10d).jpg'

            ],
            [
                'id_good' => 5,
                'image_medium'=>'image_mediummedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-91c50bd4f680f9b85f0f6954fd1ac6ca69a4fbc7d43d8b2154bd5a95d6db4800-194969ff-9667-488b-bf6b-16b3056e4c86(13b7fd614fc02353da27697ba0148c31).jpg'

            ],
            [
                'id_good' => 5,
                'image_medium'=>'image_mediummedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-959807a4e66a89bc2b00dcf400ac44e4c64eedaffecd55469186810b23d1ac0b-32374fc4-dfeb-4aa5-b3df-17f7d71e9b1f(5248d742036b07795dfc629f55bf7938).jpg'

            ],
            [
                'id_good' => 5,
                'image_medium'=>'image_mediummedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-a8853a536106ebcb75b5069ba9835376390e63e5cb5f26ec45c014f019bf9d14-a1471b0a-c982-42a4-8faa-24900b6b8aad(2fc147bbaecffbd3ab9c8184c95a45ff).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-3363b7e9b58c602b9c3ca3ab32b229f968ebc0fd3fe8a23fe672b85b393f78c5-d2ee2f16-ac74-4cd8-a074-d5611029c72a(d7e7e74732101ea630ac208044ab6ffe).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-45c1ccd03545509334d02ece219966a4e877402b27676204c9b882120c8891b1-a82fade1-d142-42f6-8a80-1ee99ae7c098(1a1dbac0418474f69c4e30347c20c5c8).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-5839dc065ffd22076b7dd92d23403a17536f862f8fc70ab433adc79b8670afdd-acd0434b-55c1-4b6f-8312-de2ef219c50b(40cc03a955b407e0e8aaa3a2d69446e9).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-44af84c6b682afff785769d1deb036216ef37d70b2065ff09615376ddab3347e-eb1f4099-0103-4578-9279-ff2f4a6a5114(b945af14613c4be0e6aabc13aebc2060).jpg'

            ],
            [
                'id_good' => 6,
                'image_medium'=>'image_mediummedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg',
                'image_small'=>'image_smallmedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg',
                'image_large'=>'image_largemedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg',
                'thumbnail'=>'thumbnailmedia-share-0-02-05-dbcb6da964b06afd5bec2ae0c1963350faf5310d4df24d0f02e86e62f403050c-7200df48-3329-4a72-acb3-8665af5e7306(ce4a1b67ffecd38fce75bb9aef335f8c).jpg'

            ],

        ]);


        DB::table('likes')->insert([

            [

                'id_good' => 1,
                'id_user'=>1

            ]
        ]);

    }
}
