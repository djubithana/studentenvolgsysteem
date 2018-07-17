package sr.havo1.webapp.studentenvolgsysteem.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;

import javax.persistence.*;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/26/2018.
 */

@Entity
@Table(name = "pakketten")
public class Pakketten implements Serializable{

    private int pakket_id;
    private String pakketnaam;

    private List<Studenten> student = new ArrayList<Studenten>();

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "pakket_id", unique = true)
    public int getPakket_id() {
        return pakket_id;
    }

    public void setPakket_id(int pakket_id) {
        this.pakket_id = pakket_id;
    }

    @Column(name = "pakketnaam", nullable = false)
    public String getPakketnaam() {
        return pakketnaam;
    }

    public void setPakketnaam(String pakketnaam) {
        this.pakketnaam = pakketnaam;
    }

    @JsonIgnore
    @OneToMany(mappedBy = "pakket_id", fetch = FetchType.LAZY)
    public List<Studenten> getStudent() {
        return student;
    }

    public void setStudent(List<Studenten> student) {
        this.student = student;
    }
}
