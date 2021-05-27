/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import entities.Livre;
import java.util.ArrayList;

/**
 *
 * @author Damien
 */

/*
Nous souhaitons créer une application mimant une bibliothèque, et les services 
associés donc :
 */
public class Bibliotheque {

    /**
     * Notre bibliothèque contient des livres, on va donc avoir besoin d'un
     * attribut où les ranger.
     */
    private ArrayList<Livre> listeLivres = new ArrayList<>();
    private ArrayList<User> listeUsers = new ArrayList<>();

    /**
     * Méthode pour enregistre un livre dans la liste en attribut.
     *
     * @param livre le livre à ajouter
     */
    public void enregistrerLivre(Livre livre) {
        this.listeLivres.add(livre);
    }

    /**
     *
     * @param users_id
     * @param langue_id
     * @param categorie_id
     * @param titre_l
     * @param nombre_pages_l
     * @param edition_l
     * @param auteur
     * @return
     */
    public Livre creationLivre(String users_id, String langue_id, String categorie_id, String titre_l, String nombre_pages_l, String edition_l, String auteur) {
        Livre livre = new Livre(users_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur);
        return livre;
    }

    public void setListeLivres(ArrayList<Livre> listeLivres) {
        this.listeLivres = listeLivres;
    }

    public ArrayList<Livre> getListeLivres() {
        return listeLivres;
    }

    public ArrayList<User> getListeUsers() {
        return listeUsers;
    }

    public void setListeUsers(ArrayList<User> listeUsers) {
        this.listeUsers = listeUsers;
    }

    private static class User {

        public User() {
           
        }
    }
}
