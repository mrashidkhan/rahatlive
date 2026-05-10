<?php

namespace Database\Seeders;

use App\Models\Show;
use App\Models\Subscriber;
use App\Models\PollVote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Sample shows — update with real data
        $shows = [
            [
                'city'        => 'Dallas',
                'state'       => 'TX',
                'country'     => 'USA',
                'venue'       => 'American Airlines Center',
                'show_date'   => '2026-06-15 20:00:00',
                'doors_time'  => '18:00:00',
                'show_time'   => '20:00:00',
                'ticket_url'  => 'https://www.ticketmaster.com',
                'status'      => 'upcoming',
                'sort_order'  => 1,
                'is_featured' => true,
            ],
            [
                'city'       => 'Houston',
                'state'      => 'TX',
                'country'    => 'USA',
                'venue'      => 'Toyota Center',
                'show_date'  => '2026-06-20 20:00:00',
                'ticket_url' => 'https://www.ticketmaster.com',
                'status'     => 'upcoming',
                'sort_order' => 2,
            ],
            [
                'city'       => 'New York',
                'state'      => 'NY',
                'country'    => 'USA',
                'venue'      => 'Madison Square Garden',
                'show_date'  => '2026-07-04 20:00:00',
                'ticket_url' => 'https://www.ticketmaster.com',
                'status'     => 'announced',
                'sort_order' => 3,
            ],
            [
                'city'       => 'Chicago',
                'state'      => 'IL',
                'country'    => 'USA',
                'venue'      => 'United Center',
                'show_date'  => '2026-07-12 20:00:00',
                'ticket_url' => null,
                'status'     => 'announced',
                'sort_order' => 4,
            ],
            [
                'city'       => 'Los Angeles',
                'state'      => 'CA',
                'country'    => 'USA',
                'venue'      => 'The Forum',
                'show_date'  => '2026-07-25 20:00:00',
                'ticket_url' => null,
                'status'     => 'announced',
                'sort_order' => 5,
            ],
            [
                'city'       => 'Atlanta',
                'state'      => 'GA',
                'country'    => 'USA',
                'venue'      => 'State Farm Arena',
                'show_date'  => '2026-08-02 20:00:00',
                'ticket_url' => null,
                'status'     => 'announced',
                'sort_order' => 6,
            ],
        ];

        foreach ($shows as $show) {
            Show::create($show);
        }

        // Seed poll votes for realism
        $cities   = ['Dallas', 'Houston', 'Chicago', 'New York', 'Los Angeles', 'Atlanta', 'Seattle'];
        $weights  = [42, 38, 31, 55, 48, 22, 18];
        foreach ($cities as $i => $city) {
            for ($v = 0; $v < $weights[$i]; $v++) {
                PollVote::create(['city' => $city, 'ip_address' => '127.0.0.' . ($v + 1), 'session_id' => 'seed_' . $i . '_' . $v]);
            }
        }

        $this->command->info('✅ Database seeded with shows and poll data.');
    }
}
