<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    
    public function run() {

        $comics = [

        [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
            "artists" => [
                "José Luis García-López",
                "Clay Mann",
                "Rafael Albuquerque",
                "Patrick Gleason",
                "Dan Jurgens",
                "Joe Shuster",
                "Neal Adams",
                "Curt Swan",
                "John Cassaday",
                "Olivier Coipel",
                "Jim Lee"
            ],
            "writers" => [
                "Brad Meltzer",
                "Tom King",
                "Scott Snyder",
                "Geoff Johns",
                "Brian Michael Bendis",
                "Paul Dini",
                "Louise Simonson",
                "Richard Donner",
                "Marv Wolfman",
                "Peter J. Tomasi",
                "Dan Jurgens",
                "Jerry Siegel",
                "Paul Levitz"
            ],
        ],
        [
            "title" => "American Vampire 1976 #1",
            "description" => "America is broken. Trust between the government and the American public has crumbled.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "sale_date" => "2020-10-06",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Scott Snyder"
            ],
        ],
        [
            "title" => "Aquaman Vol. 4: Underworld",
            "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb",
            "price" => "$16.99",
            "series" => "Aquaman",
            "sale_date" => "2018-01-24",
            "type" => "graphic novel",
            "artists" => [
                "Stjepan Sejic"
            ],
            "writers" => [
                "Dan Abnett"
            ],
        ],
        [
            "title" => "Batgirl #1",
            "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76",
            "price" => "$2.99",
            "series" => "Batgirl",
            "sale_date" => "2016-07-27",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Hope Larson"
            ],
        ],
        [
            "title" => "Batman #56",
            "description" => "The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
            "price" => "$3.99",
            "series" => "Batman",
            "sale_date" => "2018-10-03",
            "type" => "comic book",
            "artists" => [
                "Tony S. Daniel"
            ],
            "writers" => [
                "Tom King"
            ],
        ],
        [
            "title" => "Batman Beyond #1",
            "description" => "“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "sale_date" => "2016-10-26",
            "type" => "comic book",
            "artists" => [
                "Bernard Chang"
            ],
            "writers" => [
                "Dan Jurgens"
            ],
        ],
        [
            "title" => "Batman/Superman #1",
            "description" => "Up in the sky, in the dark of the night, trust no one - for the infected walk among us.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "sale_date" => "2019-08-28",
            "type" => "comic book",
            "artists" => [
                "David Marquez"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "Batman/Superman Annual #1",
            "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Clayton Henry",
                "Gleb Melnikov",
                "Dale Eaglesham"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "Batman: The Joker War Zone #1",
            "description" => "Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Guillem March",
                "Ashley A. Woods",
                "Olivier Coipel",
                "James Stokoe",
                "Darko Lafuente"
            ],
            "writers" => [
                "Sam Johns",
                "Joshua Williamson",
                "John Ridley"
            ],
        ],
        [
            "title" => "Batman: Three Jokers #1",
            "description" => "Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "sale_date" => "2020-08-25",
            "type" => "comic book",
            "artists" => [
                "Jason Fabok"
            ],
            "writers" => [
                "Geoff Johns"
            ],
        ],
        [
            "title" => "Batman: White Knight Presents: Harley Quinn #1",
            "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "sale_date" => "2020-10-20",
            "type" => "comic book",
            "artists" => [
                "Matteo Scalera"
            ],
            "writers" => [
                "Katana Collins"
            ],
        ],
        [
            "title" => "Catwoman Vol. 1: Copycats",
            "description" => "Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
            "price" => "$16.99",
            "series" => "Catwoman",
            "sale_date" => "2019-04-10",
            "type" => "graphic novel",
            "artists" => [
                "Fernando Blanco",
                "Joëlle Jones"
            ],
            "writers" => [
                "Joëlle Jones"
            ],
        ]
        ];


        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->type = $comic['type'];
            $newComic->save();

        }

        
    }
}
