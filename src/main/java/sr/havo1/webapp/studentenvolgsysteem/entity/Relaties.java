package sr.havo1.webapp.studentenvolgsysteem.entity;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/26/2018.
 */

@Entity
@Table(name = "relaties")
public class Relaties implements Serializable{

    private int relatie_id;
    private String relatienaam;

    private List<Studenten> student = new ArrayList<Studenten>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "relatie_id", unique = true)
    public int getRelatie_id() {
        return relatie_id;
    }

    public void setRelatie_id(int relatie_id) {
        this.relatie_id = relatie_id;
    }

    @Column(name = "relatienaam", nullable = false)
    public String getRelatienaam() {
        return relatienaam;
    }

    public void setRelatienaam(String relatienaam) {
        this.relatienaam = relatienaam;
    }

    @OneToMany(mappedBy = "relatie_id", fetch = FetchType.LAZY)
    public List<Studenten> getStudent() {
        return student;
    }

    public void setStudent(List<Studenten> student) {
        this.student = student;
    }
}
