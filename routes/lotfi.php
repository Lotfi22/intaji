<?php

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





