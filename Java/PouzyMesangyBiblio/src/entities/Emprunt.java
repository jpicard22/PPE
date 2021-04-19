/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author JPicard
 */
public class Emprunt {
      /*
    La liste des attributs. Ce sont des variables qui ont une "durée de vie" longue.
    Tant que l'objet créé à partir de cette classe existe, ses attributs existent aussi.
    Ils doivent "définir" l'objet. C'est à dire qu'ils sont importants pour comprendre et
    différencier les objets.
     */
    private String id = "-1";
    private String users_id;
    private String dispo_em;
    private String date_em;
    private String delais_em;

    /*
    Un contructeur, celui ci attend 9 paramètres de type chaine de caractères et on les
    utilise ensuite pour remplir les différents attributs.
    Pour bien suivre quel paramètre doit aller dans quel attribut on a choisi de
    nommer les paramètres comme les attributs. Attention donc à bien différencier
    les uns des autres grace à "this".
     */
    public Emprunt(String user_id, String dispo_em, String date_em, String delais_em) {
        this.users_id = user_id;
        this.dispo_em = dispo_em;
        this.date_em = date_em;
        this.delais_em = delais_em;
    }

    
      public Emprunt(String id, String user_id, String dispo_em, String date_em, String delais_em) {
        this.id = id;
        this.users_id = user_id;
        this.dispo_em = dispo_em;
        this.date_em = date_em;
        this.delais_em = delais_em;
    }
    

    /*
    D'autres contructeurs, ici commentés car je ne souhaite pas laisser de choix.
    Dans cet état il est obligatoire d'utiliser le contructeur qui remplit tous les
    attributs avec des chaines de caractères.
     */
    public Emprunt() {
    }

    /**
     * Un constructeur pour faire un livre juste avec l'id
     * @param idString 
     */
    public Emprunt(String idString) {
        this.id = idString;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getUsers_id() {
        return users_id;
    }

    public void setUsers_id(String users_id) {
        this.users_id = users_id;
    }

    public String getDispo_em() {
        return dispo_em;
    }

    public void setDispo_em(String dispo_em) {
        this.dispo_em = dispo_em;
    }

    public String getDate_em() {
        return date_em;
    }

    public void setDate_em(String date_em) {
        this.date_em = date_em;
    }

    public String getDelais_em() {
        return delais_em;
    }

    public void setDelais_em(String delais_em) {
        this.delais_em = delais_em;
    }

}
