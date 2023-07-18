<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $products = [
        [
            "id" => 1,
            "name" => "CZI Hub USB C, 11 in 1 Adattatore Tipo C (Thunderbolt 3) con HDMI, VGA, PD 100W, Ethernet, Micro SD/TF, Audio, 4 Porte USB per MacBook Pro/Air, iMac, Surface Go, Chromebook, XPS ecc",
            "description" => "11 in 1 Hub Tipo C per Dispositivi USB C Il ICZI USB Type-C Hub è un'impressionante espansione per tutti i tuoi bisogni, dotato di porta HDMI 4K, 1 x VGA 1080P, 2 x USB 3.0, 2 x USB 2.0, 1 x ethernet rj45, 1 x 100W USB C Power Delivery, 1 x 3.5mm Audio, 1 x Lettore di Schede SD e TF. In aggiunta ai portatili, il USB C dock è compatibile con la maggior parte dei cellulari Type-C(Compatibile Thunderbolt 3).",
            "price" => 55.99,
            "photo" => "https://m.media-amazon.com/images/I/61xu9dY29XL._AC_SL1500_.jpg"
        ],
        [
            "id" => 2,
            "name" => "The G-Lab K-Stand Radon Supporto per Cuffie da Gioco - Retroilluminazione RGB, USB HUB 2 x 2.0, Base Antiscivolo - Supporto Universale per Cuffie Gaming per PC PS4 Xbox One Nintendo Switch (Nero)",
            "description" => "Compatibile e pratico con tutte le cuffie con il k-stand radon, Il tuo auricolare non si allenterà mai più sulla scrivania; questo supporto per cuffie da gioco si prende cura delle tue cuffie sgombrando il desktop per rirmiare zio; il k-stand radon è perfetto per tutte le cuffie da gioco, indipendentemente da tipo o marchio. è un accessorio indispensabile per completare la configurazione di gioco ",
            "price" => 22.49,
            "photo" => "https://m.media-amazon.com/images/I/71QrvgCLYZL._AC_SL1500_.jpg"
        ],
        [
            "id" => 3,
            "name" => "Zaino Antifurto Per PC Portatile, per Laptop, Impermeabile, per Computer 15.6 Pollici, Uomo, con Caricatore USB, Lavoro, Scuola Viaggio,Nero ",
            "description" => "ZAINO ANTIFURTO - Questo zaino per computer con un blocco password (Nota: non impostare la password prima di leggere le istruzioni) e doppie cerniere in metallo, protegge portafoglio e altri oggetti all interno del ladro e offre uno spazio privato. ",
            "price" => 36.96,
            "photo" => "https://m.media-amazon.com/images/I/71XoMaUrosL._AC_SL1500_.jpg"
        ],
        [
            "id" => 4,
            "name" => "Tappetino Mouse Gaming RGB Gioco XXL per Gamers PC Extra Grande 800 * 300mm*40mm Mousepad Antiscivolo Impermeabile per Computer e Laptop - 14 Modalità Luce",
            "description" => "14 MODALITA DI ILLUMINAZIONE: RGB tappetino mouse gaming contiene 14 modalità di illuminazione: 8 modalità statiche + 6 modalità dinamiche, e cambia tra 7 colori (rosso, blu, verde, viola, ciano, giallo, bianco). Potrebbe cambiare la modalità di luce RGB in base al tuo umore. Fare doppio clic sul Interruttore per modificare la luminosità della luce RGB. Sono disponibili 2 regolazioni della luminosità. Tenere premuto per 3 secondi il pulsante per spegnere l illuminazione RGB.",
            "price" => 19.99,
            "photo" => "https://m.media-amazon.com/images/I/61o4FHio2JL._AC_SL1500_.jpg"
        ],
        [
            "id" => 5,
            "name" => "Glangeh Supporto PC Portatile, Porta PC Pieghevole, Ergonomico Laptop Stand con 8 Livelli Regolabile Altezza, Alluminio Ventilato Porta Computer Compatibile con MacBook Air Pro, Dell XPS, HP, 10-16 Pollici",
            "description" => "[Design Unico e Durevole] Il porta PC portatile è dotato di una struttura a forma di Z allargata a un solo polo, diversa da altri supporti presenti sul mercato che in genere utilizzano un design a doppio polo. Il design minimalista non solo garantisce stabilità, ma consente anche di risparmiare spazio. Il design è stato testato più volte e il mandrino ha un aspettativa di vita di oltre 3.000 cicli, garantendo durata e supporto solido.",
            "price" => 26.99,
            "photo" => "https://m.media-amazon.com/images/I/616YMbsjcSL._AC_SL1500_.jpg"
        ],
        [
            "id" => 6,
            "name" => "Tavolo pieghevole per computer portatile, ideale anche come tavolo per lettura e vassoio per la colazione, per letto e divano, da 60 x 40 cm",
            "description" => "【 Grande ripiano 】 La nostra scrivania pieghevole è 60 (L) x 40 (P) x 26 cm (H). Abbastanza spazio per grandi computer portatili o libri se avete problemi con i compiti a casa, e il design di slot per schede e tazze facilita il posizionamento sul telefono, libri e tazze.",
            "price" => 29.21,
            "photo" => "https://m.media-amazon.com/images/I/711JqlqVcgS._AC_SL1500_.jpg"
        ]
    ];
    public function index(){
        return view('home', ['products' => $this->products]);
    }

    public function show($id){
        foreach($this->products as $product){
            if($id == $product['id']){
                return view('dettaglio', ['product' => $product]);
            }
        }
    }
}
