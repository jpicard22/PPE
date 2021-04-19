/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.Livre;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author gimli
 */
public class CTableLivres {

    protected CBDD bdd;

    public CTableLivres(CBDD bdd) {
        this.bdd = bdd;
    }

    public Livre convertir_RS_Livre(ResultSet rs) {
        try {
            String id = rs.getString(1);
            String user_id = rs.getString(2);
            String langue_id = rs.getString(3);
            String categorie_id = rs.getString(4);
            String titre_l = rs.getString(5);
            String nombre_pages_l = rs.getString(6);
            String edition_l = rs.getString(7);
            String auteur = rs.getString(8);

            Livre livre = new Livre(id, user_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur);

            return livre;
        } catch (SQLException ex) {
            Logger.getLogger(CTableLivres.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }
    }

    public Livre lireLivre(int id) {
        Livre livre = null;
        if (bdd.connecter() == true) {
            System.out.println("Connexion OK");
            ResultSet rs = bdd.executerRequeteQuery("select * from livre  WHERE `livre`.`id` = " + id);
            try {
                if (rs.next()) {
                    livre = convertir_RS_Livre(rs);
                }
            } catch (SQLException ex) {
                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
            }
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return livre;
    }
    
    public ArrayList<Livre> lire1Livre() {

        if (bdd.connecter() == true) {
            ArrayList<Livre> listeLivres = new ArrayList();
            ResultSet rs = bdd.executerRequeteQuery("select titre_l from livre");
            try {
                while (rs.next()) {
                    Livre livre = convertir_RS_Livre(rs);
                    listeLivres.add(livre);
                }
            } catch (SQLException ex) {
                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
            }
            bdd.deconnecter();
            return listeLivres;
        } else {
            System.out.println("Connexion KO");
        }
        return null;
    }

    public ArrayList<Livre> lireLivres() {

        if (bdd.connecter() == true) {
            ArrayList<Livre> listeLivres = new ArrayList();
            ResultSet rs = bdd.executerRequeteQuery("select * from livre");
            try {
                while (rs.next()) {
                    Livre livre = convertir_RS_Livre(rs);
                    listeLivres.add(livre);
                }
            } catch (SQLException ex) {
                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
            }
            bdd.deconnecter();
            return listeLivres;
        } else {
            System.out.println("Connexion KO");
        }
        return null;
    }

    public int insererLivre(Livre livre) {
        int res = -1;
        if (bdd.connecter() == true) {
            String req = "INSERT INTO `livre` (`users_id`, `langue_id`,"
                    + " `categorie_id`, `titre_l`, `nombre_pages_l`, `edition_l`, `auteur`) "
                    + "VALUES ('" + CBDD.pretraiterChaineSQL(livre.getUser_id())
                    + "', '" + CBDD.pretraiterChaineSQL(livre.getLangue_id())
                    + "', '" + CBDD.pretraiterChaineSQL(livre.getCategorie_id())
                    + "', '" + CBDD.pretraiterChaineSQL(livre.getTitre_l())
                    + "', '" + CBDD.pretraiterChaineSQL(livre.getNombre_pages_l())
                    + "', '" + CBDD.pretraiterChaineSQL(livre.getEdition_l())
                    + "', '" + CBDD.pretraiterChaineSQL(livre.getAuteur())
                    + "');";
            System.out.println(req);
            res = bdd.executerRequeteUpdate(req);
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return res;
    }

    public int supprimerLivre(Livre livre) {
        int res = -1;
        if (bdd.connecter() == true) {
            String req = "DELETE FROM `livre` WHERE `id` = " + livre.getId();
            res = bdd.executerRequeteUpdate(req);
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return res;
    }

    public int supprimerLivre(String idLivre) {
        int res = -1;
        if (bdd.connecter() == true) {
            String req = "DELETE FROM `livre` WHERE `id` = " + idLivre;
            res = bdd.executerRequeteUpdate(req);
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return res;
    }


    public int modifierLivre(Livre livre) {
        int res = -1;
        if (bdd.connecter() == true) {
            String req = "UPDATE `livre` SET "
                    + "`users_id` = '"
                    + CBDD.pretraiterChaineSQL(livre.getUser_id())
                    + "', "
                    + "`langue_id` = '"
                    + CBDD.pretraiterChaineSQL(livre.getLangue_id())
                    + "', "
                    + "`categorie_id` = '"
                    + CBDD.pretraiterChaineSQL(livre.getCategorie_id())
                    + "', "
                    + "`titre_l` = '"
                    + CBDD.pretraiterChaineSQL(livre.getTitre_l())
                     + "', "
                    + "`nombre_pages_l` = '"
                    + CBDD.pretraiterChaineSQL(livre.getNombre_pages_l())
                     + "', "
                    + "`edition_l` = '"
                    + CBDD.pretraiterChaineSQL(livre.getEdition_l())
                     + "', "
                    + "`auteur` = '"
                    + CBDD.pretraiterChaineSQL(livre.getAuteur())
                    + "' WHERE `livres`.`id` = "
                    + CBDD.pretraiterChaineSQL(livre.getId())
                    + ";";
            res = bdd.executerRequeteUpdate(req);
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return res;
    }
    
    
    public static void main(String[] args) {
        CBDD bdd = new CBDD(new CParametresStockageBDD("parametresBdd.properties"));
        CTableLivres table = new CTableLivres(bdd);

      //  String id_l = "4"; //A modifier pour donner l'id du livre à supprimer
        String users_id = "3";
        String langue_id = "1";
        String categorie_id = "1";
        String titre_l = "Sami à la plage";
        String nombre_pages_l = "32";
        String edition_l = "XO";
        String auteur ="Marc";

    
       Livre livreTest = new Livre(users_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur);

        table.insererLivre(livreTest);
//        table.supprimerLivre(livreTest);
//        Livre livre = table.lireLivre(1);
//        livre.afficher();
//        for (Livre livre : table.lireLivres()) {
//            System.out.println("--");
//            livre.afficher();
//        }
    }

    public void lireLivre(String string) {
    }


}
