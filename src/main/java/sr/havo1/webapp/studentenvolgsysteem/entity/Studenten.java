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
@Table(name = "studenten")
public class Studenten implements Serializable {

    private Long student_id;
    private String voornaam;
    private String achternaam;
    private Date geboortedatum;
    private String geslacht;
    private int status;
    private String geboorteplaats;
    private Districten district_id;
    private String adres;
    private int telefoon;
    private String medische_klachten;
    private String naam_muloschool;
    private String richting_mulo;
    private String naam_verzorger;
    private String verzorger_beroep;
    private Districten verzorger_district_id;
    private String verzorger_adres;
    private int verzorger_telefoon;
    private String verzorger_werkadres;
    private int verzorger_werktelefoon;
    private Pakketten pakket_id;
    private String type_verzorger;



    private List<KlassenStudenten> klasStudent = new ArrayList<KlassenStudenten>();
    private List<Keuzevakken> keuzevak = new ArrayList<Keuzevakken>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "student_id", unique = true)
    public Long getStudent_id() {
        return student_id;
    }

    public void setStudent_id(Long student_id) {
        this.student_id = student_id;
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

    @Column(name = "geboortedatum", nullable = false)
    public Date getGeboortedatum() {
        return geboortedatum;
    }

    public void setGeboortedatum(Date geboortedatum) {
        this.geboortedatum = geboortedatum;
    }

    @Column(name = "geslacht", nullable = false)
    public String getGeslacht() {return geslacht;}

    public void setGeslacht(String geslacht) {this.geslacht = geslacht;}

    @Column(name = "geboorteplaats", nullable = false)
    public String getGeboorteplaats() {
        return geboorteplaats;
    }

    public void setGeboorteplaats(String geboorteplaats) {
        this.geboorteplaats = geboorteplaats;
    }

    @ManyToOne
    @JoinColumn(name = "district_id")
    public Districten getDistrict_id() {
        return district_id;
    }

    public void setDistrict_id(Districten district) {
        this.district_id = district;
    }

    @Column(name = "adres", nullable = false)
    public String getAdres() {
        return adres;
    }

    public void setAdres(String adres) {
        this.adres = adres;
    }

    @Column(name = "telefoon", nullable = false)
    public int getTelefoon() {
        return telefoon;
    }

    public void setTelefoon(int telefoon) {
        this.telefoon = telefoon;
    }

    @Column(name = "medische_klachten", nullable = false)
    public String getMedische_klachten() {
        return medische_klachten;
    }

    public void setMedische_klachten(String medische_klachten) {
        this.medische_klachten = medische_klachten;
    }

    @Column(name = "naam_muloschool", nullable = false)
    public String getNaam_muloschool() {
        return naam_muloschool;
    }

    public void setNaam_muloschool(String naam_muloschool) {
        this.naam_muloschool = naam_muloschool;
    }

    @Column(name = "richting_mulo", nullable = false)
    public String getRichting_mulo() {
        return richting_mulo;
    }

    public void setRichting_mulo(String richting_mulo) {
        this.richting_mulo = richting_mulo;
    }

    @Column(name = "naam_verzorger", nullable = false)
    public String getNaam_verzorger() {
        return naam_verzorger;
    }

    public void setNaam_verzorger(String naam_verzorger) {
        this.naam_verzorger = naam_verzorger;
    }

    @Column(name = "verzorger_beroep", nullable = false)
    public String getVerzorger_beroep() {
        return verzorger_beroep;
    }

    public void setVerzorger_beroep(String verzorger_beroep) {
        this.verzorger_beroep = verzorger_beroep;
    }

    @ManyToOne
    @JoinColumn(name = "verzorger_district_id")
    public Districten getVerzorger_district_id() {
        return verzorger_district_id;
    }

    public void setVerzorger_district_id(Districten verzorger_district) {
        this.verzorger_district_id = verzorger_district;
    }

    @Column(name = "verzorger_adres", nullable = false)
    public String getVerzorger_adres() {
        return verzorger_adres;
    }

    public void setVerzorger_adres(String verzorger_adres) {
        this.verzorger_adres = verzorger_adres;
    }

    @Column(name = "verzorger_telefoon", nullable = false)
    public int getVerzorger_telefoon() {
        return verzorger_telefoon;
    }

    public void setVerzorger_telefoon(int verzorger_telefoon) {
        this.verzorger_telefoon = verzorger_telefoon;
    }

    @Column(name = "verzorger_werkadres", nullable = false)
    public String getVerzorger_werkadres() {
        return verzorger_werkadres;
    }

    public void setVerzorger_werkadres(String verzorger_werkadres) {
        this.verzorger_werkadres = verzorger_werkadres;
    }

    @Column(name = "verzorger_werktelefoon", nullable = false)
    public int getVerzorger_werktelefoon() {
        return verzorger_werktelefoon;
    }

    public void setVerzorger_werktelefoon(int verzorger_werktelefoon) {
        this.verzorger_werktelefoon = verzorger_werktelefoon;
    }
    public int getStatus() { return status; }
    public void setStatus(int status) { this.status = status; }

    public String getType_verzorger() {
        return type_verzorger;
    }

    public void setType_verzorger(String type_verzorger) {
        this.type_verzorger = type_verzorger;
    }

    @ManyToOne
    @JoinColumn(name = "pakket_id")
    public Pakketten getPakket_id() {
        return pakket_id;
    }

    public void setPakket_id(Pakketten pakket_id) {
        this.pakket_id = pakket_id;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "student_id", fetch = FetchType.LAZY)
    public List<KlassenStudenten> getKlasStudent() {
        return klasStudent;
    }

    public void setKlasStudent(List<KlassenStudenten> klasStudent) {
        this.klasStudent = klasStudent;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "student_id", fetch = FetchType.LAZY)
    public List<Keuzevakken> getKeuzevak() {
        return keuzevak;
    }

    public void setKeuzevak(List<Keuzevakken> keuzevak) {
        this.keuzevak = keuzevak;
    }
}
