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
public class Inscrit {
     /*
    La liste des attributs. Ce sont des variables qui ont une "durée de vie" longue.
    Tant que l'objet créé à partir de cette classe existe, ses attributs existent aussi.
    Ils doivent "définir" l'objet. C'est à dire qu'ils sont importants pour comprendre et
    différencier les objets.
     */
    private String id = "-1";
    private String email;
    private String roles;
    private String password;
    private String is_verified;
    private String date_naissance;
    private String name;
    private String first_name;
    private String rue;
    private String cp;


    /*
    Un contructeur, celui ci attend 9 paramètres de type chaine de caractères et on les
    utilise ensuite pour remplir les différents attributs.
    Pour bien suivre quel paramètre doit aller dans quel attribut on a choisi de
    nommer les paramètres comme les attributs. Attention donc à bien différencier
    les uns des autres grace à "this".
     */
    public Inscrit(String email, String roles, String password, String is_verified, String date_naissance, String name, String first_name, String rue, String cp) {
        this.email = email;
        this.roles = roles;
        this.password = password;
        this.is_verified = is_verified;
        this.date_naissance = date_naissance;
        this.name = name;
        this.first_name = first_name;
        this.rue = rue;
        this.cp = cp;
    }

   public Inscrit(String id, String email, String roles, String password, String is_verified, String date_naissance, String name, String first_name, String rue, String cp) {
        this.id = id;
        this.email = email;
        this.roles = roles;
        this.password = password;
        this.is_verified = is_verified;
        this.date_naissance = date_naissance;
        this.name = name;
        this.first_name = first_name;
        this.rue = rue;
        this.cp = cp;
    }
    

    /*
    D'autres contructeurs, ici commentés car je ne souhaite pas laisser de choix.
    Dans cet état il est obligatoire d'utiliser le contructeur qui remplit tous les
    attributs avec des chaines de caractères.
     */
    public Inscrit() {
    }

    /**
     * Un constructeur pour faire un livre juste avec l'id
     * @param idString 
     */
    public Inscrit(String idString) {
        this.id = idString;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getRoles() {
        return roles;
    }

    public void setRoles(String roles) {
        this.roles = roles;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getIs_verified() {
        return is_verified;
    }

    public void setIs_verified(String is_verified) {
        this.is_verified = is_verified;
    }

    public String getDate_naissance() {
        return date_naissance;
    }

    public void setDate_naissance(String date_naissance) {
        this.date_naissance = date_naissance;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getFirst_name() {
        return first_name;
    }

    public void setFirst_name(String first_name) {
        this.first_name = first_name;
    }

    public String getRue() {
        return rue;
    }

    public void setRue(String rue) {
        this.rue = rue;
    }

    public String getCp() {
        return cp;
    }

    public void setCp(String cp) {
        this.cp = cp;
    }

   

}
