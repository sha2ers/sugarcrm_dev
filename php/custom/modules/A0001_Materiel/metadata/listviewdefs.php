<?php
$module_name = 'A0001_Materiel';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'MARQUE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MARQUE',
    'width' => '10%',
  ),
  'FOURNISSEUR_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_FOURNISSEUR',
    'width' => '10%',
  ),
  'INSTALLDATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_INSTALLDATE',
    'width' => '10%',
  ),
  'VENTE_LOCATION_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_VENTE_LOCATION',
    'width' => '10%',
  ),
  'ECHEANCE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_ECHEANCE',
    'width' => '10%',
  ),
  'LEADS_A0001_MATERIEL_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_A0001_MATERIEL_1LEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'GENRE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_GENRE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
