package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */

@Entity
@Table(name = "kwartalen")
public class Kwartalen implements Serializable{

    private Long kwartaal_id;
    private String kwartaalnaam;

    private List<Repetities> repetitie = new ArrayList<Repetities>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "kwartaal_id", unique = true)
    public Long getKwartaal_id() {
        return kwartaal_id;
    }

    public void setKwartaal_id(Long kwartaal_id) {
        this.kwartaal_id = kwartaal_id;
    }

    @Column(name = "kwartaalnaam", nullable = false)
    public String getKwartaalnaam() {
        return kwartaalnaam;
    }

    public void setKwartaalnaam(String kwartaalnaam) {
        this.kwartaalnaam = kwartaalnaam;
    }

    @OneToMany(mappedBy = "kwartaal_id", fetch = FetchType.LAZY)
    public List<Repetities> getRepetitie() {
        return repetitie;
    }

    public void setRepetitie(List<Repetities> repetitie) {
        this.repetitie = repetitie;
    }
}
