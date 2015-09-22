<?php
// created: 2015-08-29 21:50:30
$dictionary["A0001_Materiel"]["fields"]["leads_a0001_materiel_1"] = array (
  'name' => 'leads_a0001_materiel_1',
  'type' => 'link',
  'relationship' => 'leads_a0001_materiel_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_a0001_materiel_1leads_ida',
);
$dictionary["A0001_Materiel"]["fields"]["leads_a0001_materiel_1_name"] = array (
  'name' => 'leads_a0001_materiel_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_a0001_materiel_1leads_ida',
  'link' => 'leads_a0001_materiel_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["A0001_Materiel"]["fields"]["leads_a0001_materiel_1leads_ida"] = array (
  'name' => 'leads_a0001_materiel_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_a0001_materiel_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_A0001_MATERIEL_TITLE',
);
