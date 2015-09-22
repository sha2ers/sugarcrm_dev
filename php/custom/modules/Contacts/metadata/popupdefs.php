<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'email' => 'contacts.email',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  3 => 'email',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'LEADS_CONTACTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_CONTACTS_1LEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
),
);
