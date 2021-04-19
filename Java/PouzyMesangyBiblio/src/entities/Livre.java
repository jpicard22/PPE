/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author Damien
 */

/*
Cette classe nous servira à créer des objets de type "Livre", ils devront représenter
des livres physiques ou virtuels et donc posséder les attributs permettant de les définir.
 */
public class Livre {

    /*
    La liste des attributs. Ce sont des variables qui ont une "durée de vie" longue.
    Tant que l'objet créé à partir de cette classe existe, ses attributs existent aussi.
    Ils doivent "définir" l'objet. C'est à dire qu'ils sont importants pour comprendre et
    différencier les objets.
     */
    private String id = "-1";
    private String user_id;
    private String langue_id;
    private String categorie_id;
    private String titre_l;
    private String nombre_pages_l;
    private String edition_l;
    private String auteur;

    /*
    Un contructeur, celui ci attend 9 paramètres de type chaine de caractères et on les
    utilise ensuite pour remplir les différents attributs.
    Pour bien suivre quel paramètre doit aller dans quel attribut on a choisi de
    nommer les paramètres comme les attributs. Attention donc à bien différencier
    les uns des autres grace à "this".
     */
    public Livre(String user_id, String langue_id, String categorie_id, String titre_l, String nombre_pages_l, String edition_l, String auteur) {
        this.user_id = user_id;
        this.langue_id = langue_id;
        this.categorie_id = categorie_id;
        this.titre_l = titre_l;
        this.nombre_pages_l = nombre_pages_l;
        this.edition_l = edition_l;
        this.auteur = auteur;
    }
    
     public Livre(String id, String user_id, String langue_id, String categorie_id, String titre_l, String nombre_pages_l, String edition_l, String auteur) {
        this.id = id;
        this.user_id = user_id;
        this.langue_id = langue_id;
        this.categorie_id = categorie_id;
        this.titre_l = titre_l;
        this.nombre_pages_l = nombre_pages_l;
        this.edition_l = edition_l;
        this.auteur = auteur;
    }
    

    /*
    D'autres contructeurs, ici commentés car je ne souhaite pas laisser de choix.
    Dans cet état il est obligatoire d'utiliser le contructeur qui remplit tous les
    attributs avec des chaines de caractères.
     */
    public Livre() {
    }

    /**
     * Un constructeur pour faire un livre juste avec l'id
     * @param idString 
     */
    public Livre(String idString) {
        this.id = idString;
    }

    public String getUser_id() {
        return user_id;
    }

    public void setUser_id(String user_id) {
        this.user_id = user_id;
    }

    /**
     * @return the langue_id
     */
    public String getLangue_id() {
        return langue_id;
    }

    /**
     * @param langue_id the langue_id to set
     */
    public void setLangue_id(String langue_id) {
        this.langue_id = langue_id;
    }

    /**
     * @return the edition
     */
    public String getCategorie_id() {
        return categorie_id;
    }

    /**
     * @param categorie_id the categorie_id to set
     */
    public void setCategorie_id(String categorie_id) {
        this.categorie_id = categorie_id;
    }
    

    /**
     * @return the titre_l
     */
    public String getTitre_l() {
        return titre_l;
    }

    /**
     * @param titre_l the titre_l to set
     */
    public void setTitre_l(String titre_l) {
        this.titre_l = titre_l;
    }

    
    /**
     * @return the id
     */

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNombre_pages_l() {
        return nombre_pages_l;
    }

    public void setNombre_pages_l(String nombre_pages_l) {
        this.nombre_pages_l = nombre_pages_l;
    }

    public String getEdition_l() {
        return edition_l;
    }

    public void setEdition_l(String edition_l) {
        this.edition_l = edition_l;
    }

    public String getAuteur() {
        return auteur;
    }

    public void setId_categorie_c(String id_categorie) {
        this.auteur = id_categorie;
    }

    /*
    Nous souhaitons pouvoir afficher un apperçu des informations du livre, cette
    méthode nous le permet.
     */
    public void afficher() {
        System.out.println("Titre : " + this.titre_l);
        System.out.println("Edition : " + this.edition_l);
    }

    @Override
    public String toString() {
        String str = "Titre : " + this.titre_l + "\nEdition : "
                + this.edition_l;
        return str;
    }

    /*
    Lorsque l'on n'utilise pas de framework de test comme jUnit, il est nécessaire
    de tester nos méthodes au minimum localement comme ci dessous.
     */
    public static void main(String[] args) {
        String users_id = "utilisateur";
        String langue_id = "langue";
        String categorie_id = "categorie";
        String titre_l = "titre";
        String nombre_pages_l = "nombre de pages";
        String edition_l = "edition";
        String auteur = "auteur";

        Livre livreTest = new Livre(users_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur);

        // livreTest.afficher();
        System.out.println(livreTest.toString());
        System.out.println(livreTest);
    }


}
