<?php
$module_name = 'A0001_Materiel';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'marque_c',
            'label' => 'LBL_MARQUE',
          ),
          1 => 
          array (
            'name' => 'type_c',
            'label' => 'LBL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fournisseur_c',
            'label' => 'LBL_FOURNISSEUR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'volume_mois_c',
            'label' => 'LBL_VOLUME_MOIS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'installdate_c',
            'label' => 'LBL_INSTALLDATE',
          ),
          1 => 
          array (
            'name' => 'vente_location_c',
            'studio' => 'visible',
            'label' => 'LBL_VENTE_LOCATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'duree_c',
            'label' => 'LBL_DUREE',
          ),
          1 => 
          array (
            'name' => 'echeance_c',
            'label' => 'LBL_ECHEANCE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'commentaire_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'leads_a0001_materiel_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
