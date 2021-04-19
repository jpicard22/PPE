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
public class Langue {
//   */La liste des attributs. Ce sont des variables qui ont une "durée de vie" longue.
//    Tant que l'objet créé à partir de cette classe existe, ses attributs existent aussi.
//    Ils doivent "définir" l'objet. C'est à dire qu'ils sont importants pour comprendre et
//    différencier les objets.
//     */
    private String id = "-1";
    private String langue_l;
  

    /*
    Un contructeur, celui ci attend 9 paramètres de type chaine de caractères et on les
    utilise ensuite pour remplir les différents attributs.
    Pour bien suivre quel paramètre doit aller dans quel attribut on a choisi de
    nommer les paramètres comme les attributs. Attention donc à bien différencier
    les uns des autres grace à "this".
     */
   

    public Langue(String id, String langue_l) {
        this.id = id;
        this.langue_l = langue_l;
    }
    

    /*
    D'autres contructeurs, ici commentés car je ne souhaite pas laisser de choix.
    Dans cet état il est obligatoire d'utiliser le contructeur qui remplit tous les
    attributs avec des chaines de caractères.
     */
    public Langue() {
    }

    /**
     * Un constructeur pour faire un livre juste avec l'id
     * @param idString 
     */
    public Langue(String idString) {
        this.id = idString;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getLangue_l() {
        return langue_l;
    }

    public void setLangue_l(String langue_l) {
        this.langue_l = langue_l;
    }
}
