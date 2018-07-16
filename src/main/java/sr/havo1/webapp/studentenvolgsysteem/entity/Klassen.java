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
@Table(name = "klassen")
public class Klassen implements Serializable{

    private Long klas_id;
    private String klasnaam;
    private Schooljaar schooljaar_id;

    private List<KlassenStudenten> klasStudent = new ArrayList<KlassenStudenten>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "klas_id", unique = true)
    public Long getKlas_id() {
        return klas_id;
    }

    public void setKlas_id(Long klas_id) {
        this.klas_id = klas_id;
    }

    @Column(name = "klasnaam", nullable = false)
    public String getKlasnaam() {
        return klasnaam;
    }

    public void setKlasnaam(String klasnaam) {
        this.klasnaam = klasnaam;
    }

    @JsonIgnore
    @ManyToOne
    @JoinColumn(name = "schooljaar_id")
    public Schooljaar getSchooljaar_id() {
        return schooljaar_id;
    }

    public void setSchooljaar_id(Schooljaar schooljaar_id) {
        this.schooljaar_id = schooljaar_id;
    }
    @JsonIgnore
    @OneToMany(mappedBy = "klas_id", fetch = FetchType.LAZY)
    public List<KlassenStudenten> getKlasStudent() {
        return klasStudent;
    }

    public void setKlasStudent(List<KlassenStudenten> klasStudent) {
        this.klasStudent = klasStudent;
    }
}
