/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appli;

import entities.Bibliotheque;
import services.CBDD;
import services.CParametresStockageBDD;
import IHM.JFrameBibliotheque;
import entities.Livre;
import java.util.ArrayList;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;
import services.CTableLivres;

/**
 *
 * @author gimli
 */


public class App {

    public Bibliotheque biblio;
    public JFrameBibliotheque jFrameBiblio;
    public CTableLivres tableLivres;
   
    
   // travailler dans la classe ci-dessous 
    
    public void runBibliothequeIHM() {
        
    // j'initialise les objets 
        biblio = new Bibliotheque();
        jFrameBiblio = new JFrameBibliotheque();
        tableLivres = new CTableLivres(new CBDD(new CParametresStockageBDD("parametresBdd.properties")));
        jFrameBiblio.app = this;
        this.majBiblio(); //mise a jour de la biblio
        this.afficherListejTableBiblio();
        
        

                           // tableau 
        this.jFrameBiblio.getjTableBibliotheque().setRowSelectionInterval(0, 0); // selectionne les 2 premieres lignes
        jFrameBiblio.setVisible(true);

    }

    public void majBiblio() { //mise a jour
        biblio.setListeLivres(tableLivres.lireLivres()); // ca va cherhcher les livres pour les mettre dans une liste
        this.afficherListejTableBiblio();
    }

    public void setRowCountjTableBiblio(int rowCount) {
        DefaultTableModel model = (DefaultTableModel) jFrameBiblio.getjTableBibliotheque().getModel();
        model.setRowCount(rowCount);
                 // ca efface                             //tu prends le modele                   et tu ecrases tout 
        jFrameBiblio.getjTableBibliotheque().setModel(model);
        this.jFrameBiblio.idLivres = new String[rowCount]; // prevoit le meme nombre id  tableau avec la bonne taille
    }
      

    public void afficherListejTableBiblio() {
        this.setRowCountjTableBiblio(this.biblio.getListeLivres().size());    // ca créé un nouveau tableau vide

        for (int i = 0; i < this.biblio.getListeLivres().size(); i++) {
            this.jFrameBiblio.idLivres[i] = this.biblio.getListeLivres().get(i).getId();
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getUser_id(), i, 0); //ligne i comlonne 0
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getLangue_id(), i, 1);  //ligne 0 colonne 1
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getCategorie_id(), i, 2);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getTitre_l(), i, 3);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getNombre_pages_l(), i, 4);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getEdition_l(), i, 5);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(this.biblio.getListeLivres().get(i).getAuteur(), i, 6);
        }
    }

    public void afficherListejTableBiblio(ArrayList<Livre> list) {
        this.setRowCountjTableBiblio(list.size());

        for (int i = 0; i < list.size(); i++) {
            this.jFrameBiblio.idLivres[i] = list.get(i).getId();
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getUser_id(), i, 0);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getLangue_id(), i, 1);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getCategorie_id(), i, 2);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getTitre_l(), i, 3);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getNombre_pages_l(), i, 4);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getEdition_l(), i, 5);
            this.jFrameBiblio.getjTableBibliotheque().setValueAt(list.get(i).getAuteur(), i, 6);
        }
    }
    
//    try {
//    Integer.parseInt(this.ajouterLivreTableau())
//}
    
    public void tableAjouterLivreTableau(){
       
}

    public void jFrameBiblioButtonAjouter() {
        
        JOptionPane.showMessageDialog(null, "Ajout en cours...");
          
        String user_id = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 0).toString();
        String langue_id = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 1).toString();
        String categorie_id = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 2).toString();
        String titre_l = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 3).toString();
        String nombre_pages_l = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 4).toString();
        String edition_l = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 5).toString();
        String auteur = this.jFrameBiblio.getjTableAjoutLivre().getValueAt(0, 6).toString();
       
        Livre livre = this.biblio.creationLivre (user_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur);
        this.tableLivres.insererLivre(livre);
       
      
        
        this.majBiblio(); //mise a jour de la biblio
       

         // jFrameAjouter.setVisible(true);
     
    //    tableLivres.insererLivre(); 
       // tableLivres.insererLivre(new Livre ("3", "1", "1", "1", "Les chroniques du loup-garou", "35", "Verone", "Dupont"));
       //      pas bon avec l'id        tableLivres.insererLivre(new Livre ("2", "les Chroniques de JP", "12847", "200", "Hachette", "français", "Tolkien", "2", "fantastique"));
    }
    
    public static void main(String[] args) {
        new App().runBibliothequeIHM();
       // tableLivres.supprimerLivre("1");
     
    }

    
    public void jFrameBiblioButtonSupprimer() {
       JOptionPane.showMessageDialog(null, "Suppression en cours...");
       
        int selectedRow = this.jFrameBiblio.getjTableBibliotheque().getSelectedRow();
        String idLivres = this.jFrameBiblio.idLivres[selectedRow];
        this.tableLivres.supprimerLivre(idLivres);
        this.majBiblio();

//       this.tableLivres.supprimerLivre();
//       tableLivres.supprimerLivre("45");

    }
    


    
//    
//    JButton jbRech= new JButton("RECHERCHER");
//jbRech.setBounds(320, 55, 100, 30);
//jbRech.addActionListener(new ActionListener() {
//  public void actionPerformed(ActionEvent e) {
//    System.out.println("Encore faut-il savoir ce qu'on recherche ???");
//  }
//});
//JDial.getContentPane().add(jbRech);
//    
//    
//    
//    
//    ResultSet rs = stmt.executeQuery("SELECT id FROM Assure where id = " + monChampId.getText());
// while(rs.next()){
//   String s = rs.getString("NOM_ASSURE");
//   String s2 = rs.getString("ADRESSE");
//etc.
//}
// 
//monChampNom.setText(s);
//monChampAdresse.setText(s2);
//etc
 
        
        
}

