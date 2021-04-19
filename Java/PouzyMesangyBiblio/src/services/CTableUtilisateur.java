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
public class CTableUtilisateur {

    protected CBDD bdd;

    public CTableUtilisateur(CBDD bdd) {
        this.bdd = bdd;
    }

//    public Livre convertir_RS_Livre(ResultSet rs) {
//        try {
//            String id = rs.getString(1);
//            String titre_l = rs.getString(2);
//            String isbn_l = rs.getString(3);
//            String nombre_pages_l = rs.getString(4);
//            String edition_l = rs.getString(5);
//            String annee_edition_l = rs.getString(6);
//            String langue_l = rs.getString(7);
//            String format_l = rs.getString(8);
//            String resume_l = rs.getString(9);
//            String nom_a = rs.getString(10);
//            String id_exemplaire = rs.getString(11);
//            String id_categorie = rs.getString(12);
//
//            Livre livre = new Livre(id, titre_l, isbn_l, nombre_pages_l, edition_l, annee_edition_l, langue_l, format_l, resume_l, nom_a, id_exemplaire, id_categorie);
//
//            return livre;
//        } catch (SQLException ex) {
//            Logger.getLogger(CTableLivres.class.getName()).log(Level.SEVERE, null, ex);
//            return null;
//        }
//    }
//
//    public Livre lireLivre(int id) {
//        Livre livre = null;
//        if (bdd.connecter() == true) {
//            System.out.println("Connexion OK");
//            ResultSet rs = bdd.executerRequeteQuery("select * from livre  WHERE `livre`.`id` = " + id);
//            try {
//                if (rs.next()) {
//                    livre = convertir_RS_Livre(rs);
//                }
//            } catch (SQLException ex) {
//                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
//            }
//            bdd.deconnecter();
//        } else {
//            System.out.println("Connexion KO");
//        }
//        return livre;
//    }
//
//    public ArrayList<Livre> lireLivres() {
//
//        if (bdd.connecter() == true) {
//            ArrayList<Livre> listeLivres = new ArrayList();
//            ResultSet rs = bdd.executerRequeteQuery("select * from livre");
//            try {
//                while (rs.next()) {
//                    Livre livre = convertir_RS_Livre(rs);
//                    listeLivres.add(livre);
//                }
//            } catch (SQLException ex) {
//                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
//            }
//            bdd.deconnecter();
//            return listeLivres;
//        } else {
//            System.out.println("Connexion KO");
//        }
//        return null;
//    }
//
//    public int insererLivre(Livre livre) {
//        int res = -1;
//        if (bdd.connecter() == true) {
//            String req = "INSERT INTO `livre` (`Titre_l`, `isbn_l`,"
//                    + " `nombre_pages_l`, `edition_l`, `annee_edition_l`, `langue_l`, `format_l`, `resume_l`, `nom_a`, `id_exemplaire`, `id_categorie`) "
//                    + "VALUES ('" + CBDD.pretraiterChaineSQL(livre.getTitre_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getIsbn_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getNombre_pages_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getEdition_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getAnnee_edition_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getLangue_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getFormat_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getResume_l())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getNom_a())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getId_exemplaire())
//                    + "', '" + CBDD.pretraiterChaineSQL(livre.getId_categorie())
//                    + "');";
//            res = bdd.executerRequeteUpdate(req);
//            bdd.deconnecter();
//        } else {
//            System.out.println("Connexion KO");
//        }
//        return res;
//    }
//
//    public int supprimerLivre(Livre livre) {
//        int res = -1;
//        if (bdd.connecter() == true) {
//            String req = "DELETE FROM `livre` WHERE `id` = " + livre.getId_l();
//            res = bdd.executerRequeteUpdate(req);
//            bdd.deconnecter();
//        } else {
//            System.out.println("Connexion KO");
//        }
//        return res;
//    }
//
//    public int supprimerLivre(String idLivre) {
//        int res = -1;
//        if (bdd.connecter() == true) {
//            String req = "DELETE FROM `livre` WHERE `id` = " + idLivre;
//            res = bdd.executerRequeteUpdate(req);
//            bdd.deconnecter();
//        } else {
//            System.out.println("Connexion KO");
//        }
//        return res;
//    }
//
//
//    public int modifierLivre(Livre livre) {
//        int res = -1;
//        if (bdd.connecter() == true) {
//            String req = "UPDATE `livre` SET "
//                    + "`Titre_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getTitre_l())
//                    + "', "
//                    + "`isbn_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getIsbn_l())
//                    + "', "
//                    + "`nombre_pages_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getNombre_pages_l())
//                    + "', "
//                    + "`edition_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getEdition_l())
//                    + "', "
//                    + "`annee_edition_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getAnnee_edition_l())
//                    + "', "
//                    + "`langue_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getLangue_l())
//                    + "', "
//                    + "`format_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getFormat_l())
//                    + "', "
//                    + "`resume_l` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getResume_l())
//                     + "', "
//                    + "`nom_a` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getNom_a())
//                     + "', "
//                    + "`id_exemplaire` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getId_exemplaire())
//                     + "', "
//                    + "`id_categorie` = '"
//                    + CBDD.pretraiterChaineSQL(livre.getId_categorie())
//                    + "' WHERE `livres`.`id` = "
//                    + CBDD.pretraiterChaineSQL(livre.getId_l())
//                    + ";";
//            res = bdd.executerRequeteUpdate(req);
//            bdd.deconnecter();
//        } else {
//            System.out.println("Connexion KO");
//        }
//        return res;
//    }
//    
//    
//    public static void main(String[] args) {
//        CBDD bdd = new CBDD(new CParametresStockageBDD("parametresBdd.properties"));
//        CTableLivres table = new CTableLivres(bdd);
//
//        String id_l = "4"; //A modifier pour donner l'id du livre à supprimer
//        String titre_l = "l'titre";
//        String isbn_l = "1";
//        String nombre_pages_l = "1";
//        String edition_l = "l'edition";
//        String annee_edition_l = "1989";
//        String langue_l = "la langue";
//        String format_l = "le format";
//        String resume_l = "le resume";
//        String nom_a = "Levy";
//        String id_exemplaire = "2";
//        String id_categorie ="2";
//
//      // Livre livreTest = new Livre(titre_l, isbn_l, nombre_pages_l, edition_l, annee_edition_l, langue_l, format_l, resume_l);
//       Livre livreTest = new Livre(id_l, titre_l, isbn_l, nombre_pages_l, edition_l, annee_edition_l, langue_l, format_l, resume_l, nom_a, id_exemplaire, id_categorie);
//
//        table.insererLivre(livreTest);
////        table.supprimerLivre(livreTest);
////        Livre livre = table.lireLivre(1);
////        livre.afficher();
////        for (Livre livre : table.lireLivres()) {
////            System.out.println("--");
////            livre.afficher();
////        }
//    }

}
