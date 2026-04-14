<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'name'     => 'StoneCastle_Dev',
                'platform' => 'Java',
                'rating'   => 5,
                'body'     => 'Best medieval server I\'ve played on. The economy system is actually fair—spent 3 weeks building a merchant empire and it worked. Factions are active and the map is massive.',
            ],
            [
                'name'     => 'BedrockBuilder',
                'platform' => 'Bedrock',
                'rating'   => 5,
                'body'     => 'Finally a server that actually works on Bedrock without lag. GeyserMC is flawless here. Built a castle with my Java friends and everything synced perfectly.',
            ],
            [
                'name'     => 'KnightOfTheNorth',
                'platform' => 'Java',
                'rating'   => 5,
                'body'     => 'The Jobs system changed everything. I can just mine all day and actually earn real gold. No grind for grind\'s sake—every action has value.',
            ],
            [
                'name'     => 'AuctionLord99',
                'platform' => 'Java',
                'rating'   => 4,
                'body'     => 'Auction house is really well maintained. Got into a bidding war over some enchanted gear and it was genuinely exciting. The economy feels alive.',
            ],
            [
                'name'     => 'DesertArchitect',
                'platform' => 'Bedrock',
                'rating'   => 5,
                'body'     => 'Crossplay actually works. My brother on PC and I on mobile built the same fortress together. Protection stones are a great touch—no griefing drama.',
            ],
            [
                'name'     => 'GuildMaster_Rex',
                'platform' => 'Java',
                'rating'   => 5,
                'body'     => 'Ran my own faction for two months. ProtectionStones + ClansLite is a perfect combo. Territory wars are epic during booster windows—catch the multiplier if you can.',
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
