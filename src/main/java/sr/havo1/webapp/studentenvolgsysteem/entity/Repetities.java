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
@Table(name = "repetities")
public class Repetities implements Serializable{

    private Long repetitie_id;
    private Kwartalen kwartaal_id;
    private DocentenVakken docent_vak_id;

    private List<Cijfers> cijfer = new ArrayList<Cijfers>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "repetitie_id", unique = true)
    public Long getRepetitie_id() {
        return repetitie_id;
    }

    public void setRepetitie_id(Long repetitie_id) {
        this.repetitie_id = repetitie_id;
    }

    @ManyToOne
    @JoinColumn(name = "kwartaal_id")
    public Kwartalen getKwartaal_id() {
        return kwartaal_id;
    }

    public void setKwartaal_id(Kwartalen kwartaal_id) {
        this.kwartaal_id = kwartaal_id;
    }

    @ManyToOne
    @JoinColumn(name = "docent_vak_id")
    public DocentenVakken getDocent_vak_id() {
        return docent_vak_id;
    }

    public void setDocent_vak_id(DocentenVakken docent_vak_id) {
        this.docent_vak_id = docent_vak_id;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "repetitie_id", fetch = FetchType.LAZY)
    public List<Cijfers> getCijfer() {
        return cijfer;
    }

    public void setCijfer(List<Cijfers> cijfer) {
        this.cijfer = cijfer;
    }
}
