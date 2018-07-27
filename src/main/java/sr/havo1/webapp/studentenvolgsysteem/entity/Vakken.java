package sr.havo1.webapp.studentenvolgsysteem.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "vakken")
public class Vakken implements Serializable{

    private Long vak_id;
    private String vaknaam;
    private String afkorting;

    private List<DocentenVakken> docentVak = new ArrayList<DocentenVakken>();
    private List<Cijfergemiddelden> cijfergemiddelde = new ArrayList<Cijfergemiddelden>();
    private List<Keuzevakken> keuzevak = new ArrayList<Keuzevakken>();


    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "vak_id", unique = true)
    public Long getVak_id() {
        return vak_id;
    }

    public void setVak_id(Long vak_id) {
        this.vak_id = vak_id;
    }

    @Column(name = "vaknaam", nullable = false)
    public String getVaknaam() {
        return vaknaam;
    }

    public void setVaknaam(String vaknaam) {
        this.vaknaam = vaknaam;
    }

    @Column(name = "afkorting")
    public String getAfkorting() {
        return afkorting;
    }

    public void setAfkorting(String afkorting) {
        this.afkorting = afkorting;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "vak_id", fetch = FetchType.LAZY)
    public List<DocentenVakken> getDocentVak() {
        return docentVak;
    }

    public void setDocentVak(List<DocentenVakken> docentVak) {
        this.docentVak = docentVak;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "vak_id", fetch = FetchType.LAZY)
    public List<Cijfergemiddelden> getCijfergemiddelde() {
        return cijfergemiddelde;
    }

    public void setCijfergemiddelde(List<Cijfergemiddelden> cijfergemiddelde) {
        this.cijfergemiddelde = cijfergemiddelde;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "vak_id", fetch = FetchType.LAZY)
    public List<Keuzevakken> getKeuzevak() {
        return keuzevak;
    }

    public void setKeuzevak(List<Keuzevakken> keuzevak) {
        this.keuzevak = keuzevak;
    }
}
