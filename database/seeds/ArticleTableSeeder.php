<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder {

    public function run()
    {
        $items = [
            ['id' => '1', 'user_id' => 1, 'title' => "No man, I don't eat pork", 'body' => "Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?", 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
            ['id' => '2', 'user_id' => 1, 'title' => "Uuummmm, this is a tasty burger!", 'body' => "Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.", 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
            ['id' => '3', 'user_id' => 2, 'title' => "Is she dead, yes or no?", 'body' => "Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.", 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
            ['id' => '4', 'user_id' => 2, 'title' => "Hold on to your butts", 'body' => "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.", 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
            ['id' => '5', 'user_id' => 3, 'title' => "I gotta piss", 'body' => "Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.", 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
        ];

        DB::table('articles')->insert($items);
    }

}