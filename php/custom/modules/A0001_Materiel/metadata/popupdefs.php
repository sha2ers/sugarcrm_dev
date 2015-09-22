<?php
$popupMeta = array (
    'moduleMain' => 'A0001_Materiel',
    'varName' => 'A0001_Materiel',
    'orderBy' => 'a0001_materiel.name',
    'whereClauses' => array (
  'genre_c' => 'a0001_materiel_cstm.genre_c',
  'marque_c' => 'a0001_materiel_cstm.marque_c',
  'type_c' => 'a0001_materiel_cstm.type_c',
  'fournisseur_c' => 'a0001_materiel_cstm.fournisseur_c',
  'volume_mois_c' => 'a0001_materiel_cstm.volume_mois_c',
  'vente_location_c' => 'a0001_materiel_cstm.vente_location_c',
  'echeance_c' => 'a0001_materiel_cstm.echeance_c',
),
    'searchInputs' => array (
  4 => 'genre_c',
  5 => 'marque_c',
  6 => 'type_c',
  7 => 'fournisseur_c',
  8 => 'volume_mois_c',
  9 => 'vente_location_c',
  10 => 'echeance_c',
),
    'searchdefs' => array (
  'genre_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GENRE',
    'width' => '10%',
    'name' => 'genre_c',
  ),
  'marque_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MARQUE',
    'width' => '10%',
    'name' => 'marque_c',
  ),
  'type_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type_c',
  ),
  'fournisseur_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FOURNISSEUR',
    'width' => '10%',
    'name' => 'fournisseur_c',
  ),
  'volume_mois_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_VOLUME_MOIS',
    'width' => '10%',
    'name' => 'volume_mois_c',
  ),
  'vente_location_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VENTE_LOCATION',
    'width' => '10%',
    'name' => 'vente_location_c',
  ),
  'echeance_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ECHEANCE',
    'width' => '10%',
    'name' => 'echeance_c',
  ),
),
);
