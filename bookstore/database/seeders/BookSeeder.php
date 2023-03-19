<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $json = Storage::disk('local')->get('/json/books.json');
        // $books = json_decode($json, true);

        // foreach ($books as $book) {
        //     Book::query()->updateOrCreate([
        //         'bookName' => $book['bookName'],
        //         'categoryName' => $book['categoryName'],
        //         'authorName' => $book['authorName'],
        //         'averageRating' => $book['averageRating'],
        //         'voter' => $book['voter'],
        //     ]);
        // }

        if (DB::table('book')->count() == 0) {
            DB::table('book')->insert([
                  [
                    "bookName" => "Biodex",
                    "categoryName" => "Methylprednisolone Acetate",
                    "authorName" => "Hodge",
                    "averageRating" => 1.4,
                    "voter" => 7255
                  ], [
                    "bookName" => "Bigtax",
                    "categoryName" => "Amiodarone Hydrochloride",
                    "authorName" => "Moore",
                    "averageRating" => 7.0,
                    "voter" => 4940
                  ], [
                    "bookName" => "Overhold",
                    "categoryName" => "SYNTHROID",
                    "authorName" => "Jarrid",
                    "averageRating" => 3.2,
                    "voter" => 998
                  ], [
                    "bookName" => "Zontrax",
                    "categoryName" => "Sunflower Pollen",
                    "authorName" => "Sherwin",
                    "averageRating" => 5.6,
                    "voter" => 3794
                  ], [
                    "bookName" => "Vagram",
                    "categoryName" => "LYSOL Healthy Touch",
                    "authorName" => "John",
                    "averageRating" => 1.7,
                    "voter" => 566
                  ], [
                    "bookName" => "Stronghold",
                    "categoryName" => "Squash Zucchini",
                    "authorName" => "Tarrance",
                    "averageRating" => 4.2,
                    "voter" => 1073
                  ], [
                    "bookName" => "Biodex",
                    "categoryName" => "Aplicare Povidone-iodine Scrub",
                    "authorName" => "Graeme",
                    "averageRating" => 3.2,
                    "voter" => 6742
                  ], [
                    "bookName" => "Fix San",
                    "categoryName" => "Famotidine",
                    "authorName" => "Lesley",
                    "averageRating" => 2.7,
                    "voter" => 1676
                  ], [
                    "bookName" => "Gembucket",
                    "categoryName" => "Puri-San Plus",
                    "authorName" => "Culver",
                    "averageRating" => 5.6,
                    "voter" => 8133
                  ], [
                    "bookName" => "Zontrax",
                    "categoryName" => "Gaba 6X",
                    "authorName" => "Obidiah",
                    "averageRating" => 1.8,
                    "voter" => 2108
                  ], [
                    "bookName" => "Veribet",
                    "categoryName" => "bareMinerals READY Touch Up Veil Broad Spectrum SPF 15",
                    "authorName" => "Munroe",
                    "averageRating" => 9.8,
                    "voter" => 2143
                  ], [
                    "bookName" => "Holdlamis",
                    "categoryName" => "Ilaris",
                    "authorName" => "Tymothy",
                    "averageRating" => 3.1,
                    "voter" => 3127
                  ], [
                    "bookName" => "Redhold",
                    "categoryName" => "Hydrocodone Bitartrate and Acetaminophen",
                    "authorName" => "Borden",
                    "averageRating" => 3.7,
                    "voter" => 1355
                  ], [
                    "bookName" => "Transcof",
                    "categoryName" => "Sufentanil Citrate",
                    "authorName" => "Dilan",
                    "averageRating" => 3.6,
                    "voter" => 2719
                  ], [
                    "bookName" => "Namfix",
                    "categoryName" => "L-Cysteine Hydrochloride",
                    "authorName" => "Josh",
                    "averageRating" => 3.2,
                    "voter" => 9134
                  ], [
                    "bookName" => "Zontrax",
                    "categoryName" => "QUERCUS ALBA POLLEN",
                    "authorName" => "Edgardo",
                    "averageRating" => 7.2,
                    "voter" => 7274
                  ], [
                    "bookName" => "Kanlam",
                    "categoryName" => "YS Solution Ac Care",
                    "authorName" => "Haily",
                    "averageRating" => 7.4,
                    "voter" => 5715
                  ], [
                    "bookName" => "Lotlux",
                    "categoryName" => "Constipation",
                    "authorName" => "Garik",
                    "averageRating" => 6.7,
                    "voter" => 305
                  ], [
                    "bookName" => "Duobam",
                    "categoryName" => "FOAMING HAND SANITIZER",
                    "authorName" => "Melvin",
                    "averageRating" => 3.9,
                    "voter" => 1432
                  ], [
                    "bookName" => "Ronstring",
                    "categoryName" => "Methylphenidate HCl Oral Solution",
                    "authorName" => "Sigfrid",
                    "averageRating" => 7.2,
                    "voter" => 2790
                  ], [
                    "bookName" => "Domainer",
                    "categoryName" => "CC Cream Light",
                    "authorName" => "Kenny",
                    "averageRating" => 4.0,
                    "voter" => 9744
                  ], [
                    "bookName" => "Treeflex",
                    "categoryName" => "Neutrogena Oil Free Acne Wash",
                    "authorName" => "Gerardo",
                    "averageRating" => 8.0,
                    "voter" => 3466
                  ], [
                    "bookName" => "Duobam",
                    "categoryName" => "Amyl Nitrite",
                    "authorName" => "Demetrius",
                    "averageRating" => 3.0,
                    "voter" => 7590
                  ], [
                    "bookName" => "Tres-Zap",
                    "categoryName" => "TRUEplus diabetics foot care",
                    "authorName" => "Vale",
                    "averageRating" => 5.2,
                    "voter" => 2476
                  ], [
                    "bookName" => "Matsoft",
                    "categoryName" => "Dramamine Less Drowsy",
                    "authorName" => "Blane",
                    "averageRating" => 5.6,
                    "voter" => 4394
                  ], [
                    "bookName" => "Tin",
                    "categoryName" => "BECONASE",
                    "authorName" => "Pall",
                    "averageRating" => 2.8,
                    "voter" => 9455
                  ], [
                    "bookName" => "Alpha",
                    "categoryName" => "Oxycodone and Acetaminophen",
                    "authorName" => "Tomkin",
                    "averageRating" => 9.4,
                    "voter" => 2289
                  ], [
                    "bookName" => "Sonsing",
                    "categoryName" => "BANANA BOAT",
                    "authorName" => "Ewart",
                    "averageRating" => 7.6,
                    "voter" => 9585
                  ], [
                    "bookName" => "Flexidy",
                    "categoryName" => "Gabapentin",
                    "authorName" => "Hanan",
                    "averageRating" => 4.2,
                    "voter" => 5643
                  ], [
                    "bookName" => "Flowdesk",
                    "categoryName" => "Nitrogen",
                    "authorName" => "Moishe",
                    "averageRating" => 9.7,
                    "voter" => 7482
                  ], [
                    "bookName" => "Aerified",
                    "categoryName" => "CISplatin",
                    "authorName" => "Rodge",
                    "averageRating" => 6.8,
                    "voter" => 3976
                  ], [
                    "bookName" => "Flowdesk",
                    "categoryName" => "Mouth Rinse",
                    "authorName" => "Gard",
                    "averageRating" => 7.9,
                    "voter" => 8591
                  ], [
                    "bookName" => "Bamity",
                    "categoryName" => "Binaca Anticavity Flouride Peppermint",
                    "authorName" => "Wilek",
                    "averageRating" => 6.2,
                    "voter" => 4328
                  ], [
                    "bookName" => "Hatity",
                    "categoryName" => "Indomethacin",
                    "authorName" => "Jessie",
                    "averageRating" => 6.1,
                    "voter" => 8691
                  ], [
                    "bookName" => "Voyatouch",
                    "categoryName" => "PYRITHIONE ZINC",
                    "authorName" => "Gordon",
                    "averageRating" => 5.4,
                    "voter" => 4388
                  ], [
                    "bookName" => "Cardguard",
                    "categoryName" => "CALCITONIN SALMON",
                    "authorName" => "Sherm",
                    "averageRating" => 4.7,
                    "voter" => 453
                  ], [
                    "bookName" => "Biodex",
                    "categoryName" => "Extended Phenytoin Sodium",
                    "authorName" => "Lock",
                    "averageRating" => 8.3,
                    "voter" => 3355
                  ], [
                    "bookName" => "Alphazap",
                    "categoryName" => "Ibuprofen",
                    "authorName" => "Ronny",
                    "averageRating" => 9.9,
                    "voter" => 5053
                  ], [
                    "bookName" => "Sonsing",
                    "categoryName" => "MDSOLARSCIENCES",
                    "authorName" => "Antoni",
                    "averageRating" => 8.8,
                    "voter" => 6791
                  ], [
                    "bookName" => "Bitchip",
                    "categoryName" => "HCB-Tone",
                    "authorName" => "Ewart",
                    "averageRating" => 4.3,
                    "voter" => 914
                  ], [
                    "bookName" => "Aerified",
                    "categoryName" => "Buffered Eye-Lert",
                    "authorName" => "Etan",
                    "averageRating" => 5.9,
                    "voter" => 9738
                  ], [
                    "bookName" => "Y-find",
                    "categoryName" => "Acetaminophen",
                    "authorName" => "Thebault",
                    "averageRating" => 2.9,
                    "voter" => 9922
                  ], [
                    "bookName" => "Trippledex",
                    "categoryName" => "all day relief",
                    "authorName" => "Brady",
                    "averageRating" => 7.3,
                    "voter" => 5896
                  ], [
                    "bookName" => "Rank",
                    "categoryName" => "Meloxicam",
                    "authorName" => "Maxy",
                    "averageRating" => 9.0,
                    "voter" => 9900
                  ], [
                    "bookName" => "Rank",
                    "categoryName" => "Trichophyton mentagrophytes",
                    "authorName" => "Justus",
                    "averageRating" => 2.7,
                    "voter" => 609
                  ], [
                    "bookName" => "Sonair",
                    "categoryName" => "CLONAZEPAM",
                    "authorName" => "Miner",
                    "averageRating" => 2.1,
                    "voter" => 747
                  ], [
                    "bookName" => "Opela",
                    "categoryName" => "Hipoglos",
                    "authorName" => "Cecilio",
                    "averageRating" => 9.0,
                    "voter" => 7576
                  ], [
                    "bookName" => "Opela",
                    "categoryName" => "Fungus Fighter",
                    "authorName" => "Giorgi",
                    "averageRating" => 3.8,
                    "voter" => 8304
                  ], [
                    "bookName" => "Matsoft",
                    "categoryName" => "Furosemide",
                    "authorName" => "Dur",
                    "averageRating" => 9.8,
                    "voter" => 6664
                  ], [
                    "bookName" => "Alphazap",
                    "categoryName" => "Risperidone M-TAB",
                    "authorName" => "Curcio",
                    "averageRating" => 8.8,
                    "voter" => 4286
                  ], [
                    "bookName" => "Zamit",
                    "categoryName" => "Piperacillin and Tazobactam",
                    "authorName" => "Grannie",
                    "averageRating" => 2.1,
                    "voter" => 9623
                  ], [
                    "bookName" => "Cardguard",
                    "categoryName" => "StarCap Medical Private Limited",
                    "authorName" => "Eadmund",
                    "averageRating" => 5.1,
                    "voter" => 3455
                  ], [
                    "bookName" => "Ronstring",
                    "categoryName" => "Amitriptyline Hydrochloride",
                    "authorName" => "Ogdan",
                    "averageRating" => 9.4,
                    "voter" => 9823
                  ], [
                    "bookName" => "Gembucket",
                    "categoryName" => "TRAMADOL HYDROCHLORIDE AND ACETAMINOPHEN",
                    "authorName" => "Forester",
                    "averageRating" => 5.0,
                    "voter" => 7725
                  ], [
                    "bookName" => "Opela",
                    "categoryName" => "HyVee Cold Sore Treatment",
                    "authorName" => "Mack",
                    "averageRating" => 1.1,
                    "voter" => 3969
                  ], [
                    "bookName" => "Zontrax",
                    "categoryName" => "Equaline aspirin",
                    "authorName" => "Reed",
                    "averageRating" => 4.6,
                    "voter" => 8769
                  ], [
                    "bookName" => "Namfix",
                    "categoryName" => "Miconazole 7",
                    "authorName" => "Guilbert",
                    "averageRating" => 7.4,
                    "voter" => 3992
                  ], [
                    "bookName" => "Transcof",
                    "categoryName" => "AcneFree Original Strength Terminator",
                    "authorName" => "Gale",
                    "averageRating" => 8.8,
                    "voter" => 830
                  ], [
                    "bookName" => "Stronghold",
                    "categoryName" => "Action Cream",
                    "authorName" => "Hubey",
                    "averageRating" => 2.1,
                    "voter" => 1999
                  ], [
                    "bookName" => "Rank",
                    "categoryName" => "Colestid",
                    "authorName" => "Jean",
                    "averageRating" => 3.7,
                    "voter" => 3530
                  ], [
                    "bookName" => "Holdlamis",
                    "categoryName" => "BPO 6 Foaming",
                    "authorName" => "Park",
                    "averageRating" => 5.1,
                    "voter" => 2996
                  ], [
                    "bookName" => "Kanlam",
                    "categoryName" => "Paire OB Plus DHA",
                    "authorName" => "Armando",
                    "averageRating" => 4.7,
                    "voter" => 4407
                  ], [
                    "bookName" => "Hatity",
                    "categoryName" => "Allergy and Hay Fever",
                    "authorName" => "Robby",
                    "averageRating" => 2.2,
                    "voter" => 1388
                  ], [
                    "bookName" => "Solarbreeze",
                    "categoryName" => "Captopril",
                    "authorName" => "Marty",
                    "averageRating" => 1.0,
                    "voter" => 3207
                  ], [
                    "bookName" => "Solarbreeze",
                    "categoryName" => "NEOMYCIN SULFATE, POLYMYXIN B SULFATE AND DEXAMETHASONE",
                    "authorName" => "Paxon",
                    "averageRating" => 5.3,
                    "voter" => 5901
                  ], [
                    "bookName" => "Treeflex",
                    "categoryName" => "Diltiazem Hydrochloride",
                    "authorName" => "Cris",
                    "averageRating" => 9.5,
                    "voter" => 8375
                  ], [
                    "bookName" => "Gembucket",
                    "categoryName" => "Rimmel BB Cream 9-IN-1 Skin Perfecting Super Makeup",
                    "authorName" => "Farrel",
                    "averageRating" => 9.2,
                    "voter" => 3501
                  ], [
                    "bookName" => "Bigtax",
                    "categoryName" => "Paroxetine",
                    "authorName" => "Ravid",
                    "averageRating" => 2.4,
                    "voter" => 3657
                  ], [
                    "bookName" => "Domainer",
                    "categoryName" => "Acid Controller Complete",
                    "authorName" => "Fredek",
                    "averageRating" => 8.3,
                    "voter" => 8451
                  ], [
                    "bookName" => "Pannier",
                    "categoryName" => "Thyroid Rhythm",
                    "authorName" => "Irvine",
                    "averageRating" => 1.3,
                    "voter" => 7291
                  ], [
                    "bookName" => "Flexidy",
                    "categoryName" => "Lidocaine",
                    "authorName" => "Wadsworth",
                    "averageRating" => 5.0,
                    "voter" => 115
                  ], [
                    "bookName" => "Gembucket",
                    "categoryName" => "Kanamycin",
                    "authorName" => "Armstrong",
                    "averageRating" => 4.1,
                    "voter" => 4335
                  ], [
                    "bookName" => "Andalax",
                    "categoryName" => "Clonazepam",
                    "authorName" => "Goran",
                    "averageRating" => 2.9,
                    "voter" => 8038
                  ], [
                    "bookName" => "Sonsing",
                    "categoryName" => "ONDANSETRON",
                    "authorName" => "Hirsch",
                    "averageRating" => 3.7,
                    "voter" => 2398
                  ], [
                    "bookName" => "Bytecard",
                    "categoryName" => "Promethazine Hydrochloride",
                    "authorName" => "Way",
                    "averageRating" => 6.7,
                    "voter" => 9506
                  ], [
                    "bookName" => "Cookley",
                    "categoryName" => "CHENOPODIUM AMBROSIOIDES POLLEN",
                    "authorName" => "Waldon",
                    "averageRating" => 4.2,
                    "voter" => 5974
                  ], [
                    "bookName" => "Stringtough",
                    "categoryName" => "Calcarea Phos Kit Refill",
                    "authorName" => "Rochester",
                    "averageRating" => 9.1,
                    "voter" => 8209
                  ], [
                    "bookName" => "Tresom",
                    "categoryName" => "Western Ragweed",
                    "authorName" => "Bill",
                    "averageRating" => 6.8,
                    "voter" => 1042
                  ], [
                    "bookName" => "Y-Solowarm",
                    "categoryName" => "Fludeoxyglucose F 18",
                    "authorName" => "Sylvester",
                    "averageRating" => 3.0,
                    "voter" => 9010
                  ], [
                    "bookName" => "Gembucket",
                    "categoryName" => "AMOREPACIFIC FUTURE RESPONSE Age Defense SPF30",
                    "authorName" => "Royce",
                    "averageRating" => 5.3,
                    "voter" => 3760
                  ], [
                    "bookName" => "Daltfresh",
                    "categoryName" => "Magnesium Sulfate",
                    "authorName" => "Emory",
                    "averageRating" => 3.9,
                    "voter" => 6835
                  ], [
                    "bookName" => "Solarbreeze",
                    "categoryName" => "Norvasc",
                    "authorName" => "Dirk",
                    "averageRating" => 9.1,
                    "voter" => 6925
                  ], [
                    "bookName" => "Latlux",
                    "categoryName" => "Lyrica",
                    "authorName" => "Iorgo",
                    "averageRating" => 5.7,
                    "voter" => 5825
                  ], [
                    "bookName" => "Opela",
                    "categoryName" => "Lymphdrainex",
                    "authorName" => "Alfonso",
                    "averageRating" => 3.4,
                    "voter" => 4332
                  ], [
                    "bookName" => "Treeflex",
                    "categoryName" => "Pravastatin Sodium",
                    "authorName" => "Waldo",
                    "averageRating" => 1.0,
                    "voter" => 2084
                  ], [
                    "bookName" => "Holdlamis",
                    "categoryName" => "leader lice solution",
                    "authorName" => "Sloane",
                    "averageRating" => 4.3,
                    "voter" => 5676
                  ], [
                    "bookName" => "Otcom",
                    "categoryName" => "METFORMIN HYDROCHLORIDE",
                    "authorName" => "Ase",
                    "averageRating" => 2.9,
                    "voter" => 8551
                  ], [
                    "bookName" => "Zontrax",
                    "categoryName" => "IC-Green",
                    "authorName" => "Roldan",
                    "averageRating" => 6.3,
                    "voter" => 6363
                  ], [
                    "bookName" => "Viva",
                    "categoryName" => "pseudoephedrine hydrochloride",
                    "authorName" => "Clair",
                    "averageRating" => 1.3,
                    "voter" => 3973
                  ], [
                    "bookName" => "Veribet",
                    "categoryName" => "Oracit",
                    "authorName" => "Hermon",
                    "averageRating" => 1.6,
                    "voter" => 3540
                  ], [
                    "bookName" => "Voyatouch",
                    "categoryName" => "TOPIRAMATE",
                    "authorName" => "Silvan",
                    "averageRating" => 1.6,
                    "voter" => 2800
                  ], [
                    "bookName" => "Job",
                    "categoryName" => "Losartan Potassium and Hydrochlorothiazide",
                    "authorName" => "Bev",
                    "averageRating" => 7.7,
                    "voter" => 3406
                  ], [
                    "bookName" => "Cardify",
                    "categoryName" => "Carnitor",
                    "authorName" => "Grove",
                    "averageRating" => 8.8,
                    "voter" => 9258
                  ], [
                    "bookName" => "Konklab",
                    "categoryName" => "Armour Thyroid",
                    "authorName" => "Regan",
                    "averageRating" => 1.4,
                    "voter" => 6898
                  ], [
                    "bookName" => "Zamit",
                    "categoryName" => "CounterAct",
                    "authorName" => "Baxy",
                    "averageRating" => 9.3,
                    "voter" => 7028
                  ], [
                    "bookName" => "Sonsing",
                    "categoryName" => "Phentermine Hydrochloride",
                    "authorName" => "Randie",
                    "averageRating" => 4.5,
                    "voter" => 9937
                  ], [
                    "bookName" => "Latlux",
                    "categoryName" => "GINGIMED",
                    "authorName" => "Innis",
                    "averageRating" => 2.4,
                    "voter" => 3971
                  ], [
                    "bookName" => "Keylex",
                    "categoryName" => "Nifedipine",
                    "authorName" => "Marijn",
                    "averageRating" => 9.5,
                    "voter" => 5320
                  ], [
                    "bookName" => "Stronghold",
                    "categoryName" => "Claritin",
                    "authorName" => "Markos",
                    "averageRating" => 7.5,
                    "voter" => 8264
                  ], [
                    "bookName" => "Rank",
                    "categoryName" => "Diabetes Type II",
                    "authorName" => "Lief",
                    "averageRating" => 7.3,
                    "voter" => 5664
                  ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}
