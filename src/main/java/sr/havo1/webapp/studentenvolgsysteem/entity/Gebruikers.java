package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;
import java.sql.Timestamp;
import java.util.Date;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "gebruikers")
public class Gebruikers implements Serializable{

    private Long gebruiker_id;
    private String voornaam;
    private String achternaam;
    private String email;
    private String wachtwoord;
    private Timestamp registratiedatum;
    private Timestamp laatst_ingelogd_op;
    private RollenRechten rol_recht_id;
/*
    private Docenten docent_id;
*/

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "gebruiker_id", unique = true)
    public Long getGebruiker_id() {
        return gebruiker_id;
    }

    public void setGebruiker_id(Long gebruiker_id) {
        this.gebruiker_id = gebruiker_id;
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

    @Column(name = "wachtwoord", nullable = false)
    public String getWachtwoord() {
        return wachtwoord;
    }

    public void setWachtwoord(String wachtwoord) {
        this.wachtwoord = wachtwoord;
    }

    @Column(name = "registratiedatum", nullable = false)
    public Timestamp getRegistratiedatum() {
        return registratiedatum;
    }

    public void setRegistratiedatum(Timestamp registratiedatum) {
        this.registratiedatum = registratiedatum;
    }

    @Column(name = "laatst_ingelogd_op", nullable = false)
    public Timestamp getLaatst_ingelogd_op() {
        return laatst_ingelogd_op;
    }

    public void setLaatst_ingelogd_op(Timestamp laatst_ingelogd_op) {
        this.laatst_ingelogd_op = laatst_ingelogd_op;
    }

    @ManyToOne
    @JoinColumn(name = "rol_recht_id")
    public RollenRechten getRol_recht_id() {
        return rol_recht_id;
    }

    public void setRol_recht_id(RollenRechten rol_recht_id) {
        this.rol_recht_id = rol_recht_id;
    }

    /*@OneToOne(cascade=CascadeType.ALL)
    @JoinColumn(name="docent_id")
    public Docenten getDocent_id() {
        return docent_id;
    }

    public void setDocent_id(Docenten docent_id) {
        this.docent_id = docent_id;
    }*/
}
