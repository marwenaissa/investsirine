<?php
// data.php

$villas = [
    [
        'id' => 1,
        'nom' => 'local_commercial_au_lac_2',
        'prix' => 4200000,
        'ville' => 'Lac 2',
        'type' => 'Locaux commerciaux',
        'pieces' => 4,
        'description' => "descriptionid1",
        'transaction' => 'vente',
        'image' => 'images/1/DSC_0251.jpg',
        'image_secondaire_1' => 'images/1/DSC_0251.jpg',
        'image_secondaire_2' => 'images/1/DSC_0257.jpg',
        'image_secondaire_3' => 'images/1/DSC_0263.jpg',
        'image_secondaire_4' => 'images/1/DSC_0271.jpg',
        'image_secondaire_5' => 'images/1/DSC_0277.jpg',
        'image_secondaire_6' => '',
        'caracteristiques' => [
            'climatisation',
            'chauffage_central',
            'securite',
        ],
    ],
    [
        'id' => 2,
        'nom' => 'Triplex s+4 vue sur mer au Golden Tulip',
        'prix' => 5000,
        'ville' => 'Gammarth',
        'type' => 'villa',
        'pieces' => 4,
        'description' => "A louer un luxueux triplex situé dans une résidence très calme et sécurisée au
        Golden Tulip.
        Cette résidence répartie sur trois étages sur une superficie de 330 mètres carrés
        avec deux terrasses vue sur mer. 
        Au rez-de-chaussée, un open space avec une cuisine américaine entièrement
        équipée donnant sur deux salons et une salle à manger.
        Dans le premier salon se trouve un écran géant avec Home cinéma. 
        Dans le deuxième, il y a un piano à queue blanc et une cheminée.
        À l'étage, il y deux chambres spacieuses avec dressing et une salle d'eau ainsi
        qu'une grande suite avec sa propre salle de bain. 
        Au dernier étage, une grande suite avec dressing, sa salle de bain avec jacuzzi et
        une cheminée, le tout donnant sur une terrasse avec une vue imprenable sur la mer. 
        Le triplex est chauffé par le sol et chaque pièce est muni d'un climatiseur split.",
        'transaction' => 'vente',
        'image' => 'images/2/IMG3.jpg',
        'image_secondaire_1' => 'images/2/IMG4.jpg',
        'image_secondaire_2' => 'images/2/IMG6.jpg',
        'image_secondaire_3' => 'images/2/IMG7.jpg',
        'image_secondaire_4' => 'images/2/IMG10.jpg',
        'image_secondaire_5' => 'images/2/IMG13.jpg',
        'image_secondaire_6' => '',
        'caracteristiques' => [
            'type_bien' => 'villa',
            'chauffage_au_sol' => true,
            'climatisation_split' => true,
            'terrasses_vue_mer' => 2,
            'jacuzzi' => true,
            'cheminees' => true,
            'piano' => true,
            'home_cinema' => true
        ]
    ],
    [
        'id' => 3,
        'nom' => 'Superbe Duplex S+3 Meublé avec Vue Mer - Golden Tulip Gammarth',
        'prix' => 4500,
        'ville' => 'Gammarth',
        'type' => 'appartement',
        'pieces' => 4,
        'description' => "Un magnifique duplex S+3,entièrement meublé, d’une superficie de 200 m², avec une vue mer exceptionnelle.
        Idéalement situé à Gammarth, dans une résidence hautement sécurisée et calme,à quelques pas de l’hôtel Golden Tulip
        Parmi les nombreux avantages de la résidence :
        Un spa, une salle de sport, un hammam, un sauna, une piscine couverte et une
        piscine extérieure, deux terrains de tennis, un restaurant français et indien, etc.
        Composition du bien :
        Rez-de-chaussée : Salon spacieux et lumineux avec salle à manger ;
        Cuisine entièrement équipée ;Salle d’eau invités ; Accès à un jardin privé
        À l’étage : Suite parentale avec dressing, salle de bain et terrasse avec vue mer
        Deux chambres à coucher avec dressings ;une salle de bain partagée",
        'transaction' => 'location',
        'image' => 'images/3/1.jpg',
        'image_secondaire_1' => 'images/3/2.jpg',
        'image_secondaire_2' => 'images/3/583429637.jpg',
        'image_secondaire_3' => 'images/3/583430047.jpg',
        'image_secondaire_4' => 'images/3/583430119.jpg',
        'image_secondaire_5' => 'images/3/583430253.jpg',
        'image_secondaire_6' => 'images/3/DSC_0069.jpg',
        'caracteristiques' => [
            'vue_sur_mer' => true,
            'chauffage_central' => true,
            'climatisation' => true,
            'animaux_autorises' => true,
            'securite_24h' => true,


        ]
    ],
    [
        'id' => 4,
        'nom' => 'Rez de jardin S+3 au Golden Tulip',
        'prix' => 4000,
        'ville' => 'Gammarth',
        'type' => 'appartement',
        'pieces' => 4,
        'description' => "À louer dans une résidence calme et sécurisée le Golden Tulip, un luxueux rez de jardin
        S+3 meublé d'environ 220 m2 donnant sur une belle piscine.
        Il se compose d'un salon, d'un coin salle à manger, d'une cuisine moderne et entièrement
        équipée le tout donnant sur une belle terrasse aménagée et la piscine. 
        L'espace nuit se compose deux chambres avec dressing se partagent une salle de bain
        ainsi qu'une suite parentale avec dressing et sa douche à l'italienne. 
        Le rez - de -jardin est chauffé par le sol et chaque pièce est muni d'un climatiseur split.
        Les frais de syndic sont inclus dans le loyer. 
        ",
        'transaction' => 'location',
        'image' => 'images/4/5.jpg',
        'image_secondaire_1' => 'images/4/6.jpg',
        'image_secondaire_2' => 'images/4/7.jpg',
        'image_secondaire_3' => 'images/4/8.jpg',
        'image_secondaire_4' => '',
        'image_secondaire_5' => '',
        'image_secondaire_6' => '',
        'caracteristiques' => [
            'surface' => '220 m²',
            'type_bien' => 'Rez-de-jardin meublé',
            'vue_piscine_terrasse',                      
            'chauffage_au_sol',
            'residence_securisee',
            'frais_syndic_inclus'                         
        ]
    ],
    [
        'id' => 5,
        'nom' => 'Duplex S+2 vue mer à Gammarth',
        'prix' => 2800,
        'ville' => 'Gammarth',
        'type' => 'appartement',
        'pieces' => 4,
        'description' => "À louer un magnifique duplex S+2, entièrement rénové et meublé d'environ 140 m 2 
        avec une vue imprenable sur la mer et la forêt de Gammarth. 
        Le bien se trouve dans la résidence sécurisée et paisible du Golden Tulip.
        Le rez-de-chaussée se compose d'un salon salle à manger baigné de lumière,
        d'une cuisine entièrement équipée et d'une salle d'eau. 
        Au deuxième étage, deux chambres avec dressing et une salle de bain. 
        Le Duplex dispose de deux magnifiques terrasses avec vue panoramique sur la
        mer. 
        ",
        'transaction' => 'location',
        'image' => 'images/4/DSCN0093.jpg',
        'image_secondaire_1' => 'images/5/DSCN0101.jpg',
        'image_secondaire_2' => 'images/5/DSCN0105.jpg',
        'image_secondaire_3' => 'images/5/DSCN0113.jpg',
        'image_secondaire_4' => 'images/5/DSCN0144.jpg',
        'image_secondaire_5' => 'images/5/DSCN0148.jpg',
        'image_secondaire_6' => '',
        'caracteristiques' => [
            'surface' => '140 m²',
            'vue_mer_foret',                    
            'terrasses_panoramiques',          
            'cuisine_equipee',
            'chauffage_central',
            'climatisation',
            'residence_securisee'
        ]
    ],
    [
        'id' => 6,
        'nom' => 'Duplex meublé avec vue mer au Golden Tulip',
        'prix' => 4500,
        'ville' => 'Gammarth',
        'type' => 'appartement',
        'pieces' => 4,
        'description' => "Duplex vue mer meublé dans un quartier calme et sécurisé avec une grande
        terrasse de 100 m 2 (vue panoramique sur la mer), cuisine entièrement équipée
        (four, micro-onde, Réfrigérateur, toute la vaisselle nécessaire.) ; salle d'eau, salon
        salle à manger.
        Au premier étage, il y a deux chambres à coucher et une salle de bain.
        Dans la résidence à pied vous avez une salle de sport, piscine couverte et piscine
        extérieure. 
        ",
        'transaction' => 'location',
        'image' => 'images/6/DSC_0027.jpg',
        'image_secondaire_1' => 'images/6/DSC_0031.jpg',
        'image_secondaire_2' => 'images/6/DSC_0053.jpg',
        'image_secondaire_3' => 'images/6/IMG_2673.jpg',
        'image_secondaire_4' => 'images/6/IMG_2954.jpg',
        'image_secondaire_5' => 'images/6/IMG_2961.jpg',
        'image_secondaire_6' => '',
        'caracteristiques' => [
            'surface' => '130 m²',
            'terrasse_panoramique',
            'vue_mer_montagnes',
            'chauffage_central',
            'climatisation',
            'internet',
            'chambre_de_rangement',
            'residence_securisee',
            'animaux_autorises'
        ]
    ],
    [
        'id' => 7,
        'nom' => 'Duplex vue mer avec piscine au Golden Tulip',
        'prix' => 4500,
        'ville' => 'Gammarth',
        'type' => 'Villa',
        'pieces' => 4,
        'description' => "À louer au Golden Tulip, très joli et lumineux duplex avec piscine et
        jardin.
        Il est composé au RDC d’un salon, salle à manger, d’une chambre plain
        pied avec placards et porte fenêtre donnant sur le jardin, d’une salle
        d’eau avec baignoire et douche et d’une cuisine entièrement équipée.
        A l’étage une première chambre avec placard et porte fenêtre donnant
        sur une pièce qui peut faire office de chambre de bébé ou de dressing, une
        deuxième chambre avec porte fenêtre, fenêtre et placards et une salle
        de bain. Toutes les chambres ont une vue imprenable sur la forêt et la mer.
        ",
        'transaction' => 'location',
        'image' => 'images/7/96.jpg',
        'image_secondaire_1' => 'images/7/DSC_0061.jpg',
        'image_secondaire_2' => 'images/7/DSC_0064.jpg',
        'image_secondaire_3' => 'images/7/DSC_0067.jpg',
        'image_secondaire_4' => 'images/7/DSC_0086.jpg',
        'image_secondaire_5' => 'images/7/DSC_0092.jpg',
        'image_secondaire_6' => '',
        'caracteristiques' => [
            'surface' => '160 m²',
            'type_bien' => 'Villa',
            'jardin_privatif',
            'vue_mer_montagnes',
            'piscine',
            'climatisation',
            'chauffage_central',
            'residence_securisee',
            'cuisine_equipee_refrigerateur',
            'cuisine_equipee_four',
            'cuisine_equipee_micro_ondes',
            'cuisine_equipee_machine_a_laver'
        ]

    ]
];
