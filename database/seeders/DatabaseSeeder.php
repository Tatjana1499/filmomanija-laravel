<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;
use  App\Models\Clanstvo;
use  App\Models\Reditelj;
use  App\Models\Film;
use  App\Models\Iznajmljivanje;
use  App\Models\Clan;
use  App\Models\Zanr;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        $zanr1 = Zanr::create(['nazivZanra'=>"Akcija"]);
        $zanr2 = Zanr::create(['nazivZanra'=>"Drama"]);
        $zanr3 = Zanr::create(['nazivZanra'=>"Komedija"]);
        $zanr4 = Zanr::create(['nazivZanra'=>"Triler"]);
        $zanr5 = Zanr::create(['nazivZanra'=>"Horor"]);
        $zanr6 = Zanr::create(['nazivZanra'=>"Porodicni"]);
        $zanr7 = Zanr::create(['nazivZanra'=>"Biografski"]);
        $zanr8 = Zanr::create(['nazivZanra'=>"Istorijski"]);
        $zanr9 = Zanr::create(['nazivZanra'=>"Ljubavni"]);
        $zanr10 = Zanr::create(['nazivZanra'=>"Mistarija"]);

        $clanstvo1 = Clanstvo::create(['nazivClanstva'=>'nedeljno']);
        $clanstvo2 = Clanstvo::create(['nazivClanstva'=>'mesecno']);
        $clanstvo3 = Clanstvo::create(['nazivClanstva'=>'godisnje']);

        $clan1 = Clan::create(['imeClana'=>"Pera", 'prezimeClana'=>"Peric", 'clanstvoID'=>"3"]);
        $clan2 = Clan::create(['imeClana'=>"Mika", 'prezimeClana'=>"Mikic", 'clanstvoID'=>"3"]);
        $clan3 = Clan::create(['imeClana'=>"Zika", 'prezimeClana'=>"Zikic", 'clanstvoID'=>"1"]);
        $clan4 = Clan::create(['imeClana'=>"Marko", 'prezimeClana'=>"Markovic", 'clanstvoID'=>"1"]);
        $clan5 = Clan::create(['imeClana'=>"Ilija", 'prezimeClana'=>"Ilic", 'clanstvoID'=>"1"]);
        $clan6 = Clan::create(['imeClana'=>"Zora", 'prezimeClana'=>"Zoric", 'clanstvoID'=>"2"]);

        $reditelj1 = Reditelj::create(['imeReditelja'=>"Roy", 'prezimeReditelja'=>"Andersson", 'drzavaReditelja'=>"Svedska"]);
        $reditelj2 = Reditelj::create(['imeReditelja'=>"Paul Thomas", 'prezimeReditelja'=>"Anderson", 'drzavaReditelja'=>"SAD"]);
        $reditelj3 = Reditelj::create(['imeReditelja'=>"Ryusuke", 'prezimeReditelja'=>"Hamaguchi", 'drzavaReditelja'=>"Japan"]);
        $reditelj4 = Reditelj::create(['imeReditelja'=>"Fernanda", 'prezimeReditelja'=>"Valadez", 'drzavaReditelja'=>"Meksiko"]);
        $reditelj5 = Reditelj::create(['imeReditelja'=>"Jasmila", 'prezimeReditelja'=>"Zbanic", 'drzavaReditelja'=>"Bosna i Hercegovina"]);
        $reditelj6 = Reditelj::create(['imeReditelja'=>"Sergey", 'prezimeReditelja'=>"Loznitsa", 'drzavaReditelja'=>"Belorusija"]);
        $reditelj7 = Reditelj::create(['imeReditelja'=>"Anders Thomas", 'prezimeReditelja'=>"Jensen", 'drzavaReditelja'=>"Danska"]);
        $reditelj8 = Reditelj::create(['imeReditelja'=>"Michael", 'prezimeReditelja'=>"Sarnoski", 'drzavaReditelja'=>"SAD"]);
        $reditelj9 = Reditelj::create(['imeReditelja'=>"Steven", 'prezimeReditelja'=>"Soderbergh", 'drzavaReditelja'=>"SAD"]);
        $reditelj10 = Reditelj::create(['imeReditelja'=>"Anthony Scott", 'prezimeReditelja'=>"Burns", 'drzavaReditelja'=>"Kanada"]);
        $reditelj11 = Reditelj::create(['imeReditelja'=>"Rose", 'prezimeReditelja'=>"Glass", 'drzavaReditelja'=>"Velika Britanija"]);
        $reditelj12 = Reditelj::create(['imeReditelja'=>"Jim", 'prezimeReditelja'=>"Cummings", 'drzavaReditelja'=>"SAD"]);

        $film1 = Film::create(['nazivFilma'=>"Riders of Justice", 'rediteljID'=>"7", 'zanrID'=>"1"]);
        $film2 = Film::create(['nazivFilma'=>"Come True", 'rediteljID'=>"10", 'zanrID'=>"5"]);
        $film3 = Film::create(['nazivFilma'=>"Identifying Features", 'rediteljID'=>"4", 'zanrID'=>"2"]);
        $film4 = Film::create(['nazivFilma'=>"Saint Maud", 'rediteljID'=>"11", 'zanrID'=>"5"]);
        $film5 = Film::create(['nazivFilma'=>"About Endlessness", 'rediteljID'=>"1", 'zanrID'=>"2"]);
        $film6 = Film::create(['nazivFilma'=>"The Beta Test", 'rediteljID'=>"12", 'zanrID'=>"4"]);
        $film7 = Film::create(['nazivFilma'=>"Licorice Pizza", 'rediteljID'=>"2", 'zanrID'=>"3"]);
        $film8 = Film::create(['nazivFilma'=>"Quo Vadis, Aida?", 'rediteljID'=>"5", 'zanrID'=>"8"]);
        $film9 = Film::create(['nazivFilma'=>"Drive My Car", 'rediteljID'=>"3", 'zanrID'=>"2"]);
        $film10 = Film::create(['nazivFilma'=>"Pig", 'rediteljID'=>"8", 'zanrID'=>"4"]);
        $film11 = Film::create(['nazivFilma'=>"State Funeral", 'rediteljID'=>"6", 'zanrID'=>"8"]);
        $film12 = Film::create(['nazivFilma'=>"No Sudden Move", 'rediteljID'=>"9", 'zanrID'=>"10"]);

        $iznajmljivanje1 = Iznajmljivanje::create(['filmID'=>"2", 'clanID'=>"1"]);
        $iznajmljivanje2 = Iznajmljivanje::create(['filmID'=>"9", 'clanID'=>"1"]);
        $iznajmljivanje3 = Iznajmljivanje::create(['filmID'=>"12", 'clanID'=>"1"]);
        $iznajmljivanje4 = Iznajmljivanje::create(['filmID'=>"4", 'clanID'=>"3"]);
        $iznajmljivanje5 = Iznajmljivanje::create(['filmID'=>"10", 'clanID'=>"3"]);
        $iznajmljivanje6 = Iznajmljivanje::create(['filmID'=>"4", 'clanID'=>"4"]);

    }
}
