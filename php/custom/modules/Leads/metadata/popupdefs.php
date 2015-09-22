<?php
$popupMeta = array (
    'moduleMain' => 'Lead',
    'varName' => 'LEAD',
    'orderBy' => 'last_name, first_name',
    'whereClauses' => array (
  'apecode_c' => 'leads_cstm.apecode_c',
  'phone_work' => 'leads.phone_work',
  'assigned_user_name' => 'leads.assigned_user_name',
  'name' => 'leads.name',
),
    'searchInputs' => array (
  7 => 'apecode_c',
  8 => 'phone_work',
  9 => 'assigned_user_name',
  10 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'apecode_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APECODE',
    'width' => '10%',
    'name' => 'apecode_c',
  ),
  'phone_work' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '10%',
    'name' => 'phone_work',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'PHONE_WORK' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_work',
  ),
  'APECODE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_APECODE',
    'width' => '10%',
    'name' => 'apecode_c',
  ),
  'WEBSITE' => 
  array (
    'type' => 'url',
    'label' => 'LBL_WEBSITE',
    'width' => '10%',
    'default' => true,
    'name' => 'website',
  ),
  'RELANCE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_RELANCE',
    'width' => '10%',
    'name' => 'relance_c',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
