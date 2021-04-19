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
public class Categorie {
      /*
    La liste des attributs. Ce sont des variables qui ont une "durée de vie" longue.
    Tant que l'objet créé à partir de cette classe existe, ses attributs existent aussi.
    Ils doivent "définir" l'objet. C'est à dire qu'ils sont importants pour comprendre et
    différencier les objets.
     */
    private String id = "-1";
    private String categorie_c;
  

    /*
    Un contructeur, celui ci attend 9 paramètres de type chaine de caractères et on les
    utilise ensuite pour remplir les différents attributs.
    Pour bien suivre quel paramètre doit aller dans quel attribut on a choisi de
    nommer les paramètres comme les attributs. Attention donc à bien différencier
    les uns des autres grace à "this".
     */
   

    public Categorie(String id, String categorie_c) {
        this.id = id;
        this.categorie_c = categorie_c;
    }
    

    /*
    D'autres contructeurs, ici commentés car je ne souhaite pas laisser de choix.
    Dans cet état il est obligatoire d'utiliser le contructeur qui remplit tous les
    attributs avec des chaines de caractères.
     */
    public Categorie() {
    }

    /**
     * Un constructeur pour faire un livre juste avec l'id
     * @param idString 
     */
    public Categorie(String idString) {
        this.id = idString;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getCategorie_c() {
        return categorie_c;
    }

    public void setCategorie_c(String categorie_c) {
        this.categorie_c = categorie_c;
    }
}
