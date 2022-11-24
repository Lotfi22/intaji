<?php

use Illuminate\Support\Facades\Route;

//Tickets
Route::get('/ticket/vers_depot/annuler','TicketController@annuler');
Route::post('/ticket/vers_depot/annuler/annulation','TicketController@annulation');
Route::get('/ticket/affecter/livreur/{id_livreur}/manuel','TicketController@affectation_manuelle');
Route::get('/ticket/retour/livreur/{id_livreur}/manuel','TicketController@retour_manuelle');
Route::post('/ticket/affecter/livreur/{id_livreur}/manuel/valider','TicketController@assignerMass');
Route::post('/ticket/retour/livreur/{id_livreur}/manuel/valider','TicketController@retournerMass');
Route::post('/BL/fit_produits/ajax','TicketController@fit_produits_bl');


//Stats : 
Route::get('/statistiques','StatistiqueController@index')->name('stats');
Route::post('/statistiques/recevoir','StatistiqueController@recevoir');
Route::post('/statistiques/filter','StatistiqueController@filter');
Route::get('/remise_a_zero','StatistiqueController@remise_a_zero');
Route::get('/rapport_speciaux','StatistiqueController@rapport_speciaux');



//Rapports : 
Route::post('/rapport/rediriger1','RapportController@reidiriger1');
Route::get('/rapport/modifier/produit/{id_produit}/statut/{statut}/debut/{date_debut}/fin/{date_fin}','RapportController@reidiriger2');
Route::post('/rapport/modifier/produit/{id_produit}/statut/{statut}/debut/{date_debut}/fin/{date_fin}/post','RapportController@reidiriger3');


//Dépots :
Route::get('/home/mes_depot','DepotController@index1');
Route::post('/home/mes_depot/ajouter','DepotController@ajouter');
Route::post('/home/mes_depot/modifier','DepotController@modifier');
Route::post('/rapport/get_qte_depots','DepotController@get_qte_produit');
Route::post('/home/mes_depot/get_qte_depots','DepotController@get_qte_depot');



//Livraisons :
Route::post('/ticket/affecter/livreur/{id_livreur}/BL','LivraisonController@ajout_livraison');
Route::post('/home/livraisons/get_client/ajax','LivraisonController@get_client');
Route::post('/home/livraisons/get_livreur/ajax','LivraisonController@get_livreur');
Route::get('/home/livraisons','LivraisonController@index');
Route::post('/home/livraisons/show_livraison/ajax','LivraisonController@show_livraison');
Route::post('/home/livraisons/approuver/ajax','LivraisonController@approuver');
Route::post('/home/livraisons/rejeter/ajax','LivraisonController@rejeter');
Route::post('/home/livraisons/last_approbation/BL','LivraisonController@new_BL');
Route::get('/home/livraisons/voir/{num_livraison}/BL','LivraisonController@get_BL');
Route::post('/home/livraisons/encaissements1','LivraisonController@encaissements1');
Route::post('/home/livraisons/test_depassement/ajax','LivraisonController@test_depassement');
Route::post('/home/livraisons/filter','LivraisonController@filter');
Route::post('/home/client/verif_tel/ajax','ClientController@verif_tel');
Route::post('/home/livraisons/get_depot/ajax','LivraisonController@get_depot');
Route::post('/livreur/get_work_livreur','LivraisonController@get_work_livreur');
Route::get('/ticket/affecter/num_livraison/{num_livraison}/livreur/{livreur}', 'TicketController@affecter_livraison');
Route::post('/home/livraisons/annuler_livraison/ajax','LivraisonController@annuler_livraison');



//caisse : 
Route::get('/home/caisse','CaisseController@index');
Route::post('/home/caisse/filter','CaisseController@filter');


//Commercials : 
Route::get('/commercial', 'CommercialController@index');
Route::get('/login/commercial', 'Auth\LoginController@showcommercialLoginForm')->name('login.commercial');
Route::post('/commercial/ajouter','CommercialController@store');
Route::post('/commercial/get_work_commercial','CommercialController@get_work_commercial');

//clients 
Route::post('/client/get_client_interactions','ClientController@get_client_interactions');


//Commandes : 
Route::post('/commande/show/{num_commande}/annuler','CommandeController@annuler');
Route::post('/commande/filter','CommandeController@filter');



