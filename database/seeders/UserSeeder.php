<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*  User::firstOrCreate(
         ['email' => 'aecio@pesqueira.ifpe.edu.br'],
         [
         'name' => 'AECIO PAULO PEREIRA DE MIRANDA (2022056)',
         'password' => Hash::make('password'),
         'email_verified_at' => now(),
         'remember_token' => Str::random(10),
         ]
         ); */
        User::create(['name' => 'ADRIANA MARIA PEREIRA DE MIRANDA (1101868)', 'password' => Hash::make('password'), 'email' => '1101868@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'AECIO PAULO PEREIRA DE MIRANDA (2022056)', 'password' => Hash::make('password'), 'email' => 'aecio@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'AIRLAN ARNALDO NASCIMENTO DE LIMA (1582413)', 'password' => Hash::make('password'), 'email' => '1582413@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ALBERLANY CRISTINA RIBEIRO NUNES (1868411)', 'password' => Hash::make('password'), 'email' => '1868411@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ALEXANDRE MANOEL DE FARIAS (2181805)', 'password' => Hash::make('password'), 'email' => '2181805@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANA CARLA SILVA ALEXANDRE (2982780)', 'password' => Hash::make('password'), 'email' => '2982780@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANA LUIZA PAULA DE AGUIAR LELIS (1626701)', 'password' => Hash::make('password'), 'email' => '1626701@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANA KARINE LARANJEIRA DE SA (2105002)', 'password' => Hash::make('password'), 'email' => '2105002@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANDERSON LUCIAN DA SILVA (4095235)', 'password' => Hash::make('password'), 'email' => '4095235@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANDREA TENORIO BEZERRA DE MELO (3270407)', 'password' => Hash::make('password'), 'email' => '3270407@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANDREY RIBEIRO DE OLIVEIRA (2255844)', 'password' => Hash::make('password'), 'email' => 'andrey.ribeiro@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANDREZA MARIA DE LIMA (1068274)', 'password' => Hash::make('password'), 'email' => '1068274@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANICELIA FERREIRA DA SILVA (2460417)', 'password' => Hash::make('password'), 'email' => 'anicelia@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ANTONIO CABRAL DOS SANTOS (2964281)', 'password' => Hash::make('password'), 'email' => '2964281@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ARAMIS DE QUEIROZ SILVA (3161748)', 'password' => Hash::make('password'), 'email' => 'aramis.queiroz@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'AUDALIO JOSE DE FREITAS (1216074)', 'password' => Hash::make('password'), 'email' => '1216074@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'BARBHARA ELYZABETH SOUZA NASCIMENTO (1888300)', 'password' => Hash::make('password'), 'email' => '1888300@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'BEMIELISON GLETSON DA SILVA BEZERRA (1645741)', 'password' => Hash::make('password'), 'email' => '1645741@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'BRUNO ALBUQUERQUE DIAS (1326008)', 'password' => Hash::make('password'), 'email' => '1326008@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'BRUNO GOMES MOURA DE OLIVEIRA (1863615)', 'password' => Hash::make('password'), 'email' => '1863615@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'BRUNO LOPES OLIVEIRA DA SILVA (1934852)', 'password' => Hash::make('password'), 'email' => '1934852@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CARLA ANDREA MENDONCA SILVA (1733815)', 'password' => Hash::make('password'), 'email' => 'carla@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CARLOS ROBERTO ALVES GABRIEL (1022072)', 'password' => Hash::make('password'), 'email' => '1022072@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CARLOS EDUARDO DE OLIVEIRA (2324406)', 'password' => Hash::make('password'), 'email' => '2324406@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CARLOS EDUARDO CORREIA DA SILVA (2162303)', 'password' => Hash::make('password'), 'email' => '2162303@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CARLOS HENRIQUE TABOSA PEREIRA DA SILVA (1861139)', 'password' => Hash::make('password'), 'email' => 'henriquetabosa@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CARLOS BINO DE SOUZA (1961071)', 'password' => Hash::make('password'), 'email' => '1961071@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CELIA MARIA RIBEIRO DE VASCONCELOS (1217763)', 'password' => Hash::make('password'), 'email' => '1217763@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CICERO JAILTON DE MORAIS SOUZA (1160058)', 'password' => Hash::make('password'), 'email' => '1160058@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CINTIA DE KASSIA PEREIRA MELO (2248393)', 'password' => Hash::make('password'), 'email' => '2248393@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CLAUDIA FABIANE GOMES GONCALVES (1521979)', 'password' => Hash::make('password'), 'email' => '1521979@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CLAUDIA SORELLE CAVALCANTI DE SANTANA (3308564)', 'password' => Hash::make('password'), 'email' => '3308564@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'CYNTHIA ROBERTA DIAS TORRES SILVA (2099837)', 'password' => Hash::make('password'), 'email' => '2099837@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'DANIEL EVERSON DA SILVA ANDRADE (1740402)', 'password' => Hash::make('password'), 'email' => '1740402@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'DANIELA BEZERRA DE MELO (3065256)', 'password' => Hash::make('password'), 'email' => '3065256@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'DANIELE CLAUDINO MACIEL (1902754)', 'password' => Hash::make('password'), 'email' => '1902754@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'DECIO STEVE DE LIMA (1029077)', 'password' => Hash::make('password'), 'email' => '1029077@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EDGREYCE BEZERRA DOS SANTOS (1229415)', 'password' => Hash::make('password'), 'email' => '1229415@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EDILSON BARBOSA DE SIQUEIRA (1021913)', 'password' => Hash::make('password'), 'email' => '1021913@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EDILSON JOSE GOMES TORRES (1134258)', 'password' => Hash::make('password'), 'email' => 'edilson.torres@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EDMILSON REGIS DOS SANTOS (1022172)', 'password' => Hash::make('password'), 'email' => '1022172@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EDSON RICARDO CALADO SABINO (1959205)', 'password' => Hash::make('password'), 'email' => '1959205@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ELAINE MARIA DE OLIVEIRA BARBOSA (1423961)', 'password' => Hash::make('password'), 'email' => '1423961@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ELANIA DE SOUZA MELO CAVALCANTI (1650623)', 'password' => Hash::make('password'), 'email' => '1650623@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EMERSSON RODRIGUES DE SOUZA (3087858)', 'password' => Hash::make('password'), 'email' => '3087858@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EMILLY VASCONCELOS DE FARIAS (3196549)', 'password' => Hash::make('password'), 'email' => '3196549@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EPAMINONDAS BARROS DE ARAUJO NETO (1228943)', 'password' => Hash::make('password'), 'email' => '1228943@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ERALDO JOSE LINS (1132235)', 'password' => Hash::make('password'), 'email' => '1132235@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ERIKA CARLA ALVES CANUTO DA COSTA (1232900)', 'password' => Hash::make('password'), 'email' => '1232900@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EURLLES CANUTO DE ALCANTARA (2090036)', 'password' => Hash::make('password'), 'email' => '2090036@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'EVANDRO BEZERRA FERREIRA (1022119)', 'password' => Hash::make('password'), 'email' => 'evandro@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FABIANA JULIA DE ARAUJO TENORIO (2459684)', 'password' => Hash::make('password'), 'email' => '2459684@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FABIO XAVIER LOBO (1248847)', 'password' => Hash::make('password'), 'email' => '1248847@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FABIOLA SILVA ALVES BISPO (3298798)', 'password' => Hash::make('password'), 'email' => '3298798@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FERNANDES SOARES DA SILVA (1257662)', 'password' => Hash::make('password'), 'email' => '1257662@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FERNANDO EMILIO LEITE DE ALMEIDA (2683262)', 'password' => Hash::make('password'), 'email' => 'fernando@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FERNANDO EDIER FRANCA FREITAS (2789484)', 'password' => Hash::make('password'), 'email' => '2789484@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FRANCISCA JOSSEANY DA SILVA CAMPOS GOMES (1093553)', 'password' => Hash::make('password'), 'email' => '1093553@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FRANCISCO SIQUEIRA GALINDO VIANA (1022772)', 'password' => Hash::make('password'), 'email' => '1022772@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'FREDERICO JOSE DE LIMA IZIDRO GOMES (1118028)', 'password' => Hash::make('password'), 'email' => '1118028@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'GERALDO FERREIRA DE SIQUEIRA JUNIOR (1022046)', 'password' => Hash::make('password'), 'email' => '1022046@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'GILMARIO DOS ANJOS LIMA (2477469)', 'password' => Hash::make('password'), 'email' => '2477469@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'GRACIELA SANDRA RAPOSO MANDU LOPES (1667626)', 'password' => Hash::make('password'), 'email' => '1667626@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HALLYSON WEBER DE ALMEIDA FREITAS (1746168)', 'password' => Hash::make('password'), 'email' => '1746168@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HELBER ELIAS PAZ DE SOUZA (1667857)', 'password' => Hash::make('password'), 'email' => '1667857@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HELMO OURIQUES DA SILVA (1882436)', 'password' => Hash::make('password'), 'email' => 'helmo.ouriques@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HELOISA MARIA ARAUJO DA COSTA (2404964)', 'password' => Hash::make('password'), 'email' => '2404964@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HENRIQUE CANDIDO DE FRANCA BARROS (1679198)', 'password' => Hash::make('password'), 'email' => '1679198@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HERICK TALLES QUEIROZ LEMOS (1046819)', 'password' => Hash::make('password'), 'email' => '1046819@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'HUMBERTO ROCHIMIN FERNANDES (2631103)', 'password' => Hash::make('password'), 'email' => '2631103@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'IBSON JOSE MACIEL LEITE (1959826)', 'password' => Hash::make('password'), 'email' => '1959826@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ISABELA ROCHA SIEBRA (3308499)', 'password' => Hash::make('password'), 'email' => '3308499@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ISNARD FERREIRA DA SILVA (1204757)', 'password' => Hash::make('password'), 'email' => '1204757@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'IVANISE BRITO DA SILVA (1209882)', 'password' => Hash::make('password'), 'email' => '1209882@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JAILSON DE ARRUDA ALMEIDA (4733987)', 'password' => Hash::make('password'), 'email' => '4733987@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JAQUELINE MATIAS DA SILVA (1397823)', 'password' => Hash::make('password'), 'email' => '1397823@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JARBAS DE SOUZA FERREIRA (1725695)', 'password' => Hash::make('password'), 'email' => '1725695@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOACI GALINDO (1028514)', 'password' => Hash::make('password'), 'email' => '1028514@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOAO EVANGELISTA PEREIRA MATOS (1096451)', 'password' => Hash::make('password'), 'email' => '1096451@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOBSON TENORIO DO NASCIMENTO (1804315)', 'password' => Hash::make('password'), 'email' => '1804315@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSE MARIA DE ARAUJO (1229245)', 'password' => Hash::make('password'), 'email' => '1229245@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSE DIOGO CAVALCANTI FERREIRA (1746975)', 'password' => Hash::make('password'), 'email' => '1746975@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSE ROBERTO TAVARES DE LIMA (1668097)', 'password' => Hash::make('password'), 'email' => '1668097@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSE REGINALDO GOMES DE SANTANA (1508656)', 'password' => Hash::make('password'), 'email' => '1508656@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSE DENIS GOMES LIMA DA SILVA (1971579)', 'password' => Hash::make('password'), 'email' => '1971579@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSE DIJAIR ANTONINO DE SOUZA (1021902)', 'password' => Hash::make('password'), 'email' => '1021902@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSEMAR CLAUDINO BARBOSA (1206895)', 'password' => Hash::make('password'), 'email' => '1206895@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSINALDO MONTEIRO TAVARES (1208117)', 'password' => Hash::make('password'), 'email' => '1208117@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOSINEIDE BRAZ DE MIRANDA LIRA (1100719)', 'password' => Hash::make('password'), 'email' => '1100719@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JOZELAINE MARIA CAVALCANTE (1880091)', 'password' => Hash::make('password'), 'email' => '1880091@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'JURANDI NEVES ARAUJO JUNIOR (3272214)', 'password' => Hash::make('password'), 'email' => '3272214@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'KALINA CURIE TENORIO FERNANDES DO REGO BARROS (1803009)', 'password' => Hash::make('password'), 'email' => '1803009@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'KARLA JANAINA ALEXANDRE DA SILVA (3561433)', 'password' => Hash::make('password'), 'email' => '3561433@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'KARLA KRISTINE DAMES DA SILVA (1046978)', 'password' => Hash::make('password'), 'email' => '1046978@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'KELDERLANGE BEZERRA ALVES (2746719)', 'password' => Hash::make('password'), 'email' => '2746719@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'KLEBER FERNANDO RODRIGUES (1080107)', 'password' => Hash::make('password'), 'email' => '1080107@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LAYANE GABRIELY ALVES DA SILVA (1922445)', 'password' => Hash::make('password'), 'email' => '1922445@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LEILA JACKELINE GALVAO CARVALHO (1021933)', 'password' => Hash::make('password'), 'email' => '1021933@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LEONARDO MOURA DE AMORIM (1803483)', 'password' => Hash::make('password'), 'email' => '1803483@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LIBINA OLIVEIRA DOS SANTOS SILVA (3145306)', 'password' => Hash::make('password'), 'email' => '3145306@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LINDEBERG ROCHA FREITAS (1062778)', 'password' => Hash::make('password'), 'email' => '1062778@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LUANNA DOS SANTOS ROCHA (1006181)', 'password' => Hash::make('password'), 'email' => '1006181@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LUCAS OLLYVER GONCALVES BARBOSA (1880048)', 'password' => Hash::make('password'), 'email' => 'lucasollyver@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LUCICLAUDIO DA SILVA BARBOSA (1861119)', 'password' => Hash::make('password'), 'email' => '1861119@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'LUCICLEIA PEREIRA TENORIO COSTA (1907605)', 'password' => Hash::make('password'), 'email' => '1907605@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MACIARA GOMES LEITE DA SILVA (1021979)', 'password' => Hash::make('password'), 'email' => '1021979@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MAGDA CRISTINA PEDROZA TAVARES (1746983)', 'password' => Hash::make('password'), 'email' => '1746983@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MANOEL HENRIQUE DE OLIVEIRA PEDROSA FILHO (1539768)', 'password' => Hash::make('password'), 'email' => '1539768@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MANUELA QUEIROZ OLIVEIRA (2891298)', 'password' => Hash::make('password'), 'email' => '2891298@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARCELO WALTER MOREIRA JUNIOR (1746989)', 'password' => Hash::make('password'), 'email' => '1746989@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARCELO PEREIRA DE LIMA (1337644)', 'password' => Hash::make('password'), 'email' => '1337644@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARCIA ALVES VASCO (1100491)', 'password' => Hash::make('password'), 'email' => '1100491@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARCIO FLAVIO TENORIO COSTA (1865832)', 'password' => Hash::make('password'), 'email' => '1865832@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARCIO LIMA BARROS DA SILVA (2415833)', 'password' => Hash::make('password'), 'email' => 'marcio.lima@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARCONNI FREITAS BARROSO RIBEIRO GONCALVES (1061836)', 'password' => Hash::make('password'), 'email' => 'marconni.goncalves@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARIA DO SOCORRO FARIAS (1047744)', 'password' => Hash::make('password'), 'email' => '1047744@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARIA ZIVANEIDE DE CARVALHO MORAES LEFOSSE (1028403)', 'password' => Hash::make('password'), 'email' => '1028403@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARIA APARECIDA CARVALHO LEITE (1134236)', 'password' => Hash::make('password'), 'email' => '1134236@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARIA DO SOCORRO TORRES GALINDO DOS SANTOS (1243784)', 'password' => Hash::make('password'), 'email' => '1243784@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARIA RITA VALOES DA SILVA (2221695)', 'password' => Hash::make('password'), 'email' => '2221695@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MARLON ANDERSON DE OLIVEIRA (3297319)', 'password' => Hash::make('password'), 'email' => 'marlon.oliveira@barreiros.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MAVIAEL RAMALHO CALADO (1022776)', 'password' => Hash::make('password'), 'email' => '1022776@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'MONIQUE MARIA BATISTA DE OLIVEIRA (2322077)', 'password' => Hash::make('password'), 'email' => '2322077@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'NATHALIA ROBERTA DE MENEZES BARBOSA SERAFIM (2419469)', 'password' => Hash::make('password'), 'email' => '2419469@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'NATHAN LUAN DUTRA SARMENTO (3272233)', 'password' => Hash::make('password'), 'email' => '3272233@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'NELSON MIGUEL GALINDO NETO (1034899)', 'password' => Hash::make('password'), 'email' => '1034899@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'OTAVIO WESLEY CAVALCANTI FAUSTINO (1248863)', 'password' => Hash::make('password'), 'email' => 'otavio.faustino@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'OTAVIO WASHINGTON LIMA SILVA (2279405)', 'password' => Hash::make('password'), 'email' => '2279405@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'OZAIAS RODRIGUES CAVALCANTE (275669)', 'password' => Hash::make('password'), 'email' => '275669@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'PAULA FEITOSA DE ARAUJO MOURA (3312548)', 'password' => Hash::make('password'), 'email' => '3312548@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'PEDRO HENRIQUE AVELINO DE ANDRADE (1855045)', 'password' => Hash::make('password'), 'email' => '1855045@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'PRISCYLLA CARLA FERREIRA BEZERRA (2102876)', 'password' => Hash::make('password'), 'email' => '2102876@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RAFAEL RONEY CAMARA DE MELO (1959798)', 'password' => Hash::make('password'), 'email' => '1959798@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RAIMUNDO VALMIR DE OLIVEIRA (1222255)', 'password' => Hash::make('password'), 'email' => '1222255@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RAPHAEL PEREIRA DE AQUINO (3128991)', 'password' => Hash::make('password'), 'email' => '3128991@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'REGINA MARIA DE LIMA NETA (1409373)', 'password' => Hash::make('password'), 'email' => '1409373@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RHAFAEL ROGER PEREIRA (1812582)', 'password' => Hash::make('password'), 'email' => '1812582@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RICARDO ANTONIO ROCHA BRANDAO (1677290)', 'password' => Hash::make('password'), 'email' => 'ricardo.brandao@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ROBERTA PATRICIA AGUIAR LIMA DE SIQUEIRA (1134409)', 'password' => Hash::make('password'), 'email' => '1134409@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ROBERTO MAURO GUIMARAES CAVALCANTI (1217777)', 'password' => Hash::make('password'), 'email' => '1217777@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ROBERTO FRAGA MACIEL (1134260)', 'password' => Hash::make('password'), 'email' => '1134260@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ROBERVAM DE MOURA PEDROZA (1804300)', 'password' => Hash::make('password'), 'email' => '1804300@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RODOLFO DE LUNA OLIVEIRA (1358225)', 'password' => Hash::make('password'), 'email' => '1358225@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RONALDO ALVES DE OLIVEIRA FILHO (2961669)', 'password' => Hash::make('password'), 'email' => '2961669@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RONALDO PACHECO DOS SANTOS (1022179)', 'password' => Hash::make('password'), 'email' => '1022179@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RONALDO ALMEIDA DA SILVA (1022087)', 'password' => Hash::make('password'), 'email' => '1022087@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'ROSSANA MANUELA DO MONTE (3009024)', 'password' => Hash::make('password'), 'email' => '3009024@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'RUAN LANDOLFO DA SILVA FERREIRA (3087909)', 'password' => Hash::make('password'), 'email' => '3087909@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'SAMARA SANTIAGO SARMENTO DE OLIVEIRA (1894277)', 'password' => Hash::make('password'), 'email' => '1894277@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'SAMUEL MUNIZ DE SIQUEIRA (2133378)', 'password' => Hash::make('password'), 'email' => '2133378@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'SHERLANNE KILSE ALVES CORDEIRO (1804327)', 'password' => Hash::make('password'), 'email' => '1804327@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'SILVANA CAVALCANTI DOS SANTOS (2715395)', 'password' => Hash::make('password'), 'email' => '2715395@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'SILVANEY GOMES DE SOUZA MANDU (1021841)', 'password' => Hash::make('password'), 'email' => '1021841@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'SILVIO ROMERO DINIZ (1021883)', 'password' => Hash::make('password'), 'email' => '1021883@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'TARCIZA TIBURCIO DE MELO LEITE (1523308)', 'password' => Hash::make('password'), 'email' => '1523308@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'THAYSA MARIA BRAIDE DE MORAES CAVALCANTE (1406846)', 'password' => Hash::make('password'), 'email' => '1406846@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'THIAGO VINICIUS SOUSA SOUTO (2090047)', 'password' => Hash::make('password'), 'email' => 'thiago.souto@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'TULIO ALBUQUERQUE DIAS (1169873)', 'password' => Hash::make('password'), 'email' => '1169873@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'VALDEMIR MARIANO (1181955)', 'password' => Hash::make('password'), 'email' => '1181955@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'VALDIRENE PEREIRA DA SILVA CARVALHO (2477872)', 'password' => Hash::make('password'), 'email' => '2477872@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'VALTER LEAL GUIMARAES (1163548)', 'password' => Hash::make('password'), 'email' => 'valter@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'VIRLLANE ALINNE DE ALMEIDA SOUZA (1842523)', 'password' => Hash::make('password'), 'email' => '1842523@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'WAGNER LEAL GUIMARAES (1054836)', 'password' => Hash::make('password'), 'email' => '1054836@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'WDERCLEISON VENTURA DE FARIAS (1833228)', 'password' => Hash::make('password'), 'email' => '1833228@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'WELLYSON FERNANDO NUNES SOUZA (1898805)', 'password' => Hash::make('password'), 'email' => 'fernando.souza@pesqueira.ifpe.edu.br', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'WENDELL SOARES CARNEIRO (1055746)', 'password' => Hash::make('password'), 'email' => '1055746@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);
        User::create(['name' => 'YGO NETO BATISTA (1667870)', 'password' => Hash::make('password'), 'email' => '1667870@pesqueira.ifpe', 'email_verified_at' => now(), 'remember_token' => Str::random(10), ]);

    }
}
