<?php

use Illuminate\Support\Facades\Route;

Route::get('/statistiques','StatistiqueController@index')->name('stats');

Route::post('/statistiques/recevoir','StatistiqueController@recevoir');

Route::get('/ticket/vers_depot/annuler','TicketController@annuler');

Route::post('/ticket/vers_depot/annuler/annulation','TicketController@annulation');

Route::get('/ticket/affecter/livreur/{id_livreur}/manuel','TicketController@affectation_manuelle');

Route::get('/ticket/retour/livreur/{id_livreur}/manuel','TicketController@retour_manuelle');

Route::post('/ticket/affecter/livreur/{id_livreur}/manuel/valider','TicketController@assignerMass');

Route::post('/ticket/retour/livreur/{id_livreur}/manuel/valider','TicketController@retournerMass');

Route::post('/statistiques/filter','StatistiqueController@filter');

Route::get('/remise_a_zero','StatistiqueController@remise_a_zero');

Route::post('/rapport/rediriger1','RapportController@reidiriger1');

Route::get('/rapport/modifier/produit/{id_produit}/statut/{statut}/debut/{date_debut}/fin/{date_fin}','RapportController@reidiriger2');

Route::post('/rapport/modifier/produit/{id_produit}/statut/{statut}/debut/{date_debut}/fin/{date_fin}/post','RapportController@reidiriger3');

Route::get('/home/mes_depot','DepotController@index1');

Route::post('/home/mes_depot/ajouter','DepotController@ajouter');

Route::post('/home/mes_depot/modifier','DepotController@modifier');

Route::post('/BL/fit_produits/ajax','TicketController@fit_produits_bl');

Route::post('/ticket/affecter/livreur/{id_livreur}/BL','LivraisonController@ajout_livraison');

Route::get('/home/livraisons','LivraisonController@index');

Route::post('/home/livraisons/show_livraison/ajax','LivraisonController@show_livraison');

Route::post('/home/livraisons/approuver/ajax','LivraisonController@approuver');

Route::post('/home/livraisons/rejeter/ajax','LivraisonController@rejeter');

Route::post('/home/livraisons/last_approbation/BL','LivraisonController@new_BL');

Route::get('/home/livraisons/voir/{num_livraison}/BL','LivraisonController@get_BL');

Route::post('/home/livraisons/encaissements1','LivraisonController@encaissements1');

Route::post('/rapport/get_qte_depots','DepotController@get_qte_produit');

Route::post('/home/livraisons/test_depassement/ajax','LivraisonController@test_depassement');