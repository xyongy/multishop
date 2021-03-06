<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:38:00 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce 

  Released under the GNU General Public License 
*/

define('TEXT_MAIN', 'Questa � una dimostrazione di negozio on-line, <b>i prodotti visualizzati non sono veramnete in vendita, non verranno ne spedidi ne fatturati</b>. Tutte le informazioni sui prodotti sono esposte col solo intento dimostrativo.<br><br>Se vuoi scaricare questo progetto di negozio on-line, o contribuire al progetto, visita <a href="http://oscommerce.com"><u>il sito di supporto</u></a>. Questo negozio � basato su <font color="#f0000"><b>' . PROJECT_VERSION . '</b></font>. Questa versione � stata tradotta da <a href="http://www.oscommerceitalia.com"><u>osCommerceITalia</u>, comunit� italiana di utenti e sviluppatori osCommerce.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nuovi prodotti per %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Prodotti in arrivo');
define('TABLE_HEADING_DATE_EXPECTED', 'Data di arrivo');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Vediamo cose c\'� qui');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Modello');
  define('TABLE_HEADING_PRODUCTS', 'Nome prodotto');
  define('TABLE_HEADING_MANUFACTURER', 'Produttore');
  define('TABLE_HEADING_QUANTITY', 'Quantit�');
  define('TABLE_HEADING_PRICE', 'Prezzo');
  define('TABLE_HEADING_WEIGHT', 'Dimensioni');
  define('TABLE_HEADING_BUY_NOW', 'Acquista adesso');
  define('TEXT_NO_PRODUCTS', 'Non ci sono prodotti in questa categoria.');
  define('TEXT_NO_PRODUCTS2', 'Non ci sono prodotti per questo produttore.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Numero di prodotti: ');
  define('TEXT_SHOW', '<b>Mostra:</b>');
  define('TEXT_BUY', 'Acquista 1 \'');
  define('TEXT_NOW', '\' Ora');
  define('TEXT_ALL_CATEGORIES', 'Tutte le categoria');
  define('TEXT_ALL_MANUFACTURERS', 'Tutti i produttori');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Cose c\' � di nuovo?');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Categorie');
}
?>
