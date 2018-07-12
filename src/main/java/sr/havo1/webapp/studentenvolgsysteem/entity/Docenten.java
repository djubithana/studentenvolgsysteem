package sr.havo1.webapp.studentenvolgsysteem.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "docenten")
public class Docenten implements Serializable{

    private Long docent_id;
    private String voornaam;
    private String achternaam;
    private String email;
    private int telefoon;
    private int mobiel;

/*
    private List<Gebruikers> gebruiker = new ArrayList<Gebruikers>();
*/
    private List<DocentenVakken> docentVak = new ArrayList<DocentenVakken>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "docent_id", unique = true)
    public Long getDocent_id() {
        return docent_id;
    }

    public void setDocent_id(Long docent_id) {
        this.docent_id = docent_id;
    }

    @Column(name = "voornaam", nullable = false)
    public String getVoornaam() {
        return voornaam;
    }

    public void setVoornaam(String voornaam) {
        this.voornaam = voornaam;
    }

    @Column(name = "achternaam", nullable = false)
    public String getAchternaam() {
        return achternaam;
    }

    public void setAchternaam(String achternaam) {
        this.achternaam = achternaam;
    }

    @Column(name = "email", nullable = false)
    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Column(name = "telefoon", nullable = false)
    public int getTelefoon() {
        return telefoon;
    }

    public void setTelefoon(int telefoon) {
        this.telefoon = telefoon;
    }

    @Column(name = "mobiel", nullable = false)
    public int getMobiel() {
        return mobiel;
    }

    public void setMobiel(int mobiel) {
        this.mobiel = mobiel;
    }

    /*@OneToMany(mappedBy = "docent_id", fetch = FetchType.LAZY)
    public List<Gebruikers> getGebruiker() {
        return gebruiker;
    }

    public void setGebruiker(List<Gebruikers> gebruiker) {
        this.gebruiker = gebruiker;
    }*/

    @JsonIgnore
    @OneToMany(mappedBy = "docent_id", fetch = FetchType.LAZY)
    public List<DocentenVakken> getDocentVak() {
        return docentVak;
    }

    public void setDocentVak(List<DocentenVakken> docentVak) {
        this.docentVak = docentVak;
    }
}
