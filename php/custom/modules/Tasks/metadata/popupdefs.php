<?php
$popupMeta = array (
    'moduleMain' => 'Tasks',
    'varName' => 'Task',
    'orderBy' => 'tasks.name',
    'whereClauses' => array (
  'current_user_only' => 'tasks.current_user_only',
  'date_due' => 'tasks.date_due',
  'time_due' => 'tasks.time_due',
  'priority' => 'tasks.priority',
  'type_c' => 'tasks_cstm.type_c',
  'leads_tasks_1_name' => 'tasks.leads_tasks_1_name',
),
    'searchInputs' => array (
  2 => 'priority',
  4 => 'current_user_only',
  5 => 'date_due',
  6 => 'time_due',
  7 => 'type_c',
  8 => 'leads_tasks_1_name',
),
    'searchdefs' => array (
  'current_user_only' => 
  array (
    'name' => 'current_user_only',
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'date_due' => 
  array (
    'type' => 'datetimecombo',
    'studio' => 
    array (
      'required' => true,
      'no_duplicate' => true,
    ),
    'label' => 'LBL_DUE_DATE',
    'width' => '10%',
    'name' => 'date_due',
  ),
  'time_due' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DUE_TIME',
    'width' => '10%',
    'name' => 'time_due',
  ),
  'priority' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
    'name' => 'priority',
  ),
  'type_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type_c',
  ),
  'leads_tasks_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LEADS_TASKS_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_TASKS_1LEADS_IDA',
    'width' => '10%',
    'name' => 'leads_tasks_1_name',
  ),
),
);
