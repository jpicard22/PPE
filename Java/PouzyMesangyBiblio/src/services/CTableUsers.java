/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.Livre;
import entities.Users;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author gimli
 */
public class CTableUsers {

    protected CBDD bdd;

    public CTableUsers(CBDD bdd) {
        this.bdd = bdd;
    }
    
     public Users convertir_RS_Users(ResultSet rs) {
        try {
            String id = rs.getString(1);
            String email = rs.getString(2);
            String roles = rs.getString(3);
            String password = rs.getString(4);
            String is_verified = rs.getString(5);
            String date_naissance = rs.getString(6);
            String name = rs.getString(7);
            String first_name = rs.getString(8);
            String rue = rs.getString(9);
            String cp = rs.getString(10);
            
      

            Users users = new Users(id, email, roles, password, is_verified, date_naissance, name, first_name, rue, cp);

            return users;
        } catch (SQLException ex) {
            Logger.getLogger(CTableLivres.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }
    }

    public Users lireUnUserId(int id) {
        Users users = null;
        if (bdd.connecter() == true) {
            System.out.println("Connexion OK");
            ResultSet rs = bdd.executerRequeteQuery("select * from users  WHERE `users`.`id` = " + id);
            try {
                if (rs.next()) {
                    users = convertir_RS_Users(rs);
                }
            } catch (SQLException ex) {
                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
            }
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return users;
    }

    public Users lireUnUser(String email, String password) {
        Users user = null;
        if (bdd.connecter() == true) {
            System.out.println("Connexion OK");
            ResultSet rs = bdd.executerRequeteQuery("select * from users  WHERE `users`.`email` = '" + email + "' and `users`.`password` = '" + password + "'");
            try {
                if (rs.next()) {
                    user = convertir_RS_Users(rs);
                }
            } catch (SQLException ex) {
                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
            }
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return user;
    }

     public Users lireUnLogin(String email) {
        Users user = null;
        if (bdd.connecter() == true) {
            System.out.println("Connexion OK");
            ResultSet rs = bdd.executerRequeteQuery("select * from users  WHERE `users`.`email` = '" + email + "'");
         
            try {
                if (rs.next()) {
                    user = convertir_RS_Users(rs);
                }
            } catch (SQLException ex) {
                Logger.getLogger(CBDD.class.getName()).log(Level.SEVERE, null, ex);
            }
            bdd.deconnecter();
        } else {
            System.out.println("Connexion KO");
        }
        return user;
// récuperer password dans IHM (interface homme machine) dans l'interface 
// lu le hash dans la table users    
// BCrypt.checkpw(String password, String hashedPassword)
    
}
     
  
}
