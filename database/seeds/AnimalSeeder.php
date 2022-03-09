<?php

use Illuminate\Database\Seeder;
use App\Model\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animals = array(
            (object) [
                'name' => 'Iguana',
                'specie_id' => '2',
                'description' => "Le iguane sono molto simili alle lucertole, ma di dimensioni maggiori. Allo stato adulto possiedono una caratteristica cresta sul dorso, molto più evidente nei maschi che nelle femmine. La testa delle femmine è arrotondata, quella dei maschi triangolare.
                    Iguana iguana ripresa al Butterfly World di Stellenbosch, Provincia del Capo Occidentale, Sudafrica.    
                    In natura possono raggiungere anche la lunghezza di 2,5 m mentre in cattività a causa della diversa alimentazione e del diverso ambiente crescono fino a 1m. Esemplari di queste dimensioni sono ormai rari a causa della distruzione dell'habitat, distruzione che in molte zone provoca sovrappopolazione e conseguente riduzione delle dimensioni. Altre cause sono l'industria degli animali da compagnia e il fatto che molte persone in centro e in Sudamerica considerino questi animali una leccornia. Non è cacciata per necessità, ma come specialità gastronomica.
                    Alcune iguane vivono tutta la vita sopra dei grandi alberi e scendono al suolo solo per deporre le uova, accoppiarsi o per spostarsi in un'altra zona. Altre vivono in muri di case, abitate o meno anche nel centro di città, rovine archeologiche, oppure sottoterra specialmente in zone vicine al mare dove scavano profonde tane. Di mattina al nascere del sole si svegliano e vanno a cercare il punto più diretto al sole, dove rimangono per qualche ora.
                    Essendo rettili non possono regolare la loro temperatura e quindi devono mettersi all'ombra nelle ore più calde della giornata. La loro dieta è erbivora, anche se nello stomaco di questi sauri sono stati talvolta ritrovate tracce di insetti; l'interpretazione più comune è che fossero stati ingoiati per caso. Studi più recenti fanno pensare che la percentuale di carne ingerita dipenda dalle condizioni ambientali. Passano la notte in un rifugio-tana per nascondersi ai predatori. Animale estremamente resistente, resiste senza danni a cadute da 10/15 metri e se minacciato da un predatore è un eccellente nuotatore per cui a volte lo si può incontrare attraversando i canali delle lagune costiere.
                    Ha eccellente udito e buona vista, distingue sicuramente alcuni colori ed è particolarmente ghiotto di fiori di ibisco rosso e foglioline tenere di basilico. I maschi a volte ingaggiano combattimenti per dispute territoriali e hanno un harem di femmine il cui numero varia secondo la ricchezza di cibo e di rifugi disponibili nel territorio stesso. "
            ],
            (object) [
                'name' => 'Panda',
                'specie_id' => '1',
                'description' => "Il nome scientifico è Ailuropoda melanoleuca, dal greco antico che significa letteralmente piede di gatto - nero bianco. Il termine panda deriva molto probabilmente dal Nepali <ponya.
                    Nonostante il fatto che secondo la tassonomia si tratti di un carnivoro, la sua dieta è essenzialmente quella di un erbivoro. In effetti si nutre quasi esclusivamente di bambù (fino a 40 kg al giorno). Tecnicamente, come molti altri animali, è onnivoro (è noto che il panda accompagna con uova, insetti ed occasionalmente carogne, i suoi pasti a base di bambù). Il panda però non mangia molta carne perché circa 4,2 milioni di anni fa il gene T1R1 è mutato, facendogli perdere la capacità di percepire il sapore Umami, che dà il sapore alla carne per gli onnivori e i carnivori[2]. Le sue orecchie si muovono durante la masticazione.
                    Esso è imparentato alla lontana con il panda rosso (o panda minore), ma la somiglianza tra i due nomi sembra più che altro provenire dalla comune alimentazione basata sul bambù, dalle tipiche macchie nere intorno agli occhi e dal cosiddetto \"falso pollice\". Prima che tale parentela con il panda minore venisse scoperta nel 1901, il panda gigante era conosciuto dagli anglofoni come Parti-coloured bear (letteralmente, \"orso bicolore\").
                    Per molti decenni la precisa classificazione tassonomica del panda è stata oggetto di discussione, in quanto sia i panda giganti sia i panda rossi presentano al contempo caratteristiche appartenenti agli orsi e ai procioni. Comunque, esami genetici hanno rivelato che i panda giganti sono veri e propri orsi, appartenenti a pieno titolo alla famiglia degli Ursidi. La specie di orsi ad essi più vicina è quella dell'orso dagli occhiali del Sud America. Resta in discussione se i panda rossi vadano collocati o meno tra gli Ursidi oppure nella famiglia dei Procyonidae. Le origini del panda gigante vanno ricercate in alcune forme del Miocene medio - superiore (circa 12 - 10 milioni di anni fa). Gli europei Agriarctos e Kretzoiarctos sembrano appartenere allo stesso ramo evolutivo di Ailuropoda, così come Ailurarctos, vissuto in Cina. Fossili di panda giganti veri e propri (genere Ailuropoda) risalgono al Pliocene superiore della Cina (poco meno di tre milioni di anni fa). Ailuropoda microta, questo il nome della specie fossile, possedeva già le specializzazioni della forma attuale, ma era più piccolo. Un'altra specie fossile, Ailuropoda bacconi, più grande dell'odierno panda gigante, è conosciuta in terreni del Pleistocene cinese.     
                    Il panda gigante è dotato di un insolito palmo, fornito di un cosiddetto \"falso pollice\" e cinque dita; il \"falso pollice\" è in effetti il frutto di una modificazione intervenuta all'osso del polso. Il \"falso pollice\" consente al panda di afferrare le canne di bambù, che porta quindi alla bocca e sbuccia con i denti per poi divorarne la polpa. Sembrerebbe, quindi, che il panda abbia sei dita, ma dal punto di vista anatomico quel \"pollice\" non rappresenta un dito. Infatti è solamente lo sviluppo dell'osso sesamoide radiale, che rappresenta un'esigua parte del polso degli altri animali. Stephen Jay Gould vi ha scritto un saggio, ed ha utilizzato successivamente il titolo Il pollice del panda per una collezione di saggi pubblicati in volume.
                    Il panda è lungo circa 1,50 m ed ha un peso che può variare dagli 80 ai 200 kg. Può vivere di solito fino a 35/40 anni.
                    I panda giganti vivono solitari per tutto l'anno, tranne per il periodo degli amori. A differenza di molti altri orsi, non vanno in letargo ma rimangono sempre attivi. "
            ],
            (object) [
                'name' => 'Aquila reale',
                'specie_id' => '5',
                'description' => "L'aquila reale è lunga dai 66 ai 100 cm, compresa la coda, il suo peso varia dai 3 ai 7 kg e l'apertura alare misura dai 180 ai 230 cm.
                    Il colore - anche del becco - varia a seconda dell'età e l'abito adulto viene completato tra i 5 e i 6 anni di vita. I giovani hanno parti bianche nel piumaggio, gli anziani tendono al fulvo.
                    La zampa ha le caratteristiche tipiche dei rapaci, con dita brevi e grandi artigli in grado di ferire le prede.
                    Il becco forte e gli artigli adunchi le consentono di uccidere animali di dimensioni anche nettamente superiori alle sue. "
            ],
            (object) [
                'name' => 'Salmone',
                'specie_id' => '4',
                'description' => "È simile alla trota di mare da cui si riconosce però a prima vista per la bocca che raggiunge il bordo posteriore dell'occhio senza superarlo, per il peduncolo caudale più sottile, per la pinna caudale con una piccola incisione centrale e lobi appuntiti (profondamente forcuta nei piccoli esemplari) e per la testa in proporzione più piccola rispetto al corpo. I vecchi maschi presentano le mascelle incurvate in modo caratteristico. Il corpo è fusiforme e slanciato, la testa è piccola rispetto alle dimensioni del corpo, con occhio grande nei piccoli esemplari che si fa sempre più piccolo man mano che la taglia aumenta. Le pinne dorsali sono due, la prima relativamente grande e la seconda molto piccola, adiposa, con margine grigio o trasparente (spesso rossa o arancio nella trota). L'anale è più piccola della prima dorsale, la pinna caudale è ampia. Le pinne ventrali sono poste molto indietro, più o meno all'altezza della prima dorsale e sono piccole, così come le pettorali.
                    La livrea in mare è argentea con dorso bluastro o grigio e ventre bianco come nella trota di mare, ma i punti neri sui fianchi sono in numero minore, rotondeggianti o a forma di X, a distribuzione irregolare e raramente situati sulla linea laterale (nella trota sono più numerosi e frequenti sulla linea laterale). Sulla pinna caudale di solito non sono presenti punti scuri (differenza con la trota iridea, introdotta in Europa, che talvolta ridiscende a mare). Quando inizia la risalita la colorazione diventa più vivace e meno argentea, a fondo bruno o verde giallastro, nei maschi spesso con punti arancioni o macchie nere. I giovani ancora in acqua dolce hanno una livrea abbastanza simile a quella della trota di fiume, con dorso bruno o bluastro con macchie arancio sui fianchi e da 8 a 15 macchie scure, spesso violacee o bluastre, ovali abbastanza indistinte sui fianchi (macchie parr, presenti anche nelle giovani trote).
                    Raggiunge 1,5 metri di lunghezza e un peso di oltre 45 chilogrammi. "
            ],
            (object) [
                'name' => 'Rospo comune',
                'specie_id' => '3',
                'description' => "È l'anfibio più grande d'Europa, e raggiunge addirittura i 20 cm (zampe escluse). È caratterizzato dalle sue zampe corte e dal muso schiacciato, ma anche dalla sua tipica colorazione marroncina, che può tendere al rossiccio, anche se il ventre tende ad essere biancastro. Il suo colore varia a seconda delle stagioni e dell'età, dal sesso e dall'ambiente in cui si trova, passando dal marrone al rosso e al nero a seconda della situazione. Gli animali della zona meridionale dell'areale tendono ad essere più grandi e con pelle più \"spinosa\" cioè con verruche più prominenti.
                    Nel suo collo vi sono due ghiandole parotoidi ovali. Queste ghiandole contengono un liquido biancastro irritante per le mucose che può essere secreto in caso di pericolo ed è in grado di ustionare e ferire anche l'uomo.
                    Le pupille del rospo comune sono orizzontali; l'occhio è di color oro scuro o rame. "
            ],
            (object) [
                'name' => 'Giaguaro',
                'specie_id' => '1',
                'description' => "Benché il giaguaro fosse stato descritto per la prima volta nel 1560 dall'esploratore Coronado, che s'imbatté in questa specie in quella zona ora chiamata Nuovo Messico, nei secoli successivi si è controllato il peso di pochissimi giaguari.
                    Il giaguaro è il più grande felide del Nuovo Mondo e il più grande mammifero carnivoro del Centro America e Sud America. Dimensioni e peso variano considerevolmente. Il peso è normalmente compreso tra i 60 e i 100 kg. Il maschio più grande arrivava a 158 kg (ma da notare che questo animale è stato pesato con lo stomaco pieno). La femmina più piccola pesava 36 kg. Le femmine sono in genere 10-20 per cento più piccole dei maschi La lunghezza, dal naso alla base della coda, varia da 1,12 a 1,85 m. La coda dei giaguari è più corta di qualsiasi altro grande felino ed è di 45-75 cm di lunghezza. Le loro zampe sono più brevi rispetto a una piccola tigre o a un leone di peso simile, ma sono robuste e potenti. Il giaguaro è alto da 63 a 76 cm al garrese.
                    Le due sottospecie di giaguaro diffuse nel continente americano durante il Pleistocene, ovvero la settentrionale P. o. augusta e la meridionale P. o. mesembrina, non mostravano significative differenze con la specie attuale; il peso stimato di questi animali era compreso tra i due estremi di 35 e 130 kg circa.
                    Le dimensioni del giaguaro sono maggiori rispetto a quelle del leopardo. Inoltre differisce nella forma dal suo cugino del Vecchio Mondo, il leopardo è un animale snello e leggero; invece il giaguaro, avendo la testa piuttosto grossa, il corpo compatto e la coda corta in proporzione al resto del corpo, ha un aspetto robusto e muscoloso . Queste caratteristiche, unite al passo più lento, sono di per sé già sufficienti per distinguerlo con facilità dagli altri felini maculati negli zoo.
                    Tuttavia il metodo più sicuro per distinguere queste due specie è quello di esaminare da vicino il disegno del mantello: entrambi presentano macchie scure riunite in rosette di varia grandezza in diverse zone del corpo, ma mentre nel giaguaro queste rosette sono più ampie, con l'interno di colore rossastro e con una macchiolina tonda al centro, quelle del leopardo sono molto più piccole e fitte, e sono prive del color rosso o delle macchie al loro interno. Naturalmente, questa confusione tra giaguaro e leopardo può sorgere solo in situazioni \"lontane\" dall'ambiente naturale (zoo), musei, mass-media ecc.) poiché i leopardi abitano in Africa e in Asia, mentre i giaguari vivono solo in America. Il giaguaro e il leopardo sono specie strettamente imparentate; essi discendono da un comune antenato che attraversò l'istmo preistorico esistente tra la Siberia e l'Alaska. Dal momento in cui la via di comunicazione tra i due continenti restò interrotta, le due popolazioni si differenziarono sempre più, finché si consolidarono nelle due specie attuali, che sono molto diverse.
                    Giaguaro e leopardo sono a loro volta strettamente imparentati con tigre e leone e questi animali discendono tutti dallo stesso antenato comune; in realtà la ricostruzione dell'albero filogenetico dei quattro grandi felini del genere Panthera non è ancora definitiva. Alcuni studiosi sospettano che il leopardo rappresenti in realtà la forma più antica e primitiva del gruppo, seguita al secondo posto dal leone, mentre tigre e giaguaro invece rappresenterebbero le specie più recenti del gruppo."
            ],
          );

        for ($i = 0; $i < count($animals); $i++) {
            $newAnimal = new Animal();
            $newAnimal->name = $animals[$i]->name;
            $newAnimal->specie_id = $animals[$i]->specie_id;
            $newAnimal->description = $animals[$i]->description;
            $newAnimal->save();
        }
    }
}
