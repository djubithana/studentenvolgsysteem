package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "docenten_vakken")
public class DocentenVakken implements Serializable{

    private Long docent_vak_id;
    private Docenten docent_id;
    private Vakken vak_id;

    private List<Repetities> repetitie = new ArrayList<Repetities>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "docent_vak_id", unique = true)
    public Long getDocent_vak_id() {
        return docent_vak_id;
    }

    public void setDocent_vak_id(Long docent_vak_id) {
        this.docent_vak_id = docent_vak_id;
    }

    @ManyToOne
    @JoinColumn(name = "docent_id")
    public Docenten getDocent_id() {
        return docent_id;
    }

    public void setDocent_id(Docenten docent_id) {
        this.docent_id = docent_id;
    }

    @ManyToOne
    @JoinColumn(name = "vak_id")
    public Vakken getVak_id() {
        return vak_id;
    }

    public void setVak_id(Vakken vak_id) {
        this.vak_id = vak_id;
    }

    @OneToMany(mappedBy = "docent_vak_id", fetch = FetchType.LAZY)
    public List<Repetities> getRepetitie() {
        return repetitie;
    }

    public void setRepetitie(List<Repetities> repetitie) {
        this.repetitie = repetitie;
    }
}
