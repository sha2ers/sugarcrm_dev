<?php

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * Contributor(s): www.synolia.com - sugar@synolia.com
 * You can contact SYNOLIA at 51 avenue Jean Jaures 69007 - LYON FRANCE
 * or at email address contact@synolia.com.
 ********************************************************************************/













if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



    $app_list_strings = array (
    $object_name.'_type_dom' => array (
        'Administration' => 'Administration',
        'Product' => 'Produit',
        'User' => 'Utilisateur'
    ),
    $object_name.'_status_dom' => array (
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Closed' => 'Fermé',
        'Pending Input' => 'En attente',
        'Rejected' => 'Rejeté',
        'Duplicate' => 'Doublon'
    ),
    $object_name.'_priority_dom' => array (
        'P1' => 'Haute',
        'P2' => 'Moyenne',
        'P3' => 'Basse'
    ),
    $object_name.'_resolution_dom' => array (
        '' => '',
        'Accepted' => 'Accepté',
        'Duplicate' => 'Doublon',
        'Closed' => 'Fermé',
        'Out of Date' => 'Périmé',
        'Invalid' => 'Invalide'
    ),
);

?>