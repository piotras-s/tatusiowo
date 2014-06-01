<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatusiowo\DemoBundle\Entity\Activity;
use Tatusiowo\DemoBundle\Entity\Image;

class LoadActivityData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $activitiesData = [
            ["title" => "Domino", "timeFrom" => 10, "timeTo" => 60, "ageFrom" => 4, "ageTo" => 7, "outdoor" => false, "indoor" => true, "fun" => 2, "creativity" => 4, "effort" => 3, "description" => "Ta zabawa pomaga w rozwijaniu umiejętności rozpoznawania kolorów oraz uczy współpracy. <br> Potrzebne materiały: Koła z różnych kolorów brystolu o średnicy około 10cm, Taśma klejąca <br> Jak się bawić: 1. wytnij koła tak aby każde dziecko miało po dwa. 2. Przyczep jedno koło do głowy dziecka, a drugie do jego stóp. 3. Podziel dzieci na dwie grupy i ustaw je na dwóch przeciwległych końcach sali. 4. Wybierz jedno dziecko i poproś aby położyło się na środku sali. 5. Dziecko z drugiej grupy które ma na sobie pasujący kolor, kładzie się na podłodze obok głową w głową. 6. Kontynuuj zabawę aż wszyscy się dopasują.", "approved" => true],
            ["title" => "Koleżanka łyżka", "timeFrom" => 15, "timeTo" => 145, "ageFrom" => 4, "ageTo" => 11, "outdoor" => true, "indoor" => true, "fun" => 5, "creativity" => 5, "effort" => 3, "description" => "Dzieci uczą się używać łyżek oraz dopasowywać je do siebie. <br> Potrzebne materiały: <br> Łyżka dla każdego dziecka oraz koszyk lub pudełko.  <br> Jak się bawić: <br> 1. Umieść wszystkie łyżki w koszyku lub w pudełku. <br> 2. Pokaż dzieciom każdy rodzaj łyżki i wyjaśnij jego zastosowanie. <br> 3. Zmieszaj pary łyżek w koszyku. <br> 4. Przejdz się pośród dzieci i poproś każde dziecko aby wzięło jedną łyżke i ją ukryło <br> 5. Kiedy każde z dzieci weźmie łyżkę \"powiedz raz dwa trzy, szukaj pary\" <br> 6. Dzieci oglądają swoje łyżki i pokazują je sobie nawzajem szukając pary. <br> 7. Kiedy dzieci znajdą swoje pary siadają naprzeciw siebie.", "approved" => true],
            ["title" => "Berek sierota", "timeFrom" => 5, "timeTo" => 25, "ageFrom" => 2, "ageTo" => 14, "outdoor" => true, "indoor" => false, "fun" => 3, "creativity" => 3, "effort" => 2, "description" => "W grze uczestniczy nieparzysta liczba zawodników. Wybieramy berka i pozostałą grupę dzielimy na dwie równe części. Jedna dostaje chustki lub wstążki.<br>Potrzebne materiały: <br>brak<br>Jak się bawić:<br>Berek rozpoczyna pościg za uciekającymi. Ten, kto jest bezpośrednio zagrożony złapaniem, stara się szybko znaleźć sobie parę (w parze jeden ma chustkę, a drugi nie). Jeśli nie zdąży, berek może go schwytać. Dobieranie się w pary może nastąpić dopiero w momencie bezpośredniego zagrożenia schwytaniem, nie wcześniej. Zawodnicy nie przestrzegający tej reguły są chwilowo eliminowani.", "approved" => true],
            ["title" => "Łańcuch skojarzeń", "timeFrom" => 10, "timeTo" => 30, "ageFrom" => 3, "ageTo" => 11, "outdoor" => false, "indoor" => true, "fun" => 4, "creativity" => 3, "effort" => 4, "description" => "Uczestnicy siadają w kręgu. W środku ustawione są trzy krzesła. Jeden z ochotników siada na środkowym krześle i przedstawia się jako przedmiot lub osoba. Mówi np. „jestem morzem”. Po obu jego stronach siadają dwie inne osoby i przestawiają się również jako przedmiot lub osoba, która kojarzy im się w tym przypadku z „morzem”. Przedstawiają się np. jako „statek” i” ryba”. Teraz „morze musi dokonać wyboru i mówi np. wybieram „statek”.<br>Potrzebne materiały:<br>brak<br>Jak się bawić:<br>Dwie osoby siadają na swoje miejsca, a „statek” zajmuje środkowe krzesło. Krzesła z jego lewej i prawej strony zajmują np. „żeglarz” i „bocianie gniazdo”. Zabawa jest ciekawa i świetnie porusza wyobraźnie dzieci. Sprawdź jak daleko zaprowadzą was skojarzenia.", "approved" => false],
            ["title" => "Dzień dobry", "timeFrom" => 10, "timeTo" => 91, "ageFrom" => 4, "ageTo" => 6, "outdoor" => false, "indoor" => true, "fun" => 5, "creativity" => 2, "effort" => 5, "description" => "Dzieci uczą się rozpoznawać głosy ludzi i inne dźwięki. <br> Potrzebne materiały: krzesło, opaska na oczy <br> Jak się bawić <br> 1. Uszadź dzieci w dużym półkolu <br> 2. Umieść krzesło w środku półkola odwrócone od grupy <br> 3. Wyjaśnij że jedna osoba będzie siedzieć na krześle z opaską na oczach <br> 4. Wyjaśnij że kiedy dziecko będzie miało opaskę na oczach, wskażesz jedną osobę która podejdzie stanie za nim i powie \"Dzień dobry\" <br> 5. Dziecko z opaską na oczach będzie miało trzy szansy aby odgadnąć kto mówi. <br>", "approved" => false],
            ["title" => "Zadmij w tubę", "timeFrom" => 10, "timeTo" => 48, "ageFrom" => 2, "ageTo" => 8, "outdoor" => false, "indoor" => true, "fun" => 3, "creativity" => 4, "effort" => 5, "description" => "Dzieci bawią sie wykorzystując zdolności audiowizualne <br> Potrzebne materiały: papier o różnych rozmiarach, taśma samoprzylepna, zszywacz, kredki, flamastry <br> Jak się bawić: <br> 1. Sporządź megafon zwijając kawałek papieru w tubę i sklejając brzegi <br> 2. Zostaw go na stole razem z papierem i taśmą niech dzieci zrobią swoje własne tuby naśladując Ciebie", "approved" => true],
            ["title" => "Rzucanie w tęczę", "timeFrom" => 18, "timeTo" => 116, "ageFrom" => 1, "ageTo" => 11, "outdoor" => false, "indoor" => true, "fun" => 2, "creativity" => 2, "effort" => 2, "description" => "Dzieci poznają kolory tęczy i ćwiczą koordynację wzrokowo-ruchową oraz uczą się oceniać odległość. <br> Potrzebne materiały: <br> Tektura, mazaki, nożyczki, taśma klejąca, nakrętki od butelek <br> Jak się bawić: <br> 1. Narysuj dużą tęcze na arkuszu tektury i zalaminuj go <br> 2. Przyklej tęczę do jednego z końców stołu, nakrętki włóż do miseczki. <br> 3. Pozwól dzieciom rzucać nakrętkami na tęczę, mogą próbować umieścić po jednej nakrętce na każdym kolorze lub celować w tylko jeden kolor", "approved" => true],
        ];

        foreach ($activitiesData as $k => $data) {
            $activity = new Activity();
            $date = new \DateTime();
            $date->setTimestamp((rand(time() - 10000000, time())));

            $image = $this->getReference(sprintf('image-%s-%d', Image::TYPE_ACTIVITY, $k));

            $activity
                ->setTitle($data['title'])
                ->setTimeFrom($data['timeFrom'])
                ->setTimeTo($data['timeTo'])
                ->setAgeFrom($data['ageFrom'])
                ->setAgeTo($data['ageTo'])
                ->setOutdoor($data['outdoor'])
                ->setIndoor($data['indoor'])
                ->setFun($data['fun'])
                ->setCreativity($data['creativity'])
                ->setEffort($data['effort'])
                ->setDescription($data['description'])
                ->setApproved($data['approved'])
                ->setCreatedAt($date)
                ->setImage($image)
            ;

            $activitiesIndex[] = $k;
            $this->addReference(sprintf('activity-%d', $k), $activity);

            $manager->persist($activity);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
} 
