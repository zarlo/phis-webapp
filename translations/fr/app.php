<?php
//******************************************************************************
//                                       app.php
// SILEX-PHIS
// Copyright © INRA 2017
// Creation date:  Mar, 2017
// Contact: morgane.vidal@inra.fr,arnaud.charleroy, anne.tireau@inra.fr, pascal.neveu@inra.fr
//******************************************************************************

/**
 * French translations of this application
 * @link https://www.yiiframework.com/extension/translate
 * @update [Arnaud Charleroy] 24 August, 2018 : widgets translations
 */

use app\components\widgets\AnnotationGridViewWidget;
use app\models\yiiModels\YiiAnnotationModel;

return [
    '{n, plural, =1{Project} other{Projects}}' => '{n, plural, =1{Projet} other{Projets}}',
    '{n, plural, =1{Experiment} other{Experiments}}' => '{n, plural, =1{Expérimentation} other{Expérimentations}}',
    '{n, plural, =1{Group} other{Groups}}' => '{n, plural, =1{Groupe} other{Groupes}}',
    '{n, plural, =1{User} other{Users}}' => '{n, plural, =1{Utilisateur} other{Utilisateurs}}',
    '{n, plural, =1{Person} other{Persons}}' => '{n, plural, =1{Personne} other{Personnes}}',
    '{n, plural, =1{Sensor} other{Sensors}}' => '{n, plural, =1{Capteur} other{Capteurs}}',
    '{n, plural, =1{Vector} other{Vectors}}' => '{n, plural, =1{Vecteur} other{Vecteurs}}',
    '{n, plural, =1{Radiometric Target} other{Radiometric Targets}}' => '{n, plural, =1{Cible Radiométrique} other{Cibles Radiométriques}}',
    '{n, plural, =1{Agronomical Object} other{Agronomical Objects}}' => '{n, plural, =1{Objet Agronomique} other{Objets Agronomiques}}',
    '{n, plural, =1{Scientific frame} other{Scientific frames}}' => '{n, plural, =1{Cadre scientifique} other{Cadres scientifiques}}',
    
    'A radiometric target can be described by the value of its coefficients to the bidirectional reflectance distribution function (see the BRDF ' => 'Une cible radiométrique peut être décrite par la valeur de ses coefficients à la fonction de distribution de la réflectivité bidirectionnelle (voir la ',
    'Add Dataset' => 'Importer un jeu de données',
    'Add Document' => 'Ajouter un document',
    'Add Document Script' => 'Ajouter un script',
    'Add Sensors' => 'Ajouter des Capteurs',
    app\components\widgets\AnnotationButtonWidget::ADD_ANNOTATION_LABEL => 'Ajouter une Annotation',
    'Add Vectors' => 'Ajouter des Vecteurs',
    'Address' => 'Adresse',
    'Admin' => 'Administrateur',
    'Administrative Contacts' => 'Contacts administratifs',
    'Affiliation' => 'Affiliation',
    'All Descendants' => 'Tous les Descendants',
    'Acquisition session template' => 'Gabarit de session d\'aquisition',
    'Attenuator Filter' => 'Filtre Atténuateur',
    'Available' => 'Disponible',
    'Availability' => 'Disponibilité',
    'Brand' => 'Marque',
    'BRDF coefficient P1' => 'Coefficient BRDF P1',
    'BRDF coefficient P2' => 'Coefficient BRDF P2',
    'BRDF coefficient P3' => 'Coefficient BRDF P3',
    'BRDF coefficient P4' => 'Coefficient BRDF P4',
    'Campaign' => 'Campagne',
    'Carpet' => 'Moquette',
    'Characterize Sensor' => 'Caractériser un Capteur',
    'Circular' => 'Circulaire',
    'Column' => 'Colonne',
    'Comment' => 'Commentaire',
    'Concern' => 'Concerne',
    'Concerned Elements' => 'Entités concernées',
    'Concerned Element Type' => 'Type de l\'Elément Concerné',
    'Concerned Element URI' => 'URI de l\'Elément Concerné',
    'Concerned Experimentations' => 'Expérimentations Concernées',
    'Concerned Projects' => 'Projets concernés',
    'Creation Date' => 'Date de Création',
    'Creator' => 'Auteur',
    'Crop Species' => 'Espèce',
    'Data' => 'Données',
    'Dataset' => 'Jeux de données',
    'Dataset Creation Date' => 'Données Insérées',
    'Date End' => 'Date de fin',
    'Date Of Last Calibration' => 'Date de Dernier Étalonnage',
    'Date Of Purchase' => 'Date d\'Achat',
    'Date Start' => 'Date de début',
    'Diameter' => 'Diamètre',
    'Diameter (m)' => 'Diamètre (m)',
    'Document Type' => 'Type du Document',
    'Download' => 'Télécharger',
    'Download Search Result' => 'Télécharger le Résultat de la Recherche',
    'Download Template' => 'Télécharger le Gabarit',
    'Email' => 'Adresse email',
    'Entity' => 'Entité',
    'Enter date of last calibration' => 'Saisir la date de dernier étalonnage',
    'Enter date of purchase' => 'Saisir la date d\'achat',
    'Enter in service date' => 'Saisir la date de mise en service',
    'Error' => 'Erreur',
    'Experimental Organization' => 'Organisation expérimentale',
    'Experiment Modalities' => 'Modalités Expérimentales',
    'File Extension' => 'Extension du Fichier',
    'Family Name' => 'Nom',
    'Field' => 'Champ',
    'File' => 'Fichier',
    'File Informations' => 'Informations sur le Fichier',
    'File Path' => 'Chemin du Fichier',
    'First Name' => 'Prénom',
    'Financial Name' => 'Nom du financeur',
    'Financial Support' => 'Support financier',
    'Focal Length' => 'Distance Focale',
    'Height' => 'Hauteur',
    'Generate Layer' => 'Générer la Couche',
    'Generate Map' => 'Générer la Carte',
    'Geographic Location' => 'Localisation géographique',
    'Geometry' => 'Géométrie',
    'Groups' => 'Groupes',
    'Guest' => 'Invité',
    'Hemisphericals' => 'Hémisphériques',
    'Images Visualization' => 'Visualisation d\'Images',
    'In Service Date' => 'Date de Mise en Service',
    'Internal Label' => 'Label Interne',
    'Keywords' => 'Mots clés',
    'Laboratory Name' => 'Nom du laboratoire',
    'Language' => 'Langue',
    'Length' => 'Longueur',
    'Length (m)' => 'Longueur (m)',
    'Level' => 'Niveau',
    'Linked Agronomical Objects' => 'Objets Agronomiques Liés',
    'Linked Documents' => 'Documents Liés',
    AnnotationGridViewWidget::LINKED_ANNOTATIONS => "Annotations liée(s)",
    AnnotationGridViewWidget::NO_LINKED_ANNOTATIONS => "Aucune annotation liée",
    'Line' => 'Ligne',
    'Login' => 'Connexion',
    'Logout' => 'Déconnexion',
    'Map Visualization' => 'Visualisation Cartographique',
    'Material' => 'Matière',
    'Members' => 'Membres',
    'Method' => 'Méthode',
    'Name' => 'Nom',
    'No' => 'Non',
    'Objective' => 'Objectif',
    'On selected plot(s)' => 'Sur les micro parcelles sélectionnées',
    'Ontologies References' => 'Références vers des Ontologies',
    'Organism' => 'Organisme',
    'Owner' => 'Propriétaire',
    'Password' => 'Mot de passe',
    'Painting' => 'Peinture',
    'Person In Charge' => 'Responsable',
    'Phenotype(s) Visualization' => 'Visualisation de phénotypes',
    'Phone' => 'Téléphone',
    'Pixel Size' => 'Taille de Pixel',
    'Place' => 'Lieux',
    'Private Access' => 'Accès Privé',
    'Project Coordinators' => 'Coordinateurs du projets',
    'Project Type' => 'Type du projet',
    'Public Access' => 'Accès Public',
    'Quantitative Variable' => 'Variable Quantitative',
    'Real Number' => 'Nombre Réel', 
    'Rectangular' => 'Rectangulaire',
    'Reference URI' => 'URI de Référence',
    'Related References' => 'Références Externes',
    'Replication' => 'Répétition',
    'Scientific Contacts' => 'Contacts scientifiques',
    'Scientific Supervisors' => 'Superviseurs scientifiques',
    'Select method alias...' => 'Sélectionnez l\'alias de la méthode',
    'Select trait alias...' => 'Sélectionnez l\'alias du trait',
    'Select unit alias...' => 'Sélectionnez l\'alias de l\'unité',
    'Sensor Position' => 'Position du Capteur',
    'Sensor Profile' => 'Profil du Capteur',
    'Serial Number' => 'Numéro de Série',
    'Server File Path' => 'Lien du Fichier sur le Serveur',
    'Shape' => 'Forme',
    'Shooting Configuration' => 'Configuration de prise de vue',
    'Show Images' => 'Afficher les Images',
    'Spectral hemispheric reflectance file' => 'Fichier de réflectance hémisphérique spectrale',
    'Spectralon' => 'Spectralon',
    'Status' => 'Statut',
    'Subproject Type' => 'Type de sous projet', 
    'Subproject Of' => 'Sous-projet de',
    'Team' => 'Équipe',
    'Technical Supervisors' => 'Superviseurs techniques',
    'Title' => 'Titre',
    'Tools' => 'Outils',
    'Trait' => 'Trait',
    'Unavailable' => 'Indisponible',
    'Unit' => 'Unité',
    'Update' => 'Modifier',
    'Variable' => 'Variable',
    'Variable Label' => 'Label de la Variable',
    'Variable Definition' => 'Définition de la variable',
    'Variety' => 'Variété',
    'Verification Code' => 'Code de vérification',
    'View / Download' => 'Visualiser / Télécharger',
    'Was Generated By' => 'Généré Par',
    'Wavelength' => 'Longueur d\'onde',
    'Wavelength (nm)' => 'Longueur d\'onde (nm)',
    'Website' => 'Site web',
    'Width' => 'Largeur',
    'Width (m)' => 'Largeur (m)',
    'wikipedia page' => 'page wikipédia',
    'Yes' => 'Oui',
    YiiAnnotationModel::CREATION_DATE_LABEL => 'Date de l\'annotation',
    YiiAnnotationModel::MOTIVATED_BY_LABEL  => 'Motivée par',
    YiiAnnotationModel::TARGETS_LABEL  => 'Entités ciblées'
    
];
